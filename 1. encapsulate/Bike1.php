<?php
class Bike
	 {    
		private $speed;   
		public $color = "Blue";
		
		public function accelerate($value){
			$this->speed += $value;
			echo "Bike speed is ".$this->speed."</br>";
		}
		public function brake(){
			$speed = 0;
			echo "Bike is stoped.";
		}
	}
$bikeObj = new Bike();
$bikeObj->accelerate(20);
$bikeObj->brake();

