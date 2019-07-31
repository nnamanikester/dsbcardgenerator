<?php
$page_title = "Profile";

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
          <li class="breadcrumb-item active">Profile</li>
        </ol>

        <!-- Page Content -->
        <h1><?php echo $page_title; ?></h1>
        <hr>


          <div class="card height-auto mb-3 col-md-6">
                    <div class="card-body">
                        <div class="single-info-details">
                            <div class="item-img thumbnail">
                                <img width="120px" height="100px" src="../uploads/passport/<?php echo $user['passport']; ?>" alt="passport">
                            </div>
                            <div class="item-content ">
                                <div class="header-inline item-header">
                                    <h3 class="text-dark-medium font-medium">Welcome <?php echo ucwords($user['first_name']); ?></h3>
                                </div>
                                <div class="info-table ">
                                    <table class="table  text-nowrap">
                                        <tbody>

                                            <tr>
                                                <td><strong>Name:</strong></td>
                                                <td class="font-medium text-dark-medium"><?php echo ucwords($user['first_name'].' '.$user['middle_name'].' '.$user['last_name']); ?></td>
                                            </tr>
                                            <tr>
                                                <td><strong>Username:</strong></td>
                                                <td class="font-medium text-dark-medium"><?php echo ucwords($user['username']); ?></td>
                                            </tr>
                                            <tr>
                                                <td><strong>Email:</strong></td>
                                                <td class="font-medium text-dark-medium"><?php echo $user['email']; ?></td>
                                            </tr>
                                        </tbody>

                                        <tfoot class="">
                                            <a href="edit-profile.php" class="btn mb-3 btn-primary">Edit Profile</a>
                                        </tfoot>

                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>






      </div>
      <!-- /.container-fluid -->
<?php
        include "includes/footer.php"

        ?>
