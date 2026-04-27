<nav class="nav-bar">
    <ul id="left-nav-bar">
        <li><a href="index.php">Fashion<span>Hub</span></a></li>
    </ul>
    <ul id="middle-nav-bar">
        <li><a href="index.php">Home</a></li>
        <li><a href="catalog.php">Catalog</a></li>
        <li><a href="about.php">About</a></li>
        <li><a href="faq.php">FAQ</a></li>
    </ul>
    <ul id="right-nav-bar">
        <li><a href="contacts.php">Contacts</a></li>
        <li class="profile">
            <?php if (isset($_SESSION['user_id'])): ?>
                <a href="../logout.php">Logout</a>
            <?php else: ?>
                <a href="login.php">Login</a>
            <?php endif; ?>
        </li>
    </ul>
</nav>