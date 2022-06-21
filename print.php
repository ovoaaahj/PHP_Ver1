<?php

    /**
     * print 함수를 사용하여 형식있는 계산식 출력하기
     */
    echo "print 함수를 이용하여 계산식 출력 하기<br><br>";
    $a = 97.888;
    $b = 57.5555;

    $ab = $a*$b;

    $form1 = sprintf("\%0.2f",$ab);
    $form2 = sprintf("\%0.3f",$a/$b);

    echo "변수가 a = $a b = $b 일때 <br>";

    printf(" 1. %0.3f 와 %0.3f 의 덧셈의 결과... [%0.2f]", $a, $b, $a+$b);
    echo "<br />";
    printf(" 1. %0.3f 와 %0.3f 의 뺄셈의 결과... [%0.2f]", $a, $b, $a-$b);
    echo "<br />";
    echo "3. $a와 $b의 곱셈의 결과....  {$form1} <br />";
    echo "4. $a와 $b의 나눗셈의 결과... {$form2} <br />";

?>