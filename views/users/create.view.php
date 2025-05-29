<?php $title = "Add Student"; ?>
<h1 class="text-3xl font-bold text-center mb-6">Add Student</h1>
<form action="/students/store" method="POST" class="w-full flex justify-center">
    <div class="grid bg-base-300 w-[350px] gap-4 p-6 rounded-lg shadow-lg">
        <input type="text" name="first_name" value="<?= $first_name ?? '' ?>" class="input input-bordered input-md"
            placeholder="First Name" required>
        <input type="text" name="last_name" value="<?= $last_name ?? '' ?>" class="input input-bordered input-md"
            placeholder="Last Name" required>
        <input type="email" name="email" value="<?= $email ?? '' ?>" class="input input-bordered input-md"
            placeholder="Email" required>
        <input type="password" name="password" class="input input-bordered input-md" placeholder="Password" required>

        <?php if (!empty($errors)): ?>
            <ul class="mb-4 text-sm text-red-500">
                <?php foreach ($errors as $err): ?>
                    <li><?= $err ?></li>
                <?php endforeach; ?>
            </ul>
        <?php endif; ?>

        <button type="submit" class="btn btn-primary">Add Student</button>
    </div>
</form>