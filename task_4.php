<?php
function fibonacciNumbers ($n, $number1 = 0, $number2 = 1){
echo "Printing the first $n Fibonacci numbers using Function: <br>";
echo PHP_EOL;
echo $number1;
echo ", " .$number2;
for ($i = 0; $i < $n-2; $i++){

        $number3 = $number1 + $number2;
echo " , " .$number3;
$number1 = $number2;
$number2 = $number3;
}

}
fibonacciNumbers (15);

echo PHP_EOL;

?>