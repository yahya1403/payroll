<?php
include('../../db/config.php');
$sql = "UPDATE employee SET emp_code='".$_POST['code']."',first_name='".$_POST['fname']."',surname='".$_POST['sname']."',gender='".$_POST['gender']."',division=".$_POST['divi'].",department=".$_POST['dep'].",occupation=".$_POST['occu'].",branch=".$_POST['branch'].", d_o_b='".$_POST['dob']."', date_of_join='".$_POST['doj']."', mobile_no='".$_POST['phone']."',emp_address='".$_POST['address']."', basic_pay='".$_POST['basic']."', income_tax='".$_POST['tax']."', npf='".$_POST['npf']."', npf_per='".$_POST['npfp']."', npf_number='".$_POST['npfno']."', emp_type='".$_POST['emptype']."' WHERE id=".$_POST['id'];

if (mysqli_query($conn, $sql)) {
  echo "Record updated successfully";
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
?>