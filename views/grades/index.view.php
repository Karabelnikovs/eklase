<?php $title = "Grades"; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title ?></title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <style>
        .popup {
            display: none;
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.5);
        }

        .popup-content {
            background: white;
            margin: 15% auto;
            padding: 20px;
            width: 350px;
            border-radius: 8px;
        }
    </style>
</head>

<body class="bg-gray-900">
    <h1 class="text-3xl font-bold text-center mb-6 text-white">Grades</h1>
    <div class="container mx-auto">
        <button id="addGradeBtn"
            class="btn btn-primary mb-4 bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600">Add Grade</button>
        <table class="w-full text-left border-collapse" id="gradesTable">
            <thead>
                <tr class="bg-gray-100 text-gray-700">
                    <th class="p-4 text-sm font-semibold tracking-wide">Student</th>
                    <th class="p-4 text-sm font-semibold tracking-wide">Subject</th>
                    <th class="p-4 text-sm font-semibold tracking-wide">Grade</th>
                    <th class="p-4 text-sm font-semibold tracking-wide">Date</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($grades as $grade): ?>
                    <tr class="border-b  transition-colors">
                        <td class="p-4 text-white ">
                            <?= htmlspecialchars($grade['first_name'] . ' ' . $grade['last_name']) ?>
                        </td>
                        <td class="p-4 text-white "><?= htmlspecialchars($grade['subject_name']) ?></td>
                        <td class="p-4 text-blue-200 font-medium ">
                            <?= htmlspecialchars($grade['grade']) ?>
                        </td>
                        <td class="p-4 text-white "><?= htmlspecialchars($grade['created_at']) ?></td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>

    </div>

    <div id="gradePopup" class="popup">
        <div class="popup-content">
            <h2 class="text-xl font-bold mb-4 text-black">Add Grade</h2>
            <div id="errorMessages" class="text-red-500 mb-4 hidden"></div>
            <form id="gradeForm">
                <div class="mb-4">
                    <label class="block mb-1 text-gray-500">Student</label>
                    <select name="student_id" class="w-full p-2 border rounded text-gray-500" required>
                        <option value="">Select Student</option>
                        <?php foreach (Auth::getStudents() as $student): ?>
                            <option value="<?= $student['id'] ?>" class="">
                                <?= htmlspecialchars($student['first_name'] . ' ' . $student['last_name']) ?>
                            </option>
                        <?php endforeach; ?>
                    </select>
                </div>
                <div class="mb-4">
                    <label class="block mb-1 text-gray-500">Subject</label>
                    <select name="subject_id" class="w-full p-2 border rounded text-gray-500" required>
                        <option value="">Select Subject</option>
                        <?php foreach (Subject::all() as $subject): ?>
                            <option value="<?= $subject['id'] ?>"><?= htmlspecialchars($subject['subject_name']) ?></option>
                        <?php endforeach; ?>
                    </select>
                </div>
                <div class="mb-4">
                    <label class="block mb-1 text-gray-500">Grade</label>
                    <input type="number" name="grade" step="1" min="0" max="100"
                        class="w-full p-2 border rounded text-gray-500" placeholder="Grade" required>
                </div>
                <button type="submit" class="w-full p-2 bg-blue-500 text-white rounded hover:bg-blue-600 ">Add
                    Grade</button>
                <button type="button" id="closePopup"
                    class="w-full p-2 mt-2 bg-gray-500 text-white rounded hover:bg-gray-600">Close</button>
            </form>
        </div>
    </div>

    <script>
        const addGradeBtn = document.getElementById('addGradeBtn');
        const gradePopup = document.getElementById('gradePopup');
        const closePopup = document.getElementById('closePopup');
        const gradeForm = document.getElementById('gradeForm');
        const errorMessages = document.getElementById('errorMessages');

        addGradeBtn.addEventListener('click', () => {
            gradePopup.style.display = 'block';
            errorMessages.classList.add('hidden');
        });

        closePopup.addEventListener('click', () => {
            gradePopup.style.display = 'none';
        });

        gradeForm.addEventListener('submit', (e) => {
            e.preventDefault();
            const formData = new FormData(gradeForm);

            fetch('/grades/store', {
                method: 'POST',
                headers: {
                    'X-Requested-With': 'XMLHttpRequest'
                },
                body: formData
            })
                .then(response => {
                    if (!response.ok) {
                        throw new Error(`Server returned ${response.status}: ${response.statusText}`);
                    }
                    return response.json();
                })
                .then(data => {
                    console.log('Server response:', data);
                    if (data.success) {
                        const tbody = document.getElementById('gradesTable').querySelector('tbody');
                        const newRow = document.createElement('tr');
                        newRow.innerHTML = `
                <td class="p-4 text-white">${data.grade.student_name}</td>
                <td class="p-4 text-white">${data.grade.subject_name}</td>
                <td class="p-4 text-blue-200 font-medium">${data.grade.grade}</td>
                <td class="p-4 text-white">${data.grade.created_at}</td>
            `;
                        tbody.appendChild(newRow);
                        gradePopup.style.display = 'none';
                        gradeForm.reset();
                    } else {
                        errorMessages.classList.remove('hidden');
                        errorMessages.innerHTML = Object.values(data.errors).join('<br>');
                    }
                })
                .catch(error => {
                    console.error('Fetch error:', error);
                    errorMessages.classList.remove('hidden');
                    errorMessages.textContent = 'An error occurred. Please try again.';
                });
        });
    </script>