<?php

/**
 * 오버라이딩 :: 부모클래스가 가진 메소드를 자식 클래스에서 기능을 재정의 하거나 기능을 더하는 것..
 * 오버라이딩을 막을려면 final을 붙여라!
 */

class GoogleCar{
    final public function stateOfTheArtAiDrivingSystem(){
        return "구글 AI 드라이빙";
    }
}

class Car extends GoogleCar{
    public $wheels;
    public $doors=4;
    protected $color = 4;
    private $size;
    private $company;

    public function stateOfTheArtAiDrivingSystem(){
        return "기존거에서 업그레이드 버전입니다!~";
    }
}

$ever = new Car;
echo $ever->stateOfTheArtAiDrivingSystem();

?>