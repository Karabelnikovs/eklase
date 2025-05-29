<?php $title = "Add Grade"; ?>
<h1 class="text-3xl font-bold text-center mb-6">Add Grade</h1>
<div class="w-full flex justify-center">
    <div class="bg-gray-100 w-[350px] p-6 rounded-lg shadow-lg">
        <form action="/grades/store" method="POST">
            <div class="mb-4">
                <label class="block mb-1">Student</label>
                <select name="student_id" class="w-full p-2 border rounded">
                    <option value="">Select Student</option>
                    <?php foreach ($students as $student): ?>
                        <option value="<?= $student['id'] ?>">
                            <?= htmlspecialchars($student['first_name'] . ' ' . $student['last_name']) ?>
                        </option>
                    <?php endforeach; ?>
                </select>
                <?php if (isset($errors['student_id'])): ?>
                    <p class="text-red-500 text-sm"><?= $errors['student_id'] ?></p>
                <?php endif; ?>
            </div>
            <div class="mb-4">
                <label class="block mb-1">Subject</label>
                <select name="subject_id" class="w-full p-2 border rounded">
                    <option value="">Select Subject</option>
                    <?php foreach ($subjects as $subject): ?>
                        <option value="<?= $subject['id'] ?>"><?= htmlspecialchars($subject['subject_name']) ?></option>
                    <?php endforeach; ?>
                </select>
                <?php if (isset($errors['subject_id'])): ?>
                    <p class="text-red-500 text-sm"><?= $errors['subject_id'] ?></p>
                <?php endif; ?>
            </div>
            <div class="mb-4">
                <label class="block mb-1">Grade</label>
                <input type="number" name="grade" step="0.01" min="0" max="100" class="w-full p-2 border rounded"
                    placeholder="Grade" required>
                <?php if (isset($errors['grade'])): ?>
                    <p class="text-red-500 text-sm"><?= $errors['grade'] ?></p>
                <?php endif; ?>
            </div>
            <button type="submit" class="w-full p-2 bg-blue-500 text-white rounded hover:bg-blue-600">Add Grade</button>
        </form>
    </div>
</div>