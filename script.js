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
};
