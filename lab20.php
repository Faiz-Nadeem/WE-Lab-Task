<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GET/POST Handler</title>
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
        <h2>GET/POST Handler</h2>
        
        <!-- Form to collect data -->
        <form method="post">
            <label for="data">Enter Data:</label><br>
            <input type="text" id="data" name="data" required><br>
            <input type="submit" name="submit" value="Submit">
        </form>

        <?php
        // Check if the request method is POST
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            // Retrieve data from form using $_POST superglobal
            $data = $_POST['data'];
            echo "<p>Data submitted via POST method: $data</p>";
        }

        // Check if the request method is GET
        if ($_SERVER['REQUEST_METHOD'] === 'GET') {
            // Retrieve data from query parameters using $_GET superglobal
            if (isset($_GET['data'])) {
                $data = $_GET['data'];
                echo "<p>Data submitted via GET method: $data</p>";
            }
        }
        ?>
    </div>
</body>
</html>
