<?php

if($_POST){

  $username=$_POST['username'];
  $password=md5($_POST['password']);



  //$conn = new mysqli('localhost' , 'root' , '', 'horarios');
    $conn = new mysqli('gmgcjwawatv599gq.cbetxkdyhwsb.us-east-1.rds.amazonaws.com' , 'ujxk5mvlgl7433u7' , 'emw0bcwv81427kfo', 'h9otz7j56fr0fro8');

  $q_select= "SELECT * FROM usuario WHERE mailUsuario = '$username' and passwordUsuario = '$password'";

  $result = $conn ->query($q_select);

  if (!$result) die($conn ->error);

  $rows = $result ->num_rows;

  if($rows == 1){

  }else{
    
  }

  echo $rows;

} 
?>