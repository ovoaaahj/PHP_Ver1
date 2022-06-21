<?php

/**
 * 세자리 마다 기호를 표시하는 함수 
 * number_format(실수,표시할 소수점 자리수,소수점 자리 문자,천 단위 표시 문자)
 */

$num = 4567896213.989;
 
echo "대상 수는 $num 입니다.<br />";
echo "1. 세 자리마다 콤마 표시 : ".number_format($num) . "<br />";
echo "2. 세 자리마다 콤마 표시와 소수점 표시 :" .number_format($num,"2",".",","). "<br />";
echo "4. 세 자리마다 @표시와 소수점 표시 #기호 :".number_format($num,"2","#","@");


/**
 * 세자리 마다 기호를 표시하는 함수 
 * 소수점 올림 함수 : ceil()
 * 소수점 자리를 제거 : floor()
 * 소수점 자리 지정 : round()
 */
    $a = 1298.13543;
    echo "<br/>소수점 자리 올림,버림,반올림<br/>";
    echo "1.무조건올림 :::::".ceil($a)."<br/>";
    echo "2.무조건버림 :::::".floor($a)."<br/>";
    echo "3.소수 3자리미만 반올림 :::::".round($a)."<br/>";

/**
 * 정수의 랜덤값 산출 함수
 * rand() , rand(최소값, 최대값)
 * mt_rand() , mt_rand(최소값, 최대값)
 */    

echo "랜덤함수 <br />"; 

$a = rand();
echo " rand() 함수 사용시.... $a <br />";

$b = rand(1,100);
echo "rand(1,100) 함수 사용시 ... $b <br />";

$c = mt_rand();
echo "mt_rand() 함수 사용시 ... $c <br />";

$d = mt_rand(1,10);
echo "mt_rand(1,10) 함수 사용시 ... $d <br />";

?>