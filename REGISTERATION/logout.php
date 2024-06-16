<?php
// Start the session
session_start();

// Unset the session variable
unset($_SESSION['buyer_id']);

// Redirect to the login page
//header("Location: login.php");
exit;
?>
