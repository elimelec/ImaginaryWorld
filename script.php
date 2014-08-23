<?php 
	include 'db.php';
	header('Content-Type: application/javascript');
?>

var ImaginaryWorld = {
	player: {
		name: "Player",
		hp: 100
	},
	
	savingLoop: function() {
		setInterval(function() {
			ImaginaryWorld.save();
		}, 5000);
	},
	
	start: function() {
		if(this.getItem("saved")) {
			this.load();
		}
		this.savingLoop();
		this.updateVariables();
	},
	
	updateVariables: function() {
		$("#name").text(this.player.name);
		$("#hp").text(this.player.hp);
	},
	
	missionDone: function(id, time) {
		switch (time) {
		case "day":
			
			break;
		case "night":
			
			break;

		default:
			break;
		}
		
	},
	
	save: function() {
		this.setItem("hp", this.player.hp);
		this.setItem("name", this.player.name);
		this.setItem("saved", true);
	},
	
	load: function() {
		this.player.hp = parseInt(this.getItem("hp"));
		this.player.name = this.getItem("name");
	},
	
	setItem: function(key, value) {
		localStorage.setItem(key, value);
	},
	
	getItem: function(key) {
		return localStorage.getItem(key);
	},
	
	
	day: {
		missions: [
			<?php
			foreach ($day_missions as $mission) {
				print "{id:{$mission->id},title:'{$mission->title}',description:'{$mission->description}',difficulty:'{$mission->difficulty}'},";		
			}
			?>
		]
	},
	
	night: {
		missions: [
			<?php
			foreach ($night_missions as $mission) {
				print "{id:{$mission->id},title:'{$mission->title}',description:'{$mission->description}',difficulty:'{$mission->difficulty}'},";		
			}
			?>
		]
	}};
