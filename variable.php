<?php

/** 변수 관련 함수 */


//변수 타입 알아보는 함수 gettype
$var ='3535';
echo gettype($var)."<br/>";
$var = 1353;
echo gettype($var)."<br/>";
 
//변수 타입 변경하는 함수 settype
$var = '98';
settype($var, "integer");
echo gettype($var).$var."<br/>";

//변수값을 정수형으로 바꾸는 함수 intval
$var1 = 33.232;
echo intval($var1)."<br/>";

//변수를 문자형의 값으로 반환하는함수 strval
$var1 = 33;
$var2 = strval($var1);
echo gettype($var2).$var2."<br/>";

//변수 존재 유무를 확인하는 함수 isset
if(isset($var5)){
    echo "존재하는 함수 <br/>";
}else{
    echo "존재하지 않는 함수 <br/>";
}

//변수형이 배열인지 확인하는 함수
$arr = array();
echo is_array($arr)."<br/>";

//변수형이 비어있는지 확인 하는 함수
$var6 = null;
if(is_null($var6)){
    echo "변수에 값이 없습니다.";
}

?>