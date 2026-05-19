<?php

// We come here from the account_login.php page form

include "users.php";

// Allow accessing session information on the server through the cookie 🍪🍪🍪
session_start();

// If the log-in form is submitted
if (isset($_POST["res-button"])) {
    $email = $_POST["InputEmail"];
    $password = $_POST["InputPassword"];
    // Hash entered password using the MD5 algorithm
    $password = md5($password);

    // Get information about user by searching for his email
    // so that we can compare the passwords
    $users = new Users();
    $my_user = $users->getUser($email);

    // If there was no database error
    if ($my_user != "Error!") {
        // If hashed entered password MATCHES hashed password stored in the database
        if ($password == $my_user["password"]) {
            echo "Hooary! :)";
            // Add information about the user to the session
            $_SESSION["email"] = $email;
            $_SESSION["user_id"] = $my_user["id"];
            $_SESSION["is_admin"] = $my_user["is_admin"];
            // Re-direct to the home page
            header("Location: index.php");
        } else {
            echo "Wrong password!";
        }
    } else {
        echo "Error!";
    }
}
