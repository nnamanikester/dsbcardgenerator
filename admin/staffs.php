<?php
$page_title = "Staffs";

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
          <li class="breadcrumb-item active">Staffs</li>
        </ol>

        <!-- Page Content -->
        <h1><?php echo $page_title; ?></h1>
        <hr>



        <div class="card mb-3">
          <div class="card-header">
            <i class="fas fa-table"></i>
            List Of Staffs</div>
          <div class="card-body">
            <div class="table-responsive">
              <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                  <tr>
                    <th>S/N</th>
                    <th>Name</th>
                    <th>Passport</th>
                    <th>Username</th>
                    <th>Email</th>
                  </tr>
                </thead>
                <tfoot>
                  <tr>
                    <th>S/N</th>
                    <th>Name</th>
                    <th>Passport</th>
                    <th>Username</th>
                    <th>Email</th>
                  </tr>
                </tfoot>
                <tbody>

                    <?php


                    $sn = 1;
                    while ($staff = $query_admin->fetch_assoc()) {

                        ?>

                  <tr>
                    <td><?php echo $sn; ?></td>
                    <td><?php echo ucwords($staff['last_name'].' '.$staff['first_name'].' '.$staff['middle_name']); ?></td>
                    <td><?php echo "<img src='../uploads/passport/{$staff['passport']}' width='120px' alt='passport' />"; ?></td>
                    <td><?php echo $staff['username']; ?></td>
                    <td><?php echo $staff['email']; ?></td>
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
