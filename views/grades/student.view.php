<?php $title = "My Grades"; ?>
<h1 class="text-3xl font-bold text-center mb-6">My Grades</h1>
<div class="container mx-auto">
    <table class="w-full text-left border-collapse">
        <thead>
            <tr class="bg-gray-200">
                <th class="p-2">Subject</th>
                <th class="p-2">Grade</th>
                <th class="p-2">Date</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($grades as $grade): ?>
                <tr>
                    <td class="p-2 border"><?= htmlspecialchars($grade['subject_name']) ?></td>
                    <td class="p-2 border"><?= htmlspecialchars($grade['grade']) ?></td>
                    <td class="p-2 border"><?= htmlspecialchars($grade['created_at']) ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>