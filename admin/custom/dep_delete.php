<?php
include('../../db/config.php');
$sql = "DELETE FROM department WHERE id=".$_POST['id'];

if (mysqli_query($conn, $sql)) {
  echo "Record Deleted successfully";
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
?>