<?php
  include('../../db/config.php');


   $sql = "SELECT * FROM employee"; 


   $result = mysqli_query($conn, $sql);


   $json = [];
   while($row = mysqli_fetch_assoc($result)){
        $json[$row['id']] = $row['emp_code'];
   }


   echo json_encode($json);
?>