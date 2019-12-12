<!DOCTYPE html>
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
            <div class="container">
            </div>
        </section>		
        <!-- End banner Area -->

        <!-- About Generic Start -->
        <div class="main-wrapper">

            <!-- Start fashion Area -->
            <section class="fashion-area section-gap" id="fashion">
                <div class="row" style="margin:25px">
                    <div class="col-lg-8 col-md-8">
                        <h3 class="mb-30">New Author Added</h3>
                        <?php
                        // Add to DB
                        $conn = new mysqli($hn, $un, $pw, $db);

                        // Check connection
                        if ($conn->connect_error) {
                            die("Connection failed: " . $conn->connect_error);
                        }

                        $stmt = $conn->prepare("INSERT INTO author (firstname, lastname) VALUES (?, ?)");
                        $stmt->bind_param("ss", $firstname, $lastname);

                        $firstname = $_POST["first_name"];
                        $lastname = $_POST["last_name"];

                        $stmt->execute();


                        $stmt->close();
                        $conn->close();
                        ?>
                    </div>
                </div>
            </section>
            <!-- End fashion Area -->			

            <!-- Start Generic Area -->
            <div class ="main-wrapper">
                <div class ="section-top-border">

                </div>
            </div>
            <!-- End Generic Start -->		

            <!-- start footer Area -->		
            <?php include "Footer.php"; ?>
            <!-- End footer Area -->		

        </div>
        <script src="js/vendor/jquery-2.2.4.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js"></script>
        <script src="js/vendor/bootstrap.min.js"></script>
        <script src="js/jquery.ajaxchimp.min.js"></script>
        <script src="js/jquery.sticky.js"></script>
        <script src="js/owl.carousel.min.js"></script>
        <script src="js/jquery.nice-select.min.js"></script>
        <script src="js/jquery.magnific-popup.min.js"></script>
        <script src="js/main.js"></script>
    </body>
</html>