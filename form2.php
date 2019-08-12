<?php
session_start();
?>
<!DOCTYPE html>

<html lang="en">

<head>

	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<link href="https://fonts.googleapis.com/css?family=Open+Sans&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="Main.css">
	<link rel="stylesheet" href="Acorn.css">

	<title>Thank You <?php print $_POST["name"]; ?> </title>

</head>

<body>
	<div class="container-fluid form_page">
		<div class="container-fluid row form_page_img">
			<img src="Images/Thank_img.jpg" alt="">

		</div>

		<h1 class="display-3">
			Thank you for submiting the form <?php print $_POST["name"]; ?>
			<hr>
		</h1>

		<p>We understand you are looking for a stairlift.</p>
		<p>You will receive an email at:
			<?php 
$_SESSION['email']=$_POST["email"];
print $_SESSION['email']; 
?></p>

		<a class="btn container-fluid" href="Index.php" role="button">Go back home</a>
	</div>


</body>

</html>
