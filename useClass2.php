<?php

class Car{
    const TRUNK = true;

    public static $hello = "HI~ I'M static 프로퍼티";

    public static function hello(){
        return "안녕 나는 static 메소드";
    }

    public function checkTrunk(){
        return self::TRUNK;
    }
}

$car = new Car;

if($car -> checkTrunk()==true){
    echo "이 차는 트렁크가 있어요";
}else{
    echo "이 차는 트렁크가 없어요";
}

if($car::TRUNK==true){
    echo "이 차는 트렁크가 있어요2";
}else{
    echo "이 차는 트렁크가 없어요2";
}

echo car::$hello;
echo '<hr>';
echo car::hello();

?>