<?php
include './_pdo.php';
$db_file = "./sqlite-database.db";
PDO_Connect("sqlite:$db_file");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">

    <!-- theme meta -->
    <meta name="theme-name" content="quixlab" />

    <title>Quixlab - Bootstrap Admin Dashboard Template by Themefisher.com</title>
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="theme/images/favicon.png">
    <!-- Pignose Calender -->
    <link href="./theme/plugins/pg-calendar/css/pignose.calendar.min.css" rel="stylesheet">
    <!-- Chartist -->
    <link rel="stylesheet" href="./theme/plugins/chartist/css/chartist.min.css">
    <link rel="stylesheet" href="./theme/plugins/chartist-plugin-tooltips/css/chartist-plugin-tooltip.css">
    <!-- Custom Stylesheet -->
    <link href="theme/css/style.css" rel="stylesheet">

</head>

<body>

    <!--*******************
        Preloader start
    ********************-->
    <div id="preloader">
        <div class="loader">
            <svg class="circular" viewBox="25 25 50 50">
                <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="3" stroke-miterlimit="10" />
            </svg>
        </div>
    </div>
    <!--*******************
        Preloader end
    ********************-->


    <!--**********************************
        Main wrapper start
    ***********************************-->
    <div id="main-wrapper">

        <!--**********************************
            Nav header start
        ***********************************-->
        <div class="nav-header">
            <div class="brand-logo">
                <a href="index.php">
                    <b class="logo-abbr"><img src="theme/images/logo.png" alt=""> </b>
                    <span class="logo-compact"><img src="./theme/images/logo-compact.png" alt=""></span>
                    <span class="brand-title">
                        <img src="theme/images/logo-text.png" alt="">
                    </span>
                </a>
            </div>
        </div>
        <!--**********************************
            Nav header end
        ***********************************-->

        <!--**********************************
            Header start
        ***********************************-->
        <div class="header">
            <div class="header-content clearfix">

                <div class="nav-control">
                    <div class="hamburger">
                        <span class="toggle-icon"><i class="icon-menu"></i></span>
                    </div>
                </div>
                <div class="header-right icons">
                    <span class="toggle-icon"><a href="<?php echo $_SERVER["REQUEST_URI"]; ?>"><i
                                class="mdi mdi-refresh"></i></a> </span>
                </div>

            </div>
        </div>
        <!--**********************************
            Header end ti-comment-alt
        ***********************************-->

        <!--**********************************
            Sidebar start
        ***********************************-->
        <div class="nk-sidebar">
            <div class="nk-nav-scroll">
                <ul class="metismenu" id="menu">

                    <li class="nav-label">Bilgiler</li>

                    <li>
                        <a href="urunler.php" aria-expanded="false">
                            <i class="icon-badge menu-icon"></i><span class="nav-text">Ürünler</span>
                        </a>

                    </li>
                    <li>
                        <a href="sirketler.php" aria-expanded="false">
                            <i class="icon-badge menu-icon"></i><span class="nav-text">Şirketler</span>
                        </a>

                    </li>
                    <li class="nav-label">Sertifikalar</li>

                    <li>
                        <a href="sqlite.php" aria-expanded="false">
                            <i class="icon-badge menu-icon"></i><span class="nav-text">Sertifika Oluştur</span>
                        </a>

                    </li>
                    <li>
                        <a href="pdfs.php" aria-expanded="false">
                            <i class="icon-badge menu-icon"></i><span class="nav-text">Kayıtlı Sertifikalar</span>
                        </a>

                    </li>

                </ul>
            </div>
        </div>
        <!--**********************************
            Sidebar end
        ***********************************-->

        <!--**********************************
            Content body start
        ***********************************-->
        <div class="content-body">