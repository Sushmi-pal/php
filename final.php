<?php
//final keyword is used for prevention of method overriding and inheritance as shown below
final class fruit{
    public $name;
    public $color;
}
class Strawberry extends fruit{
    function intro{
        echo "Hello";
    }
}

class fruits{
    public $name;
    public $color;
    final function intro(){
        echo "hello";
    }
}
class Strawberry extends fruits{
    function intro(){
        echo "hi";
    }
}

