<?php
class abc{
    const intro='Hello';
}
echo abc::intro;

class next{
    const intro="Hello hello hello";
    function inside(){
        echo $this::intro;
    }
}
$n=new next();
$n->inside();