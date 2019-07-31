<?php

$page_title = "Print Card";

include "includes/header.php";

$conn = new mysqli('localhost','kester', '620061.kes', 'idcard');

$user_sql      = "SELECT * FROM user_data WHERE id  = '{$_SESSION['print_id']}'";

$query_user    = $conn->query($user_sql);

while ($user = $query_user->fetch_assoc()) {

    $f_name = $user['f_name'];
    $l_name = $user['l_name'];
    $m_name = $user['m_name'];
    $gender = $user['gender'];
    $dob = $user['dob'];
    $occupation = $user['occupation'];
    $address_of_res = $user['address_of_res'];
    $identification_no = $user['identification_no'];
    $passport = $user['passport'];
    $state_of_res = $user['state_of_res'];
    $town_of_res = $user['town_of_res'];
    $lga_of_res = $user['lga_of_res'];
    $unique_code = $user['unique_code'];
    $serial_no = $user['serial_no'];
    $date_of_registeration = $user['date_of_registeration'];

}


if (isset($_POST['print_card'])) {

    if ($_POST['card_type'] == "vc") {

        require "pages/cards/voters-card.php";

    } elseif ($_POST['card_type'] == "dsc") {

        require "pages/cards/dsc-card.php";

    } elseif ($_POST['card_type'] == "nacoss") {

        require "pages/cards/nacoss-card.php";

    } elseif ($_POST['card_type'] == "nic") {

        require "pages/cards/national-id.php";

    } else {

        header("location: dashboard.php");

    }

}


?>


<div class="container text-center my-5">


    <div class="">

        <a href="dashboard.php" class="btn btn-secondary"><i class="fas fa-less-than"></i>  Back To Dashboard</a>

    </div>

</div>


<script>
    window.print();
</script>
