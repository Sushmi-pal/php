<?php
class Nepal{
    public $city;

    function __construct($city){
        $this->city=$city;
    }
    function get_city(){
        return $this->city;
    }
    function __destruct(){
        echo "Destructor is called automatically at the end";
    }
}
$nepal=new Nepal('Pokhara');
echo $nepal->get_city().'<br>';
