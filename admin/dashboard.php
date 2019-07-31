<?php


          if (isset($_GET['source'])) {

              $source = $_GET['source'];

          } else {

              $source = "";

          }

          switch ($source) {

              case "view_user_data":
                  require "pages/view.php";
                  break;
              default:
                  require "pages/user-data.php";
          }

          ?>

      </div>
      <!-- /.container-fluid -->
<?php
        include "includes/footer.php"

        ?>
