<?php
/**
 * Created by PhpStorm.
 * User: Dream Coder
 * Date: 13/06/2017
 * Time: 21:24
 */
require '../dbconfig.php';
extract(filter_input_array(INPUT_POST));
$fichier = $_FILES["importer"]["name"];
if ($fichier){ //Ouverture du fichier temporaire
    $fp = fopen($_FILES["importer"]["tmp_name"], "r");
} else{ // FIchier inconnu ?>
<p align="center">- Importation failed -</p>
<p align="center"><b>Sorry! you have not specified the valid path ......</b></p>
<?php exit();

}
// Declaration de la variable "cpt" qui permettra de compter le nombre d'enregistrement réalisé
$cpt = 0; ?>
<p align="center"> - Importation succeeded -</p>
<?php //Importation
while (!feof($fp)) {
    $ligne = fgets($fp,4096);
    //On crée un tableau des éléments séparés par des points virgules
    $liste = explode(";",$ligne);
    $table = filter_input(INPUT_POST, 'importer');
    //Premier element
    $liste[0] = (isset($liste[0])) ? $liste[0] : Null;
    $liste[1] = (isset($liste[1])) ? $liste[1] : Null;
    $liste[2] = (isset($liste[2])) ? $liste[2] : Null;
    $champs1 = $liste[0];
    $champs2 = $liste[1];
    $champs3 = $liste[2];
    $req = mysql_query("SELECT formCandidate FROM candidate,notation WHERE notation.matiere_codemat='$champs1'");
    $run_req = mysql_fetch_array($req);
    $code = $run_req['formCandidate'];
if ($champs1 !='') {
    $cpt++;
    $sql = "INSERT INTO notation(candidate_formCandidate, note, matiere_codemat) VALUES ('$code','$champs3','$champs1')";
}

}
// femeture du fichier
fclose($fp);
?>
<h2>Number of values newest saved: </h2><b><?php echo $cpt; ?></b>


/*if(isset($_FILES['importer'])){
    $handle = fopen($_FILES['importer'],'r');
    $data = array(); // Le tableau qui va contenir nos données
    $keys = fgetcsv($handle, 0, ';');
    while ($line = fgetcsv($handle, 0, ';')){
        $data[] = array_combine($keys, $line);
    }
    fclose($handle);
    var_dump($data);

}*/
?>