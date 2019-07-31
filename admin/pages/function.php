<?php


function update() {

    global $conn;
    global $passport;

    if ($_POST['confirm_email'] == $_POST['email']) {

        if ($_POST['confirm_password'] == $_POST['password']) {


            $username     = $_POST['username'];
            $first_name     = $_POST['first_name'];
            $middle_name    = $_POST['middle_name'];
            $last_name      = $_POST['last_name'];
            $email          = $_POST['email'];
            $password       = $_POST['password'];
            $passport_name  = date('Ymdhms').rand(100, 999);
            $passport       = $passport_name.'_'.$_FILES['passport']['name'];
            $passport_temp  = $_FILES['passport']['tmp_name'];

            if (empty($_FILES['passport']['name'])) {

                $pass_sql = "SELECT * FROM admin WHERE username = '{$username}'";

                $query_pass = $conn->query($pass_sql);

                while ($pass = $query_pass->fetch_assoc()) {

                    $passport = $pass['passport'];

                }


            }

            $update_sql = "UPDATE admin SET
            passport = '{$passport}',
            first_name = '{$first_name}',
            middle_name = '{$middle_name}',
            last_name = '{$last_name}',
            email = '{$email}',
            password = '{$password}' WHERE username = '{$username}'";

            $query_update = $conn->query($update_sql);

            if ($query_update) {

                    move_uploaded_file($passport_temp, "../uploads/passport/{$passport}");


                echo "<div class='alert-success container'>Profile Updated Successfully!</div>";

            } else {

                die("QUERY FAILED".$conn->error);

            }

        } else {

            echo "<div class='alert-danger container'>Passwords do not match!</div>";

        }

    } else {

        echo "<div class='alert-danger container'>Emails do not match!</div>";

    }

}

function home_delivery() {

    global $conn;

    $home_sql = "UPDATE user_data SET home_delivery = 'delivered' WHERE id = '{$_GET['delivery_status']}'";
    $query_home = $conn->query($home_sql);
    if ($query_home) {

        echo "<div class='alert-success container text-center'>Updated Successfully!</div>";
        echo "<script>window.location.replace('home-delivery-requests.php');</script>";

    } else {

        echo "<div class='alert-danger container text-center'>Update Failed!</div>". $conn->error;

    }

}
