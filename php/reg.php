<?php
    $conn = mysqli_connect("localhost", "root", "", "users");

    if (!$conn) {
        die("Connection failed") . mysqli_connect_error();
    }

    $name_user = $_GET['name-user'];
    $email_user = $_GET['email-user'];
    $password_user = $_GET['password-user'];


    // password_hash($password_user, PASSWORD_DEFAULT);



    if (strlen($name_user) > 4 && strlen($password_user) > 6) {
        $result = mysqli_query($conn, "INSERT INTO users VALUES (null, '$name_user', '$email_user', ")
    }


?>