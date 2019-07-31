<?php
session_start();

require "includes/db.php";

if (isset($_SESSION['username']) && isset($_SESSION['password'])) {


    $sql                    = "SELECT * FROM admin WHERE username = '{$_SESSION['username']}' AND password = '{$_SESSION['password']}' ";
    $user_sql               = "SELECT * FROM user_data";
    $approved_user_sql      = "SELECT * FROM user_data WHERE status = 'Approved'";
    $pending_user_sql       = "SELECT * FROM user_data WHERE status = 'Pending'";
    $home_delivery_sql       = "SELECT * FROM user_data WHERE home_delivery = 'yes'";
    $admin_sql              = "SELECT * FROM admin";


    $query_sql          = $conn->query($sql);
    $query_user_sql     = $conn->query($user_sql);
    $query_approved_sql = $conn->query($approved_user_sql);
    $query_pending_sql  = $conn->query($pending_user_sql);
    $query_home_delivery  = $conn->query($home_delivery_sql);
    $query_admin        = $conn->query($admin_sql);


    $user            = $query_sql->fetch_assoc();

    if ($user['username'] != $_SESSION['username'] && $user['password'] != $_SESSION['password']) {

        header("location: ../login.php");

    }


} else {

    header("location: ../login.php");

}


include "pages/all_pages.php";

?>

<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title><?php echo $page_title; ?> - CardGenerator</title>

  <!-- Custom fonts for this template-->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

  <!-- Page level plugin CSS-->
  <link href="vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="css/sb-admin.css" rel="stylesheet">


<style type="text/css">
    .topper h6 {
        font-size: 18px;
        line-height: 16px;
        font-weight: bolder;
        color: green;

    }

    .topper p{
        font-size: 13px;
        line-height: 16px;
        font-weight: bolder;
        color: green;
    }

    .code, .rightSide1 p, .dobGender p{
        font-size: 10px;
        line-height: 12px;
        margin-bottom: 1em;
        font-weight: bold;
        letter-spacing: 1px;
    }

    .personId{
        writing-mode: vertical-rl;
        position: absolute;
        left: -10px;
        top: 90px;
        z-index: 1;
        letter-spacing: 11px;
        font-size: 10px;

    }

    .bottom{
        line-height: 3px;
    }

    .bottom p{
        font-size: 12px;
        font-weight: bold;
        word-spacing:3px;
        text-align: center;
    }

</style>


</head>

</head>

<body id="page-top">
