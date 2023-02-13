<!-- 
    Write a program that takes an array of numbers as input and outputs the average of the numbers.
-->
<?php
$arr = array(4, 12, 13, 21, 23, 23, 26);

$ave = array_sum($arr) / count($arr);

echo $ave;
?>