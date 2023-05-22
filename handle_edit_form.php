<?php
if($_SERVER["REQUEST_METHOD"] == "POST")
{include 'db_connect.php';
  
  $id= $_GET['uid'];
    $name = $_POST['InputName'];
    $username = $_POST['InputUserName'];
    $email = $_POST['InputEmail'];
    $password = $_POST['InputPassword'];
    $cpassword = $_POST['confirmPassword'];
    $f_name = $_POST['f_name'];
    $l_name = $_POST['l_name'];
    $gender = $_POST['gender'];
    $dob = $_POST['dob'];
    $PhoneNumber = $_POST['PhoneNumber'];
    $RAddress = $_POST['ResidentialAddress'];
    $PAddress = $_POST['PermanentAddress'];
    $Zipcode = $_POST['Zipcode'];
    $State = $_POST['State'];
    $Country = $_POST['Country'];
    $BankName = $_POST['BankName'];
    $BranchName = $_POST['BranchName'];
    $AccountHolderName = $_POST['AccountHolderName'];
    $AccountNo = $_POST['AccountNo']; 
    $createdDate = $_POST['createdDate']; 
    //formatting created date
    $timestampDate=strtotime($createdDate);
    $formattedDate=date('Y-m-d', $timestampDate);
  //  formating date into yyyy-mm-dd
    $timestampdob = strtotime($dob);
    $formattedDob = date('Y-m-d', $timestampdob);
    
      if($password == $cpassword){
      $hash = password_hash($password,PASSWORD_DEFAULT);
      $sql ="UPDATE `users` SET `name` = '$name', `username` = '$username', `email` = '$email ', `first_name` = '$f_name', `last_name` = '$l_name', `gender` = '$gender', `dob` = '$formattedDob', `phone_no` = '$PhoneNumber', `r_address` = '$RAddress', `p_address` = '$PAddress', `zip_code` = '$Zipcode', `state` = '$State', `country` = '$Country', `bank_Name` = ' $BankName', `branch_name` = '$BranchName', `account_holder_name` = '$AccountHolderName', `account_no` = '$AccountNo', `account_created_date` = '$formattedDate' WHERE `users`.`user_id` = $id";
      $result = mysqli_query($conn , $sql);

      header("Location: /multistep_form/user_data.php");
    
      }
  
     else{
       header("Location: /multistep_form/edit_form.js?uid=$id&&signupsuccess=false");
      }
    }

  
?>