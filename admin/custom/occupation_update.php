<?php
include('../../db/config.php');
$sql = "UPDATE occupation SET occu_code='".$_POST['code']."',occu_name='".$_POST['name']."' WHERE id=".$_POST['id'];

if (mysqli_query($conn, $sql)) {
  echo "Record updated successfully";
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
?>