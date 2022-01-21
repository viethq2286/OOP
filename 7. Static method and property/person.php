<?php

class Person
{

    public static $ten = 'Nam';   //static property

    public static function showInfo()       //static mathod
    {
        echo "<br>Static  method";
    }
}
echo Person::$ten;             //gọi property không cần khởi tạo đối tượng

Person::showInfo();       //gọi method không cần khởi tạo đối tượng

