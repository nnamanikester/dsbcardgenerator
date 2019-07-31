<?php
$page_title = "Login";
include "includes/header.php";
include "includes/nav.php";

?>

  <div class="container">
    <div class="card card-login mx-auto mt-5">
      <div class="card-header">STAFF LOGIN</div>
      <div class="card-body">
        <form id="loginform" method="post">
            <div id="alert"></div>
          <div class="form-group">
            <div class="form-label-group">
              <input type="text" id="username" class="form-control" placeholder="Enter Username" required="required" autofocus="autofocus">
              <label for="username">username</label>
            </div>
          </div>
          <div class="form-group">
            <div class="form-label-group">
              <input type="password" id="password" class="form-control" placeholder="Enter Password" required="required">
              <label for="Password">Password</label>
            </div>
          </div>
          <div class="form-group">
            <div class="checkbox">
              <label>
                <input type="checkbox" id="remember" value="remember-me">
                Remember Password
              </label>
            </div>
          </div>
          <button id="login" class="btn btn-primary btn-block" >LOGIN</button>
        </form>
        <div class="text-center">
          <a class="d-block small" href="forgot-password.php">Forgot Password?</a>
        </div>
      </div>
    </div>
  </div>



  <!-- Bootstrap core JavaScript-->
  <script src="admin/vendor/jquery/jquery.min.js"></script>
  <script src="admin/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="admin/vendor/jquery-easing/jquery.easing.min.js"></script>


<script>
        $(document).ready(function() {

            $(document).on('submit', '#loginform', function(event) {

                event.preventDefault();
                var username = $('#username').val();
                var password = $('#password').val();
                var remember = $('#remember').val();

                $.ajax({

                    url: "process.php",
                    method: "post",
                    data: {
                        username: username, password: password, remember: remember,
                    },
                    success: function(data) {

                        $('#alert').html(data);

                        window.location.replace('admin/');

                    }

                });

            });


        });

    </script>

</body>

</html>
