<?php
include('../../db/config.php');
$sql = "INSERT INTO allowance (ad_code, ad_name, ad_flag)
VALUES ('".$_POST['code']."', '".$_POST['name']."', '".$_POST['flag']."')";

if (mysqli_query($conn, $sql)) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
?>