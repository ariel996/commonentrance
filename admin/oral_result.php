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
    <title>Jury Area || Dashboard</title>
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
            <a class="navbar-brand" href="welcome_admin.php">Enset Bambili</a>
        </div>
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="navbar">
            <ul class="nav navbar-nav">
                <li class="active"><a href="welcome_jury.php" target="_self">Home</a></li>
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
                            <li><a href="sendSMS.php">Send message</a> </li>
                            <li><a href="#modify" data-toggle="modal"> Modify profile</a> </li>

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
            <li class="active">Admin Area</li>
        </ol>
    </div>
</section>

<section id="main">
    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <div class="list-group">
                    <a href="welcome_jury.php" class="list-group-item main-color-bg">
                        <span class="glyphicon glyphicon-cog"></span>  Dashboard
                    </a>
                    <a href="field1.php" class="list-group-item">
                        <span class="glyphicon glyphicon-user"></span> FIRST CYCLE FIRST YEAR
                    </a>
                    <a href="field2.php" class="list-group-item">
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
                    <a href="oral_result.php" class="list-group-item active">
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
                        <h3 class="panel-title">ORAL RESULTS</h3>
                    </div>
                    <div class="panel-body">
                        <div class="well">
                            Criteria for Oral results
                        </div>
                        <form method="post" id="oralResult">
                            <div class="form-group">
                                <label for="jurynumber">Jury number</label>
                                <select class="form-control" id="jurynumber" name="jurynumber" required>
                                    <?php
                                    require '../dbconfig.php';
                                    $sql = mysql_query("SELECT * FROM jurymember");
                                    while($check = mysql_fetch_array($sql)){
                                        echo "<option value='.$check[0].'>$check[0]</option>";
                                    }
                                    ?>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="filiere">Option</label>
                                <select id="filiere" class="form-control" name="filiere" required>
                                    <option selected="selected" disabled="disabled">Choose your option</option>
                                    <option value='Building and public Works'>Building and public Works</option>
                                    <option value='Topography'>Topography</option>
                                    <option value='Woodworks'>Woodworks</option>
                                    <option value='Electronics'>Electronics</option>
                                    <option value='Electrotechnics'>Electrotechnics</option>
                                    <option value='Air Conditioning & Refrigeration'>Air Conditioning & Refrigeration</option>
                                    <option value='Mechanical Design'>Mechanical Design</option>
                                    <option value='Mechanical Manufacturing'>Mechanical Manufacturing</option>
                                    <option value='Automobile Mechanics'>Automobile Mechanics</option>
                                    <option value='Fashion clothing and Textile'>Fashion clothing and Textile</option>
                                    <option value='Home economics'>Home economics</option>
                                    <option value='Fundamental Computer Sciences'>Fundamental Computer Sciences</option>
                                    <option value='Computer Sciences for ICT'>Computer Sciences for ICT</option>
                                    <option value='Information Management & Communication'>Information Management & Communication</option>
                                    <option value='Accountancy'>Accountancy</option>
                                    <option value='Management'>Management</option>
                                    <option value='Marketing'>Marketing</option>
                                    <option value='Economics'>Economics</option>
                                    <option value='Law'>Law</option>
                                </select>
                            </div>
                            <div class="form-group form-inline">
                                <div class="col-md-4">
                                    <label>Number of limited places</label>
                                    <input type="text" id="place" name="place" class="form-control" required>
                                </div>
                                <div class="col-md-3">
                                    <label>Note for elimination</label>
                                    <div class="input-group">
                                        <input type="text" id="note" name="note" class="form-control" required>
                                        <span class="input-group-addon">/20</span>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <label>Keyword</label><br/>
                                    <select class="form-control" id="keyword" name="keyword" required>
                                        <option value="WAITING LIST">WAITING LIST</option>
                                        <option value="ORAL RESULT">ORAL RESULT</option>
                                    </select>
                                </div>
                                <div class="col-md-1">
                                    <br/>
                                    <button class="btn btn-success" id="valid" name="valid">VALID</button>
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
<?php include '../admin/password_change.php'; ?>
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
        $("#valid").on('click', function () {
            //Serialize of variables
            var mesValeurs = $("#oralResult").serialize();
            $.ajax({
                url: 'oralResult.php',
                type: 'POST',
                data: mesValeurs,
                success: function (data) {
                    $("#well").removeClass('well');
                }
            })
        });
    });
</script>
</body>
</html>