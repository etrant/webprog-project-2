<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" media="all" href="styles/auth.css" />
    <title>Survive the Forest</title>
</head>

<body>
    <?php
    if (isset($_POST["username"]) && isset($_POST["password"])) {

        $user = $_POST["username"];
        $pass = $_POST["password"];
        $passConfirm = $_POST["password-confirm"];

        if ($passConfirm != $pass) {

    ?>
            <p class="failed">Both passwords must be the exact same</p>

    <?php
        } else {


            $file_name = 'account.txt';
            $file = fopen($file_name, 'a');
            // Usename, password, nights survived, level_id
            fwrite($file, $user . ',' . $pass . ',' . '0' . ',' . '0' . "\n");
            fclose($file);
        }
    }
    ?>


    <div class="container">
        <img src="images/tree.png" style="filter:invert(1);">

        <div class="features">
            <div class="message">
                <h1>Survive the Forest</h1>
                <p>A spine-chilling text-based journey through a forest long forgotten</p>
            </div>
            <form method="post" action="signup.php">
                <?php

                if (isset($_POST["username"])) {
                    if (!session_id()) session_start();
                    include("helper_functions.php");
                    $data = getUserData($_POST["username"]);
                    $_SESSION["user"]  = $data[0];
                    $_SESSION["score"]  = $data[2];
                    $_SESSION["level_id"]  = $data[3];
                ?>

                    <div class="sucessful">
                        <h2> Registered! Welcome <?php echo $_SESSION["user"]; ?></h2>
                        <a href="game.php">Begin your journey</a>
                    </div>
                <?php
                } else {
                ?>
                    <label for="username">Username</label>
                    <input type="text" name="username" id="username" width="60" placeholder="Enter your username" required>
                    <label for="user">Password</label>
                    <input type="text" name="password" id="password" placeholder="Enter your password" required>
                    <label for="confirm">Confirm Password</label>
                    <input type="text" name="password-confirm" id="confirm" placeholder="Enter your password again" required> <BR><br>
                    <div class="signup-group">
                        <button type="submit" value="Sign Up">Sign Up</button>
                        <p>Have an account? <a href="index.php">Login</a></p>
                    </div>
            </form>
        <?php } ?>
        </div>
    </div>

    <footer>
        <p>Copyright &copy; 2024 Survive the Forest Team</p>
        <a href="leaderboard.php">Visit Leaderboard</a>
    </footer>
</body>

</html>