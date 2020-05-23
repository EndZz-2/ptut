<?php
    if(isset($_SESSION['admin'])){
        if($_SESSION['admin'] === true){
            console_log("admin");
?>
    <nav class="admin">
        <a href="#">CMS</a>
        <a href="#">Projet</a>
        <a href="client-manager.php">Gérer Client</a>
        <a href="admin-manager.php">Gérer Admin</a>
        <?=$_SESSION['username']?>
    </nav>
    <?php
        }else  console_log("client");
    }
?>

<header class="nav">
    <a href="index.php"><img class="logo" src="img/coddin.svg" alt="logo"></a>

    <nav class="default-nav">
        <a class="btn" href="contact.php">Contact</a>
        <ul>
            <li><a class="link" href="services.php">Services</a></li>
            <li><a class="link" href="realisation.php">Nos réalisations</a></li>
            <li><a class="link" href="apropos.php">À propos</a></li>
        </ul>
    </nav>

    <nav class="responsive-nav">
        <button class="hamburger hamburger--squeeze" type="button">
            <span class="hamburger-box">
                <span class="hamburger-inner"></span>
            </span>
        </button>
        <div id="menu">
            <ul>
                <li><a class="link" href="">Services</a></li>
                <li><a class="link" href="realisation.php">Nos réalisations</a></li>
                <li><a class="link" href="">À propos</a></li>
                <li><a class="link" href="contact.php">Contact</a></li>               
            </ul>
        </div>
    </nav>
</header>