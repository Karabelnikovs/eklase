<?php $title = "Register"; ?>
<div class="min-h-screen flex items-center justify-center bg-gradient-to-br from-base-100 to-base-200 p-4">
    <div class="w-full max-w-md">
        <h1 class="text-4xl font-bold text-center mb-8 text-white">Create Account</h1>

        <form action="/registerUser" method="POST" class="space-y-6">
            <div class="bg-base-300 p-8 rounded-2xl shadow-xl border border-base-100">
                <div class="grid grid-cols-2 gap-4">
                    <div>
                        <label for="first_name" class="block text-sm font-medium text-gray-300 mb-1">First Name</label>
                        <input type="text" id="first_name" name="first_name"
                            class="w-full input input-bordered <?php echo isset($error['first_name']) ? 'input-error' : ''; ?>"
                            value="<?php echo $first_name ?? ''; ?>" required placeholder="John">
                    </div>
                    <div>
                        <label for="last_name" class="block text-sm font-medium text-gray-300 mb-1">Last Name</label>
                        <input type="text" id="last_name" name="last_name"
                            class="w-full input input-bordered <?php echo isset($error['last_name']) ? 'input-error' : ''; ?>"
                            value="<?php echo $last_name ?? ''; ?>" required placeholder="Doe">
                    </div>
                </div>

                <div class="mt-4">
                    <label for="email" class="block text-sm font-medium text-gray-300 mb-1">Email</label>
                    <input type="email" id="email" name="email"
                        class="w-full input input-bordered <?php echo isset($error['email']) ? 'input-error' : ''; ?>"
                        value="<?php echo $email ?? ''; ?>" required placeholder="your@email.com">
                </div>

                <div class="mt-4">
                    <label for="password" class="block text-sm font-medium text-gray-300 mb-1">Password</label>
                    <input type="password" id="password" name="password"
                        class="w-full input input-bordered <?php echo isset($error['password']) ? 'input-error' : ''; ?>"
                        required value="<?php echo $password ?? ''; ?>" placeholder="••••••••">
                </div>

                <div class="mt-4">
                    <label for="password_confirmation" class="block text-sm font-medium text-gray-300 mb-1">Confirm
                        Password</label>
                    <input type="password" id="password_confirmation" name="password_confirmation"
                        class="w-full input input-bordered <?php echo isset($error['password']) ? 'input-error' : ''; ?>"
                        required value="<?php echo $password_confirmation ?? ''; ?>" placeholder="••••••••">
                </div>

                <?php if (isset($error)): ?>
                <div class="mt-4 space-y-2">
                    <?php foreach ($error as $key => $value): ?>
                    <p class="text-error text-sm"><?php echo $value; ?></p>
                    <?php endforeach; ?>
                </div>
                <?php endif; ?>

                <button type="submit" class="w-full mt-6 btn btn-primary py-3 px-4 rounded-lg font-medium">
                    Register
                </button>

                <div class="mt-4 text-center text-sm text-gray-400">
                    Already have an account?
                    <a href="/login" class="text-primary hover:text-primary-focus font-medium">Sign in</a>
                </div>
            </div>
        </form>
    </div>
</div>