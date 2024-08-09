<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Random Question Generator</title>
    <link rel="stylesheet" href="front.css">
    <style>
        .output-box {
            background-color: #fff;
            padding: 20px;
            margin-top: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
            min-height: 50px; 
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Random Question Generator</h1>
        <form action="index.php" method="POST">
            <button type="submit">Generate a Question</button>
        </form>
        <div class="output-box">
            <?php
            $questions = array(
                "What is your favorite food?",
                "What is your dream job?",
                "Who is your celebrity crush?",
                "What is your type?",
                "Which cartoon character looks like you?",
                "what is your most embarassed moment?",
                "what is your favorite movie?",
                "Which country do you want to visit?",
                "what is your favorite football club?",
                "can fly or teleport?",
            );

            function getRandomQuestion() {
                global $questions;
                $randomIndex = array_rand($questions, 1); 
                return $questions[$randomIndex]; 
            }

            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                echo "<p>" . getRandomQuestion() . "</p>";
            }
            ?>
        </div>
    </div>
</body>
</html>
