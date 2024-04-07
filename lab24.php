<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Students Management System</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-4">
        <h2>Students List</h2>
        <a href="add_student.php" class="btn btn-primary mb-2">Add New Student</a>
        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>Email</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php
                // Include database connection file
                include 'db_connect.php';

                // Fetch students data from database
                $query = "SELECT * FROM students";
                $result = mysqli_query($conn, $query);

                while ($row = mysqli_fetch_assoc($result)) {
                    echo "<tr>";
                    echo "<td>{$row['id']}</td>";
                    echo "<td>{$row['first_name']}</td>";
                    echo "<td>{$row['last_name']}</td>";
                    echo "<td>{$row['email']}</td>";
                    echo "<td>
                            <a href='view_student.php?id={$row['id']}' class='btn btn-info btn-sm mr-2'>View</a>
                            <a href='edit_student.php?id={$row['id']}' class='btn btn-warning btn-sm mr-2'>Edit</a>
                            <a href='delete_student.php?id={$row['id']}' class='btn btn-danger btn-sm'>Delete</a>
                          </td>";
                    echo "</tr>";
                }
                ?>
            </tbody>
        </table>
    </div>
</body>
</html>
