<?php

class Person
{
    public $ten;            // sử dụng mọi nơi
    protected $cmnd;        // sử dụng trong class và class con kế thừa
    private $namsinh;       // chỉ sử dụng trong class này

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

$a = new Person();
$a->showInfo();
