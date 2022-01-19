<?php

require('fpdf.php');
if(isset($_POST['submit'])){
    $name = $_POST['fname'];
		$credentails = $_POST['credentials'];
		$speciality = $_POST['speciality'];
		$address = $_POST['address'];
		$state = $_POST['state'];
		$city = $_POST['city'];
		$pincode = $_POST['pincode'];
		$mobile = $_POST['mobile'];
		$email  = $_POST['email'];

    // New object created and constructor invoked
$pdf = new FPDF();

// Add new pages. By default no pages available.
$pdf->AddPage();
$pdf->SetFont('Times', 'B', 20);

$pdf->Cell(190,10,"Doctor Info",0,1,'C');

$pdf->Image('images/img1.jpg',10,3,50);

$pdf->Ln();
$pdf->Ln();
$pdf->Ln();
$pdf->Ln();
$pdf->Ln();
// Framed rectangular area
$pdf->Cell(50, 10, 'Doctors Name', 1, 0);
$pdf->Cell(140,10,$name,1,1);

$pdf->Cell(50, 10, 'Credentials', 1, 0);
$pdf->Cell(140,10,$credentails,1,1);

$pdf->Cell(50, 10, 'Speciality', 1, 0);
$pdf->Cell(140,10,$speciality,1,1);

$pdf->Cell(50, 10, 'Address', 1, 0);
$pdf->Cell(140,10,$address,1,1);

$pdf->Cell(50, 10, 'Mobile', 1, 0);
$pdf->Cell(140,10,$mobile,1,1);



// Close document and sent to the browser
$pdf->Output();


}


?>
