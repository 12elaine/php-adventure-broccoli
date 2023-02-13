<!-- 
    Write a program that takes an array of numbers as input and outputs the sum of the numbers.
 -->
 <?php
$num = array(7,12,18,28,30);
$total = 0;
for($i = 0; $i< count($num);$i++){
    $total += $num[$i];
}
echo "Sum of numbers: $total";
?> 
