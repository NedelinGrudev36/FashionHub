<?php
include '../includes/init.php';
$errorMessage = NULL;

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $email = $_POST['email'];
    $password = $_POST['password'];
    
    $query = "SELECT * FROM users WHERE email='" . $email . "' AND password='" . $password . "'";
    
    $result = $mysqli->query($query);
    if ($row = $result->fetch_assoc()) {
        $_SESSION['user_id'] = $row['id'];
        $_SESSION['username'] = $row['username'];
        $_SESSION['role'] = $row['role'];
        
        
        header("Location: index.php");
        exit;
    } else {
        $errorMessage = "<p>Невалидни потребителско име и/или парола!</p>";
    }
}

if ($errorMessage != NULL) {
    print '<div class="error">' . $errorMessage . '</div>';
}
?>


<?php include '../includes/header.php' ?>
<?php include '../includes/nav.php' ?>

<div class="auth-container">
    <div class="auth-box">
        <h2>Login</h2>
        <p class="auth-sub">Welcome back</p>

        <form method="POST">
            <input type="email" name="email" placeholder="Email">
            <input type="password" name="password" placeholder="Password">

            <button type="submit" name="login">Login</button>

            <p>Don't have account?
                <a href="register.php">Register</a>
            </p>
        </form>
    </div>
</div>

<?php include '../includes/footer.php' ?>