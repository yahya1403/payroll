<?php
include('../../db/config.php');
$sql = "UPDATE division SET div_code='".$_POST['code']."',div_name='".$_POST['name']."',acc_code='".$_POST['acc_code']."' WHERE id=".$_POST['id'];

if (mysqli_query($conn, $sql)) {
  echo "Record updated successfully";
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
?>