<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Guess the Number</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            text-align: center;
            padding: 50px;
        }
        .container {
            background-color: #ffe9e9;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            padding: 20px;
            max-width: 400px;
            margin: 0 auto;
        }
        input[type="text"], input[type="submit"] {
            margin-top: 10px;
            padding: 8px 15px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Guess the Number</h2>
        <form method="post">
            <label for="guess">Enter your guess (between 1 and 100):</label>
            <input type="text" id="guess" name="guess" required>
            <input type="submit" value="Submit">
        </form>

        <?php
        $targetNumber = rand(1, 100);
        $attempts = 0;

        if (isset($_POST['guess'])) {
            $guess = intval($_POST['guess']);

            if ($guess == $targetNumber) {
                echo "<p>Congratulations! You guessed the number!</p>";
                echo "<p>Number of attempts: $attempts</p>";
                exit; 
            } elseif ($guess < $targetNumber) {
                echo "<p>Too low! Try again.</p>";
            } else {
                echo "<p>Too high! Try again.</p>";
            }

            $attempts++;
        }
        ?>
    </div>
</body>
</html>
