
<div id="header">
    <img id="logo-img" src="https://www.w3.org/html/logo/downloads/HTML5_1Color_White.png" alt="LOGO">
    <img id="res-icon-menu" src="../img/menu.png" alt="Menu" />
    <ul id="menu">
        <li><a href="index.php">Home</a></li>
        <li><a href="about.php">About</a></li>
        <li><a href="buy.php">Events</a></li>
        <?php
            if(isset($_COOKIE["token"]) && isset($_COOKIE["validator"])) {
                echo '<li><a href="profile.php">Profile</a></li>';
                echo '<li><a href="logout.php">Logout</a></li>';
            } else {
                echo '<li><a href="login.php">Login</a></li>';
            }
        ?>
        
        <li><a href="contact.php">Contact</a></li>
    </ul>
    <div id="clear-header"></div>

    <div id="side-menu">
        <ul id="side-menu-list">
            <li><a href="index.php">Home</a></li>
            <li><a href="about.php">About</a></li>
            <li><a href="buy.php">Events</a></li>
            <li><a href="login.php">Account</a></li>
            <li><a href="contact.php">Contact</a></li>
        </ul>
    </div>
</div>


