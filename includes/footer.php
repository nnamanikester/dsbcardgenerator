


      <!-- Sticky Footer -->
      <footer class="sticky-footer mb-5 container">
        <div class="container my-auto">
          <div class="copyright text-center my-auto">
            <span>Copyright &copy; CardGenerator <?php echo date('Y'); ?></span>
          </div>
        </div>
      </footer>

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
