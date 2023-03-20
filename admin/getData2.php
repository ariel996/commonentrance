<?php
/**
 * Created by PhpStorm.
 * User: Dream Coder
 * Date: 16/05/2017
 * Time: 06:59
 */
session_start();
require_once  '../dbconfig.php';

$filiere = strtoupper($_SESSION['filiere']);
$sql = mysql_query("SELECT nomCandidat,dateNaiss,lieuNaiss,nomFiliere,telephone FROM candidate,filiere WHERE filiere.nomFiliere='$filiere' AND filiere.candidate_formCandidate=candidate.formCandidate AND candidate.cycle='THIRD YEAR FIRST CYCLE'");

/*$sql = "SELECT * FROM filiere WHERE nomFiliere='$filiere'";
$result = mysql_query($sql) or die(mysql_error());
$row = mysql_fetch_array($result) or die(mysql_error());*/

?>
<?php

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
    <link rel="stylesheet" type="text/css" href="../css/bootstrap-editable.css">
    <link rel="stylesheet" type="text/css" href="../css/jquery.dataTables.min.css">
    <script src="../js/jquery-3.1.1.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>
    <script src="../js/jquery.dataTables.min.js"></script>

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
            <li><a href="welcome_admin.php"> Admin Area</a> </li>
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
                    <a href="field2.php" class="list-group-item active">
                        <span class="glyphicon glyphicon-user"></span> THIRD YEAR FIRST CYCLE
                    </a>
                    <a href="field3.php" class="list-group-item">
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
                        <form id="monForm" method="post" action="field1.php">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>Select your option here :</label>
                                    <select name="filiere" class="form-control" id="filiere">
                                        <option selected="selected" disabled="disabled">Choose your option</option>
                                        <option value='Building and public works' class='building'>Building and public Works</option>
                                        <option value='Topography' class='topo'>Topography</option>
                                        <option value='Woodworks' class='woodwork'>Woodworks</option>
                                        <option value='Electronics' class='electronics'>Electronics</option>
                                        <option value='Electrotechnics' class='electrotechnics'>Electrotechnics</option>
                                        <option value='Air Conditioning & Refrigeration' class='air'>Air Conditioning & Refrigeration</option>
                                        <option value='Mechanical Design' class='md'>Mechanical Design</option>
                                        <option value='Mechanical Manufacturing' class='mm'>Mechanical Manufacturing</option>
                                        <option value='Automobile Mechanics' class='am'>Automobile Mechanics</option>
                                        <option value='Fashion clothing and Textile' class='fct'>Fashion clothing and Textile</option>
                                        <option value='Home economics' class='he'>Home economics</option>
                                        <option value='Fundamental Computer Sciences' class='fcs'>Fundamental Computer Sciences</option>
                                        <option value='Computer Sciences for ICT' class='ict'>Computer Sciences for ICT</option>
                                        <option value='Information Management & Communication' class='imc'>Information Management & Communication</option>
                                        <option value='Accountancy' class='acc'>Accountancy</option>
                                        <option value='Management' class='mt'>Management</option>
                                        <option value='Marketing' class='mkt'>Marketing</option>
                                        <option value='Economics' class='economic'>Economics</option>
                                        <option value='Law' class='law'>Law</option>
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
                        <div>
                            <table  class="table table-bordered table-striped" id="display">
                                <thead>
                                <tr>
                                    <th>Names</th>
                                    <th>Date of birth</th>
                                    <th>Place of birth</th>
                                    <th>Option</th>
                                    <th>Phone Number</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php
                                while ($row = mysql_fetch_array($sql)){
                                    echo "<tr>";
                                    echo "<td>". $row['nomCandidat']. "</td>";
                                    echo "<td>". $row['dateNaiss']. "</td>";
                                    echo "<td>". $row['lieuNaiss']. "</td>";
                                    echo "<td>". $row['nomFiliere']. "</td>";
                                    echo "<td>". $row['telephone']. "</td>";
                                    echo "</tr>";
                                }
                                ?>

                                </tbody>
                            </table>
                            <div class="row">
                                <div class="col-md-4">
                                    <button type="button" class="btn btn-primary" name="printing" id="imprime"><span class="fa fa-print"> Print List</span> </button>
                                </div>
                            </div>
                        </div>
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
require 'footer_admin.php';
?>

