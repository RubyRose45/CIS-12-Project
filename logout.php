<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html lang="zxx" class="no-js">
    <?php include "dbconfig.php"; ?>
    <head>
        <!-- Mobile Specific Meta -->
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <!-- Favicon-->
        <link rel="shortcut icon" href="img/elements/fav.png">
        <!-- Author Meta -->
        <meta name="author" content="colorlib">
        <!-- Meta Description -->
        <meta name="description" content="">
        <!-- Meta Keyword -->
        <meta name="keywords" content="">
        <!-- meta character set -->
        <meta charset="UTF-8">
        <!-- Site Title -->
        <title>My Blog</title>

        <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,400,300,500,600,700" rel="stylesheet"> 
        <!--
        CSS
        ============================================= -->
        <link rel="stylesheet" href="css/linearicons.css">
        <link rel="stylesheet" href="css/owl.carousel.css">
        <link rel="stylesheet" href="css/font-awesome.min.css">
        <link rel="stylesheet" href="css/nice-select.css">			
        <link rel="stylesheet" href="css/magnific-popup.css">
        <link rel="stylesheet" href="css/bootstrap.css">
        <link rel="stylesheet" href="css/main.css">
    </head>
    <body>  
        <!-- Start banner Area -->
        <section class="generic-banner relative">
            <!-- Start Header Area -->
            <?php include "Header.php"; ?>
            <!-- End Header Area -->				

        </section>		
        <!-- End banner Area -->

        <!-- About Generic Start -->
        <div class="main-wrapper"></div>
        <!-- Start fashion Area -->
        <?php
        require_once 'header.php';
        $_SESSION = array();
        if (session_id() != "" || isset($_COOKIE[session_name()]))
            setcookie(session_name(), '', time() - 2592000, '/');
        session_destroy();
        echo "< br > <div class = 'center' > You have been logged out. Please < a data-transition = 'slide' href = 'index.php'>click here</a>cto refresh the screen.</div>";
        ?>
        <!-- End fashion Area -->			

        <!-- Start Generic Area -->

        <!-- End Generic Start -->		

        <!-- start footer Area -->		
        <?php include "Footer.php"; ?>
        <!-- End footer Area -->
    </body>
</html>