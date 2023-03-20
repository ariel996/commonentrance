<?php
/**
 * Created by PhpStorm.
 * User: Dream Coder
 * Date: 10/06/2017
 * Time: 18:31
 */

require '../dbconfig.php';

// Declaration de variables
$codemat = mysql_real_escape_string(strtoupper($_POST['codemat']));
$libele = mysql_real_escape_string(strtoupper($_POST['libele']));
$coeff = mysql_real_escape_string($_POST['coeff']);

// Preparation de la requete
$sql = "INSERT INTO matiere(codemat, libele, coeff) VALUES ('$codemat','$libele','$coeff')";

// Execution de la requete preparee

$run_sql = mysql_query($sql) or die(mysql_error());
?>