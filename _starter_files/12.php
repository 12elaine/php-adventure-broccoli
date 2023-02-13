<!-- 
    Write a program that generates a random password of a specified length. The password should include upper and lowercase letters, numbers, and special characters.
-->
<?php
function password_generate($chars) 
{
  $data = '2468aeiouABCDEFGHIJKLMNOPQRSTUVWXYZ1234567893579';
  return substr(str_shuffle($data), 0, $chars);
}
  echo password_generate(9)."\n";
?>