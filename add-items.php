<?php
if(isset($_POST['nom']))
{afficherListe($_POST['nom']);}



function afficherListe($nom){
// récupérer le tableau de la page liste articles  
session_start();

$items = $_SESSION['items'];
$i=0; 
foreach($items as $item){
    if($items["nom"]>=$nom){
   
    $images = "<img src=\"./img/img".$i.".jpg\">";
 echo $images."<br>";
 $i++;
    foreach($item as $criteria){
        echo "- ".$criteria." ";
    }
 echo "<br>";
}}}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cheap Shop</title>
</head>
<body>

<h1>Ajouter un nom à la liste - Cheap Shop</h1>
<p>Pour retourner à la page d'accueil, <a href="index.php">cliquez ici</a> et poursuivez votre visite !</p>

<form action="add-items.php" method ="post">
    <input type ="text" name ="nom" placeholder ="Ajouter l'article souhaité">
    <input type="submit" name="submit" value="Ajouter">
    </form>


</body>
</html>