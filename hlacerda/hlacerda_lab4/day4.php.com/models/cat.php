<?php

class Cat{

public $name;
public $age;
private $catId;

	public function setCatId($givenID){
		$this->$catId = $givenID;
	}
	
	public function getCatId($givenID){
		return $givenID;
	}
	
	public static function getCatYears($peopleYears){
		return $peopleYears * 7;
	}

}

?>