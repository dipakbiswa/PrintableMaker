<?php session_start();
	if (!isset($_SESSION['username'])) {
		header('location: ../login.php');
	}
?>

<?php
	include '../fpdf/fpdf.php';



	$pdf = new fpdf();

	if (isset($_POST['create'])) {
		$number = $_POST['number'];
		$left_side = $_POST['left-side'];
		$right_side = $_POST['right-side'];
		$name = $_POST['bname'];
		//$orientation = $_POST['orientation'];
		for ($i=0; $i < $number; $i++) { 
			

			/*
			if (($left_side ==='full-height-lines') and ($right_side ==='full-height-lines')) {
				$pdf->AddPage('P', 'A4');
				$pdf->SetFont('Arial', 'B', 14);
				

				$pdf->SetFontSize(20);
				$pdf->Image('layout/full-height-line-left-right.png', 0, 0, 210, 280);
			}
			else{
				if ($right_side ==='full-height-lines') {
					$pdf->AddPage('P', 'A4');
					$pdf->SetFont('Arial', 'B', 14);
					

					$pdf->SetFontSize(20);
					$pdf->Image('layout/full-height-line-right.png', 0, 0, 210, 280);
				}

				if ($left_side==='full-height-lines') {
					$pdf->AddPage('P', 'A4');
					$pdf->SetFont('Arial', 'B', 14);
					

					$pdf->SetFontSize(20);
					$pdf->Image('layout/full-height-line-left.png', 0, 0, 210, 280);

				}
			}
			
			else{
				
			}*/
			if (($left_side === 'full-height-lines') and ($right_side === 'full-height-lines')) {
				$pdf->AddPage('P', 'A4');
				$pdf->SetFont('Arial', 'B', 14);
				

				$pdf->SetFontSize(20);
				$pdf->Image('layout/full-height-line-left-right.png', 0, 0, 210, 280);
			}


			else if ($right_side === 'full-height-lines') {
					$pdf->AddPage('P', 'A4');
					$pdf->SetFont('Arial', 'B', 14);
					

					$pdf->SetFontSize(20);
					$pdf->Image('layout/full-height-line-right.png', 0, 0, 210, 280);
			}

			else if ($left_side=== 'full-height-lines') {
					$pdf->AddPage('P', 'A4');
					$pdf->SetFont('Arial', 'B', 14);
					

					$pdf->SetFontSize(20);
					$pdf->Image('layout/full-height-line-left.png', 0, 0, 210, 280);
			}
			else if (($left_side ==='full-height-checkboxes') and ($right_side ==='full-height-checkboxes')) {
				$pdf->AddPage('P', 'A4');
				$pdf->SetFont('Arial', 'B', 14);
				

				$pdf->SetFontSize(20);
				$pdf->Image('layout/full-height-checkbox-left-right.png', 0, 0, 210, 280);
			}
			else if ($left_side ==='full-height-checkboxes') {
					$pdf->AddPage('P', 'A4');
					$pdf->SetFont('Arial', 'B', 14);
					

					$pdf->SetFontSize(20);
					$pdf->Image('layout/full-height-checkbox-left.png', 0, 0, 210, 280);
			}
			else if ($right_side ==='full-height-checkboxes') {
					$pdf->AddPage('P', 'A4');
					$pdf->SetFont('Arial', 'B', 14);
					

					$pdf->SetFontSize(20);
					$pdf->Image('layout/full-height-checkbox-right.png', 0, 0, 210, 280);
			}

			
			

		}
		$pdf->Output('I',$name.'.pdf');
	}
	







?>