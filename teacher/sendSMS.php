<?php
session_start();
$username = $_SESSION['username'];
require_once '../dbconfig.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Admin Area || Dashboard</title>
    <link rel="stylesheet" type="text/css" href="../css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="../css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="../css/style.css">


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
            <a class="navbar-brand" href="welcome_teacher.php">Enset Bambili</a>
        </div>
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="navbar">
            <ul class="nav navbar-nav">
                <li class="active"><a href="welcome_teacher.php" target="_self">Home</a></li>
                <li><a href="#about" data-toggle="modal">About</a></li>
                <li><a href="#contact" data-toggle="modal">Contact</a></li>
            </ul>

            <ul class="nav navbar-nav navbar-right">
                <li><a href="#">Welcome <?php echo $username; ?>  </a></li>
                <li><a href="logout2.php">Logout</a> </li>
            </ul>
        </div>
    </div>
</nav>

<header id="header">
    <div class="container">
        <div class="row">
            <div class="col-md-10">
                <h1><span class="glyphicon glyphicon-cog" aria-hidden="true"></span> Dashboard <small>Manage your site</small></h1>
            </div>
            <div class="col-md-2">
                <div class="dropdown create">
                    <div class="btn-group">
                        <button type="button" data-toggle="dropdown" class="btn btn-default dropdown-toggle" id="dropdownMenu1">Create action <span class="caret"></span></button>
                        <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
                            <li><a href="#modify" data-toggle="modal"> Modify profile</a> </li>
                            <li class="divider"></li>
                            <li><a href="ajout_matiere.php">Add course</a></li>
                            <li><a href="ajout_notes.php">Add new note</a> </li>

                        </ul>
                    </div>
                </div>

            </div>
        </div>
    </div>
</header>
<section id="breadcrumb">
    <div class="container">
        <ol class="breadcrumb">
            <li class="active">Teacher Area</li>
        </ol>
    </div>
</section>

<section id="main">
    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <div class="list-group">
                    <a href="welcome_teacher.php" class="list-group-item  main-color-bg">
                        <span class="glyphicon glyphicon-cog"></span>  Dashboard
                    </a>
                    <a href="sendSMS.php" class="list-group-item active">
                        <span class="glyphicon glyphicon-pencil"></span> COMPOSE
                    </a>
                    <a href="note.php" class="list-group-item">
                        <span class="fa fa-sticky-note-o"></span> NOTES
                    </a>


                </div>
            </div>
            <div class="col-md-9">
                <div class="panel panel-default">
                    <div class="panel-heading main-color-bg">
                        <h3 class="panel-title">Website Overview</h3>
                    </div>
                    <div class="panel-body">
                        <div class="col-md-8">
                            <div class="alert alert-info" id="msg">
                                <a href="#" class="close" data-dismiss="alert">&times;</a>
                                <strong>Info !</strong> SEND NEW SMS
                            </div>
                            <form method="post" id="smsForm">

                                <div class="form-group">

                                    <input type="text" class="form-control" name="receiver" id="receiver" placeholder="Receiver name" required>
                                </div>

                                <div class="form-group">
                                    <label>Telephone</label>
                                    <input type="text" name="telephone" id="telephone" class="form-control" placeholder="6XXXXXXXX" required>
                                </div>

                                <div class="form-group">
                                    <label>Content</label>
                                    <textarea class="form-control" id="content"></textarea>
                                </div>

                                <div class="form-group form-inline">
                                    <button class="btn btn-primary" id="register" type="submit"><span class="fa fa-send-o"></span> SEND</button>
                                </div>

                            </form>
                        </div>
                    </div>
                </div>
                <!-- Website Overview  end -->
            </div>
        </div>
    </div>
</section>
<?php include '../teacher/password_change.php'; ?>
<!-- About Modal -->
<div id="about" class="modal fade">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title">About</h4>
            </div>
            <div class="modal-body">
                <p>Administration Page</p>
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
                <p>Administration Page :: Websmaster or Administrator contacts</p>
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
    <p>Copyright, Ariel Nana &copy; 2017</p>
</footer>


<script type="text/javascript" src="../js/jquery-3.1.1.min.js"></script>
<script type="text/javascript" src="../js/bootstrap.min.js"></script>
<script>
    $(document).ready(function () {
        $("#register").on('click', function () {
            var donnees = $("#smsForm").serialize();

            $.ajax({
                url: 'send.php',
                type: 'POST',
                data: donnees,
                success: function (data) {
                    $("#msg").removeClass('.alert alert-info');
                    $("#msg").addClass('.alert alert-success');
                }
            })
        });
    });
</script>
</body>
</html>