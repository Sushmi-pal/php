<?php
//Method1
class Base{
    static $name='Sushmita';
    static function hi($name1){
        echo 'Hi'.$name1.'<br>';
    }
}
echo 'Method 1'.'<br>';
$name1=Base::$name;
Base::hi($name1);

class Base1{
    static $name='Sanima';
    static function hello(){
        echo 'Hello'.self::$name.'<br>';
    }
}
echo 'Method 2'.'<br>';
Base1::hello();

class Base3{
    static $name='Sushmita';
    static function sayhi($n){
        echo 'Hi'.$n.'<br>';
    }
}
class Base4 extends Base3{
    function show(){
    $pname=parent::$name;
    echo parent::sayhi($pname);

    }
}
echo 'Method 3';
$b=new Base4();
$b->show();

class Base5{
    static $name='Name';
    function showName(){
        echo 'Hi'.self::$name;
    }
}
echo 'Method 4';
$base5=new Base5();
$base5->showName();