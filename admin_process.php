<?php
  $servername = "localhost";
  $username = "root";
  $password = "HjKl0863!@";
  $dbname = "pet_shop";

  $conn = mysqli_connect($servername,$username,$password,$dbname);
  
  if(!$conn){
    die('Could not connect: '. mysl_error());
  }
?>