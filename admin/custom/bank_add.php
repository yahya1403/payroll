<?php
include('../../db/config.php');
$sql = "INSERT INTO bank_details (emp_code, bank_code,branch_code,acc_number)
VALUES ('".$_POST['ecode']."', '".$_POST['bcode']."', '".$_POST['brcode']."', '".$_POST['accno']."')";

if (mysqli_query($conn, $sql)) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
?>