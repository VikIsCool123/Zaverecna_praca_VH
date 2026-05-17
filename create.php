<?php 
include "users.php";
if (isset($_POST["res-button"])) {
    $name = $_POST["InputName"];
    $date = $_POST["InputDate"];
    $email = $_POST["InputEmail"];
    $phone = $_POST["InputTelephoneNumber"];
    $password = $_POST["InputPassword"];
    $password = md5($password);

    $users = new Users();
    $previous_user = $users->getUser($email);
    
    // Ked je error, ziadny pouzivatel neexistuje
    if ($previous_user != "Error!") {
        // Existuje pouzivatel?
        if(!isset($previous_user["name"])){
            $my_user_error = $users->insertUser($name, $date, $phone, $email, $password);
            if ($my_user_error == null) {
                echo "Account created.";
                header("Location: account_login.php");
            } else {
                echo $my_user_error;
            }
        } else {
            echo "Email already exists.";
        }

    } else {
        echo "Error!";
    }
}
?>