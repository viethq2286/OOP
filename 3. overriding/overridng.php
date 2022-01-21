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
        echo $this->namsinh.'<br>';
    }
}

class Student extends Person{
    public function showInfo()
    {
        $this->ten = 'Viet';            //ghi đè dữ liệu class cha
        $this->cmnd = '9876543210';
        $this->namsinh = '2000';
    }
}

$a = new Student();
$a->showInfo();