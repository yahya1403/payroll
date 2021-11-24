<?php
  include('../../db/config.php');


   $sql = "SELECT * FROM occupation"; 


   $result = mysqli_query($conn, $sql);


   $json = [];
   while($row = mysqli_fetch_assoc($result)){
        $json[$row['id']] = $row['occu_name'];
   }


   echo json_encode($json);
?>