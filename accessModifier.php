<?php
class Nepal{
    public $city;
    protected $zipcode;
    private $region;

    function set_zipcode($zip){
        $this->zipcode=$zip;
    }
    function get_zipcode(){
        return $this->zipcode;
    }
    function set_region($region){
        $this->region=$region;
    }
    function get_region(){
        return$this->region;
    }
}
$nepal=new Nepal();

$nepal->city='Kathmandu';
echo $nepal->city.'<br>';
//These two lines will cause an error because
// protected and public attributes cannot be accessed from outside the class
//$nepal->zipcode='33748';
//$nepal->region='central';
//But we can define a method inside the class and change and retrieve those attributes as follows:
$nepal->set_zipcode('33748');
echo $nepal->get_zipcode().'<br>';
$nepal->set_region('central');
echo $nepal->get_region().'<br>';
?>
