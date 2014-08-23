<?php 
	include 'db.php';


?>

<!DOCTYPE html>
<html>
	<head>
		<meta name="viewport" content="width=device-width">
		
		<title>Imaginary World</title>
		<link rel="stylesheet" type="text/css" href="theme.css" />
		
		<script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js" async></script>
		<script type="text/javascript" src="script.php" async></script>
		
	</head>

	<body class="day" onload="ImaginaryWorld.start()">
		<div class="header">
			<h1>Imaginary World</h1>
			<h3>Howdy, <span id="name" onblur="ImaginaryWorld.updateName()" contenteditable></span>!</h3>
		</div>
		<div>
			<h3>An awesome game</h3>
			<h3>
				You have
				<span id="hp"></span>
				hp and
				<span id="xp"></span>
				xp. You play in
				<span id="time"></span>
				mode.
				<button onclick="ImaginaryWorld.changeMode()">
					Change mode now
				</button>
			</h3>
		</div>

		<div id="day">
			<h2>Day Missions</h2>
			<? foreach ($day_missions as $mission) { ?>
				<h4><?=$mission->title?></h4>
				<h5><?=$mission->description?></h5>
				<button onclick="ImaginaryWorld.missionDone(<?=$mission->id?>, 'day')">Do mission</button>
			<? } ?>
		</div>
		
		<div id="night">
			<h2>Night Missions</h2>
			<? foreach ($night_missions as $mission) { ?>
				<h4><?=$mission->title?></h4>
				<h5><?=$mission->description?></h5>
				<button onclick="ImaginaryWorld.missionDone(<?=$mission->id?>, 'night')">Do mission</button>
			<? } ?>
		</div>
	</body>
</html>
