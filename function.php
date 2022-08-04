<?php

// practice question 0 : write a function that prints "hello world"!
function printing_stuff(){
    echo "hello world!";
}

// printing_stuff();

// practice question 1: write a function that takes in 2 numbers and prints the sum of them
function add($number1, $number2){
    echo $number1 + $number2;
}

// add(3,6);
// practice question 2: write a function that takes in 1 number and prints all the numbers starting for 1 till that number
function looping($x){
    for($i = 1; $i <= $x;$i++){
        echo $i;
    }
    echo "\n";
}
// looping(4);
// looping(100);

// practice question 3: write a function that takes 2 number and checks if they are equal if they are then return true or else return false.
function check_numbers($num1 , $num2){
    if($num1 == $num2){
        return true;
    }else{
        return false;
    }
}

echo check_numbers(1,2);
