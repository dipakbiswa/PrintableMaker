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
				$pdf->Cell(0, 10, 'TO DO LIST', 1, 0, 'L', false);
				$pdf->Cell(0, 10, 'Date:__/__/____', 'T', 1, 'R', false);

				$pdf->Cell(80, 5,"", 0, 1, 'C', false);   //Space
				$pdf->Cell(80, 5,"", 0, 1, 'C', false);   //Space
				$pdf->Cell(80, 5,"", 0, 1, 'C', false);   //Space

				$pdf->SetFontSize(10);
				$pdf->Cell(0, 10, 'PRIORITIES', 'B', 0, 'L', false);

				$pdf->Cell(80, 5,"", 0, 1, 'C', false);   //Space
				$pdf->Cell(80, 5,"", 0, 1, 'C', false);   //Space
				$pdf->Cell(90, 10, '[  ]', 'B', 0, 'L', false);
				$pdf->SetX(110);
				$pdf->Cell(90, 10, '[  ]', 'B', 0, 'L', false);

				$pdf->Cell(80, 5,"", 0, 1, 'C', false);   //Space
				$pdf->Cell(80, 5,"", 0, 1, 'C', false);   //Space
				$pdf->Cell(90, 10, '[  ]', 'B', 0, 'L', false);
				$pdf->SetX(110);
				$pdf->Cell(90, 10, '[  ]', 'B', 0, 'L', false);

				$pdf->Cell(80, 5,"", 0, 1, 'C', false);   //Space
				$pdf->Cell(80, 5,"", 0, 1, 'C', false);   //Space
				$pdf->Cell(90, 10, '[  ]', 'B', 0, 'L', false);
				$pdf->SetX(110);
				$pdf->Cell(90, 10, '[  ]', 'B', 1, 'L', false);


				$pdf->Cell(80, 5,"", 0, 1, 'C', false);   //Space
				$pdf->Cell(80, 5,"", 0, 1, 'C', false);   //Space
				$pdf->Cell(80, 5,"", 0, 1, 'C', false);   //Space

				$pdf->SetFontSize(10);
				$pdf->Cell(0, 10, 'TO DO LIST', 'B', 0, 'L', false);

				$pdf->Cell(80, 5,"", 0, 1, 'C', false);   //Space
				$pdf->Cell(80, 5,"", 0, 1, 'C', false);   //Space
				$pdf->Cell(90, 10, '[  ]', 'B', 0, 'L', false);
				$pdf->SetX(110);
				$pdf->Cell(90, 10, '[  ]', 'B', 0, 'L', false);

				$pdf->Cell(80, 5,"", 0, 1, 'C', false);   //Space
				$pdf->Cell(80, 5,"", 0, 1, 'C', false);   //Space
				$pdf->Cell(90, 10, '[  ]', 'B', 0, 'L', false);
				$pdf->SetX(110);
				$pdf->Cell(90, 10, '[  ]', 'B', 0, 'L', false);

				$pdf->Cell(80, 5,"", 0, 1, 'C', false);   //Space
				$pdf->Cell(80, 5,"", 0, 1, 'C', false);   //Space
				$pdf->Cell(90, 10, '[  ]', 'B', 0, 'L', false);
				$pdf->SetX(110);
				$pdf->Cell(90, 10, '[  ]', 'B', 0, 'L', false);

				$pdf->Cell(80, 5,"", 0, 1, 'C', false);   //Space
				$pdf->Cell(80, 5,"", 0, 1, 'C', false);   //Space
				$pdf->Cell(90, 10, '[  ]', 'B', 0, 'L', false);
				$pdf->SetX(110);
				$pdf->Cell(90, 10, '[  ]', 'B', 0, 'L', false);

				$pdf->Cell(80, 5,"", 0, 1, 'C', false);   //Space
				$pdf->Cell(80, 5,"", 0, 1, 'C', false);   //Space
				$pdf->Cell(90, 10, '[  ]', 'B', 0, 'L', false);
				$pdf->SetX(110);
				$pdf->Cell(90, 10, '[  ]', 'B', 0, 'L', false);

				$pdf->Cell(80, 5,"", 0, 1, 'C', false);   //Space
				$pdf->Cell(80, 5,"", 0, 1, 'C', false);   //Space
				$pdf->Cell(90, 10, '[  ]', 'B', 0, 'L', false);
				$pdf->SetX(110);
				$pdf->Cell(90, 10, '[  ]', 'B', 0, 'L', false);

				$pdf->Cell(80, 5,"", 0, 1, 'C', false);   //Space
				$pdf->Cell(80, 5,"", 0, 1, 'C', false);   //Space
				$pdf->Cell(90, 10, '[  ]', 'B', 0, 'L', false);
				$pdf->SetX(110);
				$pdf->Cell(90, 10, '[  ]', 'B', 0, 'L', false);

				$pdf->Cell(80, 5,"", 0, 1, 'C', false);   //Space
				$pdf->Cell(80, 5,"", 0, 1, 'C', false);   //Space
				$pdf->Cell(90, 10, '[  ]', 'B', 0, 'L', false);
				$pdf->SetX(110);
				$pdf->Cell(90, 10, '[  ]', 'B', 0, 'L', false);

				$pdf->Cell(80, 5,"", 0, 1, 'C', false);   //Space
				$pdf->Cell(80, 5,"", 0, 1, 'C', false);   //Space
				$pdf->Cell(90, 10, '[  ]', 'B', 0, 'L', false);
				$pdf->SetX(110);
				$pdf->Cell(90, 10, '[  ]', 'B', 0, 'L', false);

				$pdf->Cell(80, 5,"", 0, 1, 'C', false);   //Space
				$pdf->Cell(80, 5,"", 0, 1, 'C', false);   //Space
				$pdf->Cell(90, 10, '[  ]', 'B', 0, 'L', false);
				$pdf->SetX(110);
				$pdf->Cell(90, 10, '[  ]', 'B', 0, 'L', false);

				$pdf->Cell(80, 5,"", 0, 1, 'C', false);   //Space
				$pdf->Cell(80, 5,"", 0, 1, 'C', false);   //Space
				$pdf->Cell(90, 10, '[  ]', 'B', 0, 'L', false);
				$pdf->SetX(110);
				$pdf->Cell(90, 10, '[  ]', 'B', 1, 'L', false);


				$pdf->Cell(80, 5,"", 0, 1, 'C', false);   //Space
				$pdf->Cell(80, 5,"", 0, 1, 'C', false);   //Space
				$pdf->Cell(80, 5,"", 0, 1, 'C', false);   //Space
				$pdf->Cell(0, 10, '  NOTE: ', 'T'.'L'.'R', 1, 'L', false);
				$pdf->Cell(0, 40, '', 'B'.'L'.'R', 0, 'L', false);
			}


			//Page size Letter and Orientation Portrait
			if ($size ==='Letter') {
				$pdf->AddPage('P', $size);
				$pdf->SetFont('Arial', 'B', 14);
				

				$pdf->SetFontSize(20);
				$pdf->Cell(0, 10, 'TO DO LIST', 1, 0, 'L', false);
				$pdf->Cell(0, 10, 'Date:__/__/____', 'T', 1, 'R', false);

				$pdf->Cell(80, 5,"", 0, 1, 'C', false);   //Space
				$pdf->Cell(80, 5,"", 0, 1, 'C', false);   //Space
				

				$pdf->SetFontSize(10);
				$pdf->Cell(0, 10, 'PRIORITIES', 'B', 0, 'L', false);

				$pdf->Cell(80, 5,"", 0, 1, 'C', false);   //Space
				$pdf->Cell(80, 5,"", 0, 1, 'C', false);   //Space
				$pdf->Cell(90, 10, '[  ]', 'B', 0, 'L', false);
				$pdf->SetX(110);
				$pdf->Cell(90, 10, '[  ]', 'B', 0, 'L', false);

				$pdf->Cell(80, 5,"", 0, 1, 'C', false);   //Space
				$pdf->Cell(80, 5,"", 0, 1, 'C', false);   //Space
				$pdf->Cell(90, 10, '[  ]', 'B', 0, 'L', false);
				$pdf->SetX(110);
				$pdf->Cell(90, 10, '[  ]', 'B', 0, 'L', false);

				$pdf->Cell(80, 5,"", 0, 1, 'C', false);   //Space
				$pdf->Cell(80, 5,"", 0, 1, 'C', false);   //Space
				$pdf->Cell(90, 10, '[  ]', 'B', 0, 'L', false);
				$pdf->SetX(110);
				$pdf->Cell(90, 10, '[  ]', 'B', 1, 'L', false);


				$pdf->Cell(80, 5,"", 0, 1, 'C', false);   //Space
				//$pdf->Cell(80, 5,"", 0, 1, 'C', false);   //Space
				//$pdf->Cell(80, 5,"", 0, 1, 'C', false);   //Space

				$pdf->SetFontSize(10);
				$pdf->Cell(0, 10, 'TO DO LIST', 'B', 0, 'L', false);

				$pdf->Cell(80, 5,"", 0, 1, 'C', false);   //Space
				$pdf->Cell(80, 5,"", 0, 1, 'C', false);   //Space
				$pdf->Cell(90, 10, '[  ]', 'B', 0, 'L', false);
				$pdf->SetX(110);
				$pdf->Cell(90, 10, '[  ]', 'B', 0, 'L', false);

				$pdf->Cell(80, 5,"", 0, 1, 'C', false);   //Space
				$pdf->Cell(80, 5,"", 0, 1, 'C', false);   //Space
				$pdf->Cell(90, 10, '[  ]', 'B', 0, 'L', false);
				$pdf->SetX(110);
				$pdf->Cell(90, 10, '[  ]', 'B', 0, 'L', false);

				$pdf->Cell(80, 5,"", 0, 1, 'C', false);   //Space
				$pdf->Cell(80, 5,"", 0, 1, 'C', false);   //Space
				$pdf->Cell(90, 10, '[  ]', 'B', 0, 'L', false);
				$pdf->SetX(110);
				$pdf->Cell(90, 10, '[  ]', 'B', 0, 'L', false);

				$pdf->Cell(80, 5,"", 0, 1, 'C', false);   //Space
				$pdf->Cell(80, 5,"", 0, 1, 'C', false);   //Space
				$pdf->Cell(90, 10, '[  ]', 'B', 0, 'L', false);
				$pdf->SetX(110);
				$pdf->Cell(90, 10, '[  ]', 'B', 0, 'L', false);

				$pdf->Cell(80, 5,"", 0, 1, 'C', false);   //Space
				$pdf->Cell(80, 5,"", 0, 1, 'C', false);   //Space
				$pdf->Cell(90, 10, '[  ]', 'B', 0, 'L', false);
				$pdf->SetX(110);
				$pdf->Cell(90, 10, '[  ]', 'B', 0, 'L', false);

				$pdf->Cell(80, 5,"", 0, 1, 'C', false);   //Space
				$pdf->Cell(80, 5,"", 0, 1, 'C', false);   //Space
				$pdf->Cell(90, 10, '[  ]', 'B', 0, 'L', false);
				$pdf->SetX(110);
				$pdf->Cell(90, 10, '[  ]', 'B', 0, 'L', false);

				$pdf->Cell(80, 5,"", 0, 1, 'C', false);   //Space
				$pdf->Cell(80, 5,"", 0, 1, 'C', false);   //Space
				$pdf->Cell(90, 10, '[  ]', 'B', 0, 'L', false);
				$pdf->SetX(110);
				$pdf->Cell(90, 10, '[  ]', 'B', 0, 'L', false);

				$pdf->Cell(80, 5,"", 0, 1, 'C', false);   //Space
				$pdf->Cell(80, 5,"", 0, 1, 'C', false);   //Space
				$pdf->Cell(90, 10, '[  ]', 'B', 0, 'L', false);
				$pdf->SetX(110);
				$pdf->Cell(90, 10, '[  ]', 'B', 0, 'L', false);

				$pdf->Cell(80, 5,"", 0, 1, 'C', false);   //Space
				$pdf->Cell(80, 5,"", 0, 1, 'C', false);   //Space
				$pdf->Cell(90, 10, '[  ]', 'B', 0, 'L', false);
				$pdf->SetX(110);
				$pdf->Cell(90, 10, '[  ]', 'B', 0, 'L', false);

				$pdf->Cell(80, 5,"", 0, 1, 'C', false);   //Space
				$pdf->Cell(80, 5,"", 0, 1, 'C', false);   //Space
				$pdf->Cell(90, 10, '[  ]', 'B', 0, 'L', false);
				$pdf->SetX(110);
				$pdf->Cell(90, 10, '[  ]', 'B', 0, 'L', false);

				$pdf->Cell(80, 5,"", 0, 1, 'C', false);   //Space
				$pdf->Cell(80, 5,"", 0, 1, 'C', false);   //Space
				$pdf->Cell(90, 10, '[  ]', 'B', 0, 'L', false);
				$pdf->SetX(110);
				$pdf->Cell(90, 10, '[  ]', 'B', 1, 'L', false);


				$pdf->Cell(80, 5,"", 0, 1, 'C', false);   //Space
				//$pdf->Cell(80, 5,"", 0, 1, 'C', false);   //Space
				$pdf->Cell(80, 5,"", 0, 1, 'C', false);   //Space
				$pdf->Cell(0, 10, '  NOTE: ', 'T'.'L'.'R', 1, 'L', false);
				$pdf->Cell(0, 40, '', 'B'.'L'.'R', 0, 'L', false);
			}



			//Page size Legal and Orientation Portrait
			if ($size ==='Legal') {
				$pdf->AddPage('P', $size);
				$pdf->SetFont('Arial', 'B', 14);
				

				$pdf->SetFontSize(20);
				$pdf->Cell(0, 10, 'TO DO LIST', 1, 0, 'L', false);
				$pdf->Cell(0, 10, 'Date:__/__/____', 'T', 1, 'R', false);

				$pdf->Cell(80, 5,"", 0, 1, 'C', false);   //Space
				$pdf->Cell(80, 5,"", 0, 1, 'C', false);   //Space
				$pdf->Cell(80, 5,"", 0, 1, 'C', false);   //Space
				$pdf->Cell(80, 5,"", 0, 1, 'C', false);   //Space


				

				$pdf->SetFontSize(10);
				$pdf->Cell(0, 10, 'PRIORITIES', 'B', 0, 'L', false);

				$pdf->Cell(80, 5,"", 0, 1, 'C', false);   //Space
				$pdf->Cell(80, 5,"", 0, 1, 'C', false);   //Space
				$pdf->Cell(90, 10, '[  ]', 'B', 0, 'L', false);
				$pdf->SetX(110);
				$pdf->Cell(90, 10, '[  ]', 'B', 0, 'L', false);

				$pdf->Cell(80, 5,"", 0, 1, 'C', false);   //Space
				$pdf->Cell(80, 5,"", 0, 1, 'C', false);   //Space
				$pdf->Cell(90, 10, '[  ]', 'B', 0, 'L', false);
				$pdf->SetX(110);
				$pdf->Cell(90, 10, '[  ]', 'B', 0, 'L', false);

				$pdf->Cell(80, 5,"", 0, 1, 'C', false);   //Space
				$pdf->Cell(80, 5,"", 0, 1, 'C', false);   //Space
				$pdf->Cell(90, 10, '[  ]', 'B', 0, 'L', false);
				$pdf->SetX(110);
				$pdf->Cell(90, 10, '[  ]', 'B', 1, 'L', false);

				//$pdf->Cell(80, 5,"", 0, 1, 'C', false);   //Space
				//$pdf->Cell(80, 5,"", 0, 1, 'C', false);   //Space
				$pdf->Cell(90, 10, '[  ]', 'B', 0, 'L', false);
				$pdf->SetX(110);
				$pdf->Cell(90, 10, '[  ]', 'B', 1, 'L', false);


				$pdf->Cell(80, 5,"", 0, 1, 'C', false);   //Space
				$pdf->Cell(80, 5,"", 0, 1, 'C', false);   //Space
				$pdf->Cell(80, 5,"", 0, 1, 'C', false);   //Space

				$pdf->SetFontSize(10);
				$pdf->Cell(0, 10, 'TO DO LIST', 'B', 0, 'L', false);

				$pdf->Cell(80, 5,"", 0, 1, 'C', false);   //Space
				$pdf->Cell(80, 5,"", 0, 1, 'C', false);   //Space
				$pdf->Cell(90, 10, '[  ]', 'B', 0, 'L', false);
				$pdf->SetX(110);
				$pdf->Cell(90, 10, '[  ]', 'B', 0, 'L', false);

				$pdf->Cell(80, 5,"", 0, 1, 'C', false);   //Space
				$pdf->Cell(80, 5,"", 0, 1, 'C', false);   //Space
				$pdf->Cell(90, 10, '[  ]', 'B', 0, 'L', false);
				$pdf->SetX(110);
				$pdf->Cell(90, 10, '[  ]', 'B', 0, 'L', false);

				$pdf->Cell(80, 5,"", 0, 1, 'C', false);   //Space
				$pdf->Cell(80, 5,"", 0, 1, 'C', false);   //Space
				$pdf->Cell(90, 10, '[  ]', 'B', 0, 'L', false);
				$pdf->SetX(110);
				$pdf->Cell(90, 10, '[  ]', 'B', 0, 'L', false);

				$pdf->Cell(80, 5,"", 0, 1, 'C', false);   //Space
				$pdf->Cell(80, 5,"", 0, 1, 'C', false);   //Space
				$pdf->Cell(90, 10, '[  ]', 'B', 0, 'L', false);
				$pdf->SetX(110);
				$pdf->Cell(90, 10, '[  ]', 'B', 0, 'L', false);

				$pdf->Cell(80, 5,"", 0, 1, 'C', false);   //Space
				$pdf->Cell(80, 5,"", 0, 1, 'C', false);   //Space
				$pdf->Cell(90, 10, '[  ]', 'B', 0, 'L', false);
				$pdf->SetX(110);
				$pdf->Cell(90, 10, '[  ]', 'B', 0, 'L', false);

				$pdf->Cell(80, 5,"", 0, 1, 'C', false);   //Space
				$pdf->Cell(80, 5,"", 0, 1, 'C', false);   //Space
				$pdf->Cell(90, 10, '[  ]', 'B', 0, 'L', false);
				$pdf->SetX(110);
				$pdf->Cell(90, 10, '[  ]', 'B', 0, 'L', false);

				$pdf->Cell(80, 5,"", 0, 1, 'C', false);   //Space
				$pdf->Cell(80, 5,"", 0, 1, 'C', false);   //Space
				$pdf->Cell(90, 10, '[  ]', 'B', 0, 'L', false);
				$pdf->SetX(110);
				$pdf->Cell(90, 10, '[  ]', 'B', 0, 'L', false);

				$pdf->Cell(80, 5,"", 0, 1, 'C', false);   //Space
				$pdf->Cell(80, 5,"", 0, 1, 'C', false);   //Space
				$pdf->Cell(90, 10, '[  ]', 'B', 0, 'L', false);
				$pdf->SetX(110);
				$pdf->Cell(90, 10, '[  ]', 'B', 0, 'L', false);

				$pdf->Cell(80, 5,"", 0, 1, 'C', false);   //Space
				$pdf->Cell(80, 5,"", 0, 1, 'C', false);   //Space
				$pdf->Cell(90, 10, '[  ]', 'B', 0, 'L', false);
				$pdf->SetX(110);
				$pdf->Cell(90, 10, '[  ]', 'B', 0, 'L', false);

				$pdf->Cell(80, 5,"", 0, 1, 'C', false);   //Space
				$pdf->Cell(80, 5,"", 0, 1, 'C', false);   //Space
				$pdf->Cell(90, 10, '[  ]', 'B', 0, 'L', false);
				$pdf->SetX(110);
				$pdf->Cell(90, 10, '[  ]', 'B', 0, 'L', false);

				$pdf->Cell(80, 5,"", 0, 1, 'C', false);   //Space
				$pdf->Cell(80, 5,"", 0, 1, 'C', false);   //Space
				$pdf->Cell(90, 10, '[  ]', 'B', 0, 'L', false);
				$pdf->SetX(110);
				$pdf->Cell(90, 10, '[  ]', 'B', 0, 'L', false);

				$pdf->Cell(80, 5,"", 0, 1, 'C', false);   //Space
				$pdf->Cell(80, 5,"", 0, 1, 'C', false);   //Space
				$pdf->Cell(90, 10, '[  ]', 'B', 0, 'L', false);
				$pdf->SetX(110);
				$pdf->Cell(90, 10, '[  ]', 'B', 0, 'L', false);

				$pdf->Cell(80, 5,"", 0, 1, 'C', false);   //Space
				$pdf->Cell(80, 5,"", 0, 1, 'C', false);   //Space
				$pdf->Cell(90, 10, '[  ]', 'B', 0, 'L', false);
				$pdf->SetX(110);
				$pdf->Cell(90, 10, '[  ]', 'B', 1, 'L', false);


				$pdf->Cell(80, 5,"", 0, 1, 'C', false);   //Space
				$pdf->Cell(80, 5,"", 0, 1, 'C', false);   //Space
				$pdf->Cell(80, 5,"", 0, 1, 'C', false);   //Space
				$pdf->Cell(80, 5,"", 0, 1, 'C', false);   //Space
				$pdf->Cell(0, 10, '  NOTE: ', 'T'.'L'.'R', 1, 'L', false);
				$pdf->Cell(0, 60, '', 'B'.'L'.'R', 0, 'L', false);
			}
			

		}
		$pdf->Output('I',$name.'.pdf');
	}
	







?>