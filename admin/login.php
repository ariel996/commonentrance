<?php
session_start();
require_once '../dbconfig.php';
if(isset($_POST['submit'])) {
    // Declaration of variables
    $username = mysql_real_escape_string($_POST['username']);
    $passwd = mysql_real_escape_string($_POST['mdp']);

    /***************************** Admin **************************************/
    $query = "SELECT * FROM administrator WHERE username='$username' AND passwd='$passwd'";
    $result = mysql_query($query) or die(mysql_error());
    $row = mysql_fetch_array($result);
    $num_rows = mysql_num_rows($result);

    /**************************** Jury ****************************************/
    $query_jury = mysql_query("SELECT * FROM jury WHERE username='$username' AND userpass='$passwd'");
    $num_row_jury = mysql_num_rows($query_jury);
    $row_jury = mysql_fetch_array($query_jury);

    /**************************** Teacher **************************************/
    $query_teacher = mysql_query("SELECT * FROM teacher WHERE username='$username' AND userpass='$passwd'");
    $num_row_teacher = mysql_num_rows($query_teacher);
    $row_teacher = mysql_fetch_array($query_teacher);

    if($num_rows > 0){
        $_SESSION['username'] = $row['username'];
        $insert = mysql_query("INSERT INTO admin_log(id_log, username, login_date, action) VALUES ('','$username',NOW(),'loggin')");
        echo "<script>window.open('welcome_admin.php','_self')</script>";
    }else if($num_row_jury > 0){
        $_SESSION['username'] = $row_jury['username'];
        $insert = mysql_query("INSERT INTO admin_log(id_log, username, login_date, action) VALUES ('','$username',NOW(),'loggin')");
        echo "<script>window.open('../jury/welcome_jury.php','_self')</script>";
    }else if ($num_row_teacher > 0){
        $_SESSION['username'] = $row_teacher['username'];
        $insert = mysql_query("INSERT INTO admin_log(id_log, username, login_date, action) VALUES ('','$username',NOW(),'loggin')");

        echo "<script>window.open('../teacher/welcome_teacher.php','_self')</script>";
    }else{
        echo 'false';
    }
}
?>