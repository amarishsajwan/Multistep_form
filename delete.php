<?php
if($_SERVER["REQUEST_METHOD"] == "POST")
{
    include 'db_connect.php';
    $id = $_POST['id'];
      $sql ="DELETE FROM users WHERE `users`.`user_id` = $id";
      $result = mysqli_query($conn , $sql);

      header("Location: /multistep_form/user_data.php");
      }
  
?>