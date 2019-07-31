

          <div class="card mb-3 mt-3">
          <div class="card-body">
            <div class="table-responsive">
              <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                  <tr>
                    <th>Name</th>
                    <th>Gender</th>
                    <th>Passport</th>
                    <th>Phone No</th>
                    <th>Identification No</th>
                    <th>Card Type</th>
                    <th>Status</th>
                    <th>Registeration Date</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tfoot>
                  <tr>
                    <th>Name</th>
                    <th>Gender</th>
                    <th>Passport</th>
                    <th>Phone No</th>
                    <th>Identification no</th>
                    <th>Card Type</th>
                    <th>Status</th>
                    <th>Registeration Date</th>
                    <th>Action</th>
                  </tr>
                </tfoot>
                <tbody>

                    <?php

                    $identity_sql = "SELECT * FROM user_data WHERE card_type = '{$_POST['card_type']}' AND identification_no = '{$_POST['id_no']}' ";
                    $query_identity = $conn->query($identity_sql);

                    while ($user = $query_identity->fetch_assoc()) {

                        $status_sql = "SELECT * FROM status WHERE status = '{$user['status']}'";
                        $query_status = $conn->query($status_sql);
                        $status = $query_status->fetch_assoc();

                        $gender_sql     = "SELECT * FROM gender WHERE gender = '{$user['gender']}'";
                        $query_gender   = $conn->query($gender_sql);
                        $gender         = $query_gender->fetch_assoc();

                        ?>

                  <tr>
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
                      <td><a class="badge badge-primary mx-1" href="dashboard.php?source=view_user_data&user_id=<?php echo $user['id']; ?>"><i class="fas fa-eye"></i></a><a class="badge badge-danger mx-1" href="dashboard.php?delete=<?php echo $user['id']; ?>"><i class="fas fa-trash-alt"></i></a></td>
                  </tr>

                    <?php
                         }


                    ?>
                </tbody>
              </table>
            </div>
          </div>
        </div>
