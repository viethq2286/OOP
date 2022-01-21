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
    public function accelerate($value){
        $this->speed += $value;
        echo "Override MotoBike speed is ".$this->speed."</br>";
    }
    public function brake(){
        $speed = 0;
        echo "Override MotoBike is stoped.";
    }
}
$motobikeObj = new MotoBike();
$motobikeObj->accelerate(50);
$motobikeObj->brake();

