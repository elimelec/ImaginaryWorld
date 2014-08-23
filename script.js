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
		this.updateMissions();
	},
	
	updateVariables: function() {
		$("#name").text(this.player.name);
		$("#hp").text(this.player.hp);
	},
	
	updateMissions: function() {
		$day = $("#day");
		$night = $("#night");
		$day.html("");
		$night.html("");
		
		$.each(this.day.missions, function(i, mission) {
			var string = "<h4>"+mission.title+"</h4>";
			string += "<h5>"+mission.description+"</h5>";
			string += "<button onclick=\"ImaginaryWorld.missionDone(\'" + mission.id + "\')\">Do mission</button>";
			$day.html($day.html() + string);
		});
		
		$.each(this.night.missions, function(i, mission) {
			var string = "<h4>"+mission.title+"</h4>";
			string += "<h5>"+mission.description+"</h5>";
			string += "<button onclick=\"ImaginaryWorld.missionDone(\'" + mission.id + "\')\">Do mission</button>";
			$night.html($night.html() + string);
		});
		
	},
	
	missionDone: function(id) {
		
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
			{id: 1, title: "Eat", description: "Eat somethign to energize yourself.", difficulty: 2},
			{id: 2, title: "Workout", description: "Train your muscles.", difficulty: 1}
		]
	},
	
	night: {
		missions: [
			{id: 1, title: "Kill dragons", description: "Kill some dragons to raise your experience.", difficulty: 2},
			{id: 2, title: "Make campfire", description: "Sit by the fire.", difficulty: 1}
		]
	}};
