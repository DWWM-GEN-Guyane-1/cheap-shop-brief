<?php session_start(); /* La session commence */
if(!isset($_SESSION['UserData']['Username'])){ // Si l'utilisateur correspond, la connexion est autorisée
header("location:login.php");
exit;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Page d'accueil - Cheap Shop</title>

    <link rel="icon" type="image/png" href="shop-icon.png"/>
    <link href="style-home.css" rel="stylesheet">

   <script>
         <!--
            function over() {
               document.write ("Mouse Over");
            }
            function out() {
               document.write ("Mouse Out");
            }
         //-->
      </script> 
</head>
<body>


<div id="bg-img">
<h3>Bonjour !</h3>

<select id ="roller" name="Vous souhaitez" onchange = "document.location.href = this.options[this.selectedIndex].value;">
    <option selected="selected">Fais ton choix</option>
    <option value = "list-items.php">Liste des articles</option>
    <option value = "search-tems.php">Rechercher par quantité</option>
    <option value = "add-items.php">Ajouter une référence</option>
    <option value = "update-items.php">Mettre à jour un produit</option>
    <option value = "suppress-items.php">Supprimer un produit</option>
</select>
<p>Une fois ta visite terminée, <a href="logout.php">clique ici</a> pour te déconnecter...</p>
</div>

</body>
</html>