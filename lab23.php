<?php
// Check if the form is submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Retrieve username from the form
    $username = $_POST['username'];
    
    // Check if "Remember Me" checkbox is checked
    if (isset($_POST['remember_me']) && $_POST['remember_me'] == 1) {
        // Set a cookie named remember_me with username as value
        setcookie('remember_me', $username, time() + (30 * 24 * 60 * 60)); // Expire in 30 days
    } else {
        // If "Remember Me" checkbox is not checked, unset the remember_me cookie
        setcookie('remember_me', '', time() - 3600); // Expire immediately
    }
}

// Check if remember_me cookie exists and prefills username field if it does
$prefilled_username = '';
if (isset($_COOKIE['remember_me'])) {
    $prefilled_username = $_COOKIE['remember_me'];
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Remember Me</title>
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
        input[type="text"], input[type="checkbox"], input[type="submit"] {
            margin-bottom: 10px;
            padding: 8px;
            width: 100%;
            box-sizing: border-box;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Remember Me</h2>
        
        <!-- Form for user input -->
        <form method="post">
            <label for="username">Username:</label><br>
            <input type="text" id="username" name="username" value="<?php echo htmlspecialchars($prefilled_username); ?>"><br>
            
            <input type="checkbox" id="remember_me" name="remember_me" value="1">
            <label for="remember_me">Remember Me</label><br>
            
            <input type="submit" value="Submit">
        </form>
    </div>
</body>
</html>
