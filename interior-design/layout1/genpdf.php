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
				
				$pdf->SetY(265);
				$pdf->SetFontSize(10);
				$pdf->Cell(0, 10, '___ '.($i+1).' ___', 0, 1, 'C', false);
			}


			//Page size Letter and Orientation Portrait
			if ($size ==='Letter') {
				$pdf->AddPage('P', $size);
				$pdf->SetFont('Arial', 'B', 14);
				

				$pdf->SetY(240);
				$pdf->SetFontSize(10);
				$pdf->Cell(0, 10, '___ '.($i+1).' ___', 0, 1, 'C', false);
			}



			//Page size Legal and Orientation Portrait
			if ($size ==='Legal') {
				$pdf->AddPage('P', $size);
				$pdf->SetFont('Arial', 'B', 14);
				

				$pdf->SetY(320);
				$pdf->SetFontSize(10);
				$pdf->Cell(0, 10, '___ '.($i+1).' ___', 0, 1, 'C', false);
			}
			

		}
		$pdf->Output('I',$name.'.pdf');
	}
	







?>