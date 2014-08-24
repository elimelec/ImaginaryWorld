<?php 
	include 'missions_db.php';
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
	<body class="day" onload="ImaginaryWorld.start()" onbeforeunload="ImaginaryWorld.save()">
		<div class="header">
			<h1>Imaginary World</h1>
			<h3>Howdy, <span id="name" onblur="ImaginaryWorld.updateName()" contenteditable></span></h3>
		</div>
		<div class="stats">
			<h3>HP: <span id="hp"></span></h3>
			<h3>XP: <span id="xp"></span></h3>
			<h3>You play in <span id="time"></span> mode</h3>
			<button onclick="ImaginaryWorld.changeMode()">Change game mode</button>
			<a href="kings.php"><button>Kings</button></a>
		</div>
		<div class="missions_area">
			<h2>Missions</h2>
			<p>Do missions to gain experience. You can do as many as you like.</p>
			<div id="day">
				<div class="missions_container">
					<? $i = 0; ?>
					<? foreach ($day_missions as $mission) { ?>
						<div class="mission">
							<h3><?=$mission->title?></h3>
							<p><?=$mission->description?></p>
							<p>XP gain: <?=$mission->difficulty?></p>
							<p>You did this mission <span id="m<?=$i++?>day"></span> times
							<button onclick="ImaginaryWorld.missionDone(<?=$mission->id?>, 'day')">Do mission</button>
						</div>
					<? } ?>
				</div>
			</div>
			<div id="night">
				<div class="missions_container">
					<? $i = 0; ?>
					<? foreach ($night_missions as $mission) { ?>
						<div class="mission">
							<h3><?=$mission->title?></h3>
							<p><?=$mission->description?></p>
							<p>XP gain: <?=$mission->difficulty?></p>
							<p>You did this mission <span id="m<?=$i++?>night"></span> times
							<button onclick="ImaginaryWorld.missionDone(<?=$mission->id?>, 'night')">Do mission</button>
						</div>
					<? } ?>
				</div>
			</div>
		</div>
	</body>
</html>
