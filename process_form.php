<?php
// Assuming you have a MySQL database setup with appropriate credentials

// Establish database connection
$servername = "sql113.infinityfree.com";
$username = "if0_34525228";
$password = "qUD6D4O8w9";
$dbname = "if0_34525228_survey";

$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Retrieve form data
$age = $_POST['age'];
$transportation = $_POST['transportation'];
$visits = $_POST['visits'];
$selectedDepartments = $_POST['selectedDepartments'];
$Other_Department =$_POST['Other_Department'];
$waiting_time = $_POST['waiting_time'];
$inpatient_days = $_POST['inpatient_days'];
$The_location_of_this_clinic = $_POST['The_location_of_this_clinic'];
$easy_to_navigate_around_the_clinic = $_POST['easy_to_navigate_around_the_clinic'];
$I_found_it_easy_to_navigate_around_the_clinic_text = $_POST['I_found_it_easy_to_navigate_around_the_clinic_text'];
$The_patient_waiting_area_was_well_designed = $_POST['The_patient_waiting_area_was_well_designed'];
$The_patient_waiting_area_was_well_designed_text = $_POST['The_patient_waiting_area_was_well_designed_text'];
$I_was_Satisfied_with_the_waiting_experience = $_POST['I_was_Satisfied_with_the_waiting_experience'];
$I_was_Satisfied_with_the_waiting_experience_text = $_POST['I_was_Satisfied_with_the_waiting_experience_text'];
$The_exam_rooms_allowed_easy_communication = $_POST['The_exam_rooms_allowed_easy_communication'];
$I_had_a_clear_view_in_the_exam_room = $_POST['I_had_a_clear_view_in_the_exam_room'];
$Clinic_infection_prevention_and_fresh_clean_environment = $_POST['Clinic_infection_prevention_and_fresh_clean_environment'];
$This_clinic_utilized_up_to_date_technology = $_POST['This_clinic_utilized_up_to_date_technology'];
$This_clinic_utilized_up_to_date_technology_text = $_POST['This_clinic_utilized_up_to_date_technology_text'];
$I_was_satisfied_with_the_inpatient_experience = $_POST['I_was_satisfied_with_the_inpatient_experience'];
$I_was_satisfied_with_the_inpatient_experience_text = $_POST['I_was_satisfied_with_the_inpatient_experience_text'];
$I_felt_that_the_facilities_in_the_room_met_my_needs = $_POST['I_felt_that_the_facilities_in_the_room_met_my_needs'];
$I_felt_that_the_facilities_in_the_room_met_my_needs_text = $_POST['I_felt_that_the_facilities_in_the_room_met_my_needs_text'];
$Bedroom_privacy_and_dignity_protected = $_POST['Bedroom_privacy_and_dignity_protected'];
$Bedroom_privacy_and_dignity_protected_text = $_POST['Bedroom_privacy_and_dignity_protected_text'];
$Overall_I_was_satisfied_with_the_clinic_environment = $_POST['Overall_I_was_satisfied_with_the_clinic_environment'];
$aob = $_POST['aob'];

// Prepare and execute SQL query
$sql = "INSERT INTO survey_test (
  age,
  transportation,
  visits,
  selectedDepartments,
  Other_Department,
  waiting_time,
  inpatient_days,
  The_location_of_this_clinic,
  easy_to_navigate_around_the_clinic,
  I_found_it_easy_to_navigate_around_the_clinic_text,
  The_patient_waiting_area_was_well_designed,
  The_patient_waiting_area_was_well_designed_text,
  I_was_Satisfied_with_the_waiting_experience,
  I_was_Satisfied_with_the_waiting_experience_text,
  The_exam_rooms_allowed_easy_communication,
  I_had_a_clear_view_in_the_exam_room,
  Clinic_infection_prevention_and_fresh_clean_environment,
  This_clinic_utilized_up_to_date_technology,
  This_clinic_utilized_up_to_date_technology_text,
  I_was_satisfied_with_the_inpatient_experience,
  I_was_satisfied_with_the_inpatient_experience_text,
  I_felt_that_the_facilities_in_the_room_met_my_needs,
  I_felt_that_the_facilities_in_the_room_met_my_needs_text,
  Bedroom_privacy_and_dignity_protected,
  Bedroom_privacy_and_dignity_protected_text,
  Overall_I_was_satisfied_with_the_clinic_environment,
  aob
) VALUES (
  '$age',
  '$transportation',
  '$visits',
  '$selectedDepartments',
  '$Other_Department',
  '$waiting_time',
  '$inpatient_days',
  '$The_location_of_this_clinic',
  '$easy_to_navigate_around_the_clinic',
  '$I_found_it_easy_to_navigate_around_the_clinic_text',
  '$The_patient_waiting_area_was_well_designed',
  '$The_patient_waiting_area_was_well_designed_text',
  '$I_was_Satisfied_with_the_waiting_experience',
  '$I_was_Satisfied_with_the_waiting_experience_text',
  '$The_exam_rooms_allowed_easy_communication',
  '$I_had_a_clear_view_in_the_exam_room',
  '$Clinic_infection_prevention_and_fresh_clean_environment',
  '$This_clinic_utilized_up_to_date_technology',
  '$This_clinic_utilized_up_to_date_technology_text',
  '$I_was_satisfied_with_the_inpatient_experience',
  '$I_was_satisfied_with_the_inpatient_experience_text',
  '$I_felt_that_the_facilities_in_the_room_met_my_needs',
  '$I_felt_that_the_facilities_in_the_room_met_my_needs_text',
  '$Bedroom_privacy_and_dignity_protected',
  '$Bedroom_privacy_and_dignity_protected_text',
  '$Overall_I_was_satisfied_with_the_clinic_environment',
  '$aob'
)";


if ($conn->query($sql) === TRUE) {
    echo "Form submitted successfully!";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

// Close database connection
$conn->close();

// Redirect to thankyou.html
header("Location: thankyou.html");
exit();
?>
