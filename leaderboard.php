<!DOCTYPE html>
<html>

<head>
    <title>Survive the Forest</title>
    <link href="./styles/leaderboard.css" rel="stylesheet">
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
            <b>Most days survived</b><br>
            <?php
            foreach ($lines as $line) {
                $parts = explode(",", $line);
                echo $parts[2] . "<br>";
            }
            ?>
        </div>
    </div>
</body>

</html>