<?php

abstract class Car{
    //자식클래스는 반드시 run메소드를 만들어야한다.
    abstract public function run();

    //아래의 메소드는 abstract가 없으므로 무관함
    public static function hello(){
        return "HI I'm HELLO";
    }
}

class hello extends Car{
    public function run(){
        return "달려달려";
    }

    public function disney(){
        return "I LOVE THAT";
    }
}

$hello = new hello;
echo $hello->disney();


?>