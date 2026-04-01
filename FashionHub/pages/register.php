<?php include '../includes/header.php' ?>
<?php include '../includes/nav.php' ?>

<div class="auth-container">
    <div class="auth-box">
        <h2>Register</h2>
        <p class="auth-sub">Create your account</p>

        <form method="POST" action="../process/register-process.php">
            <input type="text" name="username" placeholder="Username" required>
            <input type="email" name="email" placeholder="Email" required>
            <input type="password" name="password" placeholder="Password" required>
            <input type="password" name="confirm_password" placeholder="Confirm Password" required>


            <button type="submit" name="register">Register</button>

            <p>Already have an account?
                <a href="login.php">Login</a>
            </p>
        </form>
    </div>
</div>

<?php include '../includes/footer.php'?>