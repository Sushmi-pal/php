<?php
interface sunflower{
    function forUse();
}
interface wheat{
    function color();
}
class Plant implements sunflower,wheat{
    function forUse()
    {
        echo 'Sunflower for oil and wheat for roti';
    }
    function color()
    {
        echo 'Depends';
    }
}
class sunflowerseed implements sunflower{
    function forUse()
    {
        echo 'Increases immune system';
    }
}
$plant=new Plant();
$seed=new sunflowerseed();
$final=[$plant,$seed];
print_r($final);
