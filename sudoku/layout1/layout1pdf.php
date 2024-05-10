
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
		$withAnswer = $_POST['answer'];

		

		//$orientation = $_POST['orientation'];
		for ($i=0; $i < $number; $i++) { 
			
			$sudoku_array = array(
				'https://blogger.googleusercontent.com/img/b/R29vZ2xl/AVvXsEgaex1jJy1JXyDWDHVSkcVvgFiI8Iw4tU2WrlR06JzxsyRCwstU7eVZx1PY0MZrcYUmsdj3h6ei_Fit7BeIH6yBD-e6g6TYNLPg5qKyhKnqKOuM781enb99hUYEIbFUtok_B2M7FROjYO1ag2irOcTRrbldU0Uy_0DQof68iXVtlxlaVwSUY6YmU8SpLg/s320/1.png',

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

			$sudoku_answer = array(
				'bit.ly/1a.png',

				'https://google.com/',
				'https://google.com/',
				'https://google.com/',
				'https://google.com/',
				'https://google.com/',
				'https://google.com/',
				'https://google.com/',
				'https://google.com/',
				'https://google.com/',
				'https://google.com/',
				'https://google.com/',
				'https://google.com/'
			);

			$rand_sudoku = rand(0, count($sudoku_array)-1);

			//Page size A4 and Orientation Portrait
			if ($size==='A4') {
				$pdf->AddPage('P', $size);
				$pdf->SetFont('Arial', 'B', 14);
				
				$pdf->Cell(0, 10, 'Sudoku', 1, 0, 'L', false);
				$pdf->Cell(0, 10, 'No: '.$i+1, 'T', 1, 'R', false);

				//Puzzle image
				$pdf->Image($sudoku_array[$rand_sudoku], 20, 50, 180, 180);

				if ($withAnswer === 'yes') {
					//Answer section
					$pdf->SetX(280);
					$pdf->SetY(260);
					$pdf->Cell(0, 10, 'Answer: '.$sudoku_answer[$rand_sudoku], 1, 0, 'C', false, $sudoku_answer[$rand_sudoku]);
					//$pdf->Write(0, 'Answer', $sudoku_answer[$rand_sudoku]);
				}
				
			}			

		}
		$pdf->Output('I',$name.'.pdf');
	}
	







?>