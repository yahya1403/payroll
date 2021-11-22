<?php
include('../../db/config.php');
$sql = "INSERT INTO division (div_code, div_name, acc_code)
VALUES ('".$_POST['code']."', '".$_POST['name']."', '".$_POST['acc_code']."')";

if (mysqli_query($conn, $sql)) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
?>