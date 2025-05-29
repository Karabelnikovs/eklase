<?php $title = "Students"; ?>
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
            /* margin: 15% auto; */
            margin-top: 7%;
            margin-inline-start: 40%;
            padding: 20px;
            width: 350px;
            border-radius: 8px;
        }
    </style>
</head>

<body class="bg-gray-900">
    <h1 class="text-3xl font-bold text-center mb-6 text-white">Students</h1>
    <div class="container mx-auto">
        <button id="addStudentBtn"
            class="btn btn-primary mb-4 bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600">
            Add Student
        </button>
        <table class="w-full text-left border-collapse" id="studentsTable">
            <thead>
                <tr class="bg-gray-100 text-gray-700">
                    <th class="p-4 text-sm font-semibold tracking-wide">First Name</th>
                    <th class="p-4 text-sm font-semibold tracking-wide">Last Name</th>
                    <th class="p-4 text-sm font-semibold tracking-wide">Email</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($students as $student): ?>
                    <tr class="border-b transition-colors">
                        <td class="p-4 text-white"><?= htmlspecialchars($student['first_name']) ?></td>
                        <td class="p-4 text-white"><?= htmlspecialchars($student['last_name']) ?></td>
                        <td class="p-4 text-white"><?= htmlspecialchars($student['email']) ?></td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>

    <!-- Popup Form -->
    <div id="studentPopup" class="popup">
        <div class="popup-content">
            <h2 class="text-xl font-bold mb-4 text-black">Add Student</h2>
            <div id="errorMessages" class="text-red-500 mb-4 hidden"></div>
            <form id="studentForm">
                <div class="mb-4">
                    <label class="block mb-1 text-gray-500">First Name</label>
                    <input type="text" name="first_name" class="w-full p-2 border rounded text-gray-500" required>
                </div>
                <div class="mb-4">
                    <label class="block mb-1 text-gray-500">Last Name</label>
                    <input type="text" name="last_name" class="w-full p-2 border rounded text-gray-500" required>
                </div>
                <div class="mb-4">
                    <label class="block mb-1 text-gray-500">Email</label>
                    <input type="email" name="email" class="w-full p-2 border rounded text-gray-500" required>
                </div>
                <div class="mb-4">
                    <label class="block mb-1 text-gray-500">Password</label>
                    <input type="password" name="password" class="w-full p-2 border rounded text-gray-500" required>
                </div>
                <button type="submit" class="w-full p-2 bg-blue-500 text-white rounded hover:bg-blue-600">Add
                    Student</button>
                <button type="button" id="closePopup"
                    class="w-full p-2 mt-2 bg-gray-500 text-white rounded hover:bg-gray-600">
                    Close
                </button>
            </form>
        </div>
    </div>

    <script>
        const addStudentBtn = document.getElementById('addStudentBtn');
        const studentPopup = document.getElementById('studentPopup');
        const closePopup = document.getElementById('closePopup');
        const studentForm = document.getElementById('studentForm');
        const errorMessages = document.getElementById('errorMessages');

        addStudentBtn.addEventListener('click', () => {
            studentPopup.style.display = 'block';
            errorMessages.classList.add('hidden');
        });

        closePopup.addEventListener('click', () => {
            studentPopup.style.display = 'none';
        });

        studentForm.addEventListener('submit', (e) => {
            e.preventDefault();
            const formData = new FormData(studentForm);

            fetch('/create-student', {
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
                        const tbody = document.getElementById('studentsTable').querySelector('tbody');
                        const newRow = document.createElement('tr');
                        newRow.innerHTML = `
                        <td class="p-4 text-white">${data.student.first_name}</td>
                        <td class="p-4 text-white">${data.student.last_name}</td>
                        <td class="p-4 text-white">${data.student.email}</td>
                    `;
                        tbody.appendChild(newRow);
                        studentPopup.style.display = 'none';
                        studentForm.reset();
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
</body>

</html>