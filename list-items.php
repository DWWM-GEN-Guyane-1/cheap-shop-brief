<?php

session_start();


$items = $_SESSION['items'];
           $i=0; 
           foreach($items as $item){
               $images = "<img src=\"./img/img".$i.".jpg\">";
            echo $images."<br>";
            $i++;
               foreach($item as $criteria){
                   echo "- ".$criteria." ";
               }
            echo "<br>";
           }
           
        ?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cheap Shop</title>
</head>
<body>

<h1>Liste produits - Cheap Shop</h1>
<p>Pour retourner à la page d'accueil, <a href="index.php">cliquez ici</a> et poursuivez votre visite !</p>



</body>
</html>