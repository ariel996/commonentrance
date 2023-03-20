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
                            <li><a href="ajout_notes.php">Add new note</a> </li>
                            <li><a href="ajout_matiere.php">Add new course</a></li>
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
                    <a href="welcome_teacher.php" class="list-group-item main-color-bg">
                        <span class="glyphicon glyphicon-cog"></span>  Dashboard
                    </a>
                    <a href="sendSMS.php" class="list-group-item">
                        <span class="glyphicon glyphicon-user"></span> COMPOSE
                    </a>
                    <a href="note.php" class="list-group-item">
                        <span class="fa fa-sticky-note-o"></span> NOTES
                    </a>
                    <a href="update_notes.php" class="list-group-item">
                        <span class="fa fa-sticky-note"></span> UPDATE NOTES
                    </a>

                </div>
            </div>
            <div class="col-md-9">
                <div class="panel panel-default">
                    <div class="panel-heading main-color-bg">
                        <h3 class="panel-title"> ADD NEW COURSE <a href="welcome_teacher.php" style="float: right"><span class="fa fa-home"></span> </a></h3>
                    </div>

                    <!-- le contenu de la box -->
                    <div class="panel-body">
                        <div class="form-group">
                            <div class="alert alert-info" id="msg">
                                <a href="#" class="close" data-dismiss="alert">&times;</a>
                                <strong>Info !</strong> Page to add new course
                            </div>

                            <form method="post" id="ajoutForm">
                                <div class="col-md-5">
                                    <div class="form-group">
                                        <label>Course Code</label>
                                        <input type="text" name="codemat" id="codemat" class="form-control" placeholder="Course Code" required>
                                    </div>

                                    <div class="form-group">
                                        <label>Course Title</label>
                                        <select id="libele" name="libele" class="form-control">
                                            <option  value="Applied Mechanics for F4">Applied Mechanics for F4</option>
                                            <option value="Topography">Topography</option>
                                            <option value="Physics">Physics</option>
                                            <option value="Project in Wood Work">Project in Wood Work</option>
                                            <option value="Electronics">Electronics</option>
                                            <option value="Electrotechnics">Electrotechnics</option>
                                            <option value="Air Conditioning and  Refrigeration">Air Conditioning and  Refrigeration</option>
                                            <option value="Applied Mechanics for F1">Applied Mechanics for F1</option>
                                            <option value="Applied Mechanics for F1">Applied Mechanics for F1</option>
                                            <option value="Project in Fashion Clothing and Textile">Project in Fashion Clothing and Textile</option>
                                            <option value="Project in Home Economics">Project in Home Economics</option>
                                            <option value="General knowledge on Computer Science">General knowledge on Computer Science</option>
                                            <option value="Case study">Case study</option>
                                            <option value="Accountancy">Accountancy</option>
                                            <option value="Management">Management</option>
                                            <option value="Marketing">Marketing</option>
                                            <option value="Economics">Economics</option>
                                            <option value="Citizenship">Citizenship</option>
                                            <option value="Project in Building Construction">Project in Building Construction</option>
                                            <option value="Project in Public Works">Project in Public Works</option>
                                            <option value="Project in Topography">Project in Topography</option>
                                            <option value="Project in Mechanical Design">Project in Mechanical Design</option>
                                            <option value="Project in Mechanical Manufacturing">Project in Mechanical Manufacturing</option>
                                            <option value="Project in Automobile mechanics">Project in Automobile mechanics</option>
                                            <option value="Programming and Algorithm">Programming and Algorithm</option>
                                            <option value="General Psychology">General Psychology</option>
                                            <option value="Communication and Information System (Synthesis of documents)">Communication and Information System (Synthesis of documents)</option>
                                            <option value="Applied Mathematics">Applied Mathematics</option>
                                            <option value="Mathematics">Mathematics</option>
                                            <option value="General Knowledge">General Knowledge</option>
                                            <option value="Public Law">Public Law</option>
                                            <option value="Business Mathematics">Business Mathematics</option>
                                            <option value="Statistics">Statistics</option>
                                            <option value="General Pedagogy">General Pedagogy</option>
                                        </select>
                                    </div>

                                    <div class="form-group">
                                        <label>Credit Value</label>
                                        <input type="text" name="coeff" id="coeff" class="form-control" placeholder="Credit value" required>
                                    </div>

                                    <div class="form-group">
                                        <button type="button" class="btn btn-primary" id="sauver"><span class="fa fa-save"> Save new course</span> </button>
                                    </div>
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
    $(document).ready(function() {
    $("#sauver").on('click', function () {
       //Serialize of variables
        var mesValeurs = $("#ajoutForm").serialize();
        $.ajax({
            url: 'ajout_course.php',
            type: 'POST',
            data: mesValeurs,
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