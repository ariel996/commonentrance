<?php
/**
 * Created by PhpStorm.
 * User: Dream Coder
 * Date: 22/06/2017
 * Time: 12:38
 */
require '../dbconfig.php';
$jurycode = $_POST['jurynumber'];
$filiere = $_POST['filiere'];
$place = $_POST['place'];
$note = $_POST['note'];
$keyword = $_POST['keyword'];

$sql = mysql_query("SELECT notes.candidate_formCandidate,nomFiliere,moyenne FROM filiere INNER JOIN notes ON filiere.candidate_formCandidate=notes.candidate_formCandidate AND notes.moyenne>='$note' AND filiere.nomFiliere='$filiere' LIMIT '$place'");
$run_sql = mysql_fetch_array($sql) or die(mysql_error());
$nom = $run_sql['candidate_formCandidate'];
$option = $run_sql['nomFiliere'];
$avg = $run_sql['moyenne'];

$req = mysql_query("INSERT INTO writingresult(idresult, decision, nom, libeleFiliere, avg,juryCode) VALUES ('','$keyword','$nom','$option','$avg','$jurycode')");
?>