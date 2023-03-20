<?php
/**
 * Created by PhpStorm.
 * User: Dream Coder
 * Date: 14/06/2017
 * Time: 16:18
 */
session_start();
require 'dbconfig.php';


// Inclusion of FPDF library
require 'fpdf181/fpdf.php';

$pdf = new FPDF();
$pdf->AddPage();
$pdf->SetFont('Arial','B',9);
$pdf->Cell(0,5,'THE UNIVERSITY OF BAMENDA',0,0,'L');
$pdf->Ln(0);
$pdf->Cell(0,5,'REPUBLIC OF CAMEROON',0,0,'R');
$pdf->Ln(1);
$pdf->Image("img/uba.jpg",95,10, 20);

$pdf->Cell(0,12,'HIGHER TECHNICAL TEACHER TRAINING',0,0,'L');
$pdf->SetFont('Arial','U',9);
$pdf->Cell('0','12','Peace - Work - Fatherland',0,0, 'R');
$pdf->SetFont('Arial','B', 9);
$pdf->Ln(0);
$pdf->Cell(9,21,'COLLEGE (H.T.T.T.C) BAMENDA',0,0, 'L');
$pdf->Ln(18);
$pdf->Cell(70,5,'','C');
$pdf->Cell(0,15,'CANDIDATE LIST OF ADMITTED',0,'C');
$position_entete = 58;

function entete_table($position_entete) {
    global $pdf;
    $pdf->SetDrawColor(183);
    $pdf->SetFillColor(221);
    $pdf->SetTextColor(0);
    $pdf->SetY($position_entete);
    $pdf->SetX(8);
    $pdf->Cell(10,8,'#',1,0,'C',1);
    $pdf->SetX(18); // 8 + 96
    $pdf->Cell(80,8,'NAMES AND SURNAMES',1,0,'C',1);
    $pdf->SetX(98);
    $pdf->Cell(75,8,'OPTION',1,0,'C',1);
    $pdf->SetX(165);
    $pdf->Cell(38,8,'DECISION',1,0,'C',1);
    $pdf->Ln(); // Retour à la ligne
}
entete_table($position_entete);

// Liste des détails
$position_details = 66; // Position à 8mm de l'entête

// SQL Query
$sql = "SELECT idresultat,filiere,decisionresultat,nomCandidat FROM candidate INNER JOIN resultat ON candidate.formCandidate=resultat.candidate_formCandidate";
$run_sql = mysql_query($sql);
while($rows = mysql_fetch_array($run_sql)) {
    $pdf->SetY($position_details);
    $pdf->SetX(8);
    $pdf->MultiCell(10,8,utf8_decode($rows['idresultat']),1,'C');
    $pdf->SetY($position_details);
    $pdf->SetX(18);
    $pdf->MultiCell(80,8,$rows['nomCandidat'],1,'C');
    $pdf->SetY($position_details);
    $pdf->SetX(98);
    $pdf->MultiCell(75,8,$rows['filiere'],1,'L');
    $pdf->SetY($position_details);
    $pdf->SetX(165);
    $pdf->MultiCell(38,8,$rows['decisionresultat'],1,'C');
    $position_details += 8;
}

//  Nom du fichier
$nom = $rows['filiere'].' ADMISSION LIST.pdf';
$pdf->Output($nom,'I');

?>