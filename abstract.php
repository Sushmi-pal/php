<?php
abstract class nepal{
    abstract function city();

    function zip(){
        echo 'Zip code';
    }
}
class ktm extends nepal{
    function city(){
        return 'Famous for';
    }
}
$k=new ktm();
echo $k->city();