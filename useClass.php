<?php


class GoogleCar{
    public function stateOftheArtAIDrivingSystem(){
        return "구글 AI 드라이빙";
    }
}



/**
 * class -> 특정 기능을 모아둘때 class 를 사용한다.
 */

class Car extends GoogleCar{

    public $wheels = 4;
    public $doors =4;
    protected $color;
    private $size;
    private $company;

    public function checkWheelsCount()
    {
        return "이 자동차의 바퀴는 {$this->wheels}개 입니다.";
    }

    public function run()
    {
        return "자동차가 달립니다.";
    }

    protected function stop()
    {
        return "자동차가 멈춥니다.";
    }

    protected function turn()
    {
        return "자동차가 회전합니다.";
    }

}//class


$volvo = new Car;
echo $volvo->doors;
echo $volvo->run();
echo $volvo->stateOftheArtAIDrivingSystem();
echo $volvo->checkWheelsCount();

?>