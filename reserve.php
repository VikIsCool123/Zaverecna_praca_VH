<?php 
$connect = mysqli_connect("localhost","root","","relaxation_center");

echo "Hello world!";

if (!$connect) {
    die("Connection failed: " . mysqli_connect_error());
}

if (isset($_POST["res-button"])) {
    $name = $_POST["InputName"];
    $age = $_POST["InputAge"];
    $email = $_POST["InputEmail"];
    $phone = $_POST["InputTelephoneNumber"];
    $note = $_POST["InputNote"];
    $program = $_POST["SelectProgram"];
    //mysqli_query($connect,"INSERT INTO reservations (user_id, program_id, time, note) VALUES('30/08/1997', '$note')");

    $stmt = mysqli_prepare($connect, "INSERT INTO users (name, age, telephone, email) VALUES (?, ?, ?, ?)");
    mysqli_stmt_bind_param($stmt, "siss", $name, $age, $phone, $email);

    if (mysqli_stmt_execute($stmt)) {
        echo "Record inserted successfully.";
    } else {
        echo "Error: " . mysqli_error($connect);
    }

    mysqli_stmt_close($stmt);
}
?>