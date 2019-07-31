<?php
$page_title = "User Data";

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
                <li class="breadcrumb-item active">User Data</li>
            </ol>



            <?php

          if (isset($_GET['user_id'])) {

              $user_id = $_GET['user_id'];

              $sql          = "SELECT * FROM user_data WHERE id = {$user_id}";
              $query_sql    = $conn->query($sql);
              $user         = $query_sql->fetch_assoc();

              updateData();

          }

          readonly();

          ?>
            <!-- Page Content -->
            <h1><?php echo $page_title; ?></h1>
            <hr>
            <p>Personal User Informations.</p>


            <div class="card mb-3">

                <div class="card-header ">

                    <div class="col-md-10">
                        <i class="fas fa-user"> </i> <?php echo ucwords($user['f_name'].' '.$user['l_name']).'\'s Information.'; ?>
                    </div>

                    <div class="float-right">
                        <a href="?source=view_user_data&user_id=<?php echo $user['id']; ?>&edit=true" class="btn btn-primary">Edit</a>
                    </div>

                    <div class="card-footer">
                        <a href="cardgenerator.php?print_card=true&user_id=<?php echo $user['id']; ?>" class="btn btn-success">PRINT CARD</a>
                    </div>

                </div>

                <div class="card-body">
                    <div>

                    </div>

                    <form method="post" action="">

                        <div class="row">

                            <div class="form-group col-md-6">
                                <label for="status">Passport:</label><br/>
                                <img class="" src="../uploads/passport/<?php echo $user['passport']; ?>" width='120px' height='120px' alt='passport' />
                            </div>

                            <div class="form-group col-md-3">
                                <label for="status">Status:</label>
                                <select class="input-group form-control" name="status" <?php echo $readonly; ?>>
                                    <option value="">Select Status</option>
                                    <?php
                                  $status_sql = "SELECT * FROM status";
                                  $query_status = $conn->query($status_sql);
                                  while ($status = $query_status->fetch_assoc()) {

                                      echo "<option value='{$status['status']}'>".ucwords($status['status'])."</option>";

                                  }
                                  ?>

                                </select>
                            </div>

                        </div>


                        <!-- WHAT ARE YOUR NAMES -->

                        <div class="row border-primary border mb-1">
                            <h6 class="text-center col-md-12">What Are Your Names?</h6>
                            <hr />
                            <div class="form-group col-md-2">
                                <label for="title">Title:</label>
                                <select class="input-group form-control" name="title" <?php echo $readonly; ?>>
                                    <option value="">Select Title</option>
                                    <?php
                                  $title = "SELECT * FROM title";
                                  $query_title = $conn->query($title);
                                  while ($title = $query_title->fetch_assoc()) {

                                      echo "<option value='{$title['title']}'>".ucwords($title['title'])."</option>";

                                  }
                                  ?>

                                </select>
                            </div>

                            <div class="form-group col-md-3">
                                <label for="l_name">Surname:</label>
                                <input type="text" class="input-group form-control" name="l_name" <?php echo $readonly; ?> value="<?php echo ucwords($user['l_name']); ?>" />
                            </div>

                            <div class="form-group col-md-3">
                                <label for="f_name">First Name:</label>
                                <input type="text" class="input-group form-control" name="f_name" <?php echo $readonly; ?> value="<?php echo ucwords($user['f_name']); ?>" />
                            </div>

                            <div class="form-group col-md-2">
                                <label for="m_name">Middle Name:</label>
                                <input type="text" class="input-group form-control" name="m_name" <?php echo $readonly; ?> value="<?php echo ucwords($user['m_name']); ?>" />
                            </div>

                            <div class="form-group col-md-2">
                                <label for="o_names">Other Names:</label>
                                <input type="text" class="input-group form-control" name="o_names" <?php echo $readonly; ?> value="<?php echo ucwords($user['o_names']); ?>" />
                            </div>

                        </div>

                        <!-- HAVE YOU CHANGED YOUR NAME BEFORE -->

                        <div class="row border-success border mb-1">
                            <h6 class="text-center col-md-12">Have Your Changed Your Name Before?</h6>
                            <hr />

                            <div class="form-group col-md-4">
                                <label for="prev_l_name">Previous Surname:</label>
                                <input type="text" class="input-group form-control" name="prev_l_name" <?php echo $readonly; ?> value="<?php echo ucwords($user['prev_l_name']); ?>" />
                            </div>

                            <div class="form-group col-md-4">
                                <label for="prev_f_name">Previous First Name:</label>
                                <input type="text" class="input-group form-control" name="prev_f_name" <?php echo $readonly; ?> value="<?php echo ucwords($user['prev_f_name']); ?>" />
                            </div>

                            <div class="form-group col-md-4">
                                <label for="prev_m_name">Previous Middle Name:</label>
                                <input type="text" class="input-group form-control" name="prev_m_name" <?php echo $readonly; ?> value="<?php echo ucwords($user['prev_m_name']); ?>" />
                            </div>

                        </div>

                        <!-- WHERE DO YOU LIVE -->

                        <div class="row border-primary border mb-1">
                            <h6 class="text-center col-md-12">Where Do You Live?</h6>
                            <hr />

                            <div class="form-group col-md-4">
                                <label for="town_of_res">Town Of Residence:</label>
                                <input type="text" class="input-group form-control" name="town_of_res" <?php echo $readonly; ?> value="<?php echo ucwords($user['town_of_res']); ?>" />
                            </div>

                            <div class="form-group col-md-4">
                                <label for="state_of_res">State Of Residence:</label>
                                <input type="text" class="input-group form-control" name="state_of_res" <?php echo $readonly; ?> value="<?php echo ucwords($user['state_of_res']); ?>" />
                            </div>

                            <div class="form-group col-md-4">
                                <label for="lga_of_res">LGA Of Residence:</label>
                                <input type="text" class="input-group form-control" name="lga_of_res" <?php echo $readonly; ?> value="<?php echo ucwords($user['lga_of_res']); ?>" />
                            </div>

                            <div class="form-group col-md-4">
                                <label for="address_of_res">Address Of Residence:</label>
                                <input type="text" class="input-group form-control" name="address_of_res" <?php echo $readonly; ?> value="<?php echo ucwords($user['address_of_res']); ?>" />
                            </div>

                            <div class="form-group col-md-4">
                                <label for="postal_code">Postal Code</label>
                                <input type="text" class="input-group form-control" name="postal_code" <?php echo $readonly; ?> value="<?php echo ucwords($user['postal_code']); ?>" />
                            </div>

                            <div class="form-group col-md-4">
                                <label for="country_of_res">Country Of Residence:</label>
                                <input type="text" class="input-group form-control" name="country_of_res" <?php echo $readonly; ?> value="<?php echo ucwords($user['country_of_res']); ?>" />
                            </div>

                        </div>



                        <!-- WHEN AND WHERE WERE YOU BORN? -->

                        <div class="row border-success border mb-1">
                            <h6 class="text-center col-md-12">When And Where Were You Born?</h6>
                            <hr />

                            <div class="form-group col-md-3">
                                <label for="dob">Date Of Birth:</label>
                                <input type="text" type="date" class="input-group form-control" name="dob" <?php echo $readonly; ?> value="<?php echo ucwords($user['dob']); ?>" />
                            </div>
                            <div class="form-group col-md-2">
                                <label for="dob_verification">DOB Verification:</label>
                                <select class="input-group form-control" name="dob_verification" <?php echo $readonly; ?>>
                                    <option value="">Select Verification</option>
                                    <?php
                                  $dob_verification = "SELECT * FROM dob_verification";
                                  $query_dob_v = $conn->query($dob_verification);
                                  while ($dob_v = $query_dob_v->fetch_assoc()) {

                                      echo "<option value='{$dob_v['verification']}'>".ucwords($dob_v['verification'])."</option>";

                                  }
                                  ?>

                                </select>
                            </div>

                            <div class="form-group col-md-3">
                                <label for="country_of_birth">Country Of Birth:</label>
                                <input type="text" class="input-group form-control" name="country_of_birth" <?php echo $readonly; ?> value="<?php echo ucwords($user['country_of_birth']); ?>" />
                            </div>

                            <div class="form-group col-md-2">
                                <label for="state_of_birth">State Of Birth:</label>
                                <input type="text" class="input-group form-control" name="state_of_birth" <?php echo $readonly; ?> value="<?php echo ucwords($user['state_of_birth']); ?>" />
                            </div>

                            <div class="form-group col-md-2">
                                <label for="lga_of_birth">LGA Of Birth:</label>
                                <input type="text" class="input-group form-control" name="lga_of_birth" <?php echo $readonly; ?> value="<?php echo ucwords($user['lga_of_birth']); ?>" />
                            </div>

                        </div>

                        <!-- WHERE ARE YOU FROM? -->

                        <div class="row border-primary border mb-1">
                            <h6 class="text-center col-md-12">Where Are You From?</h6>
                            <hr />

                            <div class="form-group col-md-3">
                                <label for="town_of_origin">Town Of Origin:</label>
                                <input type="text" class="input-group form-control" name="town_of_origin" <?php echo $readonly; ?> value="<?php echo ucwords($user['town_of_origin']); ?>" />
                            </div>

                            <div class="form-group col-md-3">
                                <label for="country_of_origin">Country Of Origin:</label>
                                <input type="text" class="input-group form-control" name="country_of_origin" <?php echo $readonly; ?> value="<?php echo ucwords($user['country_of_origin']); ?>" />
                            </div>

                            <div class="form-group col-md-3">
                                <label for="state_of_origin">State Of Origin:</label>
                                <input type="text" class="input-group form-control" name="state_of_origin" <?php echo $readonly; ?> value="<?php echo ucwords($user['state_of_origin']); ?>" />
                            </div>

                            <div class="form-group col-md-3">
                                <label for="lga_of_origin">LGA Of Origin:</label>
                                <input type="text" class="input-group form-control" name="lga_of_origin" <?php echo $readonly; ?> value="<?php echo ucwords($user['lga_of_origin']); ?>" />
                            </div>

                        </div>

                        <!-- WHERE IS YOUR FATHER FROM? -->

                        <div class="row border-success border mb-1">
                            <h6 class="text-center col-md-12">Where Is Your Father From?</h6>
                            <hr />

                            <div class="form-group col-md-3">
                                <label for="f_town_of_origin">Town Of Origin:</label>
                                <input type="text" class="input-group form-control" name="fathers_town_of_origin" <?php echo $readonly; ?> value="<?php echo ucwords($user['fathers_town_of_origin']); ?>" />
                            </div>

                            <div class="form-group col-md-3">
                                <label for="f_country_of_origin">Country Of Origin:</label>
                                <input type="text" class="input-group form-control" name="fathers_country_of_origin" <?php echo $readonly; ?> value="<?php echo ucwords($user['fathers_country_of_origin']); ?>" />
                            </div>

                            <div class="form-group col-md-3">
                                <label for="f_state_of_origin">State Of Origin:</label>
                                <input type="text" class="input-group form-control" name="fathers_state_of_origin" <?php echo $readonly; ?> value="<?php echo ucwords($user['fathers_state_of_origin']); ?>" />
                            </div>

                            <div class="form-group col-md-3">
                                <label for="f_lga_of_origin">LGA Of Origin:</label>
                                <input type="text" class="input-group form-control" name="fathers_lga_of_origin" <?php echo $readonly; ?> value="<?php echo ucwords($user['fathers_lga_of_origin']); ?>" />
                            </div>

                        </div>

                        <!-- WHERE IS YOUR MOTHER FROM? -->

                        <div class="row border-primary border mb-1">
                            <h6 class="text-center col-md-12">Where Is Your Mother From?</h6>
                            <hr />

                            <div class="form-group col-md-3">
                                <label for="m_town_of_origin">Town Of Origin:</label>
                                <input type="text" class="input-group form-control" name="mothers_town_of_origin" <?php echo $readonly; ?> value="<?php echo ucwords($user['mothers_town_of_origin']); ?>" />
                            </div>

                            <div class="form-group col-md-3">
                                <label for="m_country_of_origin">Country Of Origin:</label>
                                <input type="text" class="input-group form-control" name="mothers_country_of_origin" <?php echo $readonly; ?> value="<?php echo ucwords($user['mothers_country_of_origin']); ?>" />
                            </div>

                            <div class="form-group col-md-3">
                                <label for="m_state_of_origin">State Of Origin:</label>
                                <input type="text" class="input-group form-control" name="mothers_state_of_origin" <?php echo $readonly; ?> value="<?php echo ucwords($user['mothers_state_of_origin']); ?>" />
                            </div>

                            <div class="form-group col-md-3">
                                <label for="m_lga_of_origin">LGA Of Origin:</label>
                                <input type="text" class="input-group form-control" name="mothers_lga_of_origin" <?php echo $readonly; ?> value="<?php echo ucwords($user['mothers_lga_of_origin']); ?>" />
                            </div>

                        </div>

                        <!--YOUR PHYSICAL FEATURES? -->

                        <div class="row border-success border mb-1">
                            <h6 class="text-center col-md-12">Your Physical Features?</h6>
                            <hr />

                            <div class="form-group col-md-2">
                                <label for="gender">Gender:</label>
                                <select class="input-group form-control" name="gender" <?php echo $readonly; ?>>
                                    <option value="">Select Gender</option>
                                    <?php
                                  $gender_sql   = "SELECT * FROM gender";
                                  $query_gender = $conn->query($gender_sql);
                                  while ($gender = $query_gender->fetch_assoc()) {

                                      echo "<option value='{$gender['gender']}'>".ucwords($gender['gender'])."</option>";

                                  }
                                  ?>

                                </select>
                            </div>

                            <div class="form-group col-md-2">
                                <label for="residence_status">Residence Status:</label>
                                <select class="input-group form-control" name="residence_status" <?php echo $readonly; ?>>
                                    <option value="">Select Residence Status</option>
                                    <?php
                                  $residence_sql = "SELECT * FROM residence_status";
                                  $query_residence = $conn->query($residence_sql);
                                  while ($residence = $query_residence->fetch_assoc()) {

                                      echo "<option value='{$residence['residence']}'>".ucwords($residence['residence'])."</option>";

                                  }
                                  ?>

                                </select>
                            </div>

                            <div class="form-group col-md-3">
                                <label for="height">Height:</label>
                                <input type="text" class="input-group form-control" name="height" <?php echo $readonly; ?> value="<?php echo ucwords($user['height']); ?>" />
                            </div>

                            <div class="form-group col-md-3">
                                <label for="nationality">Nationality:</label>
                                <input type="text" class="input-group form-control" name="nationality" <?php echo $readonly; ?> value="<?php echo ucwords($user['nationality']); ?>" />
                            </div>

                            <div class="form-group col-md-2">
                                <label for="hair_color">Hair Color:</label>
                                <input type="text" class="input-group form-control" name="hair_color" <?php echo $readonly; ?> value="<?php echo ucwords($user['hair_color']); ?>" />
                            </div>

                            <div class="form-group col-md-3">
                                <label for="lga_of_birth">Tribal Marks:</label>
                                <input type="radio" <?php echo $readonly; ?> name="tribal_marks" value="yes"/>Yes
                                <input type="radio" <?php echo $readonly; ?> checked name="tribal_marks" value="no"/>No
                            </div>

                            <div class="form-group col-md-3">
                                <label for="visible_scars">Visible Scars:</label>
                                <input type="radio" <?php echo $readonly; ?> name="visible_scars" value="yes"/>Yes
                                <input type="radio" <?php echo $readonly; ?> checked name="visible_scars" value="no"/>No
                            </div>

                            <div class="form-group col-md-3">
                                <label for="hunch_back">Hunch Back:</label>
                                <input type="radio" <?php echo $readonly; ?> name="hunch_back" value="yes"/>Yes
                                <input type="radio" <?php echo $readonly; ?> checked name="hunch_back" value="no"/>No
                            </div>

                            <div class="form-group col-md-3">
                                <label for="others">Others:</label>
                                <input type="text" class="input-group form-control" name="other_features" <?php echo $readonly; ?> value="<?php echo $conn->real_escape_string(ucwords($user['other_features'])); ?>" />
                            </div>

                        </div>

                        <!-- ANY PHYSIAL CHALLENGES? -->

                        <div class="row border-primary border mb-1">
                            <h6 class="text-center col-md-12">Any Physical Challenges?</h6>
                            <hr />

                            <div class="form-group col-md-12">
                                <label for="physical_challenges">Physical Challenges:</label>
                                <textarea class="input-group form-control" name="physical_challenges"><?php echo ucwords($user['physical_challenges']); ?></textarea>
                            </div>

                        </div>

                        <!-- ABOUT THE CARD -->

                        <div class="row border-success border mb-1">
                            <h6 class="text-center col-md-12">About The Card<br/>
                            <small class="text-secondary">cannot be changed</small></h6>
                            <hr />

                            <div class="form-group col-md-6">
                                <label for="card_type">Card Type:</label>
                                <input type="text" readonly class="input-group form-control" name="card_type" value="<?php echo ucwords($user['card_type']); ?>" />
                            </div>

                            <div class="form-group col-md-6">
                                <label for="issuing_bank">Issuing Bank:</label>
                                <input type="text" readonly class="input-group form-control" name="issuing_bank" value="<?php echo ucwords($user['issuing_bank']); ?>" />
                            </div>

                        </div>

                        <!-- YOUR IDENTIFICATION NUMBER -->

                        <div class="row border-primary border mb-1">
                            <h6 class="text-center col-md-12">Your Identification Number<br/>
                            <small class="text-secondary">cannot be changed</small></h6>
                            <hr />

                            <div class="form-group col-md-12">
                                <label for="identification_no">Identification_no:</label>
                                <input type="text" readonly class="text-success text-center input-group form-control" name="identification_no" value="<?php echo ucwords($user['identification_no']); ?>" />
                            </div>

                        </div>

                        <!-- YOUR OTHER DETAILS -->

                        <div class="row border-success border mb-1">
                            <h6 class="text-center col-md-12">Your Other Details</h6>
                            <hr />

                            <div class="form-group col-md-3">
                                <label for="marital_status">Marital Status:</label>
                                <select class="input-group form-control" name="marital_status" <?php echo $readonly; ?>>
                                    <option value="">Select Marital Status</option>
                                    <?php
                                  $marital_sql = "SELECT * FROM marital_status";
                                  $query_marital = $conn->query($marital_sql);
                                  while ($marital = $query_marital->fetch_assoc()) {

                                      echo "<option value='{$marital['marital_status']}'>".ucwords($marital['marital_status'])."</option>";

                                  }
                                  ?>

                                </select>
                            </div>

                            <div class="form-group col-md-3">
                                <label for="native_language">Native Language:</label>
                                <input type="text" class="input-group form-control" name="native_language" <?php echo $readonly; ?> value="<?php echo ucwords($user['native_language']); ?>" />
                            </div>

                            <div class="form-group col-md-3">
                                <label for="r_w_language">Language Your Read And Write:</label>
                                <input type="text" class="input-group form-control" name="r_w_language" <?php echo $readonly; ?> value="<?php echo ucwords($user['r_w_language']); ?>" />
                            </div>

                            <div class="form-group col-md-3">
                                <label for="other_languages">Other Languages:</label>
                                <input type="text" class="input-group form-control" name="other_language" <?php echo $readonly; ?> value="<?php echo ucwords($user['other_language']); ?>" />
                            </div>

                            <div class="form-group col-md-3">
                                <label for="education_level">Education Level:</label>
                                <select class="input-group form-control" name="education_level" <?php echo $readonly; ?>>
                                    <option value="">Select Education Level</option>
                                    <?php
                                  $education_sql = "SELECT * FROM education_level";
                                  $query_education = $conn->query($education_sql);
                                  while ($education = $query_education->fetch_assoc()) {

                                      echo "<option value='{$education['education_level']}'>".ucwords($education['education_level'])."</option>";

                                  }
                                  ?>

                                </select>

                            </div>

                            <div class="form-group col-md-3">
                                <label for="religion">Religion:</label>
                                <select class="input-group form-control" name="religion" <?php echo $readonly; ?>>
                                    <option value="">Select Religion</option>
                                    <?php
                                  $religion_sql = "SELECT * FROM religion";
                                  $query_religion = $conn->query($religion_sql);
                                  while ($religion = $query_religion->fetch_assoc()) {

                                      echo "<option value='{$religion['religion']}'>".ucwords($religion['religion'])."</option>";

                                  }
                                  ?>

                                </select>
                            </div>

                            <div class="form-group col-md-3">
                                <label for="occupation">Occupation/Profession:</label>
                                <input type="text" class="input-group form-control" name="occupation" <?php echo $readonly; ?> value="<?php echo ucwords($user['occupation']); ?>" />
                            </div>

                            <div class="form-group col-md-3">
                                <label for="telephone">Telephone:</label>
                                <input type="text" class="input-group form-control" name="phone_no" <?php echo $readonly; ?> value="<?php echo ucwords($user['phone_no']); ?>" />
                            </div>

                            <div class="form-group col-md-4">
                                <label for="employment_status">Employment Status:</label>
                                <select class="input-group form-control" name="employment_status" <?php echo $readonly; ?>>
                                    <option value="">Select Employment Status</option>
                                    <?php
                                  $employment_sql = "SELECT * FROM employment_status";
                                  $query_employment = $conn->query($employment_sql);
                                  while ($employment = $query_employment->fetch_assoc()) {

                                      echo "<option value='{$employment['employment_status_id']}'>".ucwords($employment['employment_status'])."</option>";

                                  }
                                  ?>

                                </select>
                            </div>

                            <div class="form-group col-md-4">
                                <label for="home_delivery_of_card">Home Delivery Of The Card:<br/><small class="text-secondary"><b>Note:</b> Courier fees will apply. </small></label>
                                <select class="input-group form-control" name="home_delivery" <?php echo $readonly; ?>>
                                    <option value="">Select </option>
                                    <?php
                                  $home_sql = "SELECT * FROM home_delivery";
                                  $query_home = $conn->query($home_sql);
                                  while ($home = $query_home->fetch_assoc()) {

                                      echo "<option value='{$home['home_delivery']}'>".ucwords($home['home_delivery'])."</option>";

                                  }
                                  ?>

                                </select>
                            </div>

                            <div class="form-group col-md-4">
                                <label for="email">Email:</label>
                                <input type="text" class="input-group form-control" name="email" <?php echo $readonly; ?> value="<?php echo ucwords($user['email']); ?>" />
                            </div>

                        </div>

                        <!-- DDETAILS OF YOUR PARENTS -->

                        <div class="row border-primary border mb-1">
                            <h6 class="text-center col-md-12">Details Of Your Parents</h6>
                            <hr />

                            <div class="form-group col-md-3">
                                <label for="f_l_name">Father's Last Name:</label>
                                <input type="text" class="input-group form-control" name="fathers_l_name" <?php echo $readonly; ?> value="<?php echo ucwords($user['fathers_l_name']); ?>" />
                            </div>

                            <div class="form-group col-md-3">
                                <label for="f_f_name">Father's First Name:</label>
                                <input type="text" class="input-group form-control" name="fathers_f_name" <?php echo $readonly; ?> value="<?php echo ucwords($user['fathers_f_name']); ?>" />
                            </div>

                            <div class="form-group col-md-3">
                                <label for="f_m_name">Father's Middle Name:</label>
                                <input type="text" class="input-group form-control" name="fathers_m_name" <?php echo $readonly; ?> value="<?php echo ucwords($user['fathers_m_name']); ?>" />
                            </div>

                            <div class="form-group col-md-3">
                                <label for="m_l_name">Mother's Last Name:</label>
                                <input type="text" class="input-group form-control" name="mothers_l_name" <?php echo $readonly; ?> value="<?php echo ucwords($user['mothers_l_name']); ?>" />
                            </div>

                            <div class="form-group col-md-3">
                                <label for="m_maiden_name">Mother's Maiden Name:</label>
                                <input type="text" class="input-group form-control" name="mothers_maiden_name" <?php echo $readonly; ?> value="<?php echo ucwords($user['mothers_maiden_name']); ?>" />
                            </div>

                            <div class="form-group col-md-3">
                                <label for="m_f_name">Mother's First Name:</label>
                                <input type="text" class="input-group form-control" name="mothers_f_name" <?php echo $readonly; ?> value="<?php echo ucwords($user['mothers_f_name']); ?>" />
                            </div>

                            <div class="form-group col-md-3">
                                <label for="m_m_name">Mother's Middle Name:</label>
                                <input type="text" class="input-group form-control" name="mothers_m_name" <?php echo $readonly; ?> value="<?php echo ucwords($user['mothers_m_name']); ?>" />
                            </div>

                        </div>

                        <!-- GUARDIAN DETAILS -->

                        <div class="row border-success border mb-1">
                            <h6 class="text-center col-md-12">Guardian Details</h6>
                            <hr />

                            <div class="form-group col-md-4">
                                <label for="g_l_name">Guardian's Last Name:</label>
                                <input type="text" class="input-group form-control" name="guardians_l_name" <?php echo $readonly; ?> value="<?php echo ucwords($user['guardians_l_name']); ?>" />
                            </div>

                            <div class="form-group col-md-4">
                                <label for="g_f_name">Guardian's First Name:</label>
                                <input type="text" class="input-group form-control" name="guardians_f_name" <?php echo $readonly; ?> value="<?php echo ucwords($user['guardians_f_name']); ?>" />
                            </div>

                            <div class="form-group col-md-4">
                                <label for="g_m_name">Middle Name:</label>
                                <input type="text" class="input-group form-control" name="guardians_m_name" <?php echo $readonly; ?> value="<?php echo ucwords($user['guardians_m_name']); ?>" />
                            </div>

                        </div>

                        <!-- NEXT OF KIN'S DETAILS -->

                        <div class="row border-primary border mb-1">
                            <h6 class="text-center col-md-12">Your Next Of Kin Details</h6>
                            <hr />

                            <div class="form-group col-md-3">
                                <label for="nok_l_name">Last Name:</label>
                                <input type="text" class="input-group form-control" name="nok_l_name" <?php echo $readonly; ?> value="<?php echo ucwords($user['guardians_l_name']); ?>" />
                            </div>

                            <div class="form-group col-md-3">
                                <label for="nok_f_name">First Name:</label>
                                <input type="text" class="input-group form-control" name="nok_f_name" <?php echo $readonly; ?> value="<?php echo ucwords($user['guardians_f_name']); ?>" />
                            </div>

                            <div class="form-group col-md-3">
                                <label for="nok_m_name">Middle Name:</label>
                                <input type="text" class="input-group form-control" name="nok_m_name" <?php echo $readonly; ?> value="<?php echo ucwords($user['nok_m_name']); ?>" />
                            </div>
                            <div class="form-group col-md-3">
                                <label for="nok_relationship">Relationship With Netx OF Kin:</label>
                                <input type="text" class="input-group form-control" name="nok_relationship" <?php echo $readonly; ?> value="<?php echo ucwords($user['nok_relationship']); ?>" />
                            </div>

                        </div>

                        <!-- ADDRESS OF YOUR NEXT OF KIN -->

                        <div class="row border-success border mb-1">
                            <h6 class="text-center col-md-12">Address OF Your Next Of Kin</h6>
                            <hr />

                            <div class="form-group col-md-4">
                                <label for="nok_country">Country Of Residence:</label>
                                <input type="text" class="input-group form-control" name="nok_country" <?php echo $readonly; ?> value="<?php echo ucwords($user['nok_country']); ?>" />
                            </div>

                            <div class="form-group col-md-4">
                                <label for="nok_state_of_res">State Of Residence:</label>
                                <input type="text" class="input-group form-control" name="nok_state_of_res" <?php echo $readonly; ?> value="<?php echo ucwords($user['nok_state_of_res']); ?>" />
                            </div>

                            <div class="form-group col-md-4">
                                <label for="nok_lga_of_res">LGA Of Residence:</label>
                                <input type="text" class="input-group form-control" name="nok_lga_of_res" <?php echo $readonly; ?> value="<?php echo ucwords($user['nok_lga_of_res']); ?>" />
                            </div>

                            <div class="form-group col-md-4">
                                <label for="nok_town_of_res">Town Of Residence:</label>
                                <input type="text" class="input-group form-control" name="nok_town_of_res" <?php echo $readonly; ?> value="<?php echo ucwords($user['nok_town_of_res']); ?>" />
                            </div>

                            <div class="form-group col-md-4">
                                <label for="nok_address">Street Address:</label>
                                <input type="text" class="input-group form-control" name="nok_address" <?php echo $readonly; ?> value="<?php echo ucwords($user['nok_address']); ?>" />
                            </div>

                            <div class="form-group col-md-4">
                                <label for="nok_postal_code">Postal Code:</label>
                                <input type="text" class="input-group form-control" name="nok_postal_code" <?php echo $readonly; ?> value="<?php echo ucwords($user['nok_postal_code']); ?>" />
                            </div>

                            <div class="form-group col-md-4">
                                <label for="nok_nin">Next Of KIn's NIN:</label>
                                <input type="text" class="input-group form-control" name="nok_nin" <?php echo $readonly; ?> value="<?php echo ucwords($user['nok_nin']); ?>" />
                            </div>

                        </div>

                        <!-- SCHOOL DETAILS -->

                        <div class="row border-primary border mb-1">
                            <h6 class="text-center col-md-12">School Details</h6>
                            <hr />

                            <div class="form-group col-md-4">
                                <label for="school_name">Name Of School:</label>
                                <input type="text" class="input-group form-control" name="school_name" <?php echo $readonly; ?> value="<?php echo ucwords($user['school_name']); ?>" />
                            </div>

                            <div class="form-group col-md-4">
                                <label for="faculty">Faculty:</label>
                                <input type="text" class="input-group form-control" name="faculty" <?php echo $readonly; ?> value="<?php echo ucwords($user['faculty']); ?>" />
                            </div>

                            <div class="form-group col-md-4">
                                <label for="department">Department:</label>
                                <input type="text" class="input-group form-control" name="department" <?php echo $readonly; ?> value="<?php echo ucwords($user['department']); ?>" />
                            </div>

                            <div class="form-group col-md-4">
                                <label for="year_of_admission">Year Of Admission:</label>
                                <input type="text" class="input-group form-control" name="year_of_admission" <?php echo $readonly; ?> value="<?php echo ucwords($user['year_of_admission']); ?>" />
                            </div>

                            <div class="form-group col-md-4">
                                <label for="year_of_graduation">Year Of Graduation:</label>
                                <input type="text" class="input-group form-control" name="year_of_graduation" <?php echo $readonly; ?> value="<?php echo ucwords($user['year_of_graduation']); ?>" />
                            </div>

                        </div>
                        <div class="text-center">
                            <?php updateButton(); ?>
                        </div>

                    </form>

                </div>

                <div class="card-footer">
                    <a href="?source=view_user_data&user_id=<?php echo $user['id']; ?>&edit=true" class="btn btn-primary">Edit</a>
                </div>

                <div class="card-footer">
                    <a href="cardgenerator.php?print_card=true&user_id=<?php echo $user['id']; ?>" class="btn btn-success">PRINT CARD</a>
                </div>
            </div>
