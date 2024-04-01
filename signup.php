<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css"media="all" href="styles/styles.css" />
    <title>Document</title>
</head>

<body>
    <?php

    if ($_POST["username"] != null && $_POST["password"] != null) {

    $user = $_POST["username"];
    $pass = $_POST["password"];
    $passConfirm= $_POST["password-confirm"];
   
if($passConfirm != $pass){

    ?>
<p class="failed">Password Confirmation is not the same as Password</p>  

    <?php
}    
else{
?>
<div class="sucessful">
<p> Hello <?php echo $user; ?></p>
<p><a href="">Lets start your journey here</a></p>
</div>
<?php
   
     $file_name = 'account.txt';
    $file = fopen($file_name,'a');
    fwrite($file, $user.','.$pass."\n");
    fclose($file);
    
}
}
?>



    <div class="features">
        <form method="post" action="signup.php">
            Username<br>
            <input type="text" name="username" required> <BR><BR>
            Password<br>
            <input type="text" name="password" required> <BR><br>
            Confirm Password<br>
            <input type="text" name="password-confirm" required> <BR>
            <input type="submit" value="Sign Up"> | Have an account? <a href="login.php">Login</a>
        </form>

    </div>
    <img src="images/image.jpg" alt="Image Here">
    <div class="message">
        <h1>An Exciting Adventure Awaits</h1>
        <p>Create an account to start your RPG journey</p>
    </div>
</body>

</html>