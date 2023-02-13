<!-- 
    Write a program that takes an array of strings as input and outputs the longest string in the array.
 -->
 <?php
$my_arr = array("abc","defj","hikkkkk","lmn","op","qrst","tuvwx","yz");
$new_arr = array_map('strlen', $my_arr);
 
echo "The shortest array length is " . min($new_arr) .
". The longest array length is " . max($new_arr).'.';
?>