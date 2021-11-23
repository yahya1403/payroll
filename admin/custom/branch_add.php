<?php
include('../../db/config.php');
$sql = "INSERT INTO branch (branch_name, branch_code,acc_code,bsp_code)
VALUES ('".$_POST['name']."', '".$_POST['code']."', '".$_POST['acc']."', '".$_POST['bsp']."')";

if (mysqli_query($conn, $sql)) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
?>