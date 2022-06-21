<?php

/*** 날짜 관련 *****/
echo "오늘의 날짜와 시간을 출력해봅시다 <br/>";

$today1 = date("Y년 n월 j일 (요일 : D)");
echo "오늘의 날짜 :: {$today1}<br/>";

$today2 = date("l / d / F / Y ");
echo "영문의 표기 :: {$today2}<br/>";

$now = date("h시 i분 s초 (A)");
echo "현재 시간 :: {$now} <br>";


echo "===========================================<br/>";
$cnt = date("z");
$tocnt=$cnt+1; //0부터 시작하므로 1을 추가
echo "올해 시작한지 {$tocnt} 일째 되는 날 이네요!<br/>";

$mon = date("n");
$mck = date("t");

echo "이번달은 {$mon}월 이고 {$mck}일 까지 있당구!<br/>";

echo "===========================================</br>";

$start = mktime(0,0,0,3,30,1998);
$startset = date("Y년m월d일",$start);
$end = mktime(0,0,0,3,30,2023);
$endset = date("Y년m월d일",$end);
$count = $end-$start;

$total1 = intval($count/86400);//위의 값을 1로 나눔
$total2 = intval($count%86400/3600); //일수로 제외한 시간

echo "시작일 :: {$startset} <br/>";
echo "종료일 :: {$endset} <br/>";
echo "날짜로 환산하려면 {$total1}일 {$total2}시간이 지났다<br/>";

/** 문자열을 타임스탬프 값으로 변경 하기 
 *  strtotime(문자열로된 시간값)
*/
echo "===========================================</br>";
$dateT ="2022-05-06";
echo strtotime($dateT);



?>