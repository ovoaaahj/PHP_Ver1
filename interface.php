<?php

    interface parentinter{
        public function auto();
    }

    interface howto extends parentinter {
        public function run();
        public function stop();
        public function turn();
    }

    class Car implements howto{

        public function run(){
            return "달립니다.";
        }

        public function stop(){
            return "멈춥니다";
        }

        public function turn(){
            return "회전합니다";
        }

        public function auto(){
            return "자동식입니다.";
        }
    }

    $car = new Car;

    echo $car->auto();

?>