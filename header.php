<?php
session_start();
?>
<html>
<head>
    <title>Online Registration H.T.T.T.C Bambili</title>
    <meta charset="UTF-8" />
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="css/custom.css">
    <link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="css/jquery-ui.min.css">
    <link rel="stylesheet" type="text/css" href="css/form.css">
    <link rel="stylesheet" type="text/css" href="css/sweetalert2.min.css">
	<link rel="icon" href="img/uba.png">
    <script src="js/jquery-3.1.1.min.js"></script>
    <script src="js/jquery.chained.min.js"></script>
    <script src="js/jquery-ui.min.js"></script>
    <script src="js/jquery.mask.min.js"></script>
    <script src="js/jquery.easing.min.js"></script>
    <script src="js/script.js"></script>
    <script src="js/script2.js"></script>
    <script>
        jQuery(function($){
            $("#datenaiss").mask('00/00/0000', {placeholder: "DD/MM/YYYY"});
            //$("#telephone").mask('000-00-00-00',{placeholder:"XXX-XX-XX-XX"});
        });
    </script>
    <script>
        $(function() {

            $("#division").chained("#region");
            $("#filiere").chained("#department");
        });

        $(function() {
            $("#filiere").chained("#department");
        });
        $(function() {
            $("#paper1").chained("#filiere");
            $("#paper2").chained("#paper1");
        });

    </script>

</head><?php require "dbconfig.php"; ?>
<body>
<div id="wrap">
    <!-- Header : barre de navigation  -->
    <header class="navbar navbar-default navbar-fixed-top" role="navigation" >

        <div class="container">



            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only"> Toggle navigation </span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.php"> ENSET Bambili </a>
            </div>
            <div class="collapse navbar-collapse">
                <ul class="nav navbar-nav ">
                    <li class="accueil"><a href="index.php">Home</a></li>
                    <li><a href="#contact" data-toggle="modal">Contact</a ></li>
                </ul >

                <ul class="nav navbar-nav pull-right">
                    <li class="connexion"><a href="admin/admin_login.php">Connexion</a></li>
                </ul>
            </div>
        </div>
    </header>
</div><!--end of wrap -->

