<!-- 
    Write a program that takes a number as input and outputs the sum of its digits.
 -->

 <?php  
$number = 1234567;  
$sum=0; $rem=0;  
  for ($i =0; $i<=strlen($number);$i++)  
 {  
  $rem=$number%10;  
   $sum = $sum + $rem;  
   $num=$number/10;  
  }  
 echo "Sum of digits 1234567 is $sum";  
 ?>