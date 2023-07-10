<?php
require('../fpdf/fpdf.php');
$pdf = new FPDF('L', 'mm', 'A4');
$pdf->SetLeftMargin(20);
$pdf->AddPage();
$pdf->Image('../img/logoklinik.jpeg', $x=40, $y=0, $w=30, $h=30);
$pdf->SetFont('Times', 'B', 16);
$pdf->Cell(0, 10, 'LAPORAN DATA OBAT', 0, 10, 'C');
$pdf->Cell(10, 7, '', 0, 1, 'C');
$pdf->SetFont('Arial', 'B', 12);
$pdf->Cell(10, 6, 'No.', 1, 0,'C');
$pdf->Cell(70, 6, 'Nama Obat', 1, 0,'C');
$pdf->Cell(70, 6, 'Kategori', 1, 0,'C');
$pdf->Cell(56, 6, 'Stok', 1, 0,'C');
$pdf->Cell(50, 6, 'Harga', 1, 1, 'C');
$pdf->SetFont('Arial', '', 10);
include '../connection.php';
$no = 1;
$result = mysqli_query($con, "SELECT * FROM obat");
while ($data = mysqli_fetch_array($result)) {
    $pdf->Cell(10, 6, $no++, 1, 0,'C');
    $pdf->Cell(70, 6, $data['namaobat'], 1, 0);
    $pdf->Cell(70, 6, $data['kategori'], 1, 0);
    $pdf->Cell(56, 6, $data['stok'], 1, 0,'C');
    $pdf->Cell(50, 6, $data['harga'], 1, 1);
}
$pdf->Ln(5);       
$pdf->SetFont('Times', '', 12);
$pdf->Cell(255, 10, 'Banjarmasin, 05 Januari 2022', 0, 255, 'R');
$pdf->Cell(243, 5, 'Hormat Kami,', 243, 5, 'R');
$pdf->Cell(243, 5, 'Kepala Klinik', 243, 5, 'R');
$pdf->SetFont('Times','U',12);
$pdf->Cell(246, 40, 'AULIA ANDINI', 246, 40, 'R');
$pdf->Cell(150);
$pdf->Ln(-35);
$pdf->SetFont('Times', '', 12);
$pdf->Cell(242, 40, '2010010241', 242, 40, 'R');
$pdf->Output();
?>