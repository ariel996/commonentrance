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
$student = $_POST['student'];
$notes = $_POST['note'];
$sql = "UPDATE notes SET moyenne='$notes' WHERE notes.candidate_formCandidate='$student' AND notes.matiere_codemat='$codemat'";
$run_sql = mysql_query($sql) or die(mysql_error());

$req = mysql_query("INSERT INTO admin_log(id_log, username, login_date, action) VALUES ('','teacher',NOW(),'update note of $student')");
?>