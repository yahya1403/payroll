<?php
include('../../db/config.php');
$sql = "UPDATE department SET dep_code='".$_POST['code']."',dep_name='".$_POST['name']."' WHERE id=".$_POST['id'];

if (mysqli_query($conn, $sql)) {
  echo "Record updated successfully";
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
?>