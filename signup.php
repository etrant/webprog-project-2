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

if($_POST["username"] != null && $_POST["password"] != null){

        $user = $_POST["username"];
        $pass = $_POST["password"];
        $passConfirm= $_POST["password-confirm"];
       


    //User Check Validations
    if(strlen($user) < 6){
      ?>
<h2 class="field">Username is too short</h2>
      <?php
    } 
    //PASSWORD VALIDATION
    //Password Length
    else if(strlen($pass) < 6){
        ?>
 <h2 class="field">Password is too short</h2>  
 
        <?php
    } 
      
    //Checks if passwords are the same
     else if($passConfirm != $pass){
  
        ?>
<h2 class="field">Password Confirmation is not the same as Password</h2>  

        <?php
    }
      //Checks if password has an uppercase letter
     else if(!preg_match('~[A-Z]+~', $pass)){
   ?>
 <h2 class="field">Password needs an Uppercase Letter</h2>  
        <?php
     }

    else if(!preg_match('~[0-9]+~', $pass)){
   ?>
 <h2 class="field">Password contains no numbers</h2>  
        <?php
     }
     
   else{
    ?>
    <h1 class="field"> <?php echo "Hello ".$user; ?></h1>
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
            <input type="text" name="username" require> <BR><BR>
            Password<br>
            <input type="text" name="password" require> <BR><br>
             Confirm Password<br>
            <input type="text" name="password-confirm" require> <BR>
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