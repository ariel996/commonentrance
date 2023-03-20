<?php
/**
 * Created by PhpStorm.
 * User: Dream Coder
 * Date: 22/06/2017
 * Time: 13:50
 */
require '../dbconfig.php';
//$jurycode = $_POST['jurynumber'];
$filiere = $_POST['filiere'];
$place = $_POST['place'];
$note = $_POST['note'];
//$keyword = $_POST['keyword'];

/*$sql = mysql_query("SELECT nom,libeleFiliere,avg FROM writingresult WHERE writingresult.avg>='$note' AND writingresult.libeleFiliere='$filiere' LIMIT $place");
$run_sql = mysql_fetch_array($sql) or die(mysql_error());
$nom = $run_sql['nom'];
$option = $run_sql['libeleFiliere'];
$avg = $run_sql['avg'];*/
$insert = mysql_query("INSERT INTO oralresult(idresult, candidat, filiereName, Moyenne) SELECT idresult,nom,libeleFiliere,avg FROM writingresult WHERE writingresult.avg>='$note' AND libeleFiliere='$filiere' LIMIT 0,$place");
?>