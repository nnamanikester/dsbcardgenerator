<?php
$page_title = "Track Id";

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
          <li class="breadcrumb-item active"><?php echo $page_title; ?></li>
        </ol>

        <!-- Page Content -->
        <h1><?php echo $page_title; ?></h1>
        <hr>
        <p>Track User Informations</p>
          <div class="col-md-6 border border-success">

              <form method="post">

                  <div class="row">

                      <div class="form-group col-md-4">
                          <label for="card Type">Card Type:</label>

                          <select name="card_type" class="select2 form-control">
                              <option value="">Card Type</option>
                              <?php

                              $track_sql = "SELECT * FROM card_type";
                              $query_track = $conn->query($track_sql);

                              while ($track = $query_track->fetch_assoc()) {

                                  echo "<option value='".$track['card_type']."'>".ucwords($track['card_type'])."</option>";

                              }
                              ?>

                          </select>

                      </div>

                      <div class="form-group col-md-4">
                          <label for="Identification No">Identification No:</label>

                          <input name="id_no" class="form-control input-group" type="text" />

                      </div>

                      <div class="col-md-4 form-group">
                          <label for="button"></label>

                          <button name="track" class="text-center btn btn-success form-control" type="submit">Track</button>

                      </div>

                  </div>

              </form>

          </div>

          <?php

          if (isset($_POST['track'])) {

              require "pages/track.php";

          }

          ?>


      </div>
      <!-- /.container-fluid -->
<?php
        include "includes/footer.php"

        ?>
