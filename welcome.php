<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Registration Details</title>
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <!-- Custom CSS -->
  <style>
    .details-container {
      padding: 30px;
      border: 2px solid #007bff;
      border-radius: 10px;
      box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1), 0 1px 3px rgba(0, 0, 0, 0.08);
    }
    .details-container h2 {
      margin-bottom: 20px;
    }
    .details-container p {
      font-size: 18px;
    }
  </style>
</head>
<body>
  <div class="container mt-5">
    <div class="row justify-content-center">
      <div class="col-md-6">
        <div class="details-container">
          <h2 class="text-center">Registration Details</h2>
          <?php
          if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['submit'])) {
            $servername = "localhost";
            $username = "root"; // Replace with your MySQL username
            $password = ""; // Replace with your MySQL password
            $dbname = "employee";

            // Create connection
            $conn = new mysqli($servername, $username, $password, $dbname);

            // Check connection
            if ($conn->connect_error) {
              die("Connection failed: " . $conn->connect_error);
            }

            $first_name = $_POST['first_name'];
            $last_name = $_POST['last_name'];
            $email = $_POST['email'];
            $gender = $_POST['gender'];
            $country = $_POST['country'];
            $password = $_POST['password'];

           //Insert data into database

           $sql="INSERT INTO `my-table`(`UserId`, `first_name`, `last_name`, `email`, `gender`, `country`, `password`) 

VALUES ('$first_name', '$last_name', '$email', '$gender', '$country', MD5('$password')";

         
           if ($conn->query($sql) === TRUE) {
             echo "<p>Data inserted successfully!</p>";
           } else {
             echo "Error: " . $sql . "<br>" . $conn->error;
           }
          }
          ?>
        </div>
      </div>
    </div>
  </div>
</body>
</html>
