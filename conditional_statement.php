<?php

$number = 200;
// practice quesiton 0: if the number variable is equal to 100 print "We found the number" else print "number not found!"
if ($number == 100){
    echo "We found the number!";
}else{
    echo "Number not found!";
}

echo " ";
$name = "Alex";
$math_score = 80;
$english_score = 81;

// practice question 1: if alex has more then 80 in english print "Alex has a good result in english" else print "Alex has a poor result in english" (Solve this using if..else)
if ($english_score > 80){
    echo $name . " has a good result in english!";
}else{
    echo $name . " has a poor result in english!";
}
echo "\n";
// practice question 2: if alex has score in math that is more then or equal to 80 then print "Alex got an A+ in math!" , if the score is more then or equal to 70 and less then 80 then print "Alex got an A in math!", if the score is more then or equal to 60 and less then 70 print "Alex got an A- in math" , if no condition is meet print "Alex failed in math!" (Solve this using if..elseif..else)
if($math_score >= 80){
    echo $name . " got an A+ in math!";
}elseif($math_score >= 70){
    echo $name . " got an A in math!";
}elseif($math_score >= 60){
    echo $name . " got an A- in math!";
}else{
    echo $name . " failed in math";
}

echo "\n";
// switch Statement
$name = "Alex";
$animal_name = "alex";

// practice question: if the animal name is cat print "Alex don't like cats", if the animal name is dog print "Alex likes dogs", if the animal name is bird print "Alex loves birds" (Solve this using switch statement)
switch($animal_name){
    case "cat":
        echo $name . " don't like cats!";
        break;
    case "dog":
        echo $name . " likes dogs!";
        break;
    case "bird":
        echo $name . " loves birds!";
        break;
    default:
        echo "Animal not found!";
}