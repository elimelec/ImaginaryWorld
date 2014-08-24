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
$day_missions[] = new Mission(1, "Eat", "Eat something to energize yourself.", 2);
$day_missions[] = new Mission(2, "Workout", "Train your muscles.", 4);
$day_missions[] = new Mission(3, "Wash dishes", "You do not have a choice, but to wash them.", 5);
$day_missions[] = new Mission(4, "Take a nap", "You always have time for a nap.", 1);

$night_missions = [];
$night_missions[] = new Mission(1, "Hunt dragons", "Kill some dragons to greatly raise your experience.", 100);
$night_missions[] = new Mission(2, "Campfire", "Sit by the fire.", 10);