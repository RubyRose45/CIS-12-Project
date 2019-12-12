<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
    </head>
    <body>
        <header class="default-header">
            <nav class="navbar navbar-expand-lg navbar-light">
                <div class="container">
                    <a class="navbar-brand" href="index.html">
                        <img src="img/logo.png" alt="">
                    </a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="lnr lnr-menu"></span>
                    </button>

                    <div class="collapse navbar-collapse justify-content-end align-items-center" id="navbarSupportedContent">
                        <ul class="navbar-nav scrollable-menu">
                            <li><a href="Index.php#home">Home</a></li>
                            <li><a href="Article.php#article">Article</a></li>
                            <?php
                            session_start();
                            $loggedin = isset($_SESSION['username']);                          
                            if($loggedin)
                            {
                                echo'<li><a href="addauthor.php#new author">Add Author</a></li>';
                                echo'<li><a href="addarticle.php#new article">Add Article</a></li>';
                                echo'<li><a href="logout.php#logout">Logout</a></li>';
                            }
                            else 
                            {
                                echo'<li><a href="Login.php#login">Login</a></li>';
                                echo'<li><a href="Register.php#register">New User</a></li>';
                            }
                            ?>                           							
                        </ul>
                    </div>						
                </div>
            </nav>
        </header>
    </body>		
</html>
