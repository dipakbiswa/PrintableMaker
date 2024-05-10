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
		$difficulty = $_POST['difficulty'];
		$problem = $_POST['problem'];
		for ($i=0; $i < $number; $i++) { 
			

			//Page size A4 and Orientation Portrait
			if ($size==='A4') {
				$pdf->AddPage('P', $size);
				$pdf->SetFont('Arial', 'B', 14);

				//Easy Mode
				if ($difficulty === 'Easy') {

					//Easy Mode / Addition
					if ($problem === '+') {

						$pdf->Cell(0, 10, 'Addition', 1, 0, 'L', false);
						$pdf->Cell(0, 10, 'Page No: '.$i+1, 'T', 1, 'R', false);


						$pdf->Cell(80, 5,"", 0, 1, 'C', false);   //Space
						$pdf->Cell(80, 5,"", 0, 1, 'C', false);   //Space

						$pdf->SetFontSize(35);

						$pdf->Cell(0, 10, rand(1, 50).' + '.rand(1, 50).' =', 0, 0, 'L', false);
						$pdf->Cell(0, 10, rand(1, 50).' + '.rand(1, 50).' =          ', 0, 1, 'R', false);

						$pdf->Cell(80, 5,"", 0, 1, 'C', false);   //Space
						$pdf->Cell(80, 5,"", 0, 1, 'C', false);   //Space

						$pdf->Cell(0, 10, rand(1, 50).' + '.rand(1, 50).' =', 0, 0, 'L', false);
						$pdf->Cell(0, 10, rand(1, 50).' + '.rand(1, 50).' =          ', 0, 1, 'R', false);

						$pdf->Cell(80, 5,"", 0, 1, 'C', false);   //Space
						$pdf->Cell(80, 5,"", 0, 1, 'C', false);   //Space

						$pdf->Cell(0, 10, rand(1, 50).' + '.rand(1, 50).' =', 0, 0, 'L', false);
						$pdf->Cell(0, 10, rand(1, 50).' + '.rand(1, 50).' =          ', 0, 1, 'R', false);

						$pdf->Cell(80, 5,"", 0, 1, 'C', false);   //Space
						$pdf->Cell(80, 5,"", 0, 1, 'C', false);   //Space

						$pdf->Cell(0, 10, rand(1, 50).' + '.rand(1, 50).' =', 0, 0, 'L', false);
						$pdf->Cell(0, 10, rand(1, 50).' + '.rand(1, 50).' =          ', 0, 1, 'R', false);

						$pdf->Cell(80, 5,"", 0, 1, 'C', false);   //Space
						$pdf->Cell(80, 5,"", 0, 1, 'C', false);   //Space

						$pdf->Cell(0, 10, rand(1, 50).' + '.rand(1, 50).' =', 0, 0, 'L', false);
						$pdf->Cell(0, 10, rand(1, 50).' + '.rand(1, 50).' =          ', 0, 1, 'R', false);

						$pdf->Cell(80, 5,"", 0, 1, 'C', false);   //Space
						$pdf->Cell(80, 5,"", 0, 1, 'C', false);   //Space

						$pdf->Cell(0, 10, rand(1, 50).' + '.rand(1, 50).' =', 0, 0, 'L', false);
						$pdf->Cell(0, 10, rand(1, 50).' + '.rand(1, 50).' =          ', 0, 1, 'R', false);

						$pdf->Cell(80, 5,"", 0, 1, 'C', false);   //Space
						$pdf->Cell(80, 5,"", 0, 1, 'C', false);   //Space

						$pdf->Cell(0, 10, rand(1, 50).' + '.rand(1, 50).' =', 0, 0, 'L', false);
						$pdf->Cell(0, 10, rand(1, 50).' + '.rand(1, 50).' =          ', 0, 1, 'R', false);

						$pdf->Cell(80, 5,"", 0, 1, 'C', false);   //Space
						$pdf->Cell(80, 5,"", 0, 1, 'C', false);   //Space

						$pdf->Cell(0, 10, rand(1, 50).' + '.rand(1, 50).' =', 0, 0, 'L', false);
						$pdf->Cell(0, 10, rand(1, 50).' + '.rand(1, 50).' =          ', 0, 1, 'R', false);

						$pdf->Cell(80, 5,"", 0, 1, 'C', false);   //Space
						$pdf->Cell(80, 5,"", 0, 1, 'C', false);   //Space

						$pdf->Cell(0, 10, rand(1, 50).' + '.rand(1, 50).' =', 0, 0, 'L', false);
						$pdf->Cell(0, 10, rand(1, 50).' + '.rand(1, 50).' =          ', 0, 1, 'R', false);

						$pdf->Cell(80, 5,"", 0, 1, 'C', false);   //Space
						$pdf->Cell(80, 5,"", 0, 1, 'C', false);   //Space

						$pdf->Cell(0, 10, rand(1, 50).' + '.rand(1, 50).' =', 0, 0, 'L', false);
						$pdf->Cell(0, 10, rand(1, 50).' + '.rand(1, 50).' =          ', 0, 1, 'R', false);

						$pdf->Cell(80, 5,"", 0, 1, 'C', false);   //Space
						$pdf->Cell(80, 5,"", 0, 1, 'C', false);   //Space

						$pdf->Cell(0, 10, rand(1, 50).' + '.rand(1, 50).' =', 0, 0, 'L', false);
						$pdf->Cell(0, 10, rand(1, 50).' + '.rand(1, 50).' =          ', 0, 1, 'R', false);

						$pdf->Cell(80, 5,"", 0, 1, 'C', false);   //Space
						$pdf->Cell(80, 5,"", 0, 1, 'C', false);   //Space

						$pdf->Cell(0, 10, rand(1, 50).' + '.rand(1, 50).' =', 0, 0, 'L', false);
						$pdf->Cell(0, 10, rand(1, 50).' + '.rand(1, 50).' =          ', 0, 1, 'R', false);


					}

					//Easy Mode / Subtraction
					if ($problem === '-') {

						$pdf->Cell(0, 10, 'Subtraction', 1, 0, 'L', false);
						$pdf->Cell(0, 10, 'Page No: '.$i+1, 'T', 1, 'R', false);


						$pdf->Cell(80, 5,"", 0, 1, 'C', false);   //Space
						$pdf->Cell(80, 5,"", 0, 1, 'C', false);   //Space

						$pdf->SetFontSize(35);

						$pdf->Cell(0, 10, rand(25, 50).' - '.rand(1, 24).' =', 0, 0, 'L', false);
						$pdf->Cell(0, 10, rand(25, 50).' - '.rand(1, 24).' =          ', 0, 1, 'R', false);

						$pdf->Cell(80, 5,"", 0, 1, 'C', false);   //Space
						$pdf->Cell(80, 5,"", 0, 1, 'C', false);   //Space

						$pdf->Cell(0, 10, rand(25, 50).' - '.rand(1, 24).' =', 0, 0, 'L', false);
						$pdf->Cell(0, 10, rand(25, 50).' - '.rand(1, 24).' =          ', 0, 1, 'R', false);

						$pdf->Cell(80, 5,"", 0, 1, 'C', false);   //Space
						$pdf->Cell(80, 5,"", 0, 1, 'C', false);   //Space

						$pdf->Cell(0, 10, rand(25, 50).' - '.rand(1, 24).' =', 0, 0, 'L', false);
						$pdf->Cell(0, 10, rand(25, 50).' - '.rand(1, 24).' =          ', 0, 1, 'R', false);

						$pdf->Cell(80, 5,"", 0, 1, 'C', false);   //Space
						$pdf->Cell(80, 5,"", 0, 1, 'C', false);   //Space

						$pdf->Cell(0, 10, rand(25, 50).' - '.rand(1, 24).' =', 0, 0, 'L', false);
						$pdf->Cell(0, 10, rand(25, 50).' - '.rand(1, 24).' =          ', 0, 1, 'R', false);

						$pdf->Cell(80, 5,"", 0, 1, 'C', false);   //Space
						$pdf->Cell(80, 5,"", 0, 1, 'C', false);   //Space

						$pdf->Cell(0, 10, rand(25, 50).' - '.rand(1, 24).' =', 0, 0, 'L', false);
						$pdf->Cell(0, 10, rand(25, 50).' - '.rand(1, 24).' =          ', 0, 1, 'R', false);

						$pdf->Cell(80, 5,"", 0, 1, 'C', false);   //Space
						$pdf->Cell(80, 5,"", 0, 1, 'C', false);   //Space

						$pdf->Cell(0, 10, rand(25, 50).' - '.rand(1, 24).' =', 0, 0, 'L', false);
						$pdf->Cell(0, 10, rand(25, 50).' - '.rand(1, 24).' =          ', 0, 1, 'R', false);

						$pdf->Cell(80, 5,"", 0, 1, 'C', false);   //Space
						$pdf->Cell(80, 5,"", 0, 1, 'C', false);   //Space

						$pdf->Cell(0, 10, rand(25, 50).' - '.rand(1, 24).' =', 0, 0, 'L', false);
						$pdf->Cell(0, 10, rand(25, 50).' - '.rand(1, 24).' =          ', 0, 1, 'R', false);

						$pdf->Cell(80, 5,"", 0, 1, 'C', false);   //Space
						$pdf->Cell(80, 5,"", 0, 1, 'C', false);   //Space

						$pdf->Cell(0, 10, rand(25, 50).' - '.rand(1, 24).' =', 0, 0, 'L', false);
						$pdf->Cell(0, 10, rand(25, 50).' - '.rand(1, 24).' =          ', 0, 1, 'R', false);

						$pdf->Cell(80, 5,"", 0, 1, 'C', false);   //Space
						$pdf->Cell(80, 5,"", 0, 1, 'C', false);   //Space

						$pdf->Cell(0, 10, rand(25, 50).' - '.rand(1, 24).' =', 0, 0, 'L', false);
						$pdf->Cell(0, 10, rand(25, 50).' - '.rand(1, 24).' =          ', 0, 1, 'R', false);

						$pdf->Cell(80, 5,"", 0, 1, 'C', false);   //Space
						$pdf->Cell(80, 5,"", 0, 1, 'C', false);   //Space

						$pdf->Cell(0, 10, rand(25, 50).' - '.rand(1, 24).' =', 0, 0, 'L', false);
						$pdf->Cell(0, 10, rand(25, 50).' - '.rand(1, 24).' =          ', 0, 1, 'R', false);

						$pdf->Cell(80, 5,"", 0, 1, 'C', false);   //Space
						$pdf->Cell(80, 5,"", 0, 1, 'C', false);   //Space

						$pdf->Cell(0, 10, rand(25, 50).' - '.rand(1, 24).' =', 0, 0, 'L', false);
						$pdf->Cell(0, 10, rand(25, 50).' - '.rand(1, 24).' =          ', 0, 1, 'R', false);

						$pdf->Cell(80, 5,"", 0, 1, 'C', false);   //Space
						$pdf->Cell(80, 5,"", 0, 1, 'C', false);   //Space

						$pdf->Cell(0, 10, rand(25, 50).' - '.rand(1, 24).' =', 0, 0, 'L', false);
						$pdf->Cell(0, 10, rand(25, 50).' - '.rand(1, 24).' =          ', 0, 1, 'R', false);


					}

					//Easy Mode / Multiplication
					if ($problem === '*') {

						$pdf->Cell(0, 10, 'Multiplication', 1, 0, 'L', false);
						$pdf->Cell(0, 10, 'Page No: '.$i+1, 'T', 1, 'R', false);


						$pdf->Cell(80, 5,"", 0, 1, 'C', false);   //Space
						$pdf->Cell(80, 5,"", 0, 1, 'C', false);   //Space

						$pdf->SetFontSize(35);

						$pdf->Cell(0, 10, rand(1, 30).' * '.rand(1, 9).' =', 0, 0, 'L', false);
						$pdf->Cell(0, 10, rand(1, 30).' * '.rand(1, 9).' =          ', 0, 1, 'R', false);

						$pdf->Cell(80, 5,"", 0, 1, 'C', false);   //Space
						$pdf->Cell(80, 5,"", 0, 1, 'C', false);   //Space

						$pdf->Cell(0, 10, rand(1, 30).' * '.rand(1, 9).' =', 0, 0, 'L', false);
						$pdf->Cell(0, 10, rand(1, 30).' * '.rand(1, 9).' =          ', 0, 1, 'R', false);

						$pdf->Cell(80, 5,"", 0, 1, 'C', false);   //Space
						$pdf->Cell(80, 5,"", 0, 1, 'C', false);   //Space

						$pdf->Cell(0, 10, rand(1, 30).' * '.rand(1, 9).' =', 0, 0, 'L', false);
						$pdf->Cell(0, 10, rand(1, 30).' * '.rand(1, 9).' =          ', 0, 1, 'R', false);

						$pdf->Cell(80, 5,"", 0, 1, 'C', false);   //Space
						$pdf->Cell(80, 5,"", 0, 1, 'C', false);   //Space

						$pdf->Cell(0, 10, rand(1, 30).' * '.rand(1, 9).' =', 0, 0, 'L', false);
						$pdf->Cell(0, 10, rand(1, 30).' * '.rand(1, 9).' =          ', 0, 1, 'R', false);

						$pdf->Cell(80, 5,"", 0, 1, 'C', false);   //Space
						$pdf->Cell(80, 5,"", 0, 1, 'C', false);   //Space

						$pdf->Cell(0, 10, rand(1, 30).' * '.rand(1, 9).' =', 0, 0, 'L', false);
						$pdf->Cell(0, 10, rand(1, 30).' * '.rand(1, 9).' =          ', 0, 1, 'R', false);

						$pdf->Cell(80, 5,"", 0, 1, 'C', false);   //Space
						$pdf->Cell(80, 5,"", 0, 1, 'C', false);   //Space

						$pdf->Cell(0, 10, rand(1, 30).' * '.rand(1, 9).' =', 0, 0, 'L', false);
						$pdf->Cell(0, 10, rand(1, 30).' * '.rand(1, 9).' =          ', 0, 1, 'R', false);

						$pdf->Cell(80, 5,"", 0, 1, 'C', false);   //Space
						$pdf->Cell(80, 5,"", 0, 1, 'C', false);   //Space

						$pdf->Cell(0, 10, rand(1, 30).' * '.rand(1, 9).' =', 0, 0, 'L', false);
						$pdf->Cell(0, 10, rand(1, 30).' * '.rand(1, 9).' =          ', 0, 1, 'R', false);

						$pdf->Cell(80, 5,"", 0, 1, 'C', false);   //Space
						$pdf->Cell(80, 5,"", 0, 1, 'C', false);   //Space

						$pdf->Cell(0, 10, rand(1, 30).' * '.rand(1, 9).' =', 0, 0, 'L', false);
						$pdf->Cell(0, 10, rand(1, 30).' * '.rand(1, 9).' =          ', 0, 1, 'R', false);

						$pdf->Cell(80, 5,"", 0, 1, 'C', false);   //Space
						$pdf->Cell(80, 5,"", 0, 1, 'C', false);   //Space

						$pdf->Cell(0, 10, rand(1, 30).' * '.rand(1, 9).' =', 0, 0, 'L', false);
						$pdf->Cell(0, 10, rand(1, 30).' * '.rand(1, 9).' =          ', 0, 1, 'R', false);

						$pdf->Cell(80, 5,"", 0, 1, 'C', false);   //Space
						$pdf->Cell(80, 5,"", 0, 1, 'C', false);   //Space

						$pdf->Cell(0, 10, rand(1, 30).' * '.rand(1, 9).' =', 0, 0, 'L', false);
						$pdf->Cell(0, 10, rand(1, 30).' * '.rand(1, 9).' =          ', 0, 1, 'R', false);

						$pdf->Cell(80, 5,"", 0, 1, 'C', false);   //Space
						$pdf->Cell(80, 5,"", 0, 1, 'C', false);   //Space

						$pdf->Cell(0, 10, rand(1, 30).' * '.rand(1, 9).' =', 0, 0, 'L', false);
						$pdf->Cell(0, 10, rand(1, 30).' * '.rand(1, 9).' =          ', 0, 1, 'R', false);

						$pdf->Cell(80, 5,"", 0, 1, 'C', false);   //Space
						$pdf->Cell(80, 5,"", 0, 1, 'C', false);   //Space

						$pdf->Cell(0, 10, rand(1, 30).' * '.rand(1, 9).' =', 0, 0, 'L', false);
						$pdf->Cell(0, 10, rand(1, 30).' * '.rand(1, 9).' =          ', 0, 1, 'R', false);


					}

					//Easy Mode / Division
					if ($problem === '/') {

						$pdf->Cell(0, 10, 'Division', 1, 0, 'L', false);
						$pdf->Cell(0, 10, 'Page No: '.$i+1, 'T', 1, 'R', false);


						$pdf->Cell(80, 5,"", 0, 1, 'C', false);   //Space
						$pdf->Cell(80, 5,"", 0, 1, 'C', false);   //Space

						$pdf->SetFontSize(35);

						$pdf->Cell(0, 10, rand(1, 30).' * '.rand(1, 9).' =', 0, 0, 'L', false);
						$pdf->Cell(0, 10, rand(1, 30).' * '.rand(1, 9).' =          ', 0, 1, 'R', false);

						$pdf->Cell(80, 5,"", 0, 1, 'C', false);   //Space
						$pdf->Cell(80, 5,"", 0, 1, 'C', false);   //Space

						$pdf->Cell(0, 10, rand(1, 30).' * '.rand(1, 9).' =', 0, 0, 'L', false);
						$pdf->Cell(0, 10, rand(1, 30).' * '.rand(1, 9).' =          ', 0, 1, 'R', false);

						$pdf->Cell(80, 5,"", 0, 1, 'C', false);   //Space
						$pdf->Cell(80, 5,"", 0, 1, 'C', false);   //Space

						$pdf->Cell(0, 10, rand(1, 30).' * '.rand(1, 9).' =', 0, 0, 'L', false);
						$pdf->Cell(0, 10, rand(1, 30).' * '.rand(1, 9).' =          ', 0, 1, 'R', false);

						$pdf->Cell(80, 5,"", 0, 1, 'C', false);   //Space
						$pdf->Cell(80, 5,"", 0, 1, 'C', false);   //Space

						$pdf->Cell(0, 10, rand(1, 30).' * '.rand(1, 9).' =', 0, 0, 'L', false);
						$pdf->Cell(0, 10, rand(1, 30).' * '.rand(1, 9).' =          ', 0, 1, 'R', false);

						$pdf->Cell(80, 5,"", 0, 1, 'C', false);   //Space
						$pdf->Cell(80, 5,"", 0, 1, 'C', false);   //Space

						$pdf->Cell(0, 10, rand(1, 30).' * '.rand(1, 9).' =', 0, 0, 'L', false);
						$pdf->Cell(0, 10, rand(1, 30).' * '.rand(1, 9).' =          ', 0, 1, 'R', false);

						$pdf->Cell(80, 5,"", 0, 1, 'C', false);   //Space
						$pdf->Cell(80, 5,"", 0, 1, 'C', false);   //Space

						$pdf->Cell(0, 10, rand(1, 30).' * '.rand(1, 9).' =', 0, 0, 'L', false);
						$pdf->Cell(0, 10, rand(1, 30).' * '.rand(1, 9).' =          ', 0, 1, 'R', false);

						$pdf->Cell(80, 5,"", 0, 1, 'C', false);   //Space
						$pdf->Cell(80, 5,"", 0, 1, 'C', false);   //Space

						$pdf->Cell(0, 10, rand(1, 30).' * '.rand(1, 9).' =', 0, 0, 'L', false);
						$pdf->Cell(0, 10, rand(1, 30).' * '.rand(1, 9).' =          ', 0, 1, 'R', false);

						$pdf->Cell(80, 5,"", 0, 1, 'C', false);   //Space
						$pdf->Cell(80, 5,"", 0, 1, 'C', false);   //Space

						$pdf->Cell(0, 10, rand(1, 30).' * '.rand(1, 9).' =', 0, 0, 'L', false);
						$pdf->Cell(0, 10, rand(1, 30).' * '.rand(1, 9).' =          ', 0, 1, 'R', false);

						$pdf->Cell(80, 5,"", 0, 1, 'C', false);   //Space
						$pdf->Cell(80, 5,"", 0, 1, 'C', false);   //Space

						$pdf->Cell(0, 10, rand(1, 30).' * '.rand(1, 9).' =', 0, 0, 'L', false);
						$pdf->Cell(0, 10, rand(1, 30).' * '.rand(1, 9).' =          ', 0, 1, 'R', false);

						$pdf->Cell(80, 5,"", 0, 1, 'C', false);   //Space
						$pdf->Cell(80, 5,"", 0, 1, 'C', false);   //Space

						$pdf->Cell(0, 10, rand(1, 30).' * '.rand(1, 9).' =', 0, 0, 'L', false);
						$pdf->Cell(0, 10, rand(1, 30).' * '.rand(1, 9).' =          ', 0, 1, 'R', false);

						$pdf->Cell(80, 5,"", 0, 1, 'C', false);   //Space
						$pdf->Cell(80, 5,"", 0, 1, 'C', false);   //Space

						$pdf->Cell(0, 10, rand(1, 30).' * '.rand(1, 9).' =', 0, 0, 'L', false);
						$pdf->Cell(0, 10, rand(1, 30).' * '.rand(1, 9).' =          ', 0, 1, 'R', false);

						$pdf->Cell(80, 5,"", 0, 1, 'C', false);   //Space
						$pdf->Cell(80, 5,"", 0, 1, 'C', false);   //Space

						$pdf->Cell(0, 10, rand(1, 30).' * '.rand(1, 9).' =', 0, 0, 'L', false);
						$pdf->Cell(0, 10, rand(1, 30).' * '.rand(1, 9).' =          ', 0, 1, 'R', false);

					}
				}

				
				if ($difficulty === 'Moderate') {

					if ($problem === '+') {

						$pdf->Cell(0, 10, 'Addition', 1, 0, 'L', false);
						$pdf->Cell(0, 10, 'Page No: '.$i+1, 'T', 1, 'R', false);


						$pdf->Cell(80, 5,"", 0, 1, 'C', false);   //Space
						$pdf->Cell(80, 5,"", 0, 1, 'C', false);   //Space

						$pdf->SetFontSize(35);

						$pdf->Cell(0, 10, rand(1, 100).' + '.rand(1, 100).' =', 0, 0, 'L', false);
						$pdf->Cell(0, 10, rand(1, 100).' + '.rand(1, 100).' =          ', 0, 1, 'R', false);

						$pdf->Cell(80, 5,"", 0, 1, 'C', false);   //Space
						$pdf->Cell(80, 5,"", 0, 1, 'C', false);   //Space

						$pdf->Cell(0, 10, rand(1, 100).' + '.rand(1, 100).' =', 0, 0, 'L', false);
						$pdf->Cell(0, 10, rand(1, 100).' + '.rand(1, 100).' =          ', 0, 1, 'R', false);

						$pdf->Cell(80, 5,"", 0, 1, 'C', false);   //Space
						$pdf->Cell(80, 5,"", 0, 1, 'C', false);   //Space

						$pdf->Cell(0, 10, rand(1, 100).' + '.rand(1, 100).' =', 0, 0, 'L', false);
						$pdf->Cell(0, 10, rand(1, 100).' + '.rand(1, 100).' =          ', 0, 1, 'R', false);

						$pdf->Cell(80, 5,"", 0, 1, 'C', false);   //Space
						$pdf->Cell(80, 5,"", 0, 1, 'C', false);   //Space

						$pdf->Cell(0, 10, rand(1, 100).' + '.rand(1, 100).' =', 0, 0, 'L', false);
						$pdf->Cell(0, 10, rand(1, 100).' + '.rand(1, 100).' =          ', 0, 1, 'R', false);

						$pdf->Cell(80, 5,"", 0, 1, 'C', false);   //Space
						$pdf->Cell(80, 5,"", 0, 1, 'C', false);   //Space

						$pdf->Cell(0, 10, rand(1, 100).' + '.rand(1, 100).' =', 0, 0, 'L', false);
						$pdf->Cell(0, 10, rand(1, 100).' + '.rand(1, 100).' =          ', 0, 1, 'R', false);

						$pdf->Cell(80, 5,"", 0, 1, 'C', false);   //Space
						$pdf->Cell(80, 5,"", 0, 1, 'C', false);   //Space

						$pdf->Cell(0, 10, rand(1, 100).' + '.rand(1, 100).' =', 0, 0, 'L', false);
						$pdf->Cell(0, 10, rand(1, 100).' + '.rand(1, 100).' =          ', 0, 1, 'R', false);

						$pdf->Cell(80, 5,"", 0, 1, 'C', false);   //Space
						$pdf->Cell(80, 5,"", 0, 1, 'C', false);   //Space

						$pdf->Cell(0, 10, rand(1, 100).' + '.rand(1, 100).' =', 0, 0, 'L', false);
						$pdf->Cell(0, 10, rand(1, 100).' + '.rand(1, 100).' =          ', 0, 1, 'R', false);

						$pdf->Cell(80, 5,"", 0, 1, 'C', false);   //Space
						$pdf->Cell(80, 5,"", 0, 1, 'C', false);   //Space

						$pdf->Cell(0, 10, rand(1, 100).' + '.rand(1, 100).' =', 0, 0, 'L', false);
						$pdf->Cell(0, 10, rand(1, 100).' + '.rand(1, 100).' =          ', 0, 1, 'R', false);

						$pdf->Cell(80, 5,"", 0, 1, 'C', false);   //Space
						$pdf->Cell(80, 5,"", 0, 1, 'C', false);   //Space

						$pdf->Cell(0, 10, rand(1, 100).' + '.rand(1, 100).' =', 0, 0, 'L', false);
						$pdf->Cell(0, 10, rand(1, 100).' + '.rand(1, 100).' =          ', 0, 1, 'R', false);

						$pdf->Cell(80, 5,"", 0, 1, 'C', false);   //Space
						$pdf->Cell(80, 5,"", 0, 1, 'C', false);   //Space

						$pdf->Cell(0, 10, rand(1, 100).' + '.rand(1, 100).' =', 0, 0, 'L', false);
						$pdf->Cell(0, 10, rand(1, 100).' + '.rand(1, 100).' =          ', 0, 1, 'R', false);

						$pdf->Cell(80, 5,"", 0, 1, 'C', false);   //Space
						$pdf->Cell(80, 5,"", 0, 1, 'C', false);   //Space

						$pdf->Cell(0, 10, rand(1, 100).' + '.rand(1, 100).' =', 0, 0, 'L', false);
						$pdf->Cell(0, 10, rand(1, 100).' + '.rand(1, 100).' =          ', 0, 1, 'R', false);

						$pdf->Cell(80, 5,"", 0, 1, 'C', false);   //Space
						$pdf->Cell(80, 5,"", 0, 1, 'C', false);   //Space

						$pdf->Cell(0, 10, rand(1, 100).' + '.rand(1, 100).' =', 0, 0, 'L', false);
						$pdf->Cell(0, 10, rand(1, 100).' + '.rand(1, 100).' =          ', 0, 1, 'R', false);


					}


					if ($problem === '-') {

						$pdf->Cell(0, 10, 'Addition', 1, 0, 'L', false);
						$pdf->Cell(0, 10, 'Page No: '.$i+1, 'T', 1, 'R', false);


						$pdf->Cell(80, 5,"", 0, 1, 'C', false);   //Space
						$pdf->Cell(80, 5,"", 0, 1, 'C', false);   //Space

						$pdf->SetFontSize(35);

						$pdf->Cell(0, 10, rand(50, 100).' - '.rand(1, 50).' =', 0, 0, 'L', false);
						$pdf->Cell(0, 10, rand(50, 100).' - '.rand(1, 50).' =          ', 0, 1, 'R', false);

						$pdf->Cell(80, 5,"", 0, 1, 'C', false);   //Space
						$pdf->Cell(80, 5,"", 0, 1, 'C', false);   //Space

						$pdf->Cell(0, 10, rand(50, 100).' - '.rand(1, 50).' =', 0, 0, 'L', false);
						$pdf->Cell(0, 10, rand(50, 100).' - '.rand(1, 50).' =          ', 0, 1, 'R', false);

						$pdf->Cell(80, 5,"", 0, 1, 'C', false);   //Space
						$pdf->Cell(80, 5,"", 0, 1, 'C', false);   //Space

						$pdf->Cell(0, 10, rand(50, 100).' - '.rand(1, 50).' =', 0, 0, 'L', false);
						$pdf->Cell(0, 10, rand(50, 100).' - '.rand(1, 50).' =          ', 0, 1, 'R', false);

						$pdf->Cell(80, 5,"", 0, 1, 'C', false);   //Space
						$pdf->Cell(80, 5,"", 0, 1, 'C', false);   //Space

						$pdf->Cell(0, 10, rand(50, 100).' - '.rand(1, 50).' =', 0, 0, 'L', false);
						$pdf->Cell(0, 10, rand(50, 100).' - '.rand(1, 50).' =          ', 0, 1, 'R', false);

						$pdf->Cell(80, 5,"", 0, 1, 'C', false);   //Space
						$pdf->Cell(80, 5,"", 0, 1, 'C', false);   //Space

						$pdf->Cell(0, 10, rand(50, 100).' - '.rand(1, 50).' =', 0, 0, 'L', false);
						$pdf->Cell(0, 10, rand(50, 100).' - '.rand(1, 50).' =          ', 0, 1, 'R', false);

						$pdf->Cell(80, 5,"", 0, 1, 'C', false);   //Space
						$pdf->Cell(80, 5,"", 0, 1, 'C', false);   //Space

						$pdf->Cell(0, 10, rand(50, 100).' - '.rand(1, 50).' =', 0, 0, 'L', false);
						$pdf->Cell(0, 10, rand(50, 100).' - '.rand(1, 50).' =          ', 0, 1, 'R', false);

						$pdf->Cell(80, 5,"", 0, 1, 'C', false);   //Space
						$pdf->Cell(80, 5,"", 0, 1, 'C', false);   //Space

						$pdf->Cell(0, 10, rand(50, 100).' - '.rand(1, 50).' =', 0, 0, 'L', false);
						$pdf->Cell(0, 10, rand(50, 100).' - '.rand(1, 50).' =          ', 0, 1, 'R', false);

						$pdf->Cell(80, 5,"", 0, 1, 'C', false);   //Space
						$pdf->Cell(80, 5,"", 0, 1, 'C', false);   //Space

						$pdf->Cell(0, 10, rand(50, 100).' - '.rand(1, 50).' =', 0, 0, 'L', false);
						$pdf->Cell(0, 10, rand(50, 100).' - '.rand(1, 50).' =          ', 0, 1, 'R', false);

						$pdf->Cell(80, 5,"", 0, 1, 'C', false);   //Space
						$pdf->Cell(80, 5,"", 0, 1, 'C', false);   //Space

						$pdf->Cell(0, 10, rand(50, 100).' - '.rand(1, 50).' =', 0, 0, 'L', false);
						$pdf->Cell(0, 10, rand(50, 100).' - '.rand(1, 50).' =          ', 0, 1, 'R', false);

						$pdf->Cell(80, 5,"", 0, 1, 'C', false);   //Space
						$pdf->Cell(80, 5,"", 0, 1, 'C', false);   //Space

						$pdf->Cell(0, 10, rand(50, 100).' - '.rand(1, 50).' =', 0, 0, 'L', false);
						$pdf->Cell(0, 10, rand(50, 100).' - '.rand(1, 50).' =          ', 0, 1, 'R', false);

						$pdf->Cell(80, 5,"", 0, 1, 'C', false);   //Space
						$pdf->Cell(80, 5,"", 0, 1, 'C', false);   //Space

						$pdf->Cell(0, 10, rand(50, 100).' - '.rand(1, 50).' =', 0, 0, 'L', false);
						$pdf->Cell(0, 10, rand(50, 100).' - '.rand(1, 50).' =          ', 0, 1, 'R', false);

						$pdf->Cell(80, 5,"", 0, 1, 'C', false);   //Space
						$pdf->Cell(80, 5,"", 0, 1, 'C', false);   //Space

						$pdf->Cell(0, 10, rand(50, 100).' - '.rand(1, 50).' =', 0, 0, 'L', false);
						$pdf->Cell(0, 10, rand(50, 100).' - '.rand(1, 50).' =          ', 0, 1, 'R', false);


					}
				}
				

				
			}


			//Page size Letter and Orientation Portrait
			if ($size ==='Letter') {
				$pdf->AddPage('P', $size);
				$pdf->SetFont('Arial', 'B', 14);
				

				
			}



			//Page size Legal and Orientation Portrait
			if ($size ==='Legal') {
				$pdf->AddPage('P', $size);
				$pdf->SetFont('Arial', 'B', 14);
				

				
			}

			

		}
		$pdf->Output('I',$name.'.pdf');
	}
	







?>