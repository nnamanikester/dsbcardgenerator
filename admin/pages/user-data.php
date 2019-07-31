<?php
$page_title = "Dashboard";

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
          <li class="breadcrumb-item active">Overview</li>
        </ol>

        <!-- Icon Cards-->
        <div class="row">
          <div class="col-xl-3 col-sm-6 mb-3">
            <div class="card text-white bg-primary o-hidden h-100">
              <div class="card-body">
                <div class="card-body-icon">
                  <i class="fas fa-fw fa-comments"></i>
                </div>
                <div class="mr-5"><?php if ($query_pending_sql->num_rows == 0) { echo "NO"; } else { echo $query_pending_sql->num_rows; } ?> Pending Requests!</div>
              </div>
              <a class="card-footer text-white clearfix small z-1" href="pending-requests.php">
                <span class="float-left">View Details</span>
                <span class="float-right">
                  <i class="fas fa-angle-right"></i>
                </span>
              </a>
            </div>
          </div>
          <div class="col-xl-3 col-sm-6 mb-3">
            <div class="card text-white bg-warning o-hidden h-100">
              <div class="card-body">
                <div class="card-body-icon">
                  <i class="fas fa-fw fa-list"></i>
                </div>
                <div class="mr-5"><?php if ($query_approved_sql->num_rows == 0) { echo "NO"; } else { echo $query_approved_sql->num_rows; } ?> Approved Cards!</div>
              </div>
              <a class="card-footer text-white clearfix small z-1" href="approved-cards.php">
                <span class="float-left">View Details</span>
                <span class="float-right">
                  <i class="fas fa-angle-right"></i>
                </span>
              </a>
            </div>
          </div>
          <div class="col-xl-3 col-sm-6 mb-3">
            <div class="card text-white bg-success o-hidden h-100">
              <div class="card-body">
                <div class="card-body-icon">
                  <i class="fas fa-fw fa-shopping-cart"></i>
                </div>
                <div class="mr-5"><?php if ($query_user_sql->num_rows == 0) { echo "NO"; } else { echo $query_user_sql->num_rows; } ?> Cards!</div>
              </div>
              <a class="card-footer text-white clearfix small z-1" href="#">
                <span class="float-left">View Details</span>
                <span class="float-right">
                  <i class="fas fa-angle-right"></i>
                </span>
              </a>
            </div>
          </div>
          <div class="col-xl-3 col-sm-6 mb-3">
            <div class="card text-white bg-danger o-hidden h-100">
              <div class="card-body">
                <div class="card-body-icon">
                  <i class="fas fa-fw fa-life-ring"></i>
                </div>
                <div class="mr-5"><?php if ($query_admin->num_rows == 0) { echo "NO"; } else { echo $query_admin->num_rows; } ?> Staffs!</div>
              </div>
              <a class="card-footer text-white clearfix small z-1" href="staffs.php">
                <span class="float-left">View Details</span>
                <span class="float-right">
                  <i class="fas fa-angle-right"></i>
                </span>
              </a>
            </div>
          </div>
        </div>

        <!-- DataTables Example -->
          <?php
            if (isset($_GET['delete'])) {

                deleteFromUser();

            }
          ?>
        <div class="card mb-3">
          <div class="card-header">
            <i class="fas fa-table"></i>
            Identity Cards</div>
          <div class="card-body">
            <div class="table-responsive">
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
                    <th>Actions</th>
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
                    <th>Actions</th>
                  </tr>
                </tfoot>
                <tbody>

                    <?php


                    $sn = 1;
                    while ($user = $query_user_sql->fetch_assoc()) {

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
                    <td><?php echo "<img src='../uploads/passport/{$user['passport']}' width='70px' height='70px' alt='passport' />"; ?></td>
                    <td><?php echo $user['phone_no']; ?></td>
                    <td><?php echo $user['identification_no']; ?></td>
                    <td><?php echo ucwords($user['card_type']); ?></td>
                    <td><?php if ($status['status'] == 'Approved') {

                           echo "<div class='badge badge-success'>".ucwords($status['status'])."</div>";

                        } else {

                            echo "<div class='badge badge-warning'>".ucwords($status['status'])."</div>";

                        } ?> </td>
                    <td><?php echo $user['date_of_registeration']; ?></td>
                    <td><a class="badge badge-primary mx-1" href="?source=view_user_data&user_id=<?php echo $user['id']; ?>"><i class="fas fa-eye"></i></a><a class="badge badge-danger mx-1" href="?delete=<?php echo $user['id']; ?>"><i class="fas fa-trash-alt"></i></a>
                  </tr>

                    <?php

                    $sn++; }


                    ?>
                </tbody>
              </table>
            </div>
          </div>
        </div>
