<?php
/**
 * Created by PhpStorm.
 * User: Dream Coder
 * Date: 22/06/2017
 * Time: 12:38
 */
require '../dbconfig.php';
//$jurycode = $_POST['jurynumber'];
$filiere = $_POST['filiere'];
$place = $_POST['place'];
$note = $_POST['note'];
/*$keyword = $_POST['keyword'];

$sql = mysql_query("SELECT notes.candidate_formCandidate,notes.moyenne,filiere.nomFiliere FROM filiere,notes WHERE filiere.nomFiliere='$filiere' AND notes.moyenne>='$note' AND notes.candidate_formCandidate=filiere.candidate_formCandidate LIMIT 0,$place");
$run_sql = mysql_fetch_array($sql) or die(mysql_error());
$nom = $run_sql['candidate_formCandidate'];
$option = $run_sql['nomFiliere'];
$avg = $run_sql['moyenne'];*/

$req = mysql_query("INSERT INTO writingresult(idresult, nom, libeleFiliere, avg) SELECT notes.idnotes, notes.candidate_formCandidate,filiere.nomFiliere,notes.moyenne FROM filiere,notes WHERE notes.moyenne>='$note' AND filiere.nomFiliere='$filiere' AND notes.candidate_formCandidate=filiere.candidate_formCandidate LIMIT 0,$place");
?>