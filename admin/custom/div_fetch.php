<?php
  include('../../db/config.php');


   $sql = "SELECT * FROM division"; 


   $result = mysqli_query($conn, $sql);


   $json = [];
   while($row = mysqli_fetch_assoc($result)){
        $json[$row['id']] = $row['div_name'];
   }


   echo json_encode($json);
?>