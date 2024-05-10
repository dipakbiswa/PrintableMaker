<?php 
session_start();
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
			
			$image_array = array(
				'https://randomwordgenerator.com/img/drawing-ideas-generator/cloud.png',
				'https://randomwordgenerator.com/img/drawing-ideas-generator/donut.png',
				'https://randomwordgenerator.com/img/drawing-ideas-generator/boat.png',
				'https://randomwordgenerator.com/img/drawing-ideas-generator/statue.png',
				'https://randomwordgenerator.com/img/drawing-ideas-generator/goldfish.png',
				'https://randomwordgenerator.com/img/drawing-ideas-generator/sword.png',
				'https://randomwordgenerator.com/img/drawing-ideas-generator/tunnel.png',
				'https://randomwordgenerator.com/img/drawing-ideas-generator/ocean.png',
				'https://randomwordgenerator.com/img/drawing-ideas-generator/bus.png',
				'https://randomwordgenerator.com/img/drawing-ideas-generator/tombstone.png',
				'https://randomwordgenerator.com/img/drawing-ideas-generator/dna-helix.png',
				'https://randomwordgenerator.com/img/drawing-ideas-generator/megaphone.png',
				'https://randomwordgenerator.com/img/drawing-ideas-generator/magic-wand.png'
			);

			

			//$rand_image = rand(0, count($image_array)-1);

			//Page size A4 and Orientation Portrait
			if ($size==='A4') {
				$pdf->AddPage('P', $size);
				$pdf->SetFont('Arial', 'B', 14);
				
				$pdf->Cell(0, 10, 'Drawing', 1, 0, 'L', false);
				$pdf->Cell(0, 10, 'No: '.$i+1, 'T', 1, 'R', false);


				$pdf->Image($image_array[rand(0, count($image_array)-1)], 15, 50, 90, 90);

				
				$pdf->Image($image_array[rand(0, count($image_array)-1)], 115, 50, 90, 90);

				$pdf->Image($image_array[rand(0, count($image_array)-1)], 15, 170, 90, 90);

				
				$pdf->Image($image_array[rand(0, count($image_array)-1)], 115, 170, 90, 90);


				/*$pdf->SetX(100);
				$pdf->SetY(250);
				$pdf->SetFontSize(80);
				$pdf->Write(0, $image_name[$rand_image]);*/
			}


			//Page size A3 and Orientation Portrait
			if ($size==='A3') {
				$pdf->AddPage('P', $size);
				$pdf->SetFont('Arial', 'B', 14);
				
				$pdf->Cell(0, 10, 'Drawing', 1, 0, 'L', false);
				$pdf->Cell(0, 10, 'No: '.$i+1, 'T', 1, 'R', false);


				$pdf->Image($image_array[$rand_image], 70, 100, 200, 200);

				/*$pdf->SetX(100);
				$pdf->SetY(250);
				$pdf->SetFontSize(80);
				$pdf->Write(0, $image_name[$rand_image]);*/
			}

			//Page size Letter and Orientation Portrait
			if ($size==='Letter') {
				$pdf->AddPage('P', $size);
				$pdf->SetFont('Arial', 'B', 14);
				
				$pdf->Cell(0, 10, 'Drawing', 1, 0, 'L', false);
				$pdf->Cell(0, 10, 'No: '.$i+1, 'T', 1, 'R', false);


				$pdf->Image($image_array[$rand_image], 20, 50, 180, 180);

				/*$pdf->SetX(100);
				$pdf->SetY(250);
				$pdf->SetFontSize(80);
				$pdf->Write(0, $image_name[$rand_image]);*/
			}

			//Page size A5 and Orientation Portrait
			if ($size==='A5') {
				$pdf->AddPage('P', $size);
				$pdf->SetFont('Arial', 'B', 14);
				
				$pdf->Cell(0, 10, 'Drawing', 1, 0, 'L', false);
				$pdf->Cell(0, 10, 'No: '.$i+1, 'T', 1, 'R', false);


				$pdf->Image($image_array[$rand_image], 15, 50, 120, 120);

				/*$pdf->SetX(100);
				$pdf->SetY(250);
				$pdf->SetFontSize(80);
				$pdf->Write(0, $image_name[$rand_image]);*/
			}

			//Page size Legal and Orientation Portrait
			if ($size==='Legal') {
				$pdf->AddPage('P', $size);
				$pdf->SetFont('Arial', 'B', 14);
				
				$pdf->Cell(0, 10, 'Drawing', 1, 0, 'L', false);
				$pdf->Cell(0, 10, 'No: '.$i+1, 'T', 1, 'R', false);


				$pdf->Image($image_array[$rand_image], 20, 80, 180, 180);

				/*$pdf->SetX(100);
				$pdf->SetY(250);
				$pdf->SetFontSize(80);
				$pdf->Write(0, $image_name[$rand_image]);*/
			}

			

		}
		$pdf->Output('I',$name.'.pdf');
	}
	







?>