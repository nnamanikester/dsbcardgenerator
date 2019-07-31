<?php
session_start();

if (isset($_POST['username'])) {

    $username = $_POST['username'];
    $password = $_POST['password'];
    $remember = $_POST['remember'];

    $conn            = new mysqli('localhost','kester', '620061.kes', 'idcard');
    $login_sql       = "SELECT * FROM admin WHERE username = '{$username}' AND password = '{$password}' ";
    $query_login_sql = $conn->query($login_sql);
    $login           = $query_login_sql->num_rows;

    if ($login > 0) {

        echo "<div class='container text-center alert-success'> You have successfully logged in! </div>";

        $_SESSION['username']       = $username;
        $_SESSION['password']       = $password;
        $_SESSION['remember']       = $remember;

    } else {

        echo "<div class='container text-center alert-danger'> Usernmae or password Incorrect! </div>";

    }


}

?>
