<?php
session_start(); // Start the session if not already started

// Unset all session variables
$_SESSION = array();

// Destroy the session
session_destroy();

// Redirect to the login screen (index.php)
header("Location: index.php");
exit; // Make sure to exit after redirection
