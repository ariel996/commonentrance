<?php
/**
 * Created by PhpStorm.
 * User: Dream Coder
 * Date: 13/06/2017
 * Time: 20:56
 */
// Connexion à la base de données
require '../dbconfig.php';

// On indique au navigateur qu'on va exporter un CSV
//header('Content-Type: text/csv');
//header('Content-Disposition: attachment;filename='.$_GET['nom_table'].'.csv');

// Selection de la table à exporter
$sql = "SELECT matiere_codemat,nomCandidat,moyenne FROM candidate INNER JOIN notes on candidate.formCandidate=notes.candidate_formCandidate";
if($run_sql = mysql_query($sql)){
    header('Content-Type: application/csv');
    header('Content-Disposition: attachment;filename=notation.csv');
    while ($rows = mysql_fetch_assoc($run_sql)) {
        echo implode(';',$rows)."\r\n";
    }
} else die('Query error');
?>