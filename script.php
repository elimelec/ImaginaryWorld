<?php 
	include 'db.php';
	header('Content-Type: application/javascript');
?>

var ImaginaryWorld = {
	player: {
		name: "Player",
		hp: 100,
		xp: 0,
		time: "day",
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
		this.showHideMissions();
	},
	
	showHideMissions: function() {
		switch(this.player.time) {
			case "day":
				$("#night").addClass("hidden");
				$("#day").removeClass("hidden");
				break;
			case "night":
				$("#day").addClass("hidden");
				$("#night").removeClass("hidden");
				break;
		}
	},
	
	changeMode: function() {
		if(this.player.time == "day") {
			this.player.time = "night";
		} else {
			this.player.time = "day";
		}
		this.showHideMissions();
	},
	
	updateVariables: function() {
		$("#name").text(this.player.name);
		$("#hp").text(this.player.hp);
		$("#xp").text(this.player.xp);
		$("#time").text(this.player.time);
	},
	
	missionDone: function(id, time) {
		switch (time) {
		case "day":
			this.player.xp += this.day.missions[id-1].difficulty;
			this.player.hp += 10;
			break;
		case "night":
			this.player.xp += this.night.missions[id-1].difficulty;
			this.player.hp -= 10;
			break;
		}
		this.updateVariables();
	},
	
	save: function() {
		this.setItem("hp", this.player.hp);
		this.setItem("name", this.player.name);
		this.setItem("xp", this.player.xp);
		this.setItem("time", this.player.time);
		this.setItem("saved", true);
	},
	
	load: function() {
		this.player.hp = parseInt(this.getItem("hp"));
		this.player.name = this.getItem("name");
		this.player.xp = parseInt(this.getItem("xp"));
		this.player.time = this.getItem("time");
	},
	
	setItem: function(key, value) {
		localStorage.setItem(key, value);
	},
	
	getItem: function(key) {
		return localStorage.getItem(key);
	},
	
	updateName: function() {
		this.player.name = $("#name").text();
		this.updateVariables();	
	},
	
	day: {
		missions: [
			<?php
			foreach ($day_missions as $mission) {
				print "{id:{$mission->id},title:'{$mission->title}',description:'{$mission->description}',difficulty:{$mission->difficulty}},";		
			}
			?>
		]
	},
	
	night: {
		missions: [
			<?php
			foreach ($night_missions as $mission) {
				print "{id:{$mission->id},title:'{$mission->title}',description:'{$mission->description}',difficulty:{$mission->difficulty}},";		
			}
			?>
		]
	}};
