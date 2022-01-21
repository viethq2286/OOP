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
class MotoBike extends Bike{

    //
}
$motobikeObj = new MotoBike();
$motobikeObj->accelerate(20);
$motobikeObj->brake();

