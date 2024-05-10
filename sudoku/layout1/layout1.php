<?php session_start();
	if (!isset($_SESSION['username'])) {
		header('location: ../../login.php');
	}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Pdf</title>
	<link rel="stylesheet" href="../../css/pico.min.css">

	<!--<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,300italic,700,700italic">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/milligram/1.4.1/milligram.css">-->

	<style type="text/css">
		.center {
		  margin: auto;
		  width: 50%;
		  padding: 10px;
		}
	</style>
</head>
<body>
	<div class="center">
		<center><h2>Sudoku Generator</h2></center>
		<form action="layout1pdf.php" method="post">
			<label for="number">Number Of Pages</label>
			<input type="number" name="number" required><br><br>

			<label for="size">Page Size</label>
			<select name="size" required>
				<option value="A4">A4</option>
				<!--<option value="A3">A3</option>
				<option value="A5">A5</option>
				<option value="Letter">Letter</option>
				<option value="Legal">Legal</option>-->
			</select><br><br>


			<label for="difficulty">Difficulty</label>
			<select name="difficulty" required>
				<option value="Easy">Easy</option>
				<option value="Moderate">Moderate</option>
				<option value="Hard">Hard</option>
			</select><br><br>

			<label for="answer">With Answer</label>
			<select name="answer" required>
				<option value="yes">Yes</option>
				<option value="no">No</option>
			</select><br><br>


			<label for="bname">Book Name</label>
			<input type="text" name="bname"><br><br>

			<!--<label for="orientation">Page Orientation</label>
			<select name="orientation">
				<option value="Portrait">Portrait</option>
				<option value="Landscape">Landscape</option>
			</select><br><br>-->

			<input type="submit" name="create" value="Create PDF">
		</form>
	</div>
</body>
</html>