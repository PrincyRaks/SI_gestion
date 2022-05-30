<?php
defined('BASEPATH') OR exit('No direct script access allowed');
 
?>

<!DOCTYPE html>  
<html>
<head>
	<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="<?php echo site_url('asset/dist/css/bootstrap.min.css'); ?>" rel="stylesheet">
	<link href="<?php echo site_url('asset/dist/css/style.css'); ?>" rel="stylesheet">
<title>Registration form</title>
</head>
 
<body>
	 <h3>Veuillez entrez Racine compte</h3>
	<form action="<?php echo site_url('Welcome/mamadika_char')?>" method="post">
	 <p>Racine:<input type="text" name="raci" value="<?php echo $rac ?>" readonly> 
	 </p>	 
             
	 
 
	 
	<p>
		Entrer numero:
		<input type ="text" pattern="[0-9]{<?php echo $nombres;?>}" value="<?php echo $rac;?>"  name="isa"maxlength="<?php echo $nombres;?>">
	</p>
	<p>
		Intitulé:
		<input type="text" name="titre" maxlength="35" placeholder="titre" required>
	</p>
	 <input type="submit" value="Enregistrer">
	 
          
	 </form>
</body>
</html>




