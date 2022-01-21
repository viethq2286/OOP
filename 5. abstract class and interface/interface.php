<?php

interface Person
{

    public function showInfo(); // khai báo function không định nghĩa
}

class Student implements Person
{
    public function showInfo()  //bắt buộc phải định nghĩa lại function interface
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