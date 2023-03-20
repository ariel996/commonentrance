<?php
/**
 * Created by PhpStorm.
 * User: Dream Coder
 * Date: 22/06/2017
 * Time: 08:56
 */
require '../dbconfig.php';

// Declaration of variables
$juryCode = strtoupper($_POST['jurycode']);
$juryname = strtoupper($_POST['juryName']);
$telephone = $_POST['telephone'];

$sql = mysql_query("INSERT INTO jurymember(juryNumber, juryName, telephone) VALUES ('$juryCode','$juryname','$telephone')");
$run = mysql_query("INSERT INTO admin_log(id_log, username, login_date, action) VALUES ('','admin',NOW(),'adding new jury $juryname')");
?>