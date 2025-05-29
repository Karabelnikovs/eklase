<?php $title = "Dashboard"; ?>

<h1 class="text-3xl font-bold text-center mb-6 text-white">Dashboard</h1>

<div class="container mx-auto text-white">
    <p class="mb-4 text-center">Welcome, <?= htmlspecialchars($_SESSION['user_name']) ?>!</p>

    <h2 class="text-2xl font-semibold mb-4 text-center text-white">Notifications</h2>

    <?php if (empty($notifications)): ?>
        <p class="text-center text-white">No new notifications.</p>
    <?php else: ?>
        <ul class="list-disc pl-5 mx-auto max-w-md">
            <?php foreach ($notifications as $notification): ?>
                <li class="mb-2">
                    <?= htmlspecialchars($notification['message']) ?> -
                    <span class="text-sm text-gray-500">
                        <?= date('F j, Y, g:i A', strtotime($notification['created_at'])) ?>
                    </span>
                </li>
            <?php endforeach; ?>
        </ul>
    <?php endif; ?>
</div>