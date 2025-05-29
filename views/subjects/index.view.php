<?php $title = "subjects"; ?>
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
    <h1 class="text-3xl font-bold text-center mb-6 text-white">subjects</h1>
    <div class="container mx-auto">
        <button id="addsubjectBtn"
            class="btn btn-primary mb-4 bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600">
            Add subject
        </button>
        <table class="w-full text-left border-collapse" id="subjectsTable">
            <thead>
                <tr class="bg-gray-100 text-gray-700">
                    <th class="p-4 text-sm font-semibold tracking-wide">Subject Name</th>
                    <th class="p-4 text-sm font-semibold tracking-wide">Description</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($subjects as $subject): ?>
                    <tr class="border-b transition-colors">
                        <td class="p-4 text-white"><?= htmlspecialchars($subject['subject_name']) ?></td>
                        <td class="p-4 text-white"><?= htmlspecialchars($subject['description']) ?></td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>

    <!-- Popup Form -->
    <div id="subjectPopup" class="popup">
        <div class="popup-content">
            <h2 class="text-xl font-bold mb-4 text-black">Add subject</h2>
            <div id="errorMessages" class="text-red-500 mb-4 hidden"></div>
            <form id="subjectForm">
                <div class="mb-4">
                    <label class="block mb-1 text-gray-500">Subject Name</label>
                    <input type="text" name="subject_name" class="w-full p-2 border rounded text-gray-500" required>
                </div>
                <div class="mb-4">
                    <label class="block mb-1 text-gray-500">Description</label>
                    <input type="text" name="description" class="w-full p-2 border rounded text-gray-500" required>
                </div>
                <button type="submit" class="w-full p-2 bg-blue-500 text-white rounded hover:bg-blue-600">Add
                    subject</button>
                <button type="button" id="closePopup"
                    class="w-full p-2 mt-2 bg-gray-500 text-white rounded hover:bg-gray-600">
                    Close
                </button>
            </form>
        </div>
    </div>

    <script>
        const addsubjectBtn = document.getElementById('addsubjectBtn');
        const subjectPopup = document.getElementById('subjectPopup');
        const closePopup = document.getElementById('closePopup');
        const subjectForm = document.getElementById('subjectForm');
        const errorMessages = document.getElementById('errorMessages');

        addsubjectBtn.addEventListener('click', () => {
            subjectPopup.style.display = 'block';
            errorMessages.classList.add('hidden');
        });

        closePopup.addEventListener('click', () => {
            subjectPopup.style.display = 'none';
        });

        subjectForm.addEventListener('submit', (e) => {
            e.preventDefault();
            const formData = new FormData(subjectForm);

            fetch('/subjects/create', {
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
                        const tbody = document.getElementById('subjectsTable').querySelector('tbody');
                        const newRow = document.createElement('tr');
                        newRow.innerHTML = `
                        <td class="p-4 text-white">${data.subject.subject_name}</td>
                        <td class="p-4 text-white">${data.subject.description}</td>
                    `;
                        tbody.appendChild(newRow);
                        subjectPopup.style.display = 'none';
                        subjectForm.reset();
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