<?php
require '../dbconfig.php';

/************ On ouvre le fichier à importer en lecture seulement **************/

if(isset($_POST['submit'])){
    if($_FILES['importer']['name']){
        $filename = explode('.',$_FILES['importer']['name']);
        if($filename[1] == 'csv'){
            $handle = fopen($_FILES['importer']['name'], "r");
            while($data = fgetcsv($handle)){
                $item1 = mysql_real_escape_string($data[0]);
                $item2 = mysql_real_escape_string($data[1]);
                $item3 = mysql_real_escape_string($data[2]);
                $sql = "INSERT INTO notes(moyenne) VALUES ('$item3')";
                mysql_query($sql);
            }
            fclose($handle);
            print "Import done";
        }
    }
}
?>