<!DOCTYPE html>
<html>
<head>
    <title>Leader Board</title>
    <style>
        body {
            background-image:url("./images/LDbackground.PNG");
			background-repeat:no-repeat;
			background-attachment:fixed;
			background-size:100% 100%;
            color: white;
        }

        h1 {
            margin-top: 5%;
            text-align: center;
        }

        .outerdiv {
            margin-top: 0;
            margin-left: 25%;
            margin-right: 25%;
            display: flex;
            flex-direction: row;
            font-size: 20px;
        }

        .left {
            width: 50%;
            text-align: center;
        }

        .right {
            width: 50%;
            text-align: center;
        }
    </style>
</head>
<body>
    <h1>"GameName" Leader Board</h1>
    <div class="outerdiv">
        <div class="left">
            Username:<br>
            <?php
            // Read the contents of the file and display usernames
            $lines = file("account_test.txt", FILE_IGNORE_NEW_LINES);
            foreach ($lines as $line) {
                $parts = explode(",", $line);
                echo $parts[0] . "<br>";
            }
            ?>
        </div>
        <div class="right">
            Longest day survived:<br>
            <?php
            // Display corresponding scores
            foreach ($lines as $line) {
                $parts = explode(",", $line);
                echo $parts[2] . "<br>";
            }
            ?>
        </div>
    </div>
</body>
</html>
