<?php
session_start();
$username = $_SESSION['username'];
?>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Admin Area || Dashboard</title>
        <link rel="stylesheet" type="text/css" href="../css/bootstrap.css">
        <link rel="stylesheet" type="text/css" href="../css/style.css">
        <link rel="stylesheet" type="text/css" href="../css/font-awesome.min.css">

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
                <a class="navbar-brand" href="welcome_admin.php">Enset Bambili</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="navbar">
                <ul class="nav navbar-nav">
                    <li><a href="welcome_admin.php" target="_self">Home</a></li>
                    <li><a href="#about" data-toggle="modal">About</a></li>
                    <li><a href="#contact" target="_self">Contact</a></li>
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
                                <li><a href="addStudent.php"> Add student</a></li>
                                <li><a href="#modify" data-toggle="modal">Modify Profile</a> </li>
                                <li class="divider"></li>
                                <li><a href="#">Separated link</a></li>
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
                <li><a href="welcome_admin.php"> <span class="fa fa-home"></span> Admin Area</a> </li>
                <li class="active"><a href="field1.php"> First Year First Cycle</a> </li>
            </ol>
        </div>
    </section>

    <section id="main">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <div class="list-group">
                        <a href="welcome_admin.php" class="list-group-item main-color-bg">
                            <span class="glyphicon glyphicon-cog"></span>  Dashboard
                        </a>
                        <a href="field1.php" class="list-group-item">
                            <span class="glyphicon glyphicon-user"></span> FIRST CYCLE FIRST YEAR
                        </a>
                        <a href="field2.php" class="list-group-item">
                            <span class="glyphicon glyphicon-user"></span> THIRD YEAR FIRST CYCLE
                        </a>
                        <a href="field3.php" class="list-group-item active">
                            <span class="glyphicon glyphicon-user"></span> FIRST YEAR SECOND CYCLE
                        </a>
                        <a href="user_log.php" class="list-group-item">
                            <span class="glyphicon glyphicon-book"></span> USER LOG ACTIVITY
                        </a>
                        <a href="note.php" class="list-group-item">
                            <span class="glyphicon glyphicon-pencil"></span> NOTES
                        </a>
                        <a href="oral_result.php" class="list-group-item">
                            <span class="fa fa-database"></span> ORAL RESULT
                        </a>
                        <a href="writing_results.php" class="list-group-item">
                            <span class="fa fa-database"></span> WRITING RESULT
                        </a>
                        <a href="oral_list.php" class="list-group-item">
                            <span class="fa fa-database"></span> ORAL RESULT LIST
                        </a>
                        <a href="writing_list.php" class="list-group-item">
                            <span class="fa fa-database"></span> WRITING RESULT LIST
                        </a>

                    </div>
                </div>
                <div class="col-md-9">
                    <div class="panel panel-default">
                        <div class="panel-heading main-color-bg">
                            <h3 class="panel-title">First Year First Cycle</h3>
                        </div>
                        <div class="panel-body">
                            <form id="monForm" method="post" action="getData3.php">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>Select your option here :</label>
                                        <select name="filiere" class="form-control" id="filiere">
                                            <option selected="selected" disabled="disabled">Choose your option</option>
                                            <option value='Building' class='1'>Building</option>
                                            <option value='Public Works' class='1'>Public Works</option>
                                            <option value='Topography' class='1'>Topography</option>
                                            <option value='Agricultural Pedagogy' class='1'>Agricultural Pedagogy</option>
                                            <option value='Woodworks' class='1'>Woodworks</option>
                                            <option value='Electronics' class='2'>Electronics</option>
                                            <option value='Electrotechnics' class='2'>Electrotechnics</option>
                                            <option value='Air Conditioning & Refrigeration' class='2'>Air Conditioning & Refrigeration</option>
                                            <option value='Mechanical Design' class='3'>Mechanical Design</option>
                                            <option value='Mechanical Manufacturing' class='3'>Mechanical Manufacturing</option>
                                            <option value='Automobile Mechanics' class='3'>Automobile Mechanics</option>
                                            <option value='Fashion clothing and Textile' class='4'>Fashion clothing and Textile</option>
                                            <option value='Home economics' class='4'>Home economics</option>
                                            <option value='Fundamental Computer Sciences' class='5'>Fundamental Computer Sciences</option>
                                            <option value='Computer Sciences for ICT' class='5'>Computer Sciences for ICT</option>
                                            <option value='Information Management & Communication' class='6'>Information Management & Communication</option>
                                            <option value='Accountancy' class='6'>Accountancy</option>
                                            <option value='Management' class='6'>Management</option>
                                            <option value='Marketing' class='6'>Marketing</option>
                                            <option value='Economics' class='7'>Economics</option>
                                            <option value='Law' class='8'>Law</option>
                                            <option value='Science of Education' class='9'>Science of Education</option>
                                            <option value='Counseling' class='9'>Counseling</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <br/>
                                        <button type="submit" name="envoyer" id="envoyer" class="btn btn-default main-up">Send</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <!-- Website Overview  end -->

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
                    <p>Administration Page</p>
                    <p class="text-warning"><small>H.T.T.T.C Bambili</small></p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>

                </div>
            </div>
        </div>
    </div>
    <?php include 'password_change.php';?>

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

    <?php
    require  'footer_admin.php';

    ?>

    <script type="text/javascript" src="../js/jquery-3.1.1.js"></script>
    <script type="text/javascript" src="../js/bootstrap.min.js"></script>

    </body>
    </html>
<?php
require_once  '../dbconfig.php';
if(isset($_POST['filiere'])){
    echo "<script>window.open('getData3.php','_self')</script>";
    $_SESSION['filiere'] = strtoupper($_POST['filiere']);
}
?>