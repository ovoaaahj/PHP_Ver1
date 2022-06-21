<?php
    $score = array(
        'one' =>90,
        'two' => 80,
        'three' =>70,
        'four'=> 98,
        'five'=>79
    );

    echo '------- 정렬 전 -----<br>';

    foreach($score as $key => $value){
        echo $key.'의 점수 는? = '.$value.'<br>' ;
        }



    asort($score);

    echo '------- asort 정렬 후 -----<br>';
    //키를 유지하면서 정렬
    foreach($score as $key => $value){
        echo $key.'의 점수 는? = '.$value.'<br>' ;
        } 

    arsort($score);

    echo '------- arsort 내림차순 정렬 후 -----<br>';
    //키를 유지하면서 내림차순
    foreach($score as $key => $value){
        echo $key.'의 점수 는? = '.$value.'<br>' ;
        }


    ksort($score);

    echo '------- ksort  정렬 후 -----<br>';
    //키를 기준으로 정렬
    foreach($score as $key => $value){
        echo $key.'의 점수 는? = '.$value.'<br>' ;
     }

     krsort($score);

     echo '------- krsort z,y,x 순 정렬 후 -----<br>';
     //키를 기준으로 정렬
     foreach($score as $key => $value){
         echo $key.'의 점수 는? = '.$value.'<br>' ;
      }

    //역순 정렬
    echo '------- 역순 정렬 -----<br>';
    $score = array_reverse($score);
    echo '<pre>';
    var_dump($score);
    echo '</pre>';

    foreach($score as $key => $value){
        echo $key.'의 점수 는? = '.$value.'<br>' ;
    }


   rsort($score);
   //키값 유지 안하고 값만 내림차순 정렬       
    echo '------- rsort 내림차순 정렬 후 -----<br>';

    foreach($score as $key => $value){
        echo $key.'의 점수 는? = '.$value.'<br>' ;
        }



    sort($score);

    echo '------- sort 정렬 후 -----<br>';
  //키값은 유지 안하고 정렬(오름차순) 
    foreach($score as $key => $value){
        echo $key.'의 점수 는? = '.$value.'<br>' ;
    }

   

?>