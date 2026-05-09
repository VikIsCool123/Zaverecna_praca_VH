<?php
    $connect = mysqli_connect("localhost","root","","relaxation_center");

    if (!$connect) {
        die("Connection failed: " . mysqli_connect_error());
    }

    $stmt = mysqli_prepare($connect, "SELECT * FROM users  WHERE email=?");
    mysqli_stmt_bind_param($stmt, "s", $_SESSION["email"]);
    
    // Kontrola ze ci vysiel statement (ziadne errory)
    if (mysqli_stmt_execute($stmt)) {
        $result = $stmt->get_result();
        $user = $result->fetch_assoc();
    }
?>