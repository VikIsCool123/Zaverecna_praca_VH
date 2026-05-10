<?php 
session_start();
$connect = mysqli_connect("localhost","root","","relaxation_center");

if (!$connect) {
    die("Connection failed: " . mysqli_connect_error());
}

if (isset($_POST["res-button"])) {
    $program = $_POST["SelectProgram"];
    $time = $_POST["ChosenDate"];
    //mysqli_query($connect,"INSERT INTO reservations (user_id, program_id, time, note) VALUES('30/08/1997', '$note')");

    $stmt = mysqli_prepare($connect, "INSERT INTO reservations (user_id, program_id, time) VALUES (?, ?, ?)");
    mysqli_stmt_bind_param($stmt, "sis", $_SESSION["user_id"], $program, $time);

    if (mysqli_stmt_execute($stmt)) {
        echo "Record inserted successfully.";
    } else {
        echo "Error: " . mysqli_error($connect);
    }

    mysqli_stmt_close($stmt);
}
?>