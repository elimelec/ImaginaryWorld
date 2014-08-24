<?php 
	include 'kings_dbs.php';
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
			<h3>Howdy, <span id="name" onblur="ImaginaryWorld.updateName()" contenteditable></span></h3>
		</div>
		<div class="stats">
			<h3>HP: <span id="hp"></span></h3>
			<h3>XP: <span id="xp"></span></h3>
			<h3>You play in <span id="time"></span> mode</h3>
			<h3><button onclick="ImaginaryWorld.changeMode()">Change game mode</button></h3>
		</div>
		<div class="missions_area">
			<div id="day">
				<h2>Day Missions</h2>
				<div class="missions_container">
					<? foreach ($day_missions as $mission) { ?>
						<div class="mission">
							<h3><?=$mission->title?></h3>
							<p><?=$mission->description?></p>
							<button onclick="ImaginaryWorld.missionDone(<?=$mission->id?>, 'day')">Do mission</button>
						</div>
					<? } ?>
				</div>
			</div>
			<div id="night">
				<h2>Night Missions</h2>
				<div class="missions_container">
					<? foreach ($night_missions as $mission) { ?>
						<div class="mission">
							<h3><?=$mission->title?></h3>
							<p><?=$mission->description?></p>
							<button onclick="ImaginaryWorld.missionDone(<?=$mission->id?>, 'night')">Do mission</button>
						</div>
					<? } ?>
				</div>
			</div>
		</div>
	</body>
</html>
