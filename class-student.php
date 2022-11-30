<?php


class Student{

	public $name;
	public $cellNo;
	public $location;
	public $gender;

	function __construct() {
    	// $this->name = $name;
    	$this->gender = "Male";
  	}


	public function getName(){
      echo $this->name;
	}
};



$aslam = new Student();
$o1 = new Student();
$o2 = new Student();
$o3 = new Student();

// $aslam->getName();
// $o1->getName();
// $o2->getName();
// $o3->getName();

var_dump($o1);
var_dump($o2);
var_dump($o3);


 ?>