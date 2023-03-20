<?php
/**
 * Created by PhpStorm.
 * User: Dream Coder
 * Date: 01/06/2017
 * Time: 11:56
 */
require_once '../dbconfig.php';
if(isset($_POST['change_password'])){
    $pseudo = mysql_real_escape_string($_POST['pseudo']);
    $lastPass = mysql_real_escape_string($_POST['actual']);
    $newMdp = mysql_real_escape_string($_POST['newMdp']);
    $cMdp = mysql_real_escape_string($_POST['cMdp']);

    // Select the password from the database
    $sql = mysql_query("SELECT * FROM administrator");
    $row = mysql_fetch_array($sql);
    $username = $row[1];
    $id = $row[0];
    if($lastPass == $row[2]){
        if($newMdp == $cMdp) {
            $insert = mysql_query("UPDATE administrator SET username='$pseudo', passwd='$cMdp' WHERE id_admin='$id'");
            $modify = mysql_query("INSERT INTO admin_log(id_log, username, login_date, action) VALUES ('','$pseudo',NOW(),'Edit System User $username')");
        } else{
            echo "<script>alert('Error of modification')</script>";
        }
    } else{
        echo "<script>alert('Please!! Your password do not match')</script>";
    }
    header("Location: welcome_admin.php");
}
?>