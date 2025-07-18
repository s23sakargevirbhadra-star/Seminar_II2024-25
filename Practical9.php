<?php
session_start();

if (!isset($_SESSION['visitor_count'])) {
    $_SESSION['visitor_count'] = 0;
}

$_SESSION['visitor_count']++;

$visitorCount = $_SESSION['visitor_count'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Session Visitor Counter</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            background-color: #f5f5f5;
        }
        .counter-container {
            text-align: center;
            padding: 30px;
            background-color: white;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }
        h1 {
            color: #333;
            margin-bottom: 20px;
        }
        .counter {
            font-size: 3em;
            color: #2c3e50;
            font-weight: bold;
        }
        .message {
            margin-top: 20px;
            color: #7f8c8d;
        }
    </style>
</head>
<body>
    <div class="counter-container">
        <h1>Session Visitor Counter</h1>
        <div class="counter"><?php echo number_format($visitorCount); ?></div>
        <div class="message">
            <?php 
            if ($visitorCount === 1) {
                echo "Welcome first-time visitor!";
            } else {
                echo "You have visited this page $visitorCount times in this session.";
            }
            ?>
        </div>
    </div>
</body>
</html>
