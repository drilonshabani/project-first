<html>
	<head>
		<title>Project X</title>
		<link rel="stylesheet" type="text/css" href="css/mystyle.css" /> 
		<script type="text/javascript" src="videos/jquery.min.js"></script>
		<script type="text/javascript" src="videos/projekktor.min.js"></script>
		<link rel="stylesheet" href="videos/theme/maccaco/style.css" type="text/css" media="screen" />
		<link rel="stylesheet" href="videos/theme/style.css" type="text/css" media="screen" />
	</head>
	<body>
		<div id="page">
			<div id="header"></div>
			<div id="content"><center> <video id="player_a" class="projekktor" poster="intro.png" title="this is projekktor" width="640" height="360" controls>
							<source src="videos/media/intro.ogv" type="video/ogv" />
							<source src="videos/media/Ted.mp4" type="video/mp4" />
						</video>


						<script type="text/javascript">
						$(document).ready(function() {
							projekktor('#player_a', {
							volume: 0.8,
							playerFlashMP4: 'videos/media/Ted.mp4',
							playerFlashMP3: 'videos/media/Ted.mp3'
							});
						});
						</script>
</center>
						</div>
			<div id="footer"></div>
		</div>
	</body>
</html>