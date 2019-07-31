  <nav class="navbar navbar-expand navbar-dark bg-dark static-top">

    <a class="navbar-brand mr-1" href="../index.php">Card Generator</a>

    <button class="btn btn-link btn-sm text-white order-1 order-sm-0" id="sidebarToggle" href="#">
      <i class="fas fa-bars"></i>
    </button>

    <!-- Navbar Search -->
    <div class="d-none d-md-inline-block form-inline ml-auto mr-0 mr-md-3 my-2 my-md-0">
    </div>

    <!-- Navbar -->
    <ul class="navbar-nav ml-auto ml-md-0">
      <li class="nav-item dropdown no-arrow mx-1">
        <a class="nav-link" href="home-delivery-requests.php">
          <i class="fas fa-cart-arrow-down fa-fw"></i>
          <span class="badge badge-alert"><?php if ($query_home_delivery->num_rows == 0) { echo ""; } elseif ($query_home_delivery->num_rows > 9) {echo '9+';} else { echo $query_home_delivery->num_rows; } ?></span>
        </a>
      </li>
      <li class="nav-item dropdown no-arrow mx-1">
        <a class="nav-link" href="pending-requests.php">
          <i class="fas fa-sync-alt fa-fw"></i>
          <span class="badge badge-danger"><?php if ($query_pending_sql->num_rows == 0) { echo ""; } elseif ($query_pending_sql->num_rows > 9) {echo '9+';} else { echo $query_pending_sql->num_rows; } ?></span>
        </a>
      </li>
      <li class="nav-item dropdown no-arrow">
        <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <i class="fas fa-user-circle fa-fw"></i>
        </a>
        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
          <a class="dropdown-item" href="profile.php">Profile</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">Logout</a>
        </div>
      </li>
    </ul>

  </nav>
