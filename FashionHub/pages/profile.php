<?php
include '../includes/init.php';
include '../includes/auth.php';

$user_id = $_SESSION['user_id'];

$query = "SELECT * FROM users WHERE id='".$user_id."'";
$result = $mysqli->query($query);
$user = $result->fetch_assoc();
?>

<?php include '../includes/header.php'; ?>
<?php include '../includes/nav.php'; ?>

<div class="auth-container">
    <div class="auth-box">

        <h2>My Profile</h2>

        <p><strong>Username:</strong> <?php echo $user['username']; ?></p>
        <p><strong>Email:</strong> <?php echo $user['email']; ?></p>
        <p><strong>Role:</strong> <?php echo $user['role']; ?></p>

        <br>

        <a href="../logout.php">
            <button type="submit" name="logout">Logout</button>
            
        </a>

    </div>
</div>

<?php include '../includes/footer.php'; ?>