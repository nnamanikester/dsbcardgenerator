<?php

session_start();

if (isset($_SESSION['username']) && isset($_SESSION['password'])) {

    $conn            = new mysqli('localhost','kester', '620061.kes', 'idcard');
    $sql             = "SELECT * FROM admin WHERE username = '{$_SESSION['username']}' AND password = '{$_SESSION['password']}' ";
    $query_sql       = $conn->query($sql);
    $user            = $query_sql->fetch_assoc();

    if ($user['username'] == $_SESSION['username'] && $user['password'] == $_SESSION['password']) {

        header("location: dashboard.php");

    } else {

        header("location: ../login.php");

    }


} else {

    header("location: ../login.php");

}
