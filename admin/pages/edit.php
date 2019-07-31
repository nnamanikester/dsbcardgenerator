<?php


function updateButton() {


    if (isset($_GET['edit'])) {

        echo "<input type='submit' name='update' value='Update' class='btn btn-success form-control col-md-6' />";

    }

}

function readonly() {

    global $readonly;
    if (isset($_GET['edit'])) {

        $readonly = null;

    } else {

        $readonly = "readonly";

    }
    return $readonly;

}

function updateData() {


        if (isset($_POST['update'])) {

            global $user_id;
            global $conn;

            $user_id      = $_GET['user_id'];

$update_sql = "UPDATE user_data SET title = '{$_POST['title']}', l_name = '{$_POST['l_name']}', f_name = '{$_POST['f_name']}', m_name = '{$_POST['m_name']}', o_names = '{$_POST['o_names']}', prev_l_name = '{$_POST['prev_l_name']}', ";

$update_sql .= "prev_f_name = '{$_POST['prev_f_name']}', prev_m_name = '{$_POST['prev_m_name']}', town_of_res = '{$_POST['town_of_res']}', country_of_res = '{$_POST['country_of_res']}', state_of_res = '{$_POST['state_of_res']}', ";

$update_sql .= "lga_of_res = '{$_POST['lga_of_res']}', address_of_res = '{$_POST['address_of_res']}', postal_code = '{$_POST['postal_code']}', dob = '{$_POST['dob']}', dob_verification = '{$_POST['dob_verification']}', country_of_birth = '{$_POST['country_of_birth']}', ";

$update_sql .= "state_of_birth = '{$_POST['state_of_birth']}', lga_of_birth = '{$_POST['lga_of_birth']}', country_of_origin = '{$_POST['country_of_origin']}', state_of_origin = '{$_POST['state_of_origin']}', lga_of_origin = '{$_POST['lga_of_origin']}', ";

$update_sql .= "town_of_origin = '{$_POST['town_of_origin']}', fathers_country_of_origin = '{$_POST['fathers_country_of_origin']}', fathers_state_of_origin = '{$_POST['fathers_state_of_origin']}', fathers_lga_of_origin = '{$_POST['fathers_lga_of_origin']}', ";

$update_sql .= "fathers_town_of_origin = '{$_POST['fathers_town_of_origin']}', mothers_country_of_origin = '{$_POST['mothers_country_of_origin']}', mothers_state_of_origin = '{$_POST['mothers_state_of_origin']}', mothers_lga_of_origin = '{$_POST['mothers_lga_of_origin']}', ";

$update_sql .= "mothers_town_of_origin = '{$_POST['mothers_town_of_origin']}', gender = '{$_POST['gender']}', height = '{$_POST['height']}', residence_status = '{$_POST['residence_status']}', nationality = '{$_POST['nationality']}', tribal_marks = '{$_POST['tribal_marks']}', ";

$update_sql .= "hair_color = '{$_POST['hair_color']}', hunch_back = '{$_POST['hunch_back']}', visible_scars = '{$_POST['visible_scars']}', other_features = '{$_POST['other_features']}', physical_challenges = '{$_POST['physical_challenges']}', marital_status = '{$_POST['marital_status']}', ";

$update_sql .= "native_language = '{$_POST['native_language']}', r_w_language = '{$_POST['r_w_language']}', other_language = '{$_POST['other_language']}', education_level = '{$_POST['education_level']}', religion = '{$_POST['religion']}', occupation = '{$_POST['occupation']}', ";

$update_sql .= "phone_no = '{$_POST['phone_no']}', employment_status = '{$_POST['employment_status']}', home_delivery = '{$_POST['home_delivery']}', email = '{$_POST['email']}', fathers_l_name = '{$_POST['fathers_l_name']}', fathers_f_name = '{$_POST['fathers_f_name']}', ";

$update_sql .= "fathers_m_name = '{$_POST['fathers_m_name']}', mothers_l_name = '{$_POST['mothers_l_name']}', mothers_f_name = '{$_POST['mothers_f_name']}', mothers_m_name = '{$_POST['mothers_m_name']}', mothers_maiden_name = '{$_POST['mothers_maiden_name']}', ";

$update_sql .= "guardians_l_name = '{$_POST['guardians_l_name']}', guardians_f_name = '{$_POST['guardians_f_name']}', guardians_m_name = '{$_POST['guardians_m_name']}', nok_l_name = '{$_POST['nok_l_name']}', nok_f_name = '{$_POST['nok_f_name']}', nok_m_name = '{$_POST['nok_m_name']}', ";

$update_sql .= "nok_relationship = '{$_POST['nok_relationship']}', nok_country = '{$_POST['nok_country']}', nok_state_of_res = '{$_POST['nok_state_of_res']}', nok_lga_of_res = '{$_POST['nok_lga_of_res']}', nok_town_of_res = '{$_POST['nok_town_of_res']}', nok_address = '{$_POST['nok_address']}', ";

$update_sql .= "nok_nin = '{$_POST['nok_nin']}', nok_postal_code = '{$_POST['nok_postal_code']}', school_name = '{$_POST['school_name']}', department = '{$_POST['department']}', faculty = '{$_POST['faculty']}', year_of_admission = '{$_POST['year_of_admission']}', ";

$update_sql .= "year_of_graduation = '{$_POST['year_of_graduation']}', status = '{$_POST['status']}' ";
$update_sql .= "WHERE id = '{$user_id}'";

$query_update_sql   = $conn->query($update_sql);

if ($query_update_sql) {

    echo "<script>
            alert('Data Updated Successfully!');
            window.location.replace('dashboard.php');
          </script>";

} else {

    die('QUERY FAILED'.$conn->error);

}

        }

}


