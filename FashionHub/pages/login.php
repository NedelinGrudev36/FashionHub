<?php include '../includes/header.php'?>
<?php include '../includes/nav.php' ?>

<div class="auth-container">
    <div class="auth-box">
        <h2>Login</h2>
        <p class="auth-sub">Welcome back</p>

        <form method="POST" action="../process/login-process.php">
            <input type="email" name="email" placeholder="Email">
            <input type="password" name="password" placeholder="Password">

            <button type="submit" name="login">Login</button>

            <p>Don't have account? 
                <a href="register.php">Register</a>
            </p>
        </form>
    </div>
</div>

<?php include '../includes/footer.php'?>