<?php
// Start PHP code
echo "<!DOCTYPE html>";
echo "<html lang='en'>";
echo "<head>";
echo "<meta charset='UTF-8'>";
echo "<meta name='viewport' content='width=device-width, initial-scale=1.0'>";
echo "<title>HTML Table Inside PHP</title>";
echo "</head>";
echo "<body>";

// Define data for the table
$employee_data = array(
    array("Faiz Nadeem", "Designer", 15000),
    array("Shifa", "Designer", 14500),
    array("Nayab", "Manager", 16000)
);

// Output the table
echo "<table border='1'>";
echo "<tr><th>Name</th><th>Position</th><th>Salary</th></tr>";
foreach ($employee_data as $data) {
    echo "<tr>";
    foreach ($data as $value) {
        echo "<td>$value</td>";
    }
    echo "</tr>";
}
echo "</table>";

// End PHP code
echo "</body>";
echo "</html>";
?>
