<?php
include '../includes/init.php';

$errorMessage = NULL;
if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $confirm_password = $_POST['confirm_password'];

    if (empty($username) || empty($email) || empty($password) || empty($confirm_password)) {
        $errorMessage = "Всички полета са задължителни!";
    } else if ($password != $confirm_password) {
        $errorMessage = "Паролите не съвпадат!";
    } else {
        $checkQuery = "SELECT * FROM users WHERE email='" . $email . "'";
        $checkResult = $mysqli->query($checkQuery);

        if ($checkResult->num_rows > 0) {
            $errorMessage = "Този имейл вече съществува!";
        } else {
            // $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

            $query = "INSERT INTO users (username, email, password)
                        VALUES ('" . $username . "', '" . $email . "', '" . $password . "')";

            if ($mysqli -> query($query)) {
                header("Location: ../pages/login.php");
                exit;
            } else {
                $errorMessage = "Грешка при регистрация!";
            }
        }
    }
}

?>

<?php include '../includes/header.php' ?>
<?php include '../includes/nav.php' ?>

<div class="auth-container">
    <div class="auth-box">
        <h2>Register</h2>
        <p class="auth-sub">Create your account</p>

        <form method="POST">
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