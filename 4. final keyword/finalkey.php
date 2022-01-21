<?php

final class A{
    final public function test(){
        echo "Class A sử dụng Final keyword.</br>";
    }
}
class B extends A{       //không thể kế thừa final class, function
    public function test(){
        echo "Class A sử dụng Final keyword.</br>";
    }
}