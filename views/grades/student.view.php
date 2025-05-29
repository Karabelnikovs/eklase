<?php $title = "My Grades"; ?>
<div class="container mx-auto">
    <h1 class="text-3xl font-bold text-center mb-6 text-white">My Grades</h1>
    <div class="container mx-auto">

        <table class="w-full text-left border-collapse" id="gradesTable">
            <thead>
                <tr class="bg-gray-100 text-gray-700">
                    <th class="p-4 text-sm font-semibold tracking-wide">Subject</th>
                    <th class="p-4 text-sm font-semibold tracking-wide">Grade</th>
                    <th class="p-4 text-sm font-semibold tracking-wide">Date</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($grades as $grade): ?>
                    <tr class="border-b  transition-colors">
                        <td class="p-4 text-white"><?= htmlspecialchars($grade['subject_name']) ?></td>
                        <td class="p-4 text-white"><?= htmlspecialchars($grade['grade']) ?></td>
                        <td class="p-4 text-white"><?= htmlspecialchars($grade['created_at']) ?></td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</div>