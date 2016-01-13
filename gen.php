<?php

	error_reporting(0);
	session_start();
	
	$info = pathinfo($_FILES["file"]["name"]);
	if ("wsrt" == $info['extension']) {
		$temp = preg_replace("/\.(\w+)/", ",$1", file_get_contents($_FILES["file"]["tmp_name"])); //Replace dots
		$temp = preg_replace("/ V:(.*)%/", "", $temp); //Remove V:top T:28% or similar
		$temp = preg_replace("/ A:(.*)%/", "", $temp); //Same but for A:
		$_SESSION['ret'] = preg_replace("/<[^>]*>/", "", $temp); //Remove tags around the text
		$_SESSION['name'] = $info['filename'];
	}
	
?>