<?php
include('../../db/config.php');
$sql = "UPDATE branch SET branch_code='".$_POST['code']."',branch_name='".$_POST['name']."',acc_code='".$_POST['acc']."',bsp_code='".$_POST['bsp']."' WHERE id=".$_POST['id'];

if (mysqli_query($conn, $sql)) {
  echo "Record updated successfully";
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
?>