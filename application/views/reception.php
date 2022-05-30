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
	<link href="<?php echo site_url('assets/css/shop-homepage.css'); ?>" rel="stylesheet">
	<link href="<?php echo site_url('asset/dist/css/style.css'); ?>" rel="stylesheet">
<title>Registration form</title>
</head>
 
<body>
	 <h3>Veuillez entrez Racine compte</h3>
	 <div class="container">
	 	<div class="row">
	 		<div class="coli col-md-6">
	 		 
 
				 <form action="<?php echo site_url('Welcome/maka_racine');?>" method="post" name="name">

							
				 <p>Racine:
	 			<select name="racine">
	 		 
	 			<?php foreach ($info as $row) { ?>
	 				<option value="<?php echo $row['racine']; ?>">
	 		 
             
                 	 <?php echo $row['racine']; ?> 
               	 </option>
             
               	 
                 
            
          						  <?php } ?>
           						 <input class=exemple type="number" placeholder="Nombre de numero" name="nombre" id="1" min="5" 						max="13" required>
           						  
           						 <input type="submit" value="Ajouter">
							 </p>
							</select>
							</form>
					<form action="<?php echo site_url('Welcome/mamadika_char');?>" method="post"> 
	 						<p>Racine:<input type="text" name="raci" value="<?php if(isset($rac)){echo $rac;} ?>" readonly> 
	 						</p>
	 						<p> Taille du compte:<input type="text" name="nbr" value="<?php if(isset($nombres)){echo $nombres;} ?>" readonly> </p>	

						 
						 
	 						

 
								 <p>
	 	    							  <p>
      							  <?php if(isset($racines)){echo $racines;}?>
   							 </p>

         
  							  <p>
     							   <?php if(isset($final)){echo $final;}?>
   							 </p>
    							<p>
        							<?php if(isset($intitule)){echo $intitule;}?>
   							 </p>
   							</p>

								 <script src="<?php echo site_url('asset/dist/js/jquery-3.3.1.min.js'); ?>">
	 							</script>
						 <script src="<?php echo site_url('asset/dist/js/bootstrap.min.js'); ?>"></script>
	 		</div>	
	 					<div class="col col-md-6">
	 		 	
	 					<p> Entrer date:<input type="date" name="daty"></p>
	 					<p> Entrer reference:<input type="text" name="ref"></p>
	 					<p> Entrer mouvement:<input type="number" name="mouv"></p>
	 					<p> Entrer Compte: <input type ="text" pattern="[0-9]{<?php if(isset($nombres)){echo $nombres;}?>}" value="<?php 
									if(isset($rac)){ echo $rac;}?>"  name="isa"maxlength="<?php if(isset($nombres)){echo $nombres;}?>"></p>
	 					
	 					<p> Entrer Tiers: <input type="text" name="tiers"></p>
	 					<p> Entrer libelle:<input type="text" name="libel"></p>
	 					<p> Entrer debit: <input type="number" name="debit" value="0"></p>
	 					<p> Entrer credit: <input type="number" name="credit" value="0"></p>
	 					<p><input type="submit" value="Valider"></p>
	 					</div>
	 					<div class="row">
	 						<div class="col col-xl-2">
	 							<h4><a href="<?php echo site_url('Welcome/confirme') ?>">Confirmer</a></h4>
	 							<h4><a href="<?php echo site_url('Welcome/annule') ?>">Annuler</a></h4>
	 						</div>
	 						<div class="col1 col-xl-8">
	 								  <table border="2">
						  	        <tr>
						            <th>Date</th>
						            <th>Reference</th>
						            <th>Mouvement</th>
						            <th>Compte</th>
						            <th>Tiers</th>
						            <th>Libelle</th>
						            <th>Debit</th>
						            <th>Credit</th>
						            <th>Intitule</th>
						             
						           
						        </tr>
						       
						      <?php if (isset($info_compte)) { ?>
						        	<?php foreach ( $info_compte as $row) { ?>
						           <tr>
						                <td><?php echo $row['daty']; ?></td>
						                <td><?php echo $row['ref']; ?></td>
						                <td><?php echo $row['mouv']; ?></td>
						                <td><?php echo $row['comptes']; ?></td>
						                <td><?php echo $row['tiers']; ?></td>
						                <td><?php echo $row['libelle']; ?></td>
						                 <td><?php echo $row['debit']; ?></td>
						                <td><?php echo $row['credit']; ?></td>
						                <td><?php echo $row['intitule']; ?></td>
						                 
						               
						            </tr>
						            <?php } ?>
						        <?php }?> 
        	
        
 								  </table>
	 						</div>
	 						<div class="col col-xl-2">
	 							
	 							<p>
	 							<?php 
	 							//session_start();
	 								//session_destroy();

	 							?>
	 							<h4><a href="<?php echo site_url('Welcome/zoneliste');?>">Ajouter de nouveau</a></h4>
	 							

	 							</p>
	 							<p>
	 							<h4><a href="<?php echo site_url('Welcome/result') ;?>">Voir ecriture</a></h4>

	 							</p>
	 							<p>
	 								<h4><a href="<?php echo site_url('Welcome/finale') ;?>">Voir bilan</a></h4>
	 							</p>
	 						</div>
	 						
	 					</div>
	 					</div>	
	 				</form>	
 		</div>
 		  				
	  
	</div>	

</body>
</html>




