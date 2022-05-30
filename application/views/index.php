<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Reception</title>
    <link rel="stylesheet" href="<?php echo site_url('assets/bootstrap/css/bootstrap.min.css');?>">
    <link rel="stylesheet" href="<?php echo site_url('https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i&amp;display=swap');?>">
    <link rel="stylesheet" href="<?php echo site_url('assets/css/Buttons-With-Waves-Effect.css');?>">
    <link rel="stylesheet" href="<?php echo site_url('assets/fonts/fontawesome-all.min.css');?>">
</head>

<body id="page-top">
    <div id="wrapper">
        <nav class="navbar navbar-dark align-items-start sidebar sidebar-dark accordion bg-gradient-primary p-0" style="margin-top: 0px;padding-top: 0px;">
            <div class="container-fluid d-flex flex-column p-0"><a class="navbar-brand d-flex justify-content-center align-items-center sidebar-brand m-0" href="#">
                    <div class="sidebar-brand-icon rotate-n-15"></div>
                    <div class="sidebar-brand-text mx-3"><span>Exercice</span></div>
                </a>
                <hr class="sidebar-divider my-0">
                <ul class="navbar-nav text-light" id="accordionSidebar">
                    <li class="nav-item"><a class="nav-link active" href="<?php echo site_url('Welcome/date')?>" style="padding-top: 81px;margin-top: 18px;margin-left: 0px;padding-left: 47px;">
                    <button class="btn btn-primary" type="button" style="margin-left: 0px;height: 53px;width: 138.6875px;">Ajouter exercice</button>
                            <div>
                                <p></p>
                            </div>
                        </a></li>
                    <li class="nav-item"><a class="nav-link" href="profile.html"><span></span></a></li>
                    <li class="nav-item"></li>
                    <li class="nav-item"><a class="nav-link" href="login.html"><span style="margin-left: 60px;">Déconnecter</span></a></li>
                    <li class="nav-item"></li>
                </ul>
                <div class="text-center d-none d-md-inline"></div>
            </div>
        </nav>
        <div class="d-flex flex-column" id="content-wrapper">
            <div id="content"></div>
            <footer class="bg-white sticky-footer">
                <div class="container my-auto">
                    <div class="text-center my-auto copyright"><span>Copyright © Brand 2022</span></div>
                </div>
            </footer>
        </div><a class="border rounded d-inline scroll-to-top" href="#page-top"><i class="fas fa-angle-up"></i></a>
    </div>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/Buttons-With-Waves-Effect.js"></script>
    <script src="assets/js/Buttons-With-Waves-Effect-1.js"></script>
    <script src="assets/js/theme.js"></script>
</body>

</html>