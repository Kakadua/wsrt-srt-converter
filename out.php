<?php

	error_reporting(0);
	session_start();
	
	header('Content-disposition: attachment; filename="' . $_SESSION['name'] . '.srt"');
	header('Content-type: application/octet-stream');
	echo $_SESSION['ret'];
	
?>