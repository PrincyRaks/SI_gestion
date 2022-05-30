<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="<?php echo site_url('assets/css/bootstrap.min.css'); ?>" rel="stylesheet">
	<link href="<?php echo site_url('assets/css/shop-homepage.css'); ?>" rel="stylesheet">
    <title>Utilisateurs</title>
</head>
<body>
    <table border="1">
        <tr>
            <th>Numero</th>
            <th>Nom</th>
           
        </tr>
        <?php foreach ($infos as $row) { ?>
            <tr>
                <td><?php echo $row['numero']; ?></td>
                <td><?php echo $row['nom']; ?></td>
                 
            </tr>
            <?php } ?>
    </table>
    <p>
        <?php echo $numero;?>
    </p>
</body>
</html>