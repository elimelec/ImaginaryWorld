<?php 
	include 'db.php';


?>

<!DOCTYPE html>
<html>
	<head>
		<title>Imaginary World</title>
		<link rel="stylesheet" type="text/css" href="theme.css" />
		
		<script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js" async></script>
		<script type="text/javascript" src="script.php" async></script>
		
	</head>

	<body onload="ImaginaryWorld.start()">
		<h1>Imaginary World</h1>
		<h3>An awesome game</h3>
		<h3>
			Welcome back, <span id="name" onblur="ImaginaryWorld.updateName()" contenteditable></span>! 
			You have <span id="hp"></span> hp and <span id="xp"></span> xp.
			You play in <span id="time"></span> mode.
		</h3>
		
		<h2>Day Missions</h2>
			<div id="day">
				<? foreach ($night_missions as $mission) { ?>
					<h4><?=$mission->title?></h4>
					<h5><?=$mission->description?></h5>
					<button onclick="ImaginaryWorld.missionDone(<?=$mission->id?>, 'day')">Do mission</button>
				<? } ?>
			</div>
		<h2>Night Missions</h2>
			<div id="night">
				<? foreach ($night_missions as $mission) { ?>
					<h4><?=$mission->title?></h4>
					<h5><?=$mission->description?></h5>
					<button onclick="ImaginaryWorld.missionDone(<?=$mission->id?>, 'night')">Do mission</button>
				<? } ?>
			</div>
	</body>
</html>
