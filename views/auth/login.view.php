<?php $title = "Login"; ?>

<h1 class="text-3xl font-bold text-center mb-6 text-white">Login</h1>

<form action="/authenticate" method="POST" class="w-full flex justify-center">
    <div class="grid bg-base-300 w-[350px] gap-4 p-6 rounded-lg shadow-lg">

        <input type="email" name="email" value="<?= $email ?? '' ?>" class="input input-bordered input-md"
            placeholder="Email" required>
        <input type="password" name="password" class="input input-bordered input-md" placeholder="Password" required>

        <?php if (!empty($error)): ?>
            <ul class="mb-4 text-sm text-red-500">
                <?php foreach ($error as $err): ?>
                    <li><?= $err ?></li>
                <?php endforeach; ?>
            </ul>
        <?php endif; ?>

        <!-- <button type="submit" class="w-full text-gray-200">Login</button> -->
        <button type="submit">
            <a
                class=" z-50 ml-5 px-6 py-3 rounded-md bg-blue-800 bg-opacity-20 text-base font-medium text-primary-color hover:bg-opacity-100 hover:text-primary">Login</a>
        </button><a href="/register"
            class=" z-50 ml-5 px-6 py-3 rounded-md bg-opacity-20 text-base font-medium text-primary-color hover:bg-opacity-100 hover:text-primary">
            Register
        </a>
    </div>
</form>