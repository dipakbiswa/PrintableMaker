<?php session_start();
	if (!isset($_SESSION['username'])) {
		header('location: ../login.php');
	}
?>

<?php 
	
	
	include '../fpdf/fpdf.php';

	$pdf = new fpdf();

	$number = $_SESSION['number'];

	if (isset($_POST['recipe'])) {
		for ($i=0; $i < $number; $i++) { 
			$name = $_POST['name'.$i];
			
			
			$ingredients = $_POST['ingredients'.$i];
			$image = $_POST['image'.$i];
			$recipe = $_POST['recipe'.$i];
			
			
			$pdf->AddPage();
			$pdf->SetFont('Arial', 'B', 14);	
			$pdf->Cell(0, 10,$name, 1, 1, 'C', false);
			$pdf->Cell(80, 5,"", 0, 1, 'C', false);

			$pdf->Cell(80, 10,"Ingredients:", 0, 1, 'C', false);
			$pdf->Write(5, $ingredients);
			$pdf->Image($image, 100, 25, 100);

			$pdf->Cell(80, 5,"", 0, 1, 'C', false);

			$pdf->SetY(150);
			$pdf->Cell(80, 10,"Recipe:", 0, 1, 'C', false);
			$pdf->Write(5, $recipe);

		}
		$pdf->Output('I',$_SESSION['name'].'.pdf');
	}
	
		
	


?>