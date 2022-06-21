<?php

$hello = "HELLO~";
$onedoc= <<<EOL
$hello <br>
이게 된다구요 <br>
한번에 여러줄을 쓰나구!<br>
php는 이런것도 있다구! <br>
EOL;

echo $onedoc;

/**
 * EOL 은 터미네이션 ID 라고 부르며,
 * EOL 외에도 EOT,END,EOT 가 있습니다
 * 서로 다른것을 쓰면 작동하지 않으며, 시작과 끝은 같은것을 사용해야합니다. 
 */

?>