<?php
	if($_POST['encoding'] == "windows-1252"){ 
		mb_internal_encoding("windows-1252"); 
	}
	error_reporting(0);
	session_start();
	
	$info = pathinfo($_FILES["file"]["name"]);
	if ("wsrt" == $info['extension']) {
		$temp = preg_replace("/\.(\w+)/", ",$1", file_get_contents($_FILES["file"]["tmp_name"])); //Replace dots
		$temp = preg_replace("/ V:(.*)%/", "", $temp); //Remove V:top T:28% or similar
		$temp = preg_replace("/ A:(.*)%/", "", $temp); //Same but for A:
		$_SESSION['ret'] = preg_replace("/<[^>]*>/", "", $temp); //Remove tags around the text
		if($_POST['encoding'] == "windows-1252"){
			$_SESSION['ret'] = mb_convert_encoding($_SESSION['ret'], "windows-1252", "utf-8");
		}
		$_SESSION['name'] = $info['filename'];
	}
	
?>