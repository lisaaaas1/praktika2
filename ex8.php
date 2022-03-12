<?php
function Palindrome($string) {
    if ($string == strrev($string))
        return "это палиндром";
    else
        return "не палиндром";
}
echo Palindrome('nana');
?>