<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Blank Page - Brand</title>
    <link rel="stylesheet" href="<?php echo site_url('assets/bootstrap/css/bootstrap.min.css'); ?>">
    <link rel="stylesheet" href="<?php echo site_url('https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i&amp;display=swap') ;?>">
    <link rel="stylesheet" href="<?php echo site_url('https://fonts.googleapis.com/css?family=Acme&amp;display=swap ');?>">
    <link rel="stylesheet" href=" <?php echo site_url('https://fonts.googleapis.com/css?family=Akaya+Telivigala&amp;display=swap;')?>">
    <link rel="stylesheet" href=" <?php echo site_url('assets/fonts/fontawesome-all.min.css');?>">
    <link rel="stylesheet" href="<?php echo site_url('assets/fonts/material-icons.min.css');?>">
    <link rel="stylesheet" href="<?php echo site_url('assets/css/Continue-Button.css');?>">
    <link rel="stylesheet" href="<?php echo site_url('assets/css/Hover-Button-1.css');?>">
    <link rel="stylesheet" href=" <?php echo site_url('https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css');?>">
    <link rel="stylesheet" href=" <?php echo site_url('assets/css/Pretty-Table-1.css');?>">
    <link rel="stylesheet" href=" <?php echo site_url('assets/css/Pretty-Table.css');?>">
    <link rel="stylesheet" href=" <?php echo site_url('assets/css/x-dropdown.css');?> ">
</head>

<body id="page-top">
    <?php if(isset($annee)){echo $annee;}?>
<form action="<?php echo site_url('Welcome/mamadika_char');?>" method="post"> 
    <div id="wrapper">
         
    <nav class="navbar navbar-dark align-items-start sidebar sidebar-dark accordion bg-gradient-primary p-0" style="background: var(--bs-dark);height: 601.6px;">
            <div class="container-fluid d-flex flex-column p-0"><a class="navbar-brand d-flex justify-content-center align-items-center sidebar-brand m-0" href="#">
                    <div class="sidebar-brand-icon rotate-n-15"></div>
                    <div class="sidebar-brand-text mx-3"><span>Sage 2022</span></div>
                </a>
                <hr class="sidebar-divider my-0">
                <ul class="navbar-nav text-light" id="accordionSidebar">
                    <li class="nav-item"><a class="nav-link" href="<?php echo site_url('Welcome/zoneliste');?>"><span>Ajouter</span></a></li>
                    <li class="nav-item"><a class="nav-link" href="<?php echo site_url('');?>"><span>Ajouter Racine</span></a></li>
                    <li class="nav-item"><a class="nav-link" href="<?php echo site_url('Welcome/result') ;?>"><span>Voir Ecriture</span></a></li>
                    <li class="nav-item"><a class="nav-link" href="<?php echo site_url('Welcome/finale') ;?>"><span>Voir Bilan</span></a></li>
                    <li class="nav-item"><a class="nav-link" href="<?php echo site_url('Welcome/index') ;?>"><i class="far fa-user-circle"></i><span>Deconnécter</span></a></li>
                    <li class="nav-item"></li>
                </ul>
                <div class="text-center d-none d-md-inline"></div>
            </div>
        </nav>
        <div class="d-flex flex-column" id="content-wrapper">
            <div id="content">
                <div class="container-fluid">
                    <nav class="navbar navbar-light navbar-expand-md navbar-fixed-top navigation-clean-button" style="background: #275420;border-radius: 20;border-top-left-radius: 20;border-top-right-radius: 20;border-bottom-right-radius: 20;border-bottom-left-radius: 20;border-style: none;padding-top: 0;padding-bottom: 10px;width: 1350.6px;margin-right: 0px;margin-left: -24px;">
                        <div class="container"><button data-bs-toggle="collapse" class="navbar-toggler" data-bs-target="#navcol-1"><span class="visually-hidden">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
                            <div><a class="navbar-brand" href="#"><span>Comptable</span> </a></div>
                            <div class="collapse navbar-collapse" id="navcol-1" style="color: rgb(255,255,255);">
                                <ul class="navbar-nav nav-right">
                                    <li class="nav-item"></li>
                                    <li class="nav-item dropdown"><a class="dropdown-toggle nav-link" aria-expanded="false" data-bs-toggle="dropdown" href="#" style="color: rgba(224,217,217,0.9);">Année</a>
                                        <div class="dropdown-menu"><a class="dropdown-item" href="services.html">Price Packages</a><a class="dropdown-item" href="#">Order Services</a><a class="dropdown-item" href="#">Custom Request</a></div>
                                    </li>
                                    <li class="nav-item"><a class="nav-link" href="about.html" style="color: rgba(224,217,217,0.9);">Mois</a></li>
                                    <li class="nav-item"></li>
                                    <li class="nav-item"></li>
                                </ul>
                                <p class="ms-auto navbar-text actions"> <a class="btn btn-light action-button" role="button" href="signup.html" style="color: rgba(0,0,0,0.9);background: var(--bs-gray-200);border-radius: 10px;border-style: solid;border-color: rgba(0,0,0,0.9);font-size: 16px;padding: 5px 8px;">Revenir Accueil</a></p>
                            </div>
                        </div>
                    </nav>
                    <h3 class="text-dark mb-1" style="margin-left: 0px;height: 35.6px;width: 1132.6px;padding-left: 376px;font-family: 'Akaya Telivigala', serif;color: var(--bs-dark);font-weight: bold;font-size: 30px;">ACCUEIL SAGE COMMERCIALE</h3>
                </div>
                <div class="table-responsive" style="margin-top: 51px;">
                    <table class="table">
                        <thead>
                            <tr></tr>
                        </thead>
                        <tbody>
                            <tr></tr>
                            <tr></tr>
                        </tbody>
                    </table>
                </div>
                <div class="datagrid" style="border-radius: 3px;margin-top: 45px;">
                    <table class="table">
                        <thead>
                            <tr>
                                <th style="width: 41.587px;">Jour</th>
                                <th style="width: 114.487px;">Ref.Piece</th>
                                <th style="width: 124.175px;">Compte</th>
                                <th style="width: 164.663px;">Tiers</th>
                                <th style="width: 238.262px;">Libelle</th>
                                <th style="width: 143.35px;">
                                    <div class="x-dropdown dropdown">
                                        <div class="text-start x-drop-btn" aria-expanded="false" data-bs-toggle="dropdown" style="color: var(--bs-body-bg);background: #36752d;border-radius: -45px;transform: translate(3px);"><span>Devise</span><i class="material-icons">keyboard_arrow_down</i></div>
                                        <div class="dropdown-menu" role="menu"><a class="dropdown-item" role="presentation" href="#">xxxxx1</a><a class="dropdown-item" role="presentation" href="#">xxxx2</a><a class="dropdown-item" role="presentation" href="#">xxxxxx3</a></div>
                                    </div>
                                </th>
                                <th style="width: 125.3px;">Debit</th>
                                <th style="width: 125.375px;">Credit</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td style="width: 24.85px;"><input type="number" style="width: 49.6px;padding-left: 2px;margin-left: -9px;margin-bottom: -2px;margin-top: 4px;border-color: var(--bs-gray-300);height: 27px;"></td>
                                <td>
                                    <div class="form-floating mb-3"><input type="text" name="ref" class="form-control" placeholder="HGsOFT" style="height: 22px;"><label class="form-label" for="floatingInput" style="width: 110.775px;height: 37px;min-height: 3px;"></label></div>
                                </td>
                                <td>
                                    <div class="form-floating mb-3"><input type="text" pattern="[0-9]{5}" maxlength="5" name="isa"class="form-control" placeholder="HGsOFT" style="height: 28px;"></div>
                                </td>
                                <td>
                                    <div class="form-floating mb-3"><input type="text" name="tiers" class="form-control" placeholder="HGsOFT" style="height: 28px;"></div>
                                </td>
                                <td>
                                    <div class="form-floating mb-3"><input type="text" name="libel" class="form-control" placeholder="HGsOFT" style="height: 28px;"></div>
                                </td>
                                <td>
                                    <div class="form-floating mb-3"><input type="text" class="form-control" placeholder="HGsOFT" style="height: 28px;"></div>
                                </td>
                                <td>
                                    <div class="form-floating mb-3"><input type="number" name="debit" class="form-control" value="0" style="height: 28px;"></div>
                                </td>
                                <td>
                                    <div class="form-floating mb-3"><input type="number" name="credit" class="form-control" value="0" style="height: 28px;"></div>
                                </td>
                            </tr>
                        </tbody>
                        <tfoot>
                            <tr>
                                <td class="table-success" colspan="4" style="height: 48.7px;">
                                    <div class="paging" style="height: 41px;margin-left: 81px;width: 425.425px;">
                                        <ul>
                                            <li></li>
                                            <li></li>
                                        </ul>
                                        <div style="height: 41px;margin-bottom: 0px;margin-top: -8px;"><input   type="submit" style="height: 30px;width: 131.55px;"></div>
                                    </div>
                                </td>
                            </tr>
                        </tfoot>
                    </table>
                </div>
            </div>
            <div class="col1 col-xl-8">
	 								  <table border="2">
						  	        <tr>
						          
						            <th>Reference</th>
						          
						           
						            <th>Tiers</th>
						            <th>Libelle</th>
						            <th>Debit</th>
						            <th>Credit</th>
						           
						             
						           
						        </tr>
						       
						      <?php if (isset($info_compte)) { ?>
						        	<?php foreach ( $info_compte as $row) { ?>
						           <tr>
						                 
						                <td><?php echo $row['ref']; ?></td>
						           
						               <!-- <td><?php /*echo $row['comptes']; */?></td>-->
						                <td><?php echo $row['tiers']; ?></td>
						                <td><?php echo $row['libelle']; ?></td>
						                 <td><?php echo $row['debit']; ?></td>
						                <td><?php echo $row['credit']; ?></td>
						               
						                 
						               
						            </tr>
						            <?php } ?>
						        <?php }?> 
        	
        
 								  </table>
	 						</div>
                             <div class="col col-xl-2">
                             <h4><a href="<?php echo site_url('Welcome/confirme') ?>">Confirmer</a></h4>
	 							<h4><a href="<?php echo site_url('Welcome/annule') ?>">Annuler</a></h4>
                            </div>
            
            <footer class="bg-white sticky-footer">
                <div class="container my-auto">
                    <div class="text-center my-auto copyright"><span>Copyright © Brand 2022</span></div>
                </div>
            </footer>
        </div><a class="border rounded d-inline scroll-to-top" href="#page-top"><i class="fas fa-angle-up"></i></a>
    </div>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/bs-init.js"></script>
    <script src="assets/js/theme.js"></script>
</form>
</body>

</html>