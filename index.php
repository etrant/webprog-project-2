<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Survive the Forest</title>
    <link rel="stylesheet" type="text/css" media="all" href="styles/auth.css" />
</head>

<body>
    <!--todo: link to leaderboard needed-->

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
    ?>
                <div class="sucessful">
                    <h1>Successful Login: Hello <?php echo $user ?></h1>
                    <a href="">
                        <h2>Continue to your story</h2>
                    </a>
                </div>
        <?php
                fclose($file);
                exit();
            }
        }

        fclose($file);
        ?>
        <h1 class="failed">Invalid Username and/or Password</h1>
    <?php
    }
    ?>

    <div class="features">
        <!--todo: Post to game php-->
        <form method="post" action="index.php">
            Username<br>
            <input type="text" name="username" width="60" required> <BR><BR>
            Password<br>
            <input type="text" name="password" required> <BR>
            <input type="submit" value="Login"> | Need an account? <a href="signup.php">Sign Up</a>
        </form>
    </div>

    <div class="message">
        <h1>Survive the Forest</h1>
        <p>An exhilirating text-based RPG</p>
    </div>
    <img src="images/image.jpg" alt="Image Here">
</body>

</html>