<?php
function test($arg1)
{
    return IsPrime($arg1);
}

function IsPrime($arg1) {
    for($x=2; $x<$arg1; $x++) {
        if($arg1 %$x ==0) {
            return (0);
        }
    }
    return 1;
}
$a = test(10);
if ($a == 0) {
    echo('Это не простое число' . "\n");
}
else {
    echo ('Это простое число'."\n");
}
