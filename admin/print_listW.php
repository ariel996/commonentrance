<?php
require '../dbconfig.php';

// Inclusion of FPDF library
require '../fpdf181/fpdf.php';

$pdf = new FPDF();
$pdf->AddPage();
$pdf->SetFont('Arial','B',9);
$pdf->Cell(0,5,'THE UNIVERSITY OF BAMENDA',0,0,'L');
$pdf->Ln(0);
$pdf->Cell(0,5,'REPUBLIC OF CAMEROON',0,0,'R');
$pdf->Ln(1);
$pdf->Image("../img/uba.jpg",95,10, 20);

$pdf->Cell(0,12,'HIGHER TECHNICAL TEACHER TRAINING',0,0,'L');
$pdf->SetFont('Arial','U',9);
$pdf->Cell('0','12','Peace - Work - Fatherland',0,0, 'R');
$pdf->SetFont('Arial','B', 9);
$pdf->Ln(0);
$pdf->Cell(9,21,'COLLEGE (H.T.T.T.C) BAMENDA',0,0, 'L');
$pdf->Ln(18);
$pdf->Cell(60,5,'','C');
$pdf->Cell(0,15,'ADMITTED LIST FOR ENSET BAMBILI',0,'C');
$position_entete = 58;

function entete_table($position_entete) {
    global $pdf;
    $pdf->SetDrawColor(183);
    $pdf->SetFillColor(221);
    $pdf->SetTextColor(0);
    $pdf->SetY($position_entete);
    $pdf->SetX(8);
    $pdf->Cell(85,8,'NAMES AND SURNAMES',1,0,'C',1);
    $pdf->SetX(93); // 8 + 96
    $pdf->Cell(80,8,'OPTIONS',1,0,'C',1);
    $pdf->SetX(173);
    $pdf->Cell(30,8,'AVERAGE',1,0,'C',1);
    $pdf->Ln(); // Retour à la ligne
}
entete_table($position_entete);

// Liste des détails
$position_details = 66; // Position à 8mm de l'entête

//Notre requete SQL
$sql = "SELECT nom,libeleFiliere,avg FROM writingresult ORDER BY libeleFiliere";
$run_sql = mysql_query($sql);
while($row = mysql_fetch_array($run_sql)) {
    $pdf->SetY($position_details);
    $pdf->SetX(8);
    $pdf->MultiCell(85,8,utf8_decode($row['nom']),1,'C');
    $pdf->SetY($position_details);
    $pdf->SetX(93);
    $pdf->MultiCell(80,8,$row['libeleFiliere'],1,'C');
    $pdf->SetY($position_details);
    $pdf->SetX(173);
    $pdf->MultiCell(30,8,$row['avg'],1,'C');
    $position_details += 8;
}
//  Nom du fichier
$nom = 'LIST RESULT.pdf';
$pdf->Output($nom,'I');
?>