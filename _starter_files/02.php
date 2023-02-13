<!-- 
    Write a program that takes a string as input and outputs whether it is a palindrome.
-->
<?php
function Palindrome($MyStr) {
  $revStr = strrev($MyStr);
  if ($revStr == $MyStr){
    echo $MyStr." is a Palindrome string.\n";
  } else {
    echo $MyStr." is not a Palindrome string.\n";
  }
}

Palindrome("racecar");
Palindrome("rubber");
Palindrome("madam");
?>