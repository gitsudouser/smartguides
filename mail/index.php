<?php
	header('Content-Type: application/json');
	
	if(isset($_REQUEST["folder"])){
		$data = file_get_contents($_REQUEST["folder"].".json");
		echo $data;	
	}
	
	if(isset($_REQUEST["mailId"])){
		$data = @file_get_contents("mail".$_REQUEST["mailId"].".json");
		if($data==FALSE)
			$data = file_get_contents("mail2.json");
		echo $data;	
	}
?>