<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Page d'accueil - Cheap Shop</title>

    <link rel="icon" type="image/png" href="shop-icon.png"/>
</head>
<body>

<?php session_start(); /* La session commence */
if(!isset($_SESSION['UserData']['Username'])){ // Si l'utilisateur correspond, la connexion est autorisée
header("location:login.php");
exit;
}
?>

<p>Bonjour <?php echo $_POST['Username']; ?> !</p>
<p>L'identifiant et le mot de passe sont bien reconnus ! <a href="logout.php">Cliquez ici</a> pour vous déconnecter.</p>
</body>
</html>