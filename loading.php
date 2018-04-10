<?php

session_start();

require_once "conection.php";

if (!isset($_POST['star']) ||  $_POST['star'] === '') {

	$_SESSION['msg'] = "You need rank this meme !";
	header("Location: index.php");
	exit();
	

	

}else{

 	//save on database
	$star = $_POST['star'];

	$rank_result = "INSERT INTO tb_rank (amount,created) VALUES ('$star',NOW())";
	$result = mysqli_query($conn , $rank_result);

	if (!empty($result)) {

	$_SESSION['msgS'] = "Success This meme Was Ranked!";
	header("Location: index.php");
	exit();	
		
	}else{
		$_SESSION['msg'] = "Can't connect with database!";
		header("Location: index.php");
		exit();
	
	}



	}

	 function Nrqtd(){

		$nrtd = "SELECT count(*) FROM tb_rank as nrtd ";

		return $nrtd;
	}

