<?php
class Car{

    public $wheels = 4;
    public $doors =4;
    protected $color;
    private $size;
    private $company;

    //생성자 클래스가 생성되었을때 실행 
    function __construct($company)
    {
        echo "{$company}자동차를 작동시키기 위해 시동을 걸었습니다.";
    }


    //PHP코드가 모두 사용되면 php 소멸자가 작동
    function __destruct()
    {
        echo "<br>자동차의 시동을 끕니다.";
    }

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
}

  $volvo = new Car("볼보가 만든");

?>