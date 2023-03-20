
<?php
/**
 * Created by PhpStorm.
 * User: Dream Coder
 * Date: 14/05/2017
 * Time: 19:41
 */
session_start();
?>
<!DOCTYPE>
<html>
<head>
    <meta charset="UTF-8"/>
    <title>RESULTS FOR COMMON ENTRANCE</title>

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">

    <!-- FontAwesome core CSS -->
    <link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">

    <!-- JQuery and Bootstrap core JS -->
    <script src="js/jquery-3.1.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>

</head>

<body>
<nav id="myNavbar" class="navbar-nav navbar-default navbar-fixed-top" role="navigation">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbarCollapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="index.php">Enset Bambili</a>
        </div>
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="navbar">
            <ul class="nav navbar-nav">
                <li class="active"><a href="index.php" target="_self">Home</a></li>
                <li><a href="#about" data-toggle="modal">About</a></li>
                <li><a href="#contact" data-toggle="modal">Contact</a></li>
            </ul>
        </div>
    </div>
</nav>

<header id="header">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1 class="text-center">RESULTS <small>Check your result</small></h1>
            </div>
        </div>
    </div>
</header>

<section id="main">
    <div class="container">
        <div class="row">
            <div class="col-md-7" style="margin-left: 190px">
                <form method="post" id="loginForm" class="form-horizontal">
                    <div class="panel panel-success">
                        <div class="panel-heading main-up">
                            <h3 class="panel-title">Enter your information to check your result</h3>
                        </div>
                        <div class="panel-body">
                            <div class="form-group">
                                <label for="numero" class="control-label col-xs-3">Your Form number</label>
                                <div class="col-xs-5">
                                    <input type="text" class="form-control" id="numero" name="numero" placeholder="Your form number" required>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="telephone" class="control-label col-xs-3">Telephone</label>
                                <div class="col-xs-5">
                                    <input type="tel" class="form-control" id="telephone" name="telephone" placeholder="Your phone number" required>
                                </div>
                            </div>

                            <div class="form-group" style="float: right">
                                <div class="col-xs-9">
                                    <button type="button" id="send" name="send" class="btn btn-primary"><span class="fa fa-check"> Send</span> </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
<!-- About Modal -->
<div id="about" class="modal fade">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title">About</h4>
            </div>
            <div class="modal-body">
                <p>RESULTS FOR COMMON ENTRANCE</p>
                <p class="text-warning"><small>H.T.T.T.C Bambili</small></p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>

            </div>
        </div>
    </div>
</div>

<!-- Contact Modal -->
<div id="contact" class="modal fade">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title">Contact Us</h4>
            </div>
            <div class="modal-body">
                <p class="text-info"><small>Our contacts</small></p>
                <p>Fax: (+237) 699 - 501 - 442</p>
                <p>Tel: (+237) 676 - 124 - 735</p>
                <p>E-mail: arieldeguilique@hotmail.com</p>
                <p>Website: www.ensetbambili.net</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>

            </div>
        </div>
    </div>
</div>

<footer id="footer">
    <p>Copyright, Ariel Nana & Arlette Ingrid &copy; 2017</p>
</footer>
<script src="js/jquery-3.1.1.min.js" type="text/javascript"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>
<script>
    $(document).ready(function () {
        $("#send").click(function () {
            var donnees = $("#loginForm").serialize();

            $.ajax({
                url: 'check_oral.php',
                type: 'POST',
                data: donnees,
                success: function (data) {
                    window.open('resultatOral.php','_self');
                }
            })
        })
    })
</script>
</body>
</html>
