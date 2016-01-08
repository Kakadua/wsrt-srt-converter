<?php

	set_time_limit(0);
	error_reporting(0);
	
	$info = pathinfo($_FILES["wsrt"]["name"]);
	if ("wsrt" == $info['extension']) {
		$ret = preg_replace("/\.(\w+)/", ",$1", file_get_contents($_FILES["wsrt"]["tmp_name"]));	
		header("Content-disposition: attachment; filename={$info['filename']}.srt");
		header('Content-type: application/octet-stream');
		echo $ret;
	}
	
?>