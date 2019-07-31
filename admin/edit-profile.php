<?php
$page_title = "Edit Profile";

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
            <a href="profile.php">Profile</a>
          </li>
          <li class="breadcrumb-item active">Edit Profile</li>
        </ol>

        <!-- Page Content -->
        <h1><?php echo $page_title; ?></h1>
        <hr>


          <div class="card height-auto mb-3 col-md-6">
                    <div class="card-body">
                        <div class="single-info-details">
                            <div class="item-content ">
                                <div class="header-inline item-header">
                                    <h3 class="text-dark-medium font-medium">Welcome <?php echo ucwords($user['first_name']); ?></h3>
                                </div>
                                <div class="info-table ">

                                    <form class="was-validated" method="post" enctype="multipart/form-data">
                                              <?php

                                              if (isset($_POST['update'])) {

                                                  update();

                                              }


                                              ?>

                                        <div class="row">

                                            <div class="form-group col-md-12">

                                                <label for="passport">Passport:</label>

                                                <div class="item-img thumbnail mb-3">
                                                    <img width="120px" height="100px" src="../uploads/passport/<?php echo $user['passport']; ?>" alt="passport">
                                                </div>

                                                <input type="file" class="input-group form-control" name="passport" />

                                            </div>

                                            <div class="form-group col-md-12">

                                                <label for="username">Username:</label>
                                                <input type="text" class="input-group form-control" name="username" value="<?php echo ucwords($user['username']); ?>" readonly />

                                            </div>

                                            <div class="form-group col-md-4">
                                                <label for="first_name">First Name:</label>
                                                <input type="text" class="input-group form-control" name="first_name" value="<?php echo ucwords($user['first_name']); ?>" />
                                            </div>

                                            <div class="form-group col-md-4">
                                                <label for="middle_name">Middle Name:</label>
                                                <input type="text" class="input-group form-control" name="middle_name" value="<?php echo ucwords($user['middle_name']); ?>" />
                                            </div>

                                            <div class="form-group col-md-4">
                                                <label for="last_name">Last Name:</label>
                                                <input type="text" class="input-group form-control" name="last_name" value="<?php echo ucwords($user['last_name']); ?>" />
                                            </div>

                                            <div class="form-group col-md-6">
                                                <label for="email">Email:</label>
                                                <input required type="text" class="input-group form-control" name="email" value="<?php echo ucwords($user['email']); ?>" />
                                            </div>

                                            <div class="form-group col-md-6">
                                                <label for="confirm_email">Confirm Email:</label>
                                                <input type="text" class="input-group form-control" required name="confirm_email" value="<?php echo ucwords($user['email']); ?>" />
                                            </div>

                                            <div class="form-group col-md-6">
                                                <label for="password">Password:</label>
                                                <input type="password" class="input-group form-control" name="password" value="<?php echo ucwords($user['password']); ?>" />
                                            </div>

                                            <div class="form-group col-md-6">
                                                <label for="password">Confirm Password:</label>
                                                <input required type="password" class="input-group form-control" name="confirm_password" />
                                            </div>

                                            <div class="form-group container col-md-6">
                                                <input required type="submit" class="btn btn-success form-control" name="update" value="UPDATE" />
                                            </div>

                                        </div>

                                    </form>

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
