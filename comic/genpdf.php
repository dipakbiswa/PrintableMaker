<?php session_start(); ?>
<?php 
    if (!isset($_SESSION['username'])) {
        header("location: ../login.php");
    }
?>

<?php
	
	include '../fpdf/fpdf.php';

	$pdf = new fpdf();


	//if (isset(_POST['create'])) {
		$layout1 = $_POST['layout1'];
		$layout2 = $_POST['layout2'];
		$layout3 = $_POST['layout3'];
		$layout4 = $_POST['layout4'];
		$layout5 = $_POST['layout5'];	
		$layout6 = $_POST['layout6'];
		$layout7 = $_POST['layout7'];
		$layout8 = $_POST['layout8'];
		$name = $_POST['name'];
	//}
	
	for ($i=0; $i < $layout1; $i++) { 
		$pdf->AddPage('P', 'A4');
		$pdf->Image('1.png', 0, 0, 210, 300);
	}
	for ($i=0; $i < $layout2; $i++) { 
		$pdf->AddPage('P', 'A4');
		$pdf->Image('2.png', 0, 0, 210, 300);
	}
	for ($i=0; $i < $layout3; $i++) { 
		$pdf->AddPage('P', 'A4');
		$pdf->Image('3.png', 0, 0, 210, 300);
	}
	for ($i=0; $i < $layout4; $i++) { 
		$pdf->AddPage('P', 'A4');
		$pdf->Image('4.png', 0, 0, 210, 300);
	}
	for ($i=0; $i < $layout5; $i++) { 
		$pdf->AddPage('P', 'A4');
		$pdf->Image('5.png', 0, 0, 210, 300);
	}
	for ($i=0; $i < $layout6; $i++) { 
		$pdf->AddPage('P', 'A4');
		$pdf->Image('6.png', 0, 0, 210, 300);
	}
	for ($i=0; $i < $layout7; $i++) { 
		$pdf->AddPage('P', 'A4');
		$pdf->Image('7.png', 0, 0, 210, 300);
	}
	for ($i=0; $i < $layout8; $i++) { 
		$pdf->AddPage('P', 'A4');
		$pdf->Image('8.png', 0, 0, 210, 300);
	}

	$pdf->Output('I',$name.'.pdf');




?>