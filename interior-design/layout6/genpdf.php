<?php session_start();
	if (!isset($_SESSION['username'])) {
		header('location: ../../login.php');
	}
?>
<?php
	include '../../fpdf/fpdf.php';



	$pdf = new fpdf();

	if (isset($_POST['create'])) {
		$number = $_POST['number'];
		$size = $_POST['size'];
		$name = $_POST['bname'];
		//$orientation = $_POST['orientation'];
		for ($i=0; $i < $number; $i++) { 
			

			//Page size A4 and Orientation Portrait
			if ($size==='A4') {
				$pdf->AddPage('P', $size);
				$pdf->SetFont('Arial', 'B', 14);
				

				$pdf->SetFontSize(20);
				$pdf->Image('layout.png', 0, 0, 210, 300);
			}


			//Page size Letter and Orientation Portrait
			if ($size ==='Letter') {
				$pdf->AddPage('P', $size);
				$pdf->SetFont('Arial', 'B', 14);
				

				$pdf->SetFontSize(20);
				$pdf->Image('layout.png', 0, 0, 215, 265);
			}



			//Page size Legal and Orientation Portrait
			if ($size ==='Legal') {
				$pdf->AddPage('P', $size);
				$pdf->SetFont('Arial', 'B', 14);
				

				$pdf->SetFontSize(20);
				$pdf->Image('layout.png', 0, 0, 215, 335);
			}
			

		}
		$pdf->Output('I',$name.'.pdf');
	}
	







?>