<?php

function deleteFromUser() {

    global $conn;
    $sql        = "DELETE FROM user_data WHERE id = {$_GET['delete']}";
    $query_sql  = $conn->query($sql);

    if ($query_sql) {

        echo "<div class='container text-center alert-success'> Data Deleted Successfully! </div>";
        echo "<script> alert('Data Deleted Successfully!') </script>";
        echo "<script> window.location.replace('dashboard.php'); </script>";

    } else {

        echo "<div class='container text-center alert-success'> Unable To Delete Data!".$conn->error." </div>";

    }

}



