<?php

$rand = substr(str_shuffle("ABCDEFGHIJK"),0, 2);
$ran = substr(str_shuffle("ABCDEFGHIJK"),0, 2);
$ra = substr(str_shuffle("ABCDEFGHIJK"),0, 2);
$r = substr(str_shuffle("ABCDEFGHIJK"),0, 2);
$identification_no = rand(10, 99).$rand.rand(10, 99).$ran.rand(10, 99).$ra.rand(10, 99).$r;
$unique_code       = rand(10, 99).'-'.rand(10, 99).'-'.rand(10, 99).'-'.rand(100, 999);
$serial_no         = rand(1000, 9999).rand(1000, 9999);

$date_of_registeration = date("Y-m-d");

$file_name  = date('Ymdhms').rand(100, 999);

$passport       = $file_name.'_'.$_FILES['passport']['name'];

$passport_temp  = $_FILES['passport']['tmp_name'];

$birth_cert       = $file_name.'_'.$_FILES['birth_cert']['name'];

$birth_cert_temp  = $_FILES['birth_cert']['tmp_name'];

$lga_cert       = $file_name.'_'.$_FILES['lga_cert']['name'];

$lga_cert_temp  = $_FILES['lga_cert']['tmp_name'];

$signature       = $file_name.'_'.$_FILES['signature']['name'];

$signature_temp  = $_FILES['signature']['tmp_name'];



$insert_sql = "INSERT INTO user_data ( title, l_name, f_name, m_name, o_names, prev_l_name, prev_f_name, prev_m_name, town_of_res, country_of_res, state_of_res, lga_of_res, address_of_res, postal_code, dob, dob_verification, country_of_birth, state_of_birth, lga_of_birth, country_of_origin, state_of_origin, lga_of_origin, town_of_origin, fathers_country_of_origin, fathers_state_of_origin, fathers_lga_of_origin, fathers_town_of_origin, mothers_country_of_origin, mothers_state_of_origin, mothers_lga_of_origin, mothers_town_of_origin, gender, height, residence_status, nationality, tribal_marks, hair_color, hunch_back, visible_scars, other_features, physical_challenges, identification_no, unique_code, serial_no, card_type, marital_status, native_language, r_w_language, other_language, education_level, religion, occupation, phone_no, employment_status, home_delivery, email, fathers_l_name, fathers_f_name, fathers_m_name, mothers_l_name, mothers_f_name, mothers_m_name, mothers_maiden_name, guardians_l_name, guardians_f_name, guardians_m_name, nok_l_name, nok_f_name, nok_m_name, nok_relationship, nok_country, nok_state_of_res, nok_lga_of_res, nok_town_of_res, nok_address, nok_nin, nok_postal_code, school_name, department, faculty, year_of_admission, year_of_graduation, passport, signature, lga_cert, birth_cert, date_of_registeration, status) VALUES ('{$_POST['title']}', '{$_POST['l_name']}', '{$_POST['f_name']}', '{$_POST['m_name']}', '{$_POST['o_names']}', '{$_POST['prev_l_name']}', '{$_POST['prev_f_name']}', '{$_POST['prev_m_name']}', '{$_POST['town_of_res']}', '{$_POST['country_of_res']}', '{$_POST['state_of_res']}', '{$_POST['lga_of_res']}', '{$_POST['address_of_res']}', '{$_POST['postal_code']}', '{$_POST['dob']}', '{$_POST['dob_verification']}', '{$_POST['country_of_birth']}', '{$_POST['state_of_birth']}', '{$_POST['lga_of_birth']}', '{$_POST['country_of_origin']}', '{$_POST['state_of_origin']}', '{$_POST['lga_of_origin']}', '{$_POST['town_of_origin']}', '{$_POST['fathers_country_of_origin']}', '{$_POST['fathers_state_of_origin']}', '{$_POST['fathers_lga_of_origin']}', '{$_POST['fathers_town_of_origin']}', '{$_POST['mothers_country_of_origin']}', '{$_POST['mothers_state_of_origin']}', '{$_POST['mothers_lga_of_origin']}', '{$_POST['mothers_town_of_origin']}', '{$_POST['gender']}', '{$_POST['height']}', '{$_POST['residence_status']}', '{$_POST['nationality']}', '{$_POST['tribal_marks']}', '{$_POST['hair_color']}', '{$_POST['hunch_back']}', '{$_POST['visible_scars']}', '{$_POST['other_features']}', '{$_POST['physical_challenges']}', '{$identification_no}', '{$unique_code}', '{$serial_no}', '{$_POST['card_type']}', '{$_POST['marital_status']}', '{$_POST['native_language']}', '{$_POST['r_w_language']}', '{$_POST['other_language']}', '{$_POST['education_level']}', '{$_POST['religion']}', '{$_POST['occupation']}', '{$_POST['phone_no']}', '{$_POST['employment_status']}', '{$_POST['home_delivery']}', '{$_POST['email']}', '{$_POST['fathers_l_name']}', '{$_POST['fathers_f_name']}', '{$_POST['fathers_m_name']}', '{$_POST['mothers_l_name']}', '{$_POST['mothers_f_name']}', '{$_POST['mothers_m_name']}', '{$_POST['mothers_maiden_name']}', '{$_POST['guardians_l_name']}', '{$_POST['guardians_f_name']}', '{$_POST['guardians_m_name']}', '{$_POST['nok_l_name']}', '{$_POST['nok_f_name']}', '{$_POST['nok_m_name']}', '{$_POST['nok_relationship']}', '{$_POST['nok_country']}', '{$_POST['nok_state_of_res']}', '{$_POST['nok_lga_of_res']}', '{$_POST['nok_town_of_res']}', '{$_POST['nok_address']}', '{$_POST['nok_nin']}', '{$_POST['nok_postal_code']}', '{$_POST['school_name']}', '{$_POST['department']}', '{$_POST['faculty']}', '{$_POST['year_of_admission']}', '{$_POST['year_of_graduation']}', '{$passport}', '{$signature}', '{$lga_cert}', '{$birth_cert}', '{$date_of_registeration}', 'Pending' )";


$query_insert = $conn->query($insert_sql);

if ($query_insert) {

    move_uploaded_file($passport_temp, "../uploads/passport/{$passport}");
    move_uploaded_file($signature_temp, "../uploads/signature/{$signature}");
    move_uploaded_file($birth_cert_temp, "../uploads/birth-certificate/{$birth_cert}");
    move_uploaded_file($lga_cert_temp, "../uploads/lga-certificate/{$lga_cert}");

    echo "<script> alert('APPLICATION SUBMITTED SUCCESSFULLY!'); </script>";

} else {

    die("QUERY FAILED".$conn->error);

}
