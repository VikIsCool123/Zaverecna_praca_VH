<?php 
$connect = mysqli_connect("localhost","root","","relaxation_center");

if (!$connect) {
    die("Connection failed: " . mysqli_connect_error());
}

if (isset($_POST["res-button"])) {
    $name = $_POST["InputName"];
    $age = $_POST["InputAge"];
    $email = $_POST["InputEmail"];
    $phone = $_POST["InputTelephoneNumber"];
    $password = $_POST["InputPassword"];
    $password = md5($password);

    $stmt = mysqli_prepare($connect, "INSERT INTO users (name, age, telephone, email, password) VALUES (?, ?, ?, ?, ?)");
    mysqli_stmt_bind_param($stmt, "sisss", $name, $age, $phone, $email, $password);

    if (mysqli_stmt_execute($stmt)) {
        echo "Record inserted successfully.";
    } else {
        echo "Error: " . mysqli_error($connect);
    }

    mysqli_stmt_close($stmt);
}
?>