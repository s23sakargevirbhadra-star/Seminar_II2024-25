<!DOCTYPE html>
<html>
<head>
    <title>Server Digital Clock</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            background-color: #f0f0f0;
        }
        .clock {
            font-size: 5rem;
            color: #333;
            background-color: #fff;
            padding: 20px 40px;
            border-radius: 10px;
            box-shadow: 0 0 20px rgba(0,0,0,0.1);
        }
    </style>
</head>
<body>
    <div class="clock">
        <?php
            date_default_timezone_set("Asia/Kolkata");echo
                date('h:i:s A');
        ?>
    </div>
</body>
</html>