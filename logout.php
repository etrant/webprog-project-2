<?php
include("helper_functions.php");

if (!session_id()) session_start();

// Unset all session variables
$_SESSION = array();

// Destroy the session
session_destroy();

// Redirect to the login screen (index.php)
redirect("index.php");
