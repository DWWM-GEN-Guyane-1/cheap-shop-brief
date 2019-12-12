<?php session_start(); /* Démarre la session */
	
	/* Check si le formulaire est soumis/envoyé */	
	if(isset($_POST['Submit'])){
		/* Définit les utilisateurs et les mots de passe associés */
		$logins = array('Viergenie' => 'Vivie', // Cela fonctionne sur le principe de $key => $value
    'Naïma' => 'Nanoush',
    'Anaïse' => 'Ananas',
    'Sonia' => 'Zourite', 
    'Lucie' => 'Loucky', 
    'Cynthia' => 'Tia',
    'Kathleen' => 'Kathy');
		
		/* On check et assigne les valeurs renseignées à de nouvelles variables */
		$Username = isset($_POST['Username']) ? $_POST['Username'] : '';
		$Password = isset($_POST['Password']) ? $_POST['Password'] : '';
		
		/* On vérifie si l'utilisateur/mdp renseignés existent bien dans le tableau prédéfini */		
		if (isset($logins[$Username]) && $logins[$Username] == $Password){
			/* Si les données sont valides, alors l'utilisateur est redirigé vers une page sécurisée  */
			$_SESSION['UserData']['Username']=$logins[$Username];
			header("location:index.php");
		
		} else {
			/*Si invalides, alors un message d'erreur s'affiche */
      $msg="<span style='color:red'>Les données renseignées sont invalides</span>";
		}
  }
  
  $items = Array
  (
     (0) => Array (
         'nom' => 'Beurre de Buriti',
         "prix" => 15,
         "quantité" => 100
     ),

      (1) => Array (
          "nom" => "Beurre de Cacao",
          "prix" => 25,
          "quantité" => 80
      ),

      (2) => Array (
          "nom" => "Beurre de Corossol",
          "prix" => 20,
          "quantité" => 50
      ),

      (3) => Array (
          "nom" => "Beurre de Cupuacu",
          "prix" => 27,
          "quantité" => 60
      ),

      (4) => Array (
          "nom" => "Beurre de Guarana",
          "prix" => 28,
          "quantité" => 40
      ),

      (5) => Array (
          "nom" => "Beurre de Papaye",
          "prix" => 29,
          "quantité" => 20
      ),

      (6) => Array (
          "nom" => "Beurre de Pitaya",
          "prix" => 30,
          "quantité" => 10
      )
      );  
     
      $_SESSION['items'] = $items;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Page d'accueil - Cheap Shop</title>

    <link rel="icon" type="image/png" href="shop-icon.png"/>
<link href="style.css" rel="stylesheet">
</head>
<body>


<div style="background-image: url('cheap-shop-bgtest.jpeg');">
<div id="Frame0">
  <h1>Connectez-vous à Cheap Shop et faîtes de bonnes affaires !</h1>
  <p>Notre page Facebook <a href="https://dwwm-gen-guyane-1.github.io/php-page-brief/">Cheap-Shop</a></p>
</div>
<br>
<form action="" method="post" name="Login_Form">
  <table width="400" border="0" align="center" cellpadding="5" cellspacing="1" class="Table">
    <?php if(isset($msg)){?>
    <tr>
      <td colspan="2" align="center" valign="top"><?php echo $msg;?></td>
    </tr>
    <?php } ?>
    <tr>
      <td colspan="2" align="left" valign="top"><h3>Connexion</h3></td>
    </tr>
    <tr>
      <td align="right" valign="top">Identifiant</td>
      <td><input name="Username" type="text" class="Input"></td>
    </tr>
    <tr>
      <td align="right">Mot de passe</td>
      <td><input name="Password" type="password" class="Input"></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td><input name="Submit" type="submit" value="Connexion" class="Button3"></td>
    </tr>
  </table>
</form>
</body>
</html>
