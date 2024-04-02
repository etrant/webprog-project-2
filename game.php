<?php
include('helper_functions.php');
if (!isLoggedIn()) {
    redirect("index.php");
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Survive the Forest</title>
    <link rel="stylesheet" href="styles/game.css">
    <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
</head>

<body>
    <div class="container">
        <?php
        // updating level id
        if (isset($_POST["level_id"])) {
            if (!empty($_SESSION["level_id"])) {
                $_SESSION["p_level_id"] = $_SESSION["level_id"];
            }
            $_SESSION["level_id"] = $_POST["level_id"];
            updateLevelID();
        } else {
            $data = getUserData($_SESSION["user"]);
            $_SESSION["level_id"] = $data[3];
            $_SESSION["p_level_id"] = $_SESSION["level_id"];
        }

        // state machine
        $level = $_SESSION["level_id"];
        if ($level == 0) {
        ?>
            <img src="images/start.jpg" alt="">
            <div class="narrative">
                <p class="">
                    You awaken to find yourself in solitude, a cool breeze brushes lightly against your skin.
                    Before you stands a dilapidated stone structure, its ancient walls whispering tales of old.
                </p>
                <br>
                <p>
                    The forest around you hums with life, yet you are strikingly <strong>alone</strong>.
                </p>
            </div>
            <form id="options" method="post" action="game.php">
                <button type="submit" name="level_id" value="1">Option 1</button>
                <button type="submit" name="level_id" value="2">Option 2</button>
                <!-- <button type="submit" name="level_id" value="99">Check status</button> -->
            </form>
        <?php
        } else if ($level == 1) {
        ?>
            <h1>1</h1>
            <img src="images/start.jpg" alt="">
            <div class="narrative">
                <p>This is a test page.</p>
            </div>
            <form id="options" method="post" action="game.php">
                <button type="submit" name="level_id" value="0">Return to start.</button>
            </form>
        <?php
        } else if ($level == 2) {
        ?>
            <h1>2</h1>
            <img src="images/start.jpg" alt="">
            <div class="narrative">
                <p>This is a test page.</p>
            </div>
            <form id="options" method="post" action="game.php">
                <button type="submit" name="level_id" value="0">Return to start.</button>
            </form>
        <?php
        }
        ?>
    </div>
</body>

</html>