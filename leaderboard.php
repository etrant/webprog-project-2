<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Survive the Forest</title>
    <link href="styles/leaderboard.css" rel="stylesheet">
    <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
</head>

<body>
    <h1>Leaderboard</h1>
    <div class="outerdiv">
        <div class="left">
            <b>Username</b><br>
            <?php
            $lines = file("account.txt", FILE_IGNORE_NEW_LINES);
            usort($lines, function ($a, $b) {
                $partsA = explode(",", $a);
                $partsB = explode(",", $b);
                return $partsB[2] - $partsA[2];
            });
            foreach ($lines as $line) {
                $parts = explode(",", $line);
                echo $parts[0] . "<br>";
            }
            ?>
        </div>
        <div class="right">
            <b>Endings Found</b><br>
            <?php
            foreach ($lines as $line) {
                $parts = explode(",", $line);
                echo $parts[2] . "<br>";
            }
            ?>
        </div>
    </div>
    <footer>
        <p>Copyright &copy; 2024 Survive the Forest Team</p>
        <a href="index.php">Return to Home</a>
    </footer>
</body>

</html>