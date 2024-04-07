<?php
$students = array(
    array(
        "name" => "faiz",
        "age" => 18,
        "grade" => "A"
    ),
    array(
        "name" => "shifa",
        "age" => 20,
        "grade" => "B"
    ),
    array(
        "name" => "nayab",
        "age" => 22,
        "grade" => "C"
    )
);

// Access and print the information of each student in the array
foreach ($students as $student) {
    echo "Name: " . $student['name'] . "<br>";
    echo "Age: " . $student['age'] . "<br>";
    echo "Grade: " . $student['grade'] . "<br><br>";
}
?>
