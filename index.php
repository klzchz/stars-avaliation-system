<?php
session_start();
// require_once("conection.php");
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<title>Avaliation - Star</title>
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.4/css/all.css" integrity="sha384-DmABxgPhJN5jlTwituIyzIUk6oqyzf3+XuP7q3VfcWA2unxgim7OSSZKKf0KSsnh" crossorigin="anonymous">
</head>
	<style type="text/css">

		.stars i{
			margin-left: 5px;

		}
		.stars input[type=radio]{
			display: none;


		}

		.stars label i.fa:before{
			content: '\f005';
			color: #FC0;

		}

		.stars input[type=radio]:checked~label i.fa:before{
			color: #ccc;
		}

	</style>
<body>
	<div style="width: 30%; padding: 5px;">
	<h1 style="color: #130400;">Rank Your Meme</h1>
	<h4  style="color: red; text-align: center; background: #ccc; border-radius: 50px;"><?php 
	if (isset($_SESSION['msg'])) {
		echo $_SESSION['msg'];
	}
	
		unset( $_SESSION['msg']);
	
	  
	 ?>
	 </h4>

	 <h4  style="color: blue; text-align: center; background: #ccc; border-radius: 50px;"><?php 
	if (isset($_SESSION['msgS'])) {
		echo $_SESSION['msgS'];
	}
	
		unset( $_SESSION['msgS']);
	
	  
	 ?>
	 </h4>


	<hr>
	<p style="padding-left: 15px;">hahahah u need se this !</p>
	<img style="width: 400px; height: 300px;" src="img/meme.jpg">	
	<hr>
</div>
<form method="POST" action="loading.php">
	<div class="stars">
		<input type="radio" id="empty" name="star" value="" checked>

		<label for="first_star"><i class="fa fa-star fa-2x"></i></label>
		<input type="radio" id="first_star" name="star" value="1" >

		<label for="star_two"><i class="fa fa-star fa-2x"></i></label>
		<input type="radio" id="star_two" name="star" value="2" >

		<label for="star_three"><i class="fa fa-star fa-2x"></i></label>
		<input type="radio" id="star_three" name="star" value="3" >

		<label for="star_four"><i class="fa fa-star fa-2x"></i></label>
		<input type="radio" id="star_four" name="star" value="4" >
		
		<label for="star_five"><i class="fa fa-star fa-2x"></i></label>
		<input type="radio" id="star_five" name="star" value="5" >
		<br><br>
		<input style="margin-left: 8px; border-radius: 300px;" type="submit" value="Rank">
	</div>
</form>

<?= Nrqtd();?>
</body>
</html>