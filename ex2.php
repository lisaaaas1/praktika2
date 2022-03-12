<?php
function test($arg1, $arg2)
{
    return SRectangle($arg1, $arg2);
}

function SRectangle($arg1, $arg2)
{
    $area = $arg1*$arg2;
    return ("Прямоугольник длиной $arg1 и шириной $arg2 имеет площадь $area");
}
echo (test(4,5));