<?php
// Define the variable $age
$age = 25; // You can change the value of $age to test different scenarios

// Check if $age is a valid number
if (is_numeric($age)) {
    // Check the value of $age using if-elseif-else statements
    if ($age < 18) {
        echo "You are a minor.";
    } elseif ($age >= 18 && $age <= 65) {
        echo "You are an adult.";
    } else {
        echo "You are a senior citizen.";
    }
} else {
    // If $age is not a valid number, print "Invalid input"
    echo "Invalid input";
}
?>
