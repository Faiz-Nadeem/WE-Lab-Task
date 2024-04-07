<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Phone Directory</title>
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
        input[type="text"], input[type="submit"] {
            margin-bottom: 10px;
            padding: 8px;
            width: 100%;
            box-sizing: border-box;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Phone Directory</h2>
        
        <!-- Form to collect name and phone number -->
        <form method="post">
            <label for="name">Enter Name:</label><br>
            <input type="text" id="name" name="name" required><br>
            <label for="phone">Enter Phone Number:</label><br>
            <input type="text" id="phone" name="phone" required><br>
            <input type="submit" name="submit" value="Add to Directory">
        </form>

        <?php
        if (isset($_POST['submit'])) {
            $name = $_POST['name'];
            $phone = $_POST['phone'];

            session_start();
            if (!isset($_SESSION['phone_directory'])) {
                $_SESSION['phone_directory'] = array();
            }

            $_SESSION['phone_directory'][$name] = $phone;

            echo "<p>Contact added to directory.</p>";

            echo "<h3>Current Phone Directory:</h3>";
            foreach ($_SESSION['phone_directory'] as $contact_name => $contact_phone) {
                echo "<p>Name: $contact_name, Phone: $contact_phone</p>";
            }
        }
        ?>
    </div>
</body>
</html>
