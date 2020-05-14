<header>
<?php
    if(isset($_SESSION['userUid'])){
        if($_SESSION['admin'] == true){
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

    <nav class="default-nav">
        <a class="logo" href="index.php"><img src="img/coddin.svg" alt="logo"></a>
        <a class="link active" href="#">Services</a>
        <a class="link" href="#">Nos réalisations</a>
        <a class="link" href="#">À propos</a>
        <a class="btn" href="#">Contact</a>
    </nav>
</header>