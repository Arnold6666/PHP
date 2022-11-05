<?php
	$connection = mysqli_connect('localhost','admin','admin','loginapp');
	if(!$connection){
		die("Database connect failed");
	}