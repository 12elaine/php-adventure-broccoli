<!-- 
    Write a program that takes a character as input and outputs whether it is a vowel or a consonant.
-->
<?php

$x = "N";
$l = 0;
$u = 0;

if ($x && ctype_alpha($x)) {

    
    $l = $x == 'a' || $x == 'e' || $x == 'i' || $x == 'o' || $x == 'u';

    $u = $x == 'A' || $x == 'E' || $x == 'I' || $x == 'O' || $x == 'U';
    
    if ($l || $u)
    	echo "'" . $x . "' is a vowel character.\n";
    else
    	echo "'" . $x . "' is a consonant character.\n";
} else {
    echo "Sorry, You entered Non-Alphabetic character!\n";
}

?>