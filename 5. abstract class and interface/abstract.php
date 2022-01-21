<?php

abstract class Person
{
    public $ten;
    protected $cmnd;
    private $namsinh;

    abstract public function showInfo();
    public function method(){
        // không cần định nghĩa lại
    }
}

class Student extends Person
{
    public function showInfo()  //bắt buộc phải định nghĩa lại function abstract
    {
        $this->ten = 'Nam';
        $this->cmnd = '0123456789';
        $this->namsinh = '1996';
        echo $this->ten . '<br>';
        echo $this->cmnd . '<br>';
        echo $this->namsinh . '<br>';
    }
}

$a = new Student();
$a->showInfo();