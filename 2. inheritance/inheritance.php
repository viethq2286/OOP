<?php

class Person
{
    public $ten;
    protected $cmnd;
    private $namsinh;

    public function showInfo()
    {
        $this->ten = 'Nam';
        $this->cmnd = '0123456789';
        $this->namsinh = '1996';
        echo $this->ten.'<br>';
        echo $this->cmnd.'<br>';
        echo $this->namsinh;
    }
}
class Student extends Person{
    // kế thừa toàn bộ class cha -- Person
}

$a = new Student();
$a->showInfo();
