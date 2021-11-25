<?php
include('../../db/config.php');
$sql ="INSERT INTO employee(emp_code,first_name,surname,gender,division,department,occupation,branch, d_o_b, date_of_join, mobile_no,emp_address, basic_pay, income_tax, npf, npf_per, npf_number, emp_type)
VALUES ('".$_POST['code']."', '".$_POST['fname']."', '".$_POST['sname']."', '".$_POST['gender']."', ".$_POST['divi'].", ".$_POST['dep'].", ".$_POST['occu'].", ".$_POST['branch'].", '".$_POST['dob']."', '".$_POST['doj']."', '".$_POST['phone']."', '".$_POST['address']."', '".$_POST['basic']."', '".$_POST['tax']."', '".$_POST['npf']."', '".$_POST['npfp']."', '".$_POST['npfno']."', '".$_POST['emptype']."');" ;

if (mysqli_query($conn, $sql)) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
?>