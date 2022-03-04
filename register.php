<?php
    session_start();
    require './assets/classes/user.php';

    $username = $_POST['username'];
    $fname = $_POST['Firstname'];
    $sname = $_POST['Lastname'];
    $Dob = $_POST['Dob'];
    $address = $_POST['Address'];
    $postalCode = $_POST['Postal'];
    $emailAddress = $_POST['email'];
    $password = $_POST['password'];

    $Users = new Users();

    if(!empty($username) && !empty($fname) && !empty($sname) && !empty($Dob) && !empty($address) && !empty($postalCode) && !empty($emailAddress) && !empty($password))
    {
      $checkUsername = $Users->checkUsernameAvailability($username);

      $row = mysqli_fetch_assoc($checkUsername);

      if($row['Username'] == $username){
        $_SESSION['UsernameError'] = 'Username Already Exists';
        header('Location:Sign up.php');
      }
      else{

        $newuser = $Users->registerUsers($username, $fname, $sname, $Dob, $address, $emailAddress, $postalCode, $password);
        header('Location:Sign in.php');
      }
      
    }

?>
