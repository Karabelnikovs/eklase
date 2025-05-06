<?php $title = "Login"; ?>

<h1 class="text-3xl font-bold text-center mb-6">Login</h1>

<form action="/authenticate" method="POST" class="max-w-md mx-auto bg-white p-6 rounded shadow-md mb-8">
    <input type="email" name="email" value="<?= $email ?? '' ?>" class="input input-bordered w-full mb-4"
        placeholder="Email" required>
    <input type="password" name="password" class="input input-bordered w-full mb-4" placeholder="Password" required>

    <?php if (!empty($error)): ?>
        <ul class="mb-4 text-sm text-red-500">
            <?php foreach ($error as $err): ?>
                <li><?= $err ?></li>
            <?php endforeach; ?>
        </ul>
    <?php endif; ?>

    <!-- <button type="submit" class="w-full text-gray-200">Login</button> -->
    <button type="submit"
        class=" z-50 ml-5 px-6 py-3 rounded-md bg-blue-800 bg-opacity-20 text-base font-medium text-primary-color hover:bg-opacity-100 hover:text-primary">Login</button>
</form>