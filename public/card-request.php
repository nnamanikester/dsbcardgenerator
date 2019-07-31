<?php
$page_title = "Application Request";
include "includes/header.php";
?>

<?php include "includes/nav.php"; ?>

<?php

$conn = new mysqli('localhost','kester', '620061.kes', 'idcard');


?>

<div class="wrapper registration-from">
    <div class="container">
      <!-- PERSON'S DETAILS -->

       <h3 class="mt-4 text-center">ID CARD REQUEST APPLICATION FORM</h3>
        <div class="form-register bg-light border shadow p-4 mt-4 mb-5">

            <form class="was-validated" action="" method="post" enctype="multipart/form-data">
                <div>
                    <?php

                    if (isset($_POST['request'])) {

                            require "../pages/card-request.php";

                        }

                    ?>
                </div>

                   <p>DOCUMENTS</p>
                <div class="row">
                    <div class="form-group col-md-3">
                        <label for="passport"><span class="text-danger">*</span> PASSPORT PHOTOGRAPH: </label>
                        <input type="file" name="passport" class="form-control" required>
                    </div>
                    <div class="form-group col-md-3">
                        <label for="lga_cert"><span class="text-danger">*</span> LGA CERTIFICATE: </label>
                        <input type="file" name="lga_cert" class="form-control" required>
                    </div>
                    <div class="form-group col-md-3">
                        <label for="birth_cert"><span class="text-danger">*</span> BIRTH CERTIFICATE: </label>
                        <input type="file" name="birth_cert" class="form-control" required>
                    </div>
                    <div class="form-group col-md-3">
                        <label for="signature"><span class="text-danger">*</span> SIGNATURE PHOTOGRAPH: </label>
                        <input type="file" name="signature" class="form-control" required>
                    </div>
                </div>

                <p>WHAT ARE YOUR NAMES?</p>
                <div class="row">
                    <div class="form-group col-md-4">
                        <label for="title"><span class="text-danger">*</span> TITLE: </label>
                        <select class="select2 form-control" name="title" required>
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

                    <div class="form-group col-md-4">
                        <label for="lname"><span class="text-danger">*</span> LAST NAME: </label>
                        <input type="text" name="l_name" class="form-control" required>
                    </div>
                    <div class="form-group col-md-4">
                        <label for="fname"><span class="text-danger">*</span> FIRST NAME: </label>
                        <input type="text" name="f_name" class="form-control" required>
                    </div>
                </div>

                <div class="row">
                    <div class="form-group col-md-4">
                        <label for="mname">MIDDLE NAME: </label>
                        <input type="text" name="m_name" class="form-control">
                    </div>
                    <div class="form-group col-md-4">
                        <label for="oname">OTHER NAMES: </label>
                        <input type="text" name="o_names" class="form-control">
                    </div>
                </div>


      <!-- CHANGED NAME BEFORE -->

                <p>HAVE YOUR CHANGED YOUR NAME BEFORE?</p>
                <div class="row">
                    <div class="form-group col-md-4">
                        <label for="p-surname">Previous Surname: </label>
                        <input type="text" name="prev_l_name" class="form-control">
                    </div>
                    <div class="form-group col-md-4">
                        <label for="p-fname">Previous First Name: </label>
                        <input type="text" name="prev_f_name" class="form-control">
                    </div>
                    <div class="form-group col-md-4">
                        <label for="p-midname">Middle Name: </label>
                        <input type="text" name="prev_m_name" class="form-control">
                    </div>
                </div>


      <!-- HOME ADDRESS -->

                <div class="form-group">
                    <p>WHERE DO YOU LIVE?</p>
                    <div class="row mt-2">
                        <div class="form-group col-md-4">
                            <label for="town"><span class="text-danger">*</span> TOWN/CITY OF RESIDENCE:</label>
                            <input type="text" name="town_of_res" class="form-control" required>
                        </div>
                        <div class="form-group col-md-4">
                            <label for="country"><span class="text-danger">*</span> COUNTRY OF RESIDENCE:</label>
                            <input type="text" name="country_of_res" class="form-control" required>
                        </div>
                        <div class="form-group col-md-4">
                            <label for="state"><span class="text-danger">*</span> STATE OF RESIDENCE</label>
                            <input type="text" name="state_of_res" class="form-control" required>
                        </div>
                    </div>

                    <div class="row">
                        <div class="form-group col-md-6">
                            <label for="localGov"><span class="text-danger">*</span> LOCAL GOVERNMENT AREA OF RESIDENCE</label>
                            <input type="text" name="lga_of_res" class="form-control" required>
                        </div>
                        <div class="form-group col-md-4">
                            <label for="address"><span class="text-danger">*</span> ADDRESS OF RESIDENCE:</label>
                            <input type="text" name="address_of_res" class="form-control" required>
                        </div>

                        <div class="form-group col-md-2">
                            <label for="postal">POSTAL CODE: </label>
                            <input type="text" name="postal_code" class="form-control">
                        </div>
                    </div>


      <!-- PLACE OF BIRTH AND VERIFICATION -->

                    <p>WHEN AND WHERE WERE YOU BORN?</p>
                    <div class="row">
                        <div class="form-group col-md-4">
                            <label for="dob"><span class="text-danger">*</span> DATE OF BIRTH:</label>
                            <input type="date" name="dob" class="form-control" required>
                        </div>

                        <div class="form-group col-md-4">
                           <label for="dob_v"><span class="text-danger">*</span>DATE OF BIRTH VERIFICATION: </label> <br/>
                            <select class="input-group form-control" name="dob_verification" required>
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

                        <div class="form-group col-md-4">
                            <label for="placeOfBirthCountry"><span class="text-danger">*</span> PLACE OF BIRTH - COUNTRY:</label>
                            <input type="text" name="country_of_birth" class="form-control" required>
                        </div>
                    </div>

                    <div class="row">
                        <div class="form-group col-md-6">
                            <label for="placeOfBirthState"><span class="text-danger">*</span> PLACE OF BIRTH - STATE:</label>
                            <input type="text" name="state_of_birth" class="form-control" required>
                        </div>

                        <div class="form-group col-md-6">
                            <label for="placeOfBirthLGA"><span class="text-danger">*</span> PLACE OF BIRTH - LGA:</label>
                            <input type="text" name="lga_of_birth" class="form-control" required>
                        </div>
                    </div>


      <!-- NATIONALITY OF PERSON -->

                    <p>WHERE ARE YOU FROM?</p>
                    <div class="row">
                        <div class="form-group col-md-3">
                            <label for="country"><span class="text-danger">*</span> PLACE OF ORIGIN - COUNTRY:</label>
                            <input type="text" name="country_of_origin" class="form-control" required>
                        </div>
                        <div class="form-group col-md-3">
                            <label for="state"><span class="text-danger">*</span> PLACE OF ORIGIN - STATE:</label>
                            <input type="text" name="state_of_origin" class="form-control" required>
                        </div>
                        <div class="form-group col-md-3">
                            <label for="lga"><span class="text-danger">*</span> PLACE OF ORIGIN - LGA:</label>
                            <input type="text" name="lga_of_origin" class="form-control" required>
                        </div>
                        <div class="form-group col-md-3">
                            <label for="town"><span class="text-danger">*</span> PLACE OF ORIGIN - TOWN:</label>
                            <input type="text" name="town_of_origin" class="form-control" required>
                        </div>
                    </div>


      <!-- NATIONALITY OF PERSON'S FATHER -->

                    <p>WHERE IS YOUR FATHER FROM?</p>
                    <div class="row">
                        <div class="form-group col-md-3">
                            <label for="f_country"> PLACE OF ORIGIN - COUNTRY:</label>
                            <input type="text" name="fathers_country_of_origin" class="form-control">
                        </div>
                        <div class="form-group col-sm-3">
                            <label for="f_state"> PLACE OF ORIGIN - STATE:</label>
                            <input type="text" name="fathers_state_of_origin" class="form-control">
                        </div>
                        <div class="form-group col-md-3">
                            <label for="f_lga"> PLACE OF ORIGIN - LGA:</label>
                            <input type="text" name="fathers_lga_of_origin" class="form-control">
                        </div>
                        <div class="form-group col-sm-3">
                            <label for="f_town"> PLACE OF ORIGIN - TOWN:</label>
                            <input type="text" name="fathers_town_of_origin" class="form-control">
                        </div>
                    </div>


      <!-- NATIONALITY OF PERSON'S FATHER -->

                    <p>WHERE IS YOUR MOTHER FROM?</p>
                    <div class="row">
                        <div class="form-group col-md-3">
                            <label for="m_country"> PLACE OF ORIGIN - COUNTRY:</label>
                            <input type="text" name="mothers_country_of_origin" class="form-control">
                        </div>
                        <div class="form-group col-md-3">
                            <label for="m_state"> PLACE OF ORIGIN - STATE:</label>
                            <input type="text" name="mothers_state_of_origin" class="form-control">
                        </div>
                        <div class="form-group col-md-3">
                            <label for="m_lga"> PLACE OF ORIGIN - LGA:</label>
                            <input type="text" name="mothers_lga_of_origin" class="form-control">
                        </div>
                        <div class="form-group col-md-3">
                            <label for="m_town"> PLACE OF ORIGIN - TOWN:</label>
                            <input type="text" name="mothers_town_of_origin" class="form-control">
                        </div>
                    </div>


      <!-- PERSON PHYSICAL FEATURES -->

                    <p>YOUR PHYSICAL FEATURES</p>
                    <div class="row">
                        <div class="form-group col-md-4">
                            <label for="gender"><span class="text-danger">*</span> GENDER:</label><br/>
                            <select class="input-group form-control" name="gender" required>
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

                        <div class="col-md-4 form-group">
                            <label for="hair_color"><span class="text-danger">*</span>HAIR COLOR:</label>
                            <input type="text" name="hair_color" class="form-control" required>
                        </div>

                        <div class="col-md-4 form-group">
                            <label for="height"> HEIGHT: (centimetres) </label>
                            <input type="text" name="height" class="form-control">
                        </div>
                    </div>

                    <div class="row">

                        <div class="col-md-3 form-group">
                            <label for="visible_scars">VISIBLE SCARS </label>
                            <input type="radio"  name="visible_scars" value="yes"/>Yes
                            <input type="radio"  checked name="visible_scars" value="no"/>No
                        </div>

                        <div class="form-group col-md-3">
                            <label for="tribal_mark">TRIBAL MARK </label>
                            <input type="radio"  name="tribal_marks" value="yes"/>Yes
                            <input type="radio" checked name="tribal_marks" value="no"/>No
                        </div>

                        <div class="col-md-3 form-group">
                            <label for="hunch_back">HUNCH BACK:</label>
                            <input type="radio"  name="hunch_back" value="yes"/>Yes
                            <input type="radio"  checked name="hunch_back" value="no"/>No
                        </div>

                        <div class="col-md-3 form-group">
                            <label for="others">OTHERS</label>
                            <input type="text" name="other_features" class="form-control">
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-sm-6 form-group">
                            <label for="residence_status"><span class="text-danger">*</span> RESIDENCE STATUS:</label>
                            <select class="input-group form-control" name="residence_status" required>
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

                        <div class="col-md-6 form-group">
                            <label for="nationality"><span class="text-danger">*</span> NATIONALITY</label>
                            <input type="text" name="nationality" class="form-control" required>
                        </div>

                    </div>


      <!-- PERSON'S PHYSICAL CHALLENGE -->

                    <p>ANY PHYSICAL CHALLENGE?</p>
                    <div class="row">
                        <div class="col-sm-6 form-group">
                            <label for="physical_challenges">Physical Challenges</label>
                            <textarea class="input-group form-control" name="physical_challenges"></textarea>
                        </div>

                    </div>
      <!-- ABOUT THE CARD -->

                    <p>ABOUT THE CARD</p>
                    <div class="row">
                        <div class="col-md-6 form-group">
                            <label for="card_type"><span class="text-danger">*</span> CARD TYPE:</label>
                            <select class="input-group form-control" name="card_type" required>
                                    <option value="">Select Card Type</option>
                                    <?php
                                      $card_sql = "SELECT * FROM card_type";
                                      $query_card = $conn->query($card_sql);
                                      while ($card = $query_card->fetch_assoc()) {

                                      echo "<option value='{$card['card_type']}'>".ucwords($card['card_type'])."</option>";

                                  }
                                  ?>

                                </select>
                        </div>
                    </div>

      <!-- OTHER DETAILS OF PERSON -->

                    <p>YOUR OTHER DETAILS</p>
                    <div class="row">

                        <div class="col-md-3 form-group">
                            <label for="marital_status"><span class="text-danger">*</span> MARITAL STATUS: </label>
                            <select class="input-group form-control" name="marital_status" required>
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

                        <div class="col-md-3 form-group">
                            <label for="main_lag"><span class="text-danger">*</span> NATIVE LANGUAGE SPOKEN: </label>
                            <input type="text" class="form-control" name="native_language" required>
                        </div>

                        <div class="col-md-3 form-group">
                            <label for="lag_read"><span class="text-danger">*</span>  LANGUAGE YOU READ/WRITE: </label>
                            <input type="text" class="form-control" name="r_w_language" required>
                        </div>

                        <div class="col-md-3 form-group">
                            <label for="other_lag">OTHER LANGUAGES: </label>
                            <input type="text" class="form-control" name="other_language">
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-4 form-group">
                            <label for="education"><span class="text-danger">*</span> EDUCATION LEVEL: </label>
                            <select class="input-group form-control" name="education_level" required>
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

                        <div class="col-md-4 form-group">
                            <label for="religion"><span class="text-danger">*</span> RELIGION: </label>
                            <select class="input-group form-control" name="religion" required>
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

                        <div class="col-md-4 form-group">
                            <label for="occupation"><span class="text-danger">*</span> OCCUPATION/PROFESSION: </label>
                            <input type="text" name="occupation" class="form-control" required>
                        </div>

                        <div class="col-md-6 form-group">
                            <label for="tel_phone"><span class="text-danger">*</span> TELEPHONE: </label>
                            <input type="text" name="phone_no" class="form-control" required>
                        </div>

                        <div class="col-md-6 form-group">
                            <label for="emp_stat"><span class="text-danger">*</span> EMPLOYMENT STATUS: </label>
                            <select class="input-group form-control" name="employment_status" required>
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

                    </div>

                    <div class="row">


                        <div class="col-md-6 form-group">
                            <label for="delivery"><span class="text-danger">*</span> HOME DELIVERY OF THE CARD <i>(courier fees will apply): </i></label>
                        </div>

                        <div class="col-md-12 form-group">
                            <select class="input-group form-control" name="home_delivery" required>
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

                        <div class="col-md-6 form-group">
                            <label for="note"><small><span class="text-danger">*</span> Note that the option 'NO' indicates </small>COLLECTION AT POINT OF REGISTRATION</label>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md form-group">
                            <label for="email"><span class="text-danger">*</span> EMAIL: </label>
                            <input type="email" name="email" class="form-control" required>
                        </div>
                    </div>


      <!-- DETAILS OF PARENTS -->

                    <p>DETAILS OF YOUR PARENTS</p>
                    <div class="row">
                        <div class="col-md-3 form-group">
                            <label for="father_surname">FATHER'S SURNAME: </label>
                            <input type="text" name="fathers_l_name" class="form-control">
                        </div>

                        <div class="col-md-3 form-group">
                            <label for="father_fname">FATHER'S FIRST NAME: </label>
                            <input type="text" name="fathers_f_name" class="form-control">
                        </div>

                        <div class="col-md-3 form-group">
                            <label for="father_midname">FATHER'S MIDDLE NAME: </label>
                            <input type="text" name="fathers_m_name" class="form-control">
                        </div>

                    </div>

                    <div class="row">
                        <div class="col-md-4 form-group">
                            <label for="mother_surname">MOTHER'S SURNAME: </label>
                            <input type="text" name="mothers_l_name" class="form-control">
                        </div>

                        <div class="col-md-4 form-group">
                            <label for="mother_fname">MOTHER'S FIRST NAME: </label>
                            <input type="text" name="mothers_f_name" class="form-control">
                        </div>

                        <div class="col-md-4 form-group">
                            <label for="mother_midname">MOTHER'S MIDDLE NAME: </label>
                            <input type="text" name="mothers_m_name" class="form-control">
                        </div>

                        <div class="col-md-4 form-group">
                            <label for="mother_maiden_name">MOTHER'S MAIDEN NAME: </label>
                            <input type="text" name="mothers_maiden_name" class="form-control">
                        </div>

                    </div>


      <!-- GUARDIAN DETAILS -->

                    <p>GUARDIAN DETAILS</p>
                    <div class="row">
                        <div class="col-md-3 form-group">
                            <label for="gaurd_surname">SURNAME: </label>
                            <input type="text" name="guardians_l_name" class="form-control">
                        </div>

                        <div class="col-md-2 form-group">
                            <label for="gaurd_fname">FIRST NAME: </label>
                            <input type="text" name="guardians_f_name" class="form-control">
                        </div>

                        <div class="col-md-3 form-group">
                            <label for="gaurd_midname">MIDDLE NAME: </label>
                            <input type="text" name="guardians_m_name" class="form-control">
                        </div>
                    </div>


      <!-- NEXT OF KIN DETAILS -->

                    <p>YOUR NEXT OF KIN DETAILS</p>
                    <div class="row">
                        <div class="col-md-6 form-group">
                            <label for="kin_surname"><span class="text-danger">*</span> SURNAME OF NEXT OF KIN: </label>
                            <input type="text" name="nok_l_name" class="form-control">
                        </div>

                        <div class="col-md-6 form-group">
                            <label for="kin_fname"><span class="text-danger">*</span>FIRST NAME OF NEXT OF KIN: </label>
                            <input type="text" name="nok_f_name" class="form-control">
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6 form-group">
                            <label for="kin_midname"><span class="text-danger">*</span> MIDDLE NAME OF NEXT OF KIN: </label>
                            <input type="text" name="nok_m_name" class="form-control">
                        </div>

                        <div class="col-md-6 form-group">
                            <label for="gaurd_nin"><span class="text-danger">*</span> RELATIONSHIP WITH NEXT OF KIN: </label>
                            <input type="text" name="nok_relationship" class="form-control">
                        </div>

                    </div>


      <!-- ADDRESS OF NEXT OF KIN -->

                    <p>ADDRESS OF YOUR NEXT OF KIN</p>
                    <div class="row">
                        <div class="col-md-4 form-group">
                            <label for="kin_country"><span class="text-danger">*</span> COUNTRY OF RESIDENCE</label>
                            <input type="text" name="nok_country" class="form-control" required>
                        </div>

                        <div class="col-md-4 form-group">
                            <label for="kin_state"><span class="text-danger">*</span> STATE OF RESIDENCE</label>
                            <input type="text" name="nok_state_of_res" class="form-control" required>
                        </div>

                        <div class="col-md-4 form-group">
                            <label for="kin_lga"><span class="text-danger">*</span> LOCAL GOVERNMENT AREA OF RESIDENCE</label>
                            <input type="text" name="nok_lga_of_res" class="form-control" required>
                        </div>
                    </div>

                    <div class="row">

                        <div class="col-md-5 form-group">
                            <label for="kin_city"><span class="text-danger">*</span> TOWN/CITY RESIDENCE</label>
                            <input type="text" name="nok_town_of_res" class="form-control" required>
                        </div>

                        <div class="col-md-5 form-group">
                            <label for="kin_address"><span class="text-danger">*</span> STREET ADRDRESS</label>
                            <input type="text" name="nok_address" class="form-control" required>
                        </div>

                        <div class="col-md-2 form-group">
                            <label for="kin_pcode">POSTAL CODE: </label>
                            <input type="text" name="nok_postal_code" class="form-control">
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md form-group">
                            <label for="kin_nin">NEXT OF KIN'S NIN: </label>
                            <input type="text" name="nok_nin" class="form-control">
                        </div>
                    </div>

                    <p>EDUCATIONAL DETAILS <small> For STudents Only</small></p>
                    <div class="row">
                        <div class="col-md-4 form-group">
                            <label for="sschool_name"> NAME OF SCHHOL</label>
                            <input type="text" name="school_name" class="form-control">
                        </div>

                        <div class="col-md-4 form-group">
                            <label for="faculty"> FACULTY</label>
                            <input type="text" name="faculty" class="form-control">
                        </div>

                        <div class="col-md-4 form-group">
                            <label for="department">DEPARTMENT</label>
                            <input type="text" name="department" class="form-control">
                        </div>


                        <div class="col-md-6 form-group">
                            <label for="year_of_admission">YEAR OF ADMISSION: </label>
                            <input type="date" name="year_of_admission" class="form-control">
                        </div>

                        <div class="col-md-6 form-group">
                            <label for="year_of_graduation">YEAR OF GRADUATION: </label>
                            <input type="date" name="year_of_graduation" class="form-control">
                        </div>

                    </div>

      <!-- DECLARATION -->


                    <p>DECLARATION/ATTESTATION</p>
                    <span><small>
                        I certify that the information provided by me on this form is complete, true and accurate. I understand that the information provided by me on this form
                        and my biometrics shall constitute my personal information/data to be entered into the National Identity Database. I consent to sharing of my data
                        provided herein with any organization permitted by the NIMC Act 23 of 2007 and within the Nigerian Law. I hereby apply for a National Identification
                        Number (NIN) and a National Identity (Smart) Card. I accept that this form may be scanned, saved and discarded after use as the Commission may deem
                        fit. I understand and accept that if any information I have provided herein is not correct or is false, the Commission reserves the right of prosecution if
                        discovered.
                    </small></span>

                    <div class="row mt-3">

                        <div class="col-md-6 form-group">
                            <label for="date">Date: </label>
                            <?php echo date("d/m/Y") ?>
                        </div>
                    </div>

                    <p><small><i>ALL FIELDS MARKED <span class="text-danger">*</span> <strong><u>MUST</u></strong> BE FILLED </i></small></p>
                </div> <!-- ending -->

                <center>
                    <input type="submit" class="btn btn-primary" name="request" value="APPLY">
                </center>

            </form>
        </div>
    </div>
</div>

<?php include "includes/footer.php"; ?>
