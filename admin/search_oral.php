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
$sql = "SELECT candidat,filiereName,Moyenne FROM oralresult ORDER BY filiereName";
$run_sql = mysql_query($sql);
$arrVal = array();

while($row = mysql_fetch_array($run_sql)) {
    $name = array(
        'NAMES' => $row['candidat'],
        'OPTION' => $row['filiereName'],
        'AVERAGE' => $row['Moyenne']
    );

    array_push($arrVal,$name);
}
echo json_encode($arrVal);
?>