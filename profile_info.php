<?php

// Import Users class
include "users.php";
$users = new Users();
// Get all profile information from the user email
$user = $users->getUser($_SESSION["email"]);
