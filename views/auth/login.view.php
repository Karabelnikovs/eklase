<?php $title = "Login"; ?>
<div class="min-h-screen flex items-center justify-center bg-gradient-to-br from-base-100 to-base-200 p-4">
    <div class="w-full max-w-md">
        <h1 class="text-4xl font-bold text-center mb-8 text-white">Welcome Back</h1>

        <form action="/authenticate" method="POST" class="space-y-6">
            <div class="bg-base-300 p-8 rounded-2xl shadow-xl border border-base-100">
                <div class="space-y-4">
                    <div>
                        <label for="email" class="block text-sm font-medium text-gray-300 mb-1">Email</label>
                        <input type="email" id="email" name="email" class="w-full input input-bordered"
                            value="<?= $email ?? '' ?>" placeholder="your@email.com" required>
                    </div>

                    <div>
                        <label for="password" class="block text-sm font-medium text-gray-300 mb-1">Password</label>
                        <input type="password" id="password" name="password" class="w-full input input-bordered"
                            placeholder="••••••••" required>
                    </div>
                </div>

                <?php if (!empty($error)): ?>
                <div class="mt-4 space-y-2">
                    <?php foreach ($error as $err): ?>
                    <p class="text-error text-sm"><?= $err ?></p>
                    <?php endforeach; ?>
                </div>
                <?php endif; ?>

                <button type="submit" class="w-full mt-6 btn btn-primary py-3 px-4 rounded-lg font-medium">
                    Login
                </button>

                <div class="mt-4 text-center text-sm text-gray-400">
                    Don't have an account?
                    <a href="/register" class="text-primary hover:text-primary-focus font-medium">Register</a>
                </div>
            </div>
        </form>
    </div>
</div>