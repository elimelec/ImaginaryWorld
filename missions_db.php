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
$i = 0;
$day_missions[] = new Mission($i++, "Eat", "Eat something to energize yourself.", 2);
$day_missions[] = new Mission($i++, "Workout", "Train your muscles.", 4);
$day_missions[] = new Mission($i++, "Wash dishes", "You do not have a choice, but to wash them.", 5);
$day_missions[] = new Mission($i++, "Take a nap", "You always have time for a nap.", 1);
$day_missions[] = new Mission($i++, "Make pizza", "If you do not have pizza, you make pizza.", 2);
$day_missions[] = new Mission($i++, "Go shopping", "Go to buy ingredients for pizza.", 3);
$day_missions[] = new Mission($i++, "LudumDare", "Participate in Ludum Dare.", 6);
$day_missions[] = new Mission($i++, "Facebook", "Like some random photos.", 1);


$i = 0;
$night_missions = [];
$night_missions[] = new Mission($i++, "Hunt dragons", "Kill some dragons to greatly raise your experience.", 500);
$night_missions[] = new Mission($i++, "Campfire", "Sit by the fire.", 50);
$night_missions[] = new Mission($i++, "Walk you dog", "Did you ever walked your dog at night? Yes, now", 50);
$night_missions[] = new Mission($i++, "Go fishing", "You never went for fishingat night. You do now.", 20);
$night_missions[] = new Mission($i++, "Gold", "Go find some pure gold.", 100);
