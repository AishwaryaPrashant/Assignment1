<!-- Create a script (operators.php) to demonstrate the use of different operators in PHP:

a) Write a program that takes two numbers and displays their:


Sum

Difference

Product

Division

Modulus -->


<?php

echo "a<br>";

$x = 10;
$y = 4;

echo "x = $x, y = $y<br>";
echo "Addition (x+y): " . ($x + $y) . "<br>";
echo "Subtraction (x-y): " . ($x -$y) . "<br>";
echo "Multiplication (x*y): " . ($x * $y) . "<br>";
echo "Division (x/y): " . ($x / $y) . "<br>";
echo "Modulus (x%y): " . ($x % $y) . "(remainder)<br><br>";



// b) Initialize a variable and apply the following operators step by step:


// +=

// -=

// *=

// /=

// %=


// Display the result after each operation.
echo "b<br>";

$a = 8;
echo "Initial value of a: $a<br>";

$a += 5;  
echo "After a += 5: $a<br>";

$a -= 3;  
echo "After a -= 3: $a<br>";

$a *= 2;  
echo "After a *= 2: $a<br>";

$a /= 4;  
echo "After a /= 4: $a<br>";

$a %= 3;  
echo "After a %= 3: $a<br><br>";




//c) Write a program that checks whether a number is between 1 and 100 and even using logical operators (&&, ||, !).

echo "c<br>";
$number = 40; 
if ($number >= 1 && $number <= 100) {
    echo "$number is between 1 and 100";
    if($number % 2 != 0) {
        echo " and it is odd.";
    } else {
        echo " and it is even.";
    }
} else {
    echo "$number does not meet the criteria.";
}

?>
