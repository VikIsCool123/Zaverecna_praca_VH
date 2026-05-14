<?php
    include "users.php";
    $users = new Users();
    $user = $users->getUser($_SESSION["email"])
?>