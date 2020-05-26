<head>
    <link href="css/fontawesome/css/fontawesome.css" rel="stylesheet">
    <link href="css/fontawesome/css/solid.css" rel="stylesheet">
</head>

<?php
    if(isset($_SESSION['admin'])){
        if($_SESSION['admin'] == 1){
            console_log("admin");
?>
<header class="nav">    
    <p class="titre">Admin</p>
    <nav class="admin-nav">
        <div class="nav-bg"></div>
        <ul>
            <li><a class="link" href="#">CMS</a></li>
            <li><a class="link" href="">en attente</a></li>
            <li><a class="link" href="projet.php">ptut</a></li>
            <li><a class="link" href="client-manager.php">Gérer Client</a></li>
            <li><a class="link" href="admin-manager.php">Gérer Admin</a></li>
        </ul>
        <div class="dropdown user">
            <button class="dropbtn">
                <i class="fas fa-user" style="transform: scale(1.5); margin-right: 10px"></i> Bonjour, <?=$_SESSION['username']?>
                <i class="fa fa-caret-down"></i>
            </button>
            <div class="dropdown-content">
                <a href="profil.php">Profil</a>
                <a href="include/logout.inc.php">Deconnexion</a>
            </div>
        </div>
    </nav>
</header>
<?php
        }else  console_log("client");
    }
?>
<header class="nav">
    
<?php 
if(isset($_SESSION['admin'])){
    if($_SESSION['admin'] == 1){
?>
    <a href="index.php"><img class="logo move" src="img/coddin.svg" alt="logo"></a>
    <nav class="default-nav move">
    
<?php
    }
}else{?>
    <a href="index.php"><img class="logo"  src="img/coddin.svg" alt="logo"></a>
    <nav class="default-nav">
    <div class="nav-bg"></div>
<?php
}
?>        
    <a class="btn" href="contact.php">Contact</a>
        <ul>
            <li><a class="link" href="services.php">Services</a></li>
            <li><a class="link" href="realisation.php">Nos réalisations</a></li>
            <li><a class="link" href="apropos.php">À propos</a></li>
        </ul>
    </nav>

    <nav class="responsive-nav">
        <div class="nav-bg"></div>
        <button class="hamburger hamburger--squeeze" type="button">
            <span class="hamburger-box">
                <span class="hamburger-inner"></span>
            </span>
        </button>
        <div id="menu">
            <ul id="ul">
                <li><a class="link" href="services.php">Services</a></li>
                <li><a class="link" href="realisation.php">Nos réalisations</a></li>
                <li><a class="link" href="apropos.php">À propos</a></li>
                <li><a class="link" href="contact.php">Contact</a></li>
            </ul>
            <?php
            if(isset($_SESSION['admin'])){
                if($_SESSION['admin'] == 1){                   
            ?>
            <div class="admin-arrow">
                <i class="fas fa-user"></i>
            </div>
            <ul id="admin" class="admin">
                <li><a class="link" href="#">CMS</a></li>
                <li><a class="link" href="#">Projet</a></li>
                <li><a class="link" href="client-manager.php">Gérer Client</a></li>
                <li><a class="link" href="admin-manager.php">Gérer Admin</a></li>
                <li><a class="link" href="include/logout.inc.php">Deconnexion</a></li>
                <li><a class="link" href="profil.php">Profil</a></li>                
            </ul>
            <?php
                } 
            }
            ?>
        </div>
    </nav>
   
</header>