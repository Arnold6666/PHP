<?php

	class Car{
		
		public $wheels = 4;
		protected $hood = 1;
		private $engine = 1;
		var $doors = 4;

		function showProperty(){
			echo $this->engine;
		}

	}


	$bmw = new Car;
	// echo $bmw->hood;
	echo $bmw->showProperty();
	$semi = new Semi;

	class Semi extends Car{

	}
	// echo $semi->engine;
	// echo $semi->showProperty();

?>