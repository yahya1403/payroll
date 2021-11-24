<?php
include('../../db/config.php');
$sql = "UPDATE allowance SET ad_code='".$_POST['code']."',ad_name='".$_POST['name']."',ad_flag='".$_POST['flag']."' WHERE id=".$_POST['id'];

if (mysqli_query($conn, $sql)) {
  echo "Record updated successfully";
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
?>