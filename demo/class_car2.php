<?php

	class Car{
		
		function MoveWheels(){
			echo "Wheels move";
		}


	}

	if(method_exists("Car","Movewheels")){
		echo "YEAYYYYYYYYYYYY nice";
	}else{
		echo "no";
	}
	$volve = new Car;
?>