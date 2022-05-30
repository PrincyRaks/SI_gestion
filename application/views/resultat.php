<?php
defined('BASEPATH') OR exit('No direct script access allowed');
 
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="<?php echo site_url('assets/css/bootstrap.min.css'); ?>" rel="stylesheet">
    <link href="<?php echo site_url('assets/css/shop-homepage.css'); ?>" rel="stylesheet">
    <title> Bilan</title>
</head>
<body>
         

      <table border="1">
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
        <?php foreach ($info_compte as $row) { ?>
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
    </table>
    <h4><a href="<?php echo site_url('Welcome/zoneliste');?>">Ajouter ecriture</a></h4>
     
</body>
</html>