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

	// if(method_exists("Car","Movewheels")){
	// 	echo "YEAYYYYYYYYYYYY nice";
	// }else{
	// 	echo "no";
	// }
	$bmw = new Car;
	$truck = new Car;
	// $bmw->MoveWheels();
	// $bmw->wheels = 8;
	echo $bmw->wheels . "<br>";
	echo $truck->wheels = 10 . "<br>";
	echo $truck->doors . "<br>";
	$truck->CreateDoors();
	echo $truck->doors . "<br>";

?>