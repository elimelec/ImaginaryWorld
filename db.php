<?php

class Mission {
	public $id;
	public $title;
	public $description;
	public $difficulty;

	public function __construct($id, $title, $description, $difficulty) {
		$this->id = $id;
		$this->title = $title;
		$this->description = $description;
		$this->difficulty = $difficulty;
	}
}	

$day_missions = [];
$day_missions[] = new Mission(1, "Eat", "Eat somethign to energize yourself.", 2);
$day_missions[] = new Mission(2, "Workout", "Train your muscles.", 1);

$night_missions = [];
$night_missions[] = new Mission(1, "Hunt dragons", "Kill some dragons to raise your experience.", 2);
$night_missions[] = new Mission(2, "Campfire", "Sit by the fire.", 1);