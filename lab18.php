<?php
function factorial($number) {
    $factorial = 1;
    for ($i = 1; $i <= $number; $i++) {
        $factorial *= $i;
    }
    return $factorial;
}

function arithmetic() {
    $args = func_get_args(); 
    $num_args = func_num_args(); 

    // Check the number of arguments
    switch ($num_args) {
        case 2:
            return array(
                "addition" => $args[0] + $args[1],
                "subtraction" => $args[0] - $args[1],
                "multiplication" => $args[0] * $args[1]
            );
        case 3:
            return array(
                "addition" => $args[0] + $args[1] + $args[2],
                "subtraction" => $args[0] - $args[1] - $args[2],
                "multiplication" => $args[0] * $args[1] * $args[2]
            );
        default:
            return "Invalid number of arguments.";
    }
}

// Function to convert number into words
function numberToWords($number) {
    $words = array(
        'zero', 'one', 'two', 'three', 'four', 'five', 'six', 'seven', 'eight', 'nine'
    );

    $number_string = strval($number);
    $result = '';
    foreach (str_split($number_string) as $digit) {
        $result .= $words[intval($digit)];
    }
    return $result;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Functions</title>
    <style>
        body {
            font-family:'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
            text-align: center;
        }
        .container {
            max-width: 400px;
            margin: 50px auto;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
        input[type="number"], input[type="submit"] {
            margin-bottom: 10px;
            padding: 8px;
            width: 100%;
            box-sizing: border-box;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>PHP Functions</h2>
        <form method="post">
            <label for="factorial">Enter a number to calculate its factorial:</label><br>
            <input type="number" id="factorial" name="factorial" required><br>
            <input type="submit" value="Calculate Factorial">
        </form>

        <?php
        if (isset($_POST['factorial'])) {
            $number = $_POST['factorial'];
            echo "<p>Factorial of $number is " . factorial($number) . "</p>";
        }
        ?>
    </div>
    <div class="container">
    <form method="post">
            <label for="num1">Enter first number:</label><br>
            <input type="number" id="num1" name="num1" required><br>
            <label for="num2">Enter second number:</label><br>
            <input type="number" id="num2" name="num2" required><br>
            <input type="submit" name="arithmetic2" value="Perform Arithmetic with Two Numbers">
        </form>

              <?php
        if (isset($_POST['arithmetic2'])) {
            $num1 = $_POST['num1'];
            $num2 = $_POST['num2'];
            $result = arithmetic($num1, $num2);
            echo "<p>Addition: {$result['addition']}</p>";
            echo "<p>Subtraction: {$result['subtraction']}</p>";
            echo "<p>Multiplication: {$result['multiplication']}</p>";
        }

        if (isset($_POST['arithmetic3'])) {
            $num1 = $_POST['num1'];
            $num2 = $_POST['num2'];
            $num3 = $_POST['num3'];
            $result = arithmetic($num1, $num2, $num3);
            echo "<p>Addition: {$result['addition']}</p>";
            echo "<p>Subtraction: {$result['subtraction']}</p>";
            echo "<p>Multiplication: {$result['multiplication']}</p>";
        }
        ?>
    </div>
    <div class="container">
    <form method="post">
            <label for="number">Enter a number to convert into words:</label><br>
            <input type="number" id="number" name="number" required><br>
            <input type="submit" name="convert" value="Convert to Words">
        </form>

        <?php
        if (isset($_POST['convert'])) {
            $number = $_POST['number'];
            echo "<p>Number: $number</p>";
            echo "<p>Output: " . numberToWords($number) . "</p>";
        }
        ?>
    </div>

</body>
</html>
