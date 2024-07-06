<?php
//  Find the largest number using PHP 
//  Write a PHP script to find the largest number among three given numbers:
//  $num1= 4, $num2=5, $num3=6;

$num1=20;$num2=10; $num3=0;
if($num1>$num2 && $num1 >$num3){
    echo "The largest number is $num1" ;
}
elseif ($num2> $num1 && $num2 > $num3) {
    echo "The lagest number is $num2";
}
else {
    echo "The largest number is $num3";
}
?>