<?php

trait hello{
    public function sayhello(){
        echo 'Hello from hello'.'<br>';
    }
}
trait hi{
    public function sayhello(){
        echo 'Hello from hi'.'<br>';
    }
}
class One{
    use hello,hi{
        hello::sayhello insteadof hi;
        hi::sayhello as newhello;
    }

}
$one=new One();
$one->sayhello();
$one->newhello();