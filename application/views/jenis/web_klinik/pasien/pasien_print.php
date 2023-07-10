<?php
require('../fpdf/fpdf.php');
$pdf = new FPDF('L', 'mm', 'A4');
$pdf->SetLeftMargin(20);
$pdf->AddPage();
$pdf->Image('../img/logoklinik.jpeg', $x=40, $y=0, $w=30, $h=30);
$pdf->SetFont('Times', 'B', 16);
$pdf->Cell(0, 10, 'LAPORAN DATA PASIEN', 0, 10, 'C');
$pdf->Cell(10, 7, '', 0, 1, 'C');
$pdf->SetFont('Times', 'B', 12);
$pdf->Cell(10, 6, 'No.', 1, 0,'C');
$pdf->Cell(40, 6, 'Nama', 1, 0,'C');
$pdf->Cell(30, 6, 'Tanggal Lahir', 1, 0,'C');
$pdf->Cell(30, 6, 'Jenis Kelamin', 1, 0,'C');
$pdf->Cell(30, 6, 'No Hp', 1, 0,'C');
$pdf->Cell(35, 6, 'Tanggal Periksa', 1, 0, 'C');
$pdf->Cell(40, 6, 'Alamat', 1, 0,'C');
$pdf->Cell(35, 6, 'Keluhan', 1, 1,'C');
$pdf->SetFont('Times', '', 10);
include '../connection.php';
$no = 1;
$result = mysqli_query($con, "SELECT * FROM pasien");
while ($data = mysqli_fetch_array($result)) {
    $pdf->Cell(10, 6, $no++, 1, 0,'C');
    $pdf->Cell(40, 6, $data['nama'], 1, 0);
    $pdf->Cell(30, 6, $data['tanggallahir'], 1, 0);
    $pdf->Cell(30, 6, $data['jeniskelamin'], 1, 0,'C');
    $pdf->Cell(30, 6, $data['nohp'], 1, 0,'C');
    $pdf->Cell(35, 6, $data['tanggalperiksa'], 1, 0);
    $pdf->Cell(40, 6, $data['alamat'], 1, 0);
    $pdf->Cell(35, 6, $data['keluhan'], 1, 1);
}
$pdf->Ln(5);       
$pdf->SetFont('Times', '', 12);
$pdf->Cell(250, 10, 'Banjarmasin, 05 Januari 2022', 0, 250, 'R');
$pdf->Cell(235, 5, 'Hormat Kami,', 235, 5, 'R');
$pdf->Cell(235, 5, 'Kepala Klinik', 235, 5, 'R');
$pdf->SetFont('Times','U',12);
$pdf->Cell(239, 40, 'AULIA ANDINI', 239, 40, 'R');
$pdf->Cell(150);
$pdf->Ln(-35);
$pdf->SetFont('Times', '', 12);
$pdf->Cell(237, 40, '2010010241', 237, 40, 'R');
$pdf->Output();
?>