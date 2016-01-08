<html>
	<head>
		<title>wsrt -> srt converter</title>
		<style>
			body{
				background: #eee;
			}
			.os{
				color: #777;
			}
			.os a{
				color: #777;
			}
			.terminal{
				margin-bottom:5px;
				width:700px; 
				height:250px; 
				color: #0F0; 
				background: #000;
			}
			.hidden{
				width:1px; 
				height:1px; 
				display:none;
			}
		</style>
	</head>
	<body>
		<form method="POST" action="gen.php" target="gen" enctype="multipart/form-data">
			<b>wsrt file:</b> <input type="file" name="wsrt" style="width:570px">
			<input type="submit" onClick="document.getElementById('console').innerHTML = 'Converting to srt';" value="Convert">
		</form>
		<textarea name="log" id="console" class="terminal"></textarea>
		<iframe name="gen" class="hidden"></iframe><br/>
		<span class="os">
		Open Source under the 
			<a href="https://github.com/Kakadua/wsrt-srt-converter/blob/master/LICENSE">MIT License</a>. 
			Get it at <a href="https://github.com/Kakadua/wsrt-srt-converter">GitHub</a>.
		</span>
	</body>
</html>