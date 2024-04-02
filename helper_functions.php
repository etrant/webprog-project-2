<?php

function getUserData(string $username)
{
    $lines = file("account.txt", FILE_IGNORE_NEW_LINES);
    foreach ($lines as $line) {
        $userData = explode(",", $line);
        if ($userData[0] == $username) {
            return $userData;
        }
    }
    return null;
}
function userExists($user){
    $lines = file("account.txt", FILE_IGNORE_NEW_LINES);
    foreach ($lines as $line) {
        $userData = explode(",", $line);
        if ($userData[0] == $user) {
            return true;
        }
    }
    return false;
}
function getSurvivedCount(array $userData)
{
    return $userData[2];
}

function getLevelID(array $userData)
{
    return $userData[3];
}

// This can invoke a race condition since mutex locks are not built into PHP
// forgive me for my sin here. - Ethan (ONLY 1 USER AT A TIME)
function updateLevelID()
{
    $username = $_SESSION["user"];
    if (!isset($username)) return null;

    $lines = file("account.txt");
    $result = "";
    foreach ($lines as $line) {
        $userData = explode(",", $line);
        if ($userData[0] === $username) {
            $userData[3] = $_SESSION["level_id"];
            $result .= implode(",", $userData) . "\n";
        } else {
            $result .= $line;
        }
    }
    file_put_contents("account.txt", $result);
}

function setupSession(string $user)
{
    if (!session_id()) session_start();
    $data = getUserData($user);
    $_SESSION["user"]  = $data[0];
    $_SESSION["score"]  = $data[2];
    $_SESSION["level_id"]  = $data[3];
}

function generateSignOutButton() {
    echo '<div style="position: absolute; top: 20px; left: 20px;">
              <form action="logout.php" method="post">
                  <button type="submit" class="logout">Sign Out</button>
              </form>
          </div>';
}
function isLoggedIn()
{
    // check for open session
    if (!session_id()) session_start();
    // check if user logged in, redirect if they're not
    if (!isset($_SESSION["user"])) {
        return false;
    }
    return true;
}

function redirect(string $redirect)
{
    header("Location: " . $redirect);
}
?>

<style>
    .logout{
        width: 150px;
       position: absolute;
       top: 10px;
       left: 10px;
        color: white;
  background-color: #000000;
  padding: 10px 20px;
  border: none;
  font-weight: bold;
  border-radius: 4px;
  border: solid white 1px;
    }
    </style>