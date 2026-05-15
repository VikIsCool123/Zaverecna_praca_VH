<?php 
include "users.php";
session_start();

if (isset($_POST["res-button"])) {
    $email = $_POST["InputEmail"];
    $password = $_POST["InputPassword"];
    $password = md5($password);

    $users = new Users();
    $my_user = $users->getUser($email);

    if ($my_user != "Error!") {
        if ($password == $my_user["password"]){
            echo "Hooary! :)";
            $_SESSION["email"] = $email;
            $_SESSION["user_id"] = $my_user["id"];
            $_SESSION["is_admin"] = $my_user["is_admin"];
            header("Location: index.php");
        } else {
            echo "Wrong password!";
        }
    } else {
        echo "Error!";
    }
}
?>