<?php
if($_SERVER["REQUEST_METHOD"] == "POST")
{
    include 'db_connect.php';
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
    $RAddress = $_POST['RAddress'];
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
      $hash = password_hash($pass,PASSWORD_DEFAULT);
      $sql ="INSERT INTO `users` (`name`, `username`, `email`, `password`, `first_name`, `last_name`, `gender`, `dob`, `phone_no`, `r_address`, `p_address`, `zip_code`, `state`, `country`, `bank_Name`, `branch_name`, `account_holder_name`, `account_no`, `account_created_date`) VALUES (' $name', '$username', '$email', '$hash','$f_name', '$l_name', '$gender','$formattedDob',' $PhoneNumber', '$RAddress', '$PAddress', $Zipcode, '$State', '$Country', '$BankName ', '$BranchName', '$AccountHolderName', $AccountNo, '$formattedDate')";
      $result = mysqli_query($conn , $sql);

      header("Location: /multistep_form/user_data.php");
    
      }
  
     else{
       header("Location: /multistep_form/M_form.php?signupsuccess=false");
      }
    }

  
?>