<?php 
	include 'kings_db.php';
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
			<button onclick="ImaginaryWorld.changeMode()">Change game mode</button>
			<a href="index.php"><button>Missions</button></a>
		</div>
		<div class="missions_area">
		<h2>Kings</h2>
			<div id="day">
				<div class="missions_container">
					<? foreach ($day_kings as $king) { ?>
						<div class="mission">
							<h3><?=$king->title?></h3>
							<p><?=$king->description?></p>
							<p>Strength: <?=$king->difficulty?></p>
							<button class="fight_king" onclick="ImaginaryWorld.fightKing(<?=$king->id?>, 'day')">Fight king</button>
						</div>
					<? } ?>
				</div>
			</div>
			<div id="night">
				<div class="missions_container">
					<? foreach ($night_kings as $king) { ?>
						<div class="mission">
							<h3><?=$king->title?></h3>
							<p><?=$king->description?></p>
							<p>Strength: <?=$king->difficulty?></p>
							<button class="fight_king" onclick="ImaginaryWorld.fightKing(<?=$king->id?>, 'night')">Fight king</button>
						</div>
					<? } ?>
				</div>
			</div>
		</div>
	</body>
</html>
