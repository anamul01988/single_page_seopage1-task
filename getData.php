<?php
$conn = mysqli_connect("localhost", "root", "", "upload");

   $result =  mysqli_query($conn, "SELECT * FROM tb_upload;");
  
  echo mysqli_num_rows($result)

?>