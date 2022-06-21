<?php
/**
 * 아스키 코드 변환 함수 : ord() chr()
 * 문자 -> 아스키 :: ord()
 * 아스키 -> 문자 :: chr()
 */

 echo "아스키를 문자로 바꿔볼께 얍<br>";
 for($a=65;$a<=90;$a++){
    echo chr($a);
 }
 echo "<br>";
 echo "문자를 아스키로 바꿔볼께 얍<br>";
 $b = 'A';
 echo ord($b).'<br>';

?>