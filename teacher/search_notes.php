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
$sql = "SELECT matiere_codemat,nomCandidat,moyenne FROM candidate INNER JOIN notes on candidate.formCandidate=notes.candidate_formCandidate";
$run_sql = mysql_query($sql);
$arrVal = array();
//$row = mysql_fetch_array($run_sql);
/*while($row){
    echo "<tr>";
        echo "<td>".$row['libele']."</td>";
        echo "<td>".$row['nomCandidat']."</td>";
        echo "<td> <div class='input-group'><input type='text' class='form-control' value='".$row['note']."'><span class='input-group-addon'>/20</span> </div></td>";
    echo "</tr>";
}*/
while($row = mysql_fetch_array($run_sql)) {
    $name = array(
      'Discipline' => $row['matiere_codemat'],
        'Student Names' => $row['nomCandidat'],
        'Notes' => $row['moyenne']
    );

    array_push($arrVal,$name);
}
echo json_encode($arrVal);
?>