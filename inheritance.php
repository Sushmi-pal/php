<?php
//Public Access Modifier

//Here all the attributes are public. Hence, no difficulties for accessing the attributes from outside the
//class. ucwords() is a built-in function for capitalizing the first letter of every words. Writing public
//infront of function for public function is optional.
//class Country{
//    public $name;
//    public $famousFor;
//    public function __construct($name,$famousFor){
//        $this->name=$name;
//        $this->famousFor=$famousFor;
//        $r=ucwords($this->name.' is famous for '.$this->famousFor);
//        echo $r.'<br>';
//    }
//    public function message(){
//        echo 'This is message from'.$this->name.'<br>';
//}
//}
//class Nepal extends Country{
//    public function sayHello(){
//        echo 'Hello everyone'.'<br>';
//    }
//}
//$nepal=new Nepal('nepal','its ancient monuments');
//$nepal->sayHello();
//$nepal->message();

echo 'Protected'.'<br>';
//Protected Access Modifier
class C{
    public $name;
    public $famousFor;
    public function __construct($name,$famousFor){
        $this->name=$name;
        $this->famousFor=$famousFor;
        $r=ucwords($this->name.' is famous for '.$this->famousFor);
        echo $r.'<br>';
    }
    protected function message(){
        echo 'This is message from'.$this->name.'<br>';
    }
}
class N extends C{

    public function sayHello(){
        echo 'Hello everyone'.'<br>';

    }
}
$n=new N('nepal','its historical monuments');
$n->sayHello();


?>

