<?php

	class Car{
		
		var $wheels = 4;
		var $hood = 1;
		var $engineer = 1;
		var $doors = 4;

		function __construct(){
			echo $this->wheels = 10;
		}

		function CreateDoors(){
			$this->doors = 6;
		}

	}


	$bmw = new Car;
	$volve = new Car;

?>