<?php
include('../../db/config.php');
$sql = "INSERT INTO department (dep_code, dep_name)
VALUES ('".$_POST['code']."', '".$_POST['name']."')";

if (mysqli_query($conn, $sql)) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
?>