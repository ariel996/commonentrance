<?php
/**
 * Created by PhpStorm.
 * User: Dream Coder
 * Date: 22/06/2017
 * Time: 07:37
 */
require '../dbconfig.php';

// Generation of the form number
$exe = strtoupper(substr(uniqid(), 1, 8));
$code = 'HTTTC' . $exe;

$nom= strtoupper($_POST['nom']);
$gender = $_POST['gender'];
$nationalite = $_POST['nationalite'];
$department = strtoupper($_POST['department']);
$filiere = strtoupper($_POST['filiere']);
$region = strtoupper($_POST['region']);
$division = strtoupper($_POST['division']);
$telephone = $_POST['telephone'];
$cycle = $_POST['cycle'];
$dob = $_POST['dob'];
$lieu = strtoupper($_POST['lieu']);

// Preparation de la requete
$sql = mysql_query("INSERT INTO candidate(formCandidate, nomCandidat, dateNaiss, lieuNaiss, telephone, gender, nationalite, cycle) VALUES ('$code','$nom','$dob','$lieu','$telephone','$gender','$nationalite','$cycle')");
$sql1 = mysql_query("INSERT INTO department(iddepartment, nomDepartement, candidate_formCandidate) VALUES ('','$department','$code')");
$sql2 = mysql_query("INSERT INTO filiere(idfiliere, nomFiliere, candidate_formCandidate) VALUES ('','$filiere','$code')");
$sql3 = mysql_query("INSERT INTO region(idregion, regionName, candidate_formCandidate) VALUES ('','$region','$code')");
$sql4 = mysql_query("INSERT INTO division(iddivision, divisionName, candidate_formCandidate) VALUES ('','$division','$code')");
$sql5 = mysql_query("INSERT INTO admin_log(id_log, username, login_date, action) VALUES ('','admin',NOW(),'add student $code')");

?>