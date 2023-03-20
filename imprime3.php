<?php
require './dbconfig.php';
$filiere = strtoupper($_GET['filiere']);

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
$pdf->Cell(0,15,'CANDIDATE LIST OF '.$filiere,0,'C');
$position_entete = 58;

function entete_table($position_entete) {
    global $pdf;
    $pdf->SetDrawColor(183);
    $pdf->SetFillColor(221);
    $pdf->SetTextColor(0);
    $pdf->SetY($position_entete);
    $pdf->SetX(8);
    $pdf->Cell(85,8,'NAMES & SURNAMES',1,0,'C',1);
    $pdf->SetX(93); // 8 + 96
    $pdf->Cell(40,8,'DATE OF BIRTH',1,0,'C',1);
    $pdf->SetX(133);
    $pdf->Cell(40,8,'PLACE OF BIRTH',1,0,'C',1);
    $pdf->SetX(173);
    $pdf->Cell(38,8,'TELEPHONE',1,0,'C',1);
    $pdf->Ln(); // Retour à la ligne
}
entete_table($position_entete);

// Liste des détails
$position_details = 66; // Position à 8mm de l'entête

// SQL Query
$sql = mysql_query("SELECT nomCandidat,dateNaiss,lieuNaiss,nomFiliere,telephone FROM candidate,filiere WHERE filiere.nomFiliere='$filiere' AND candidate.cycle='FIRST YEAR SECOND CYCLE' ORDER BY nomCandidat");
while($row = mysql_fetch_array($sql)) {
    $pdf->SetY($position_details);
    $pdf->SetX(8);
    $pdf->MultiCell(85,8,utf8_decode($row['nomCandidat']),1,'C');
    $pdf->SetY($position_details);
    $pdf->SetX(93);
    $pdf->MultiCell(40,8,$row['dateNaiss'],1,'C');
    $pdf->SetY($position_details);
    $pdf->SetX(133);
    $pdf->MultiCell(40,8,$row['lieuNaiss'],1,'C');
    $pdf->SetY($position_details);
    $pdf->SetX(173);
    $pdf->MultiCell(38,8,$row['telephone'],1,'C');
    $position_details += 8;
}
//  Nom du fichier
$nom = $filiere.' LIST';
$pdf->Output($nom,'I');
?>