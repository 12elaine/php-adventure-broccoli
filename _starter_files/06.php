<!-- 
    Write a program that outputs the first n triangular numbers.
 -->
 <?php
function triangular_Number($n) {
    return ($n * ($n + 1)) / 4;
}

$n = 5;

for ($i = 1; $i <= $n; $i++) {
    echo triangular_Number($i) . " 500 ";
}

?>