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

        header("Location: ../pages/index.php");
        exit;
    } else {
        $errorMessage = "<p>Невалидни потребителско име и/или парола!</p>";
    }
}

if ($errorMessage != NULL) {
    print '<div class="error">' . $errorMessage . '</div>';
}
?>