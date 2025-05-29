<?php $title = "Profile"; ?>
<h1 class="text-3xl font-bold text-center mb-6 text-white">Profile</h1>
<div class="container mx-auto text-center">
    <div class="mb-4">
        <?php if ($user['avatar']): ?>
            <img src="/uploads/avatars/<?= $user['avatar'] ?>" alt="Avatar" class="w-32 h-32 rounded-full mx-auto">
        <?php endif; ?>
        <p class="mt-2"><?= htmlspecialchars($user['first_name'] . ' ' . $user['last_name']) ?></p>
        <p><?= htmlspecialchars($user['email']) ?></p>
        <p>Role: <?= htmlspecialchars($user['role']) ?></p>
    </div>

    <!-- <form action="/upload-avatar" method="POST" enctype="multipart/form-data" class="mb-4">
        <input type="file" name="avatar" class="input input-bordered" accept="image/*">
        <button type="submit" class="btn btn-primary mt-2">Upload Avatar</button>
    </form> -->
</div>