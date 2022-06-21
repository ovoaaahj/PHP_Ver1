<?php
    class bumo{
        protected $bumo='부모의 차';
    }

    class jasik extends bumo{
        public function rentCar(){
            if(isset($this->bumo)){
                return $this->bumo."를빌려탑니다.";
            }else{
                return "차를 빌려탈수 없습니다.";
            }
            
        }
    }
    $test = new jasik;
    echo $test->rentCar();

?>