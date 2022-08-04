<?php

// practice question 0: print numbers from 100 to 200 using a for loop
// for($i = 100;$i <= 200;$i++){
//     echo $i;
//     echo " ";
// }

$sentence = "I love birds!";
// practice question 1: print each of the character in the $sentence variable (Using a for loop)
for($i = 0;$i < strlen($sentence); $i++){
    // echo $sentence[$i]  . " ";
}

$counter = 1;
// practice question 2: print all the numbers from 1 to 20 using a while loop
while($counter <= 20){
    // echo $counter . " ";
    $counter++;
}

$arr = array("Dog", "Cat", "Bird", 55,66, true);
// practice question 3: print all the elements of this array (using a regular for loop and using a foreach loop)

for($i = count($arr);$i >= 0; $i--){
    // echo $arr[$i];
    // echo " ";
}

foreach($arr as $index => $values){
    // echo $values;echo " ";
    echo $index;
}