<?php
//First
class Nepal{
    public $city;
    public $zipcode;

    function set_city($city){
        $this->city=$city;
    }
    function set_zipcode($zipcode){
        $this->zipcode=$zipcode;
    }
    function get_city(){
        return $this->city;
    }
    function get_zipcode(){
        return $this->zipcode;
    }
}
$nepal=new Nepal();
$nepal->set_city('Kathmandu');
$nepal->set_zipcode('33748');
echo $nepal->get_city().'<br>';
echo $nepal->get_zipcode();
?>
