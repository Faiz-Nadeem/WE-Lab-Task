
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>News Headlines</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f2f2f2;
            margin: 0;
            padding: 0;
        }
        .container {
            max-width: 600px;
            margin: 20px auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }
        h1 {
            text-align: center;
            margin-bottom: 20px;
        }
        ul {
            list-style-type: none;
            padding: 0;
        }
        li {
            padding: 10px;
            background-color: #f9f9f9;
            border-bottom: 1px solid #ddd;
        }
        li:last-child {
            border-bottom: none;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>News Headlines</h1>
        <ul>
            <?php foreach ($headlines as $headline): ?>
                <li><?php echo $headline; ?></li>
            <?php endforeach; ?>
        </ul>
    </div>
</body>
</html>

<?php

class NewsController {
    public function displayHeadlines() {
        // Simulated news headlines
        $headlines = array(
            "Breaking: Earthquake hits the west coast",
            "New study shows benefits of meditation",
            "Tech giant releases new smartphone model",
            "Sports team wins championship"
        );

        // Include the view file
        include 'news_headlines.php';
    }
}

?>
<?php

include 'NewsController.php';

// Instantiate the controller
$controller = new NewsController();

// Call the displayHeadlines method
$controller->displayHeadlines();

?>
