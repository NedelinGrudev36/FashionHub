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
            $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

            $query = "INSERT INTO users (username, email, password)
                        VALUES ('" . $username . "', '" . $email . "', '" . $hashedPassword . "')";

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