<?php
function test($str1)
{
    return Reverse($str1);
}

function Reverse($str1) {
    $n = strlen($str1);
    if($n == 1)  {
        return $str1;
    }
    else {
        $n--;
        return Reverse(substr($str1,1, $n)) . substr($str1, 0, 1);
    }
}
echo test("Hello world!");
