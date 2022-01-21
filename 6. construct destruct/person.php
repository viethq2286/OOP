<?php

class Person
{

    public $ten;
    protected $cmnd;
    private $namsinh;

    public function __construct()
    {
        echo "function construct! <br>"; // tự dộng chạy đầu tiên khi khởi tạo đối tượng mà không cần gọi đến hàm
    }

    public function showInfo()
    {
        $this->ten = 'Nam';
        $this->cmnd = '0123456789';
        $this->namsinh = '1996';
        echo $this->ten . '<br>';
        echo $this->cmnd . '<br>';
        echo $this->namsinh . '<br>';
    }
    public function __destruct()
    {
        echo "function destruct!"; // tự dộng chạy cuối cùng khi khởi tạo đối tượng mà không cần gọi đến hàm
    }
}
$a = new Person();