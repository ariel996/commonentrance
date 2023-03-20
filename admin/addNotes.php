<?php
/**
 * Created by PhpStorm.
 * User: Dream Coder
 * Date: 11/06/2017
 * Time: 07:11
 */
require '../dbconfig.php';
//$libele = strtoupper($_POST['libele']);
$codemat = $_POST['codemat'];
$student = $_POST['search'];
$notes = $_POST['note'];
$sql = "INSERT INTO notes(idnotes, moyenne, matiere_codemat, candidate_formCandidate) VALUES ('','$notes','$codemat','$student')";
$run_sql = mysql_query($sql) or die(mysql_error());

$req = mysql_query("INSERT INTO admin_log(id_log, username, login_date, action) VALUES ('','admin',NOW(),'add new note of $student')");
?>