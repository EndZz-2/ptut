<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
</head>
<body>
<form class="box" method="POST" action="include/register.inc.php">
        <h1>Register</h1>
        <input type="text" placeholder="Nom d'Utilisateur" name="user" autocomplete="off" required>
        <input type="password" placeholder="Password" name="pass" autocomplete="off" required>
        <input name="register" class="btn" type="submit" value="SEND">
</form>
</body>
</html>