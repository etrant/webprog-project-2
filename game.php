<?php
include('helper_functions.php');
include("narrative.php");
if (!isLoggedIn()) {
    redirect("index.php");
}
generateSignOutButton();
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
        if (isset($_POST["level_id"])) {
            $_SESSION["level_id"] = $_POST["level_id"];
            updateLevelID();
        } else {
            $data = getUserData($_SESSION["user"]);
            $_SESSION["level_id"] = $data[3];
        }
        $level = $_SESSION["level_id"];
        generateStory(intval($level));
        ?>
    </div>
</body>

</html>