<?php
/**
 * Created by PhpStorm.
 * User: Dream Coder
 * Date: 14/06/2017
 * Time: 10:10
 */
require '../dbconfig.php';
// Declaration de variables
//$filiere = strtoupper($_POST['filiere']);
$nbreplace = $_POST['nbrePlace'];
$minTotal = $_POST['minTotal'];
$noteElimine = $_POST['noteElimine'];
$clefAdmi = strtoupper($_POST['clefAdmi']);
$type = strtoupper($_POST['typeResultat']);
$nomDonnee = strtoupper($_POST['nomDonnee']);

// SQL Queries
$sql = "SELECT note, nomFiliere FROM filiere,notation WHERE filiere.candidate_formCandidate=notation.candidate_formCandidate AND notation.note >= '$noteElimine'";
$run_sql = mysql_query($sql);
$row = mysql_fetch_array($run_sql);
$note = $row['note'];
$filiere = strtoupper($row['nomFiliere']);

// Selection for a candidate who have passed
$sql2 = "SELECT formCandidate FROM candidate,notation WHERE notation.candidate_formCandidate=candidate.formCandidate AND notation.note >='$noteElimine'";
$run_sql2 = mysql_query($sql2);
$rows = mysql_fetch_array($run_sql2);
$candidat = $rows['formCandidate'];

// Query to insert data into resultat table
$sql1 = "INSERT INTO resultat(idresultat, filiere, nbreplace, totalminimum, notedisqualification, decisionresultat, candidate_formCandidate, noteTotal,typeResultat) VALUES ('','$filiere','$nbreplace','$minTotal','$noteElimine','$clefAdmi','$candidat','$note','$type')";

if(mysql_query($sql1)){
    echo 'resultat inserer';
}
else {
    echo 'failed insertion';
}
?>