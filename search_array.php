<?php

    $score = array (
        'one' => 88,
        'two' => 89,
        'three' =>97,
        'four' => 45,
        'five' =>23,
        'six' => 54
    );

    /**
     * array_search(찾을값,찾을배열) 
     * 만약 값이 중복된다면 가장 첫번째의 키값을 반환 해준다.
     */
    echo array_search(23,$score);

?>