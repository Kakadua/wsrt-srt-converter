<html>
	<head>
		<title>wsrt -> srt converter</title>

		<!-- 
			Dropzone is released under the MIT Licence and
			is availiable at http://www.dropzonejs.com/
		-->
		<script src="dropzone/dist/dropzone.js"></script>
		<link rel="stylesheet" href="dropzone/dist/dropzone.css">
		
		<link href='https://fonts.googleapis.com/css?family=Lato' rel='stylesheet' type='text/css'>
		<link rel="stylesheet" href="style.css">
	</head>
	<body>
		<div class="version">v1.1</div>
		<h1>Popeens WSRT -> SRT Converter</h1>
		<div class="text">This is a tool that converts wsrt files into ordinary srt files.<br/> You can read more about it in <a href="http://popeen.com/2016/01/09/converting-wsrt-to-srt/" target="_blank">this post on my blog</a>.</div>
		<form action="gen.php" target="gen" id="dropzone" class="dropzone">
			<div class="dz-message" data-dz-message>
				<span class="bold">Drop your wsrt files here (one at a time)</span>
			</div>
		</form>

		<script type="text/javascript">
			Dropzone.options.dropzone = {
				accept: function(file, done) {
					if (file.name.split(".").slice(-1)[0]  == "wsrt") {
						done();						
					}
					else { 
					   done("Only wsrt files are supported");
					}
				},
				init: function() {
					this.on("complete", function(file) { 
						if (file.name.split(".").slice(-1)[0]  == "wsrt") { 
							document.getElementById('out').src = "out.php";  
						}
					});
				}
			};
		</script>
		
		<div class="os">
			Open Source under the 
			<a href="https://github.com/Kakadua/wsrt-srt-converter/blob/master/LICENSE">MIT License</a>. 
			Get it at <a href="https://github.com/Kakadua/wsrt-srt-converter">GitHub</a>. 
		</div>
		
		<iframe id="out" class="hidden"></iframe>

	</body>
</html>