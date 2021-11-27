<?php
include('../../db/config.php');
$sql = "UPDATE bank_details SET emp_code='".$_POST['ecode']."',bank_code='".$_POST['bcode']."',branch_code='".$_POST['brcode']."',acc_number='".$_POST['accno']."' WHERE id=".$_POST['id'];

if (mysqli_query($conn, $sql)) {
  echo "Record updated successfully";
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
?>