<?php

function getUserData(string $username)
{
    $lines = file("account.txt", FILE_IGNORE_NEW_LINES);
    foreach ($lines as $line) {
        $userData = explode(",", $line);
        if ($userData[0] === $username) {
            return $userData;
        }
    }
    return null;
}

function getSurvivedCount(array $userData)
{
    return $userData[2];
}

function getLevelID(array $userData)
{
    return $userData[3];
}
