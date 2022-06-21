<?php

/**
 * 네임스페이스 사용 인스턴스 생성 방법
 * $변수명 = new \네임스페이스명\클래스명
 */

 /**
 * 네임 스페이스 짧게 사용하는 방법 use키워드 사용
 * use 네임스페이스\클래스 as 축약한 명칭;
 * use \hello\hello as hh;
*/

namespace hello;
 
class hello
{
    function hello()
    {
        return '첫번째 hello 클래스입니다.';
    }
}


namespace hello2;

class hello
{
    function hello()
    {
        return '두번째 hello 클래스입니다.';
    }
}

use \hello\hello as hh;
use \hello2\hello as hh2;

$helloFirst = new hh;
echo $helloFirst->hello();
echo '<br>';
$helloSecond = new hh2;
echo $helloSecond->hello();

?>