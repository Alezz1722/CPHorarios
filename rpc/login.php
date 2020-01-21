<?php

if($_POST){

  $username=$_POST['username'];
  $password=md5($_POST['password']);



  $conn = new mysqli('localhost' , 'root' , '', 'horarios');


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