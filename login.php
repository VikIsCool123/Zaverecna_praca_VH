<?php 
$connect = mysqli_connect("localhost","root","","relaxation_center");

if (!$connect) {
    die("Connection failed: " . mysqli_connect_error());
}

if (isset($_POST["res-button"])) {
    $email = $_POST["InputEmail"];
    $password = $_POST["InputPassword"];
    $password = md5($password);

    $stmt = mysqli_prepare($connect, "SELECT password FROM users  WHERE email=?");
    mysqli_stmt_bind_param($stmt, "s", $email);

    if (mysqli_stmt_execute($stmt)) {
        $result = $stmt->get_result();
        $user = $result->fetch_assoc();
        if ($password == $user["password"]){
            echo "Hooary! :)";
        } else {
            echo "Wrong password!";
        }
    } else {
        echo "Error: " . mysqli_error($connect);
    }

    mysqli_stmt_close($stmt);
}
?>