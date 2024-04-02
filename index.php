<?php
include("helper_functions.php");
if (isLoggedIn()) {
    redirect("game.php");
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Survive the Forest</title>
    <link rel="stylesheet" type="text/css" media="all" href="styles/auth.css" />
    <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
</head>

<body>
    <?php
    if (isset($_POST["username"]) && $_POST["password"]) {

        $user = $_POST["username"];
        $pass = $_POST["password"];

        $file_name = 'account.txt';
        $file = fopen($file_name, 'r');

        while (!feof($file)) {
            $line = fgets($file);
            $data = explode(",", $line);
            if ($user === trim($data[0]) && $pass === trim($data[1])) {
                setupSession($_POST["username"]);
                generateSignOutButton();
    ?>
                <div class="sucessful">
                    <h2>Successful Login: Welcome back <?php echo $_SESSION["user"] ?></h2>
                    <a href="game.php">Return to the forest</a>
                </div>
        <?php
                fclose($file);
                exit();
            }
        }

        fclose($file);
        ?>
        <h2 class="failed">Invalid Username and/or Password</h2>
    <?php
    }
    ?>

    <div class="container">
        <img src="images/tree.png" style="filter:invert(1);">

        <div class="features">
            <!--todo: Post to game php-->
            <div class="message">
                <h1>Survive the Forest</h1>
                <p>A spine-chilling text-based journey through a forest long forgotten</p>
            </div>
            <form method="post" action="index.php">
                <label for="username">Username</label>
                <input type="text" name="username" id="username" width="60" placeholder="Enter your username" required>
                <label for="user">Password</label>
                <input type="password" name="password" id="password" placeholder="Enter your password" required>
                <div class="signup-group">
                    <button type="submit" value="Login">Login</button>
                    <p>Don't have an account? <a href="signup.php">Sign up</a></p>
                </div>
            </form>
        </div>

    </div>
    <footer>
        <p>Copyright &copy; 2024 Survive the Forest Team</p>
        <a href="leaderboard.php">Visit Leaderboard</a>
    </footer>
</body>

</html>