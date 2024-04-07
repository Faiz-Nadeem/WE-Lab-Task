<!DOCTYPE html>
<html>
<head>
    <title>PHP Code Output</title>
</head>
<body>
    <h2>PHP Code Output</h2>

    <?php
    // a. To get the PHP version and configuration information.
    echo "<h3>a. PHP Version and Configuration Information:</h3>";
    echo "PHP Version: " . phpversion() . "<br>";
    echo "PHP Configuration: <br>";
    phpinfo();

    // b. To get the name of the owner of the current PHP script, document root directory, and operating system PHP is running on.
    echo "<h3>b. Owner of the current PHP script, Document Root, and Operating System:</h3>";
    echo "Owner of the script: " . get_current_user() . "<br>";
    echo "Document Root: " . $_SERVER['DOCUMENT_ROOT'] . "<br>";
    echo "Operating System: " . php_uname() . "<br>";

    // c. To swap two variables and print their values before and after swapping.
    echo "<h3>c. Swapping two variables:</h3>";
    $a = 10;
    $b = 20;
    echo "Before swapping: a = $a, b = $b <br>";
    $temp = $a;
    $a = $b;
    $b = $temp;
    echo "After swapping: a = $a, b = $b <br>";

    // d. To redirect a user to a different web page.
    // header("Location: http://sw.muet.edu.pk");
    // Uncomment the above line to redirect to the specified URL.

    // e. To display the given strings.
    echo "<h3>e. Displaying Strings:</h3>";
    echo "Tomorrow I’ll learn something new.<br>";
    echo "This is a bad command: del c:\\*.*\\$.<br>";

    // f. To test whether a number is greater than 30, 20, or 10 using ternary operator and print the result.
    echo "<h3>f. Testing a Number with Ternary Operator:</h3>";
    $num = 25;
    $result = ($num > 30) ? "Greater than 30" : (($num > 20) ? "Greater than 20" : (($num > 10) ? "Greater than 10" : "Less than or equal to 10"));
    echo "Result: $result <br>";

    // g. To return the components of a URL.
    echo "<h3>g. Components of a URL:</h3>";
    $url = "http://sw.muet.edu.pk/faculty/cvs/sample.pdf";
    $url_components = parse_url($url);
    echo "URL: $url <br>";
    echo "Scheme: " . $url_components['scheme'] . "<br>";
    echo "Host: " . $url_components['host'] . "<br>";
    echo "Path: " . $url_components['path'] . "<br>";
    ?>
</body>
</html>
