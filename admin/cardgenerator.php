
<?php
$page_title = "Select Card Type";

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
          <li class="breadcrumb-item active">Select Card Type</li>
        </ol>

        <!-- Page Content -->
        <h1><?php echo $page_title; ?></h1>
        <hr>
        <p>Choose Card Type</p>





<?php

if (isset($_GET['print_card']) && isset($_GET['user_id'])) {

    $_SESSION['print_id'] = $_GET['user_id'];

    require "pages/choose-card.php";

} else {

    header("location: dashboard.php");

}

?>





      </div>
      <!-- /.container-fluid -->
<?php
        include "includes/footer.php"

        ?>
