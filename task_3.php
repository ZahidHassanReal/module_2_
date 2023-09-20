<?php 
$n=7;
$num1 = 0;
$num2 = 1;
echo "Printing the first" . $n+3 . "Fibonacci number but not grather then 100: ";
echo PHP_EOL;
echo $num1;
echo "," .$num2;

for ($i = 0; $i <= $n; $i++){

$num3 = $num1 + $num2;
if ($num3 > 100){
break;
} else {
echo "," .$num3;
}
echo " , " .$num3;
$num1 = $num2;
$num2 = $num3;
}
echo ".";
echo PHP_EOL;