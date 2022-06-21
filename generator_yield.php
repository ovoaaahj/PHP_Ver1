<?php

function generator(){
    echo "작동 1<br/>"; 
    echo "작동 2<br/>";

    yield "제너레이터 1";

    echo "작동 3<br/>"; 
    echo "작동 4<br/>";

    yield "제너레이터 2";

    echo "작동 5<br/>"; 
    echo "작동 6<br/>";
}

foreach(generator()as $value){
    echo $value."<br/>";
}

function generatorOne() {
 
    echo "제너레이터 1 작동 1 <br>";
    echo "제너레이터 1 작동 2 <br>";

    yield "제너레이터 1 - 1<br>";

    echo "제너레이터 1 작동 3 <br>";
    echo "제너레이터 1 작동 4 <br>";

    yield "제너레이터 2 - 1<br>";

    echo "제너레이터 1 작동 5 <br>";
    echo "제너레이터 1 작동 6 <br>";

    yield from generatorTwo();
}

function generatorTwo() {
    echo "<hr>제너레이터 2 작동 1<br>";
    echo "제너레이터 2 작동 2<br>";

    yield "제너레이터 2 - 1<br>";
    return;
}

foreach(generatorOne() as $go){
    echo $go;
}

?>