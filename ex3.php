<?php
function test($arg)
{
    return factorial($arg);
}

function factorial($arg)
{
    $factorial = 1;
    for ($a = $arg; $a > 0; $a--)
    {
        $factorial = $factorial*$a;
    }
    return ($factorial);
}
echo test(5);