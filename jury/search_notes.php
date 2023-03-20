<?php
/**
 * Created by PhpStorm.
 * User: Dream Coder
 * Date: 10/06/2017
 * Time: 21:54
 */
require '../dbconfig.php';

$epreuve = (filter_input(INPUT_POST, 'epreuve'));
$paper = strtoupper($epreuve);
$sql = "SELECT nom,libeleFiliere,avg FROM writingresult ORDER BY libeleFiliere";
$run_sql = mysql_query($sql);
$arrVal = array();

while($row = mysql_fetch_array($run_sql)) {
    $name = array(
      'NAMES' => $row['nom'],
        'OPTION' => $row['libeleFiliere'],
        'AVERAGE' => $row['avg']
    );

    array_push($arrVal,$name);
}
echo json_encode($arrVal);
?>