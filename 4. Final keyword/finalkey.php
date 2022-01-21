<?php

final class A{
    final public function test(){
        echo "Class A 4. Final keyword method.</br>";
    }
}
class B extends A{       //fail
    public function test(){
        echo "Class B 4. Final keyword method.</br>";
    }
}