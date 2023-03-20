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
            <a class="navbar-brand" href="welcome_admin.php">Enset Bambili</a>
        </div>
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="navbar">
            <ul class="nav navbar-nav">
                <li class="active"><a href="welcome_admin.php" target="_self">Home</a></li>
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
            <li class="active">Admin Area</li>
        </ol>
    </div>
</section>

<section id="main">
    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <div class="list-group">
                    <a href="welcome_admin.php" class="list-group-item active main-color-bg">
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
                        <h3 class="panel-title">Website Overview</h3>
                    </div>
                    <div class="panel-body">
                        <div class="col-md-8">
                            <div class="alert alert-info" id="msg">
                                <a href="#" class="close" data-dismiss="alert">&times;</a>
                                <strong>Info !</strong> Page to add new candidate
                            </div>
                            <form method="post" id="etudiant">
                                <div class="form-group">
                                    <label>Cycle</label>
                                    <select name="cycle" id="cycle" class="form-control">
                                        <option value="FIRST YEAR FIRST CYCLE">FIRST YEAR FIRST CYCLE</option>
                                        <option value="THIRD YEAR FIRST CYCLE">THIRD YEAR FIRST CYCLE</option>
                                        <option value="FIRST YEAR SECOND CYCLE">FIRST YEAR SECOND CYCLE</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label>Department</label>
                                    <select class="form-control" name="department" id="department" required>
                                        <option selected="selected" disabled="disabled">Choose your department here</option>
                                        <option value='CIVIL ENGINEERING AND FORESTRY TECHNICS'>CIVIL ENGINEERING AND FORESTRY TECHNICS</option>
                                        <option value='ELECTRICAL AND POWER ENGINEERING'>ELECTRICAL AND POWER ENGINEERING</option>
                                        <option value='MECHANICAL ENGINEERING'>MECHANICAL ENGINEERING</option>
                                        <option value='SOCIAL ECONOMY AND FAMILY MANAGEMENT'>SOCIAL ECONOMY AND FAMILY MANAGEMENT</option>
                                        <option value='COMPUTER SCIENCE'>COMPUTER SCIENCE</option>
                                        <option value='ADMINISTRATIVE TECHNIQUES'>ADMINISTRATIVE TECHNIQUES</option>
                                        <option value='ECONOMIC SCIENCES'>ECONOMIC SCIENCES</option>
                                        <option value='LAW'>LAW</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label>Option</label>
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
                                <div class="form-group">
                                    <label>Candidate's names</label>
                                    <input type="text" class="form-control" name="nom" id="nom" placeholder="Candidate names" required>
                                </div>
                                <div class="form-group">
                                    <label>Date od birth</label>
                                    <input type="date" name="dob" id="dob" class="form-control" placeholder="DD/MM/YYYY" required>
                                </div>
                                <div class="form-group">
                                    <label>Gender</label>
                                    <select name="gender" id="gender" class="form-control">
                                        <option value="Male">Male</option>
                                        <option value="Female">Female</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label>Place of birth</label>
                                    <input type="text" id="lieu" name="lieu" class="form-control" placeholder="Place of birth" required>
                                </div>
                                <div class="form-group">
                                    <label>Nationality</label>
                                    <select name="nationalite" id="nationalite" class="form-control">
                                        <option value="Cameroonian">Cameroonian</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label>Region of origin</label>
                                    <select id="region" class="form-control" name="region" required>
                                        <option selected="selected" disabled="disabled">Choose your region here</option>
                                        <option value='Adamawa'>Adamawa</option>
                                        <option value='Centre'>Centre</option>
                                        <option value='East'>East</option>
                                        <option value='Far North'>Far North</option>
                                        <option value='Littoral'>Littoral</option>
                                        <option value='North'>North</option>
                                        <option value='Northwest'>Northwest</option>
                                        <option value='South'>South</option>
                                        <option value='Southwest'>Southwest</option>
                                        <option value='West'>West</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label>Division</label>
                                    <select id="division" class="form-control" name="division" required>
                                        <option selected="selected" disabled="disabled">Choose your division here</option>
                                        <option value='Djerem'>Djerem</option>
                                        <option value='Faro-et-Deo'>Faro-et-Deo</option>
                                        <option value='Mayo-Banyo'>Mayo-Banyo</option>
                                        <option value='Mbere'>Mbere</option>
                                        <option value='Vina'>Vina</option>
                                        <option value='Haute-Sanaga'>Haute-Sanaga</option>
                                        <option value='Lekie'>Lekie</option>
                                        <option value='Mbam-et-Inoubou'>Mbam-et-Inoubou</option>
                                        <option value='Mbam-et-Kim'>Mbam-et-Kim</option>
                                        <option value='Mefou-et-Afamba'>Mefou-et-Afamba</option>
                                        <option value='Mefou-et-Akono'>Mefou-et-Akono</option>
                                        <option value='Mfoundi'>Mfoundi</option>
                                        <option value='Nyong-et-Kelle'>Nyong-et-Kelle</option>
                                        <option value='Nyong-et-Mfoumou'>Nyong-et-Mfoumou</option>
                                        <option value='Nyong-et-So o'>Nyong-et-So o</option>
                                        <option value='Boumba-et-Ngoko'>Boumba-et-Ngoko</option>
                                        <option value='Haut-Nyong'>Haut-Nyong</option>
                                        <option value='Kadey'>Kadey</option>
                                        <option value='Lom-et-Djerem'>Lom-et-Djerem</option>
                                        <option value='Diamare'>Diamare</option>
                                        <option value='Logone-et-Chari'>Logone-et-Chari</option>
                                        <option value='Mayo-Danay'>Mayo-Danay</option>
                                        <option value='Mayo-Kani'>Mayo-Kani</option>
                                        <option value='Mayo-Sava'>Mayo-Sava</option>
                                        <option value='Mayo-Tsanaga'>Mayo-Tsanaga</option>
                                        <option value='Moungo'>Moungo</option>
                                        <option value='Nkam'>Nkam</option>
                                        <option value='Sanaga-Maritime'>Sanaga-Maritime</option>
                                        <option value='Wouri'>Wouri</option>
                                        <option value='Benoue'>Benoue</option>
                                        <option value='Faro'>Faro</option>
                                        <option value='Mayo-Louti'>Mayo-Louti</option>
                                        <option value='Mayo-Rey'>Mayo-Rey</option>
                                        <option value='Boyo'>Boyo</option>
                                        <option value='Bui'>Bui</option>
                                        <option value='Donga-Mantung'>Donga-Mantung</option>
                                        <option value='Menchum'>Menchum</option>
                                        <option value='Mezam'>Mezam</option>
                                        <option value='Momo'>Momo</option>
                                        <option value='Ngo-ketunjia'>Ngo-ketunjia</option>
                                        <option value='Dja-et-Lobo'>Dja-et-Lobo</option>
                                        <option value='Mvila'>Mvila</option>
                                        <option value='Ocean'>Ocean</option>
                                        <option value='Vallee-du-Ntem'>Vallee-du-Ntem</option>
                                        <option value='Fako'>Fako</option>
                                        <option value='Koupe-Manengouba'>Koupe-Manengouba</option>
                                        <option value='Lebialem'>Lebialem</option>
                                        <option value='Manyu'>Manyu</option>
                                        <option value='Meme'>Meme</option>
                                        <option value='Ndian'>Ndian</option>
                                        <option value='Bamboutos'>Bamboutos</option>
                                        <option value='Haut-Nkam'>Haut-Nkam</option>
                                        <option value='Hauts-Plateaux'>Hauts-Plateaux</option>
                                        <option value='Koung-Khi'>Koung-Khi</option>
                                        <option value='Menoua'>Menoua</option>
                                        <option value='Mifi'>Mifi</option>
                                        <option value='Nde'>Nde</option>
                                        <option value='Noun'>Noun</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label>Telephone</label>
                                    <input type="text" name="telephone" id="telephone" class="form-control" placeholder="6XXXXXXXX" required>
                                </div>

                                <div class="form-group form-inline">
                                    <button class="btn btn-primary" id="register" type="submit">ADD CANDIDATE</button>
                                    <button class="btn btn-danger" id="cancel" type="reset">CANCEL</button>
                                </div>
                                <div class="form-group">
                                    <span class="affiche"></span>
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
<?php include 'password_change.php'; ?>
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
            var donnees = $("#etudiant").serialize();

            $.ajax({
                url: 'ajoutEtudiant.php',
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