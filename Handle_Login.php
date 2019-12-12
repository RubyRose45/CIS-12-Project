<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<!-- Start fashion Area -->
<?php
$usernmae = $_POST['username'];

// validate username & pass From DB
/*include("dbconfig.php");
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // username and password sent from form 

    $myusername = mysqli_real_escape_string($db, $_POST['username']);
    $mypassword = mysqli_real_escape_string($db, $_POST['password']);

    $sql = "SELECT id FROM admin WHERE username = '$myusername' and passcode = '$mypassword'";
    $result = mysqli_query($db, $sql);
    $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
    $active = $row['active'];

    $count = mysqli_num_rows($result);

    // If result matched $myusername and $mypassword, table row must be 1 row

    if ($count == 1) {
        session_register("myusername");
        $_SESSION['login_user'] = $myusername;

        header("location: welcome.php");
    } else {
        $error = "Your Login Name or Password is invalid";
    }
}*/
$_SESSION['username'] = $usernmae;

header('Location:Index.php');
?>



<!-- End fashion Area -->			

<!-- Start Generic Area -->

<!-- End Generic Start -->		

<!-- start footer Area -->		

<!-- End footer Area -->		