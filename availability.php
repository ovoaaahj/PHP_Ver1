<?php

/***
 * filter_Var() 함수를 사용한 이메일 유효성 검사
 * filter_Var('이메일주소',FILTER_VALIDATE_EMAIL);
 */
 
 $email = "1231221@naver.com";
 $checkMail = filter_Var($email,FILTER_VALIDATE_EMAIL);

 if($checkMail ==true){
     echo "정확한 이메일 이네요!</br>";
 }else{
     echo "이메일 형식을 확인해주세요 :< </br>";
 }


/**
 * filter_Var() 함수를 사용한 URL 유효성 검사
 * filter_Var('URL',FILTER_VALIDATE_URL);
 */

 $url = "sa://12.we.asd";
 $checkUrl=filter_Var($url,FILTER_VALIDATE_URL);

 if($checkUrl == true){
     echo "정확한 URL입니다! <br/>";
 }else{
     echo "URL주소를 확인해주세요 :< <br/>";
 }


/**
 * filter_Var() 함수를 사용한 IP 유효성 검사
 * filter_Var('IP주소',FILTER_VALIDATE_IP);
 */
$ip = '192.200.0.1';
$checkip = filter_Var($ip,FILTER_VALIDATE_IP);

if($checkip ==true){
    echo "정확한 IP입니다<br/>";
}else{
    echo "올바르지않은 IP입니다.<br/>";
}



?>