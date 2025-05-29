<?php $title = "Register"; ?>
<h1 class="text-3xl font-bold text-center mb-6 text-white">Register</h1>

<form action="/registerUser" class="w-full flex justify-center" method="POST">
    <div class="grid bg-base-300 w-[350px] gap-4 p-6 rounded-lg shadow-lg">
        <input type="text" id="first_name" name="first_name"
            class="input input-bordered input-md <?php echo isset($error['first_name']) ? 'input-error' : ''; ?>"
            value="<?php echo $first_name ?? ''; ?>" required placeholder="Name">
        <input type="text" id="last_name" name="last_name"
            class="input input-bordered input-md <?php echo isset($error['last_name']) ? 'input-error' : ''; ?>"
            value="<?php echo $last_name ?? ''; ?>" required placeholder="Last Name">

        <input type="email" id="email"
            class="input input-bordered input-md <?php echo isset($error['email']) ? 'input-error' : ''; ?>"
            name="email" required value="<?php echo $email ?? ''; ?>" placeholder="Email">

        <input type="password"
            class="input input-bordered input-md <?php echo isset($error['password']) ? 'input-error' : ''; ?>"
            id="password" name="password" required value="<?php echo $password ?? ''; ?>" placeholder="Password">

        <input type="password"
            class="input input-bordered input-md <?php echo isset($error['password']) ? 'input-error' : ''; ?>"
            name="password_confirmation" id="password_confirmation" required
            value="<?php echo $password_confirmation ?? ''; ?>" placeholder="Confirm Password">

        <div>
            <?php if (isset($error)): ?>
                <ul class="grid gap-3">
                    <?php foreach ($error as $key => $value): ?>
                        <li class="text-error text-sm italic"><?php echo $value; ?></li>
                    <?php endforeach; ?>
                </ul>
            <?php endif; ?>
        </div>
        <button type="submit">
            <a
                class=" z-50 ml-5 px-6 py-3 rounded-md bg-blue-800 bg-opacity-20 text-base font-medium text-primary-color hover:bg-opacity-100 hover:text-primary">Register</a>

        </button> <a href="/login"
            class=" z-50 ml-5 px-6 py-3 rounded-md bg-opacity-20 text-base font-medium text-primary-color hover:bg-opacity-100 hover:text-primary">
            Login
        </a>
    </div>
</form>