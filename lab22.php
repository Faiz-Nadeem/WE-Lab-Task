<?php
session_start();

$errors = isset($_SESSION['errors']) ? $_SESSION['errors'] : array();
unset($_SESSION['errors']); // Clear errors from session

// Check if the form is submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Validate form fields
    if (empty($_POST['name'])) {
        $errors['name'] = "Name is required";
    }
    
    if (empty($_POST['email'])) {
        $errors['email'] = "Email is required";
    } elseif (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
        $errors['email'] = "Invalid email format";
    }
    
    if (empty($_POST['password'])) {
        $errors['password'] = "Password is required";
    }

    // If there are no errors, process the registration
    if (empty($errors)) {
        // Process registration here (store data in database, etc.)
        // For demonstration, we'll just display a success message
        $_SESSION['success_message'] = "Registration successful!";
        header("Location: registration_success.php");
        exit;
    } else {
        // Store errors in session for displaying on form
        $_SESSION['errors'] = $errors;
        header("Location: registration_form.php");
        exit;
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Registration</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            text-align: center;
        }
        .container {
            max-width: 400px;
            margin: 50px auto;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
        input[type="text"], input[type="email"], input[type="password"], input[type="submit"] {
            margin-bottom: 10px;
            padding: 8px;
            width: 100%;
            box-sizing: border-box;
        }
        .error {
            color: red;
            margin-bottom: 5px;
            font-size: 0.8em;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>User Registration</h2>
        
        <!-- Form for user registration -->
        <form method="post">
            <label for="name">Name:</label><br>
            <input type="text" id="name" name="name" value="<?php echo isset($_POST['name']) ? htmlspecialchars($_POST['name']) : ''; ?>">
            <?php if (isset($errors['name'])) echo "<div class='error'>" . $errors['name'] . "</div>"; ?>

            <label for="email">Email:</label><br>
            <input type="email" id="email" name="email" value="<?php echo isset($_POST['email']) ? htmlspecialchars($_POST['email']) : ''; ?>">
            <?php if (isset($errors['email'])) echo "<div class='error'>" . $errors['email'] . "</div>"; ?>

            <label for="password">Password:</label><br>
            <input type="password" id="password" name="password">
            <?php if (isset($errors['password'])) echo "<div class='error'>" . $errors['password'] . "</div>"; ?>

            <input type="submit" value="Register">
        </form>
    </div>
</body>
</html>
