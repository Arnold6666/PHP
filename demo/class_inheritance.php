<?php

	class Car{
		
		var $wheels = 4;
		var $hood = 1;
		var $engineer = 1;
		var $doors = 4;

		function MoveWheels(){
			$this->wheels = 10;
		}

		function CreateDoors(){
			$this->doors = 6;
		}

	}


	$bmw = new Car;

	class plane extends Car{
		var $wheels = 20;
	}
	$jet = new plane;
	// $jet->MoveWheels();
	echo $jet->wheels;
	// if(class_exists("plane")){
	// 	echo "i find it";
	// }else{
	// 	"oops";
	// }
?>