<?php
$page_title = "Home Delivery Requests";

include "includes/header.php";

include "includes/nav.php";


?>



  <div id="wrapper">

    <!-- Sidebar -->
<?php

      include "includes/sidebar.php";

      ?>

    <div id="content-wrapper">

      <div class="container-fluid">

        <!-- Breadcrumbs-->
        <ol class="breadcrumb">
          <li class="breadcrumb-item">
            <a href="dashboard.php">Dashboard</a>
          </li>
          <li class="breadcrumb-item active">Home Delivery Requests</li>
        </ol>

        <!-- Page Content -->
        <h1><?php echo $page_title; ?></h1>
        <hr>



        <div class="card mb-3">
          <div class="card-header">
            <i class="fas fa-table"></i>
            Home Delivery Requests</div>
          <div class="card-body">
            <div class="table-responsive">
             <?php


                    if (isset($_GET['delivery_status'])) {

                        home_delivery();

                    }

                ?>
              <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                  <tr>
                    <th>S/N</th>
                    <th>Name</th>
                    <th>Gender</th>
                    <th>Passport</th>
                    <th>Phone No</th>
                    <th>Identification No</th>
                    <th>Card Type</th>
                    <th>Status</th>
                    <th>Registeration Date</th>
                    <th>Home Delivery</th>
                    <th>Delivered?</th>
                  </tr>
                </thead>
                <tfoot>
                  <tr>
                    <th>S/N</th>
                    <th>Name</th>
                    <th>Gender</th>
                    <th>Passport</th>
                    <th>Phone No</th>
                    <th>Identification no</th>
                    <th>Card Type</th>
                    <th>Status</th>
                    <th>Registeration Date</th>
                    <th>Home Delivery</th>
                    <th>Delivered?</th>
                  </tr>
                </tfoot>
                <tbody>

                    <?php


                    $sn = 1;
                    while ($user = $query_home_delivery->fetch_assoc()) {

                        $status_sql = "SELECT * FROM status WHERE status = '{$user['status']}'";
                        $query_status = $conn->query($status_sql);
                        $status = $query_status->fetch_assoc();

                        $gender_sql     = "SELECT * FROM gender WHERE gender = '{$user['gender']}'";
                        $query_gender   = $conn->query($gender_sql);
                        $gender         = $query_gender->fetch_assoc();

                        ?>

                  <tr>
                    <td><?php echo $sn; ?></td>
                    <td><?php echo ucwords($user['l_name'].' '.$user['f_name'].' '.$user['m_name']); ?></td>
                    <td><?php echo ucwords($gender['gender']); ?></td>
                    <td><?php echo "<img src='../uploads/passport/{$user['passport']}' width='120px' height='120px' alt='passport' />"; ?></td>
                    <td><?php echo $user['phone_no']; ?></td>
                    <td><?php echo $user['identification_no']; ?></td>
                    <td><?php echo ucwords($user['card_type']); ?></td>
                    <td><?php if ($status['status'] == 'Approved') {

                           echo "<div class='badge badge-success'>".ucwords($status['status'])."</div>";

                        } else {

                            echo "<div class='badge badge-warning'>".ucwords($status['status'])."</div>";

                        } ?> </td>
                    <td><?php echo $user['date_of_registeration']; ?></td>

                    <td>
                        <?php
                            if ($user['home_delivery'] == 'yes') {

                                echo ucwords('requested');

                             }

                        ?>
                    </td>

                    <td>
                      <?php

                        if ($user['home_delivery'] == 'yes') {

                                echo "<a href='?delivery_status={$user['id']}' class='btn btn-success'><i class='fas fa-check'></i></a>";

                             }

                        ?>
                    </td>
                  </tr>

                    <?php

                    $sn++; }


                    ?>
                </tbody>
              </table>
            </div>
          </div>
        </div>









      </div>
      <!-- /.container-fluid -->
<?php
        include "includes/footer.php"

        ?>
