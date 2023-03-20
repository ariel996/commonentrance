<?php
/**
 * Created by PhpStorm.
 * User: Dream Coder
 * Date: 01/06/2017
 * Time: 11:44
 */
require_once '../dbconfig.php';
if(isset($_POST['delete_user_log'])) {
    $id = $_POST['selector'];
    $n = count($id);
    for ($i=0; $i < $n; $i++) {
        $result = mysql_query("DELETE FROM admin_log WHERE id_log='$id[$i]'");
    }
    header("Location: user_log.php");
}

?>