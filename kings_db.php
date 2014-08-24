<?php

class King {
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

$day_kings = [];
$i = 0;
$day_kings[] = new King($i++, "Mosquito", "Kill the mosquito king.", 1000);
$day_kings[] = new King($i++, "Dog", "Kill that annoying barking dog king.", 5000);


$i = 0;
$night_kings = [];
$night_kings[] = new King($i++, "Hunt dragons", "Kill some dragons to greatly raise your experience.", 3000);
$night_kings[] = new King($i++, "Dragon", "Who does not want the head of the dragon king?", 100000);

