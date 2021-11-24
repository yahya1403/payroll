<?php
  include('../../db/config.php');


   $sql = "SELECT * FROM branch"; 


   $result = mysqli_query($conn, $sql);


   $json = [];
   while($row = mysqli_fetch_assoc($result)){
        $json[$row['id']] = $row['branch_name'];
   }


   echo json_encode($json);
?>