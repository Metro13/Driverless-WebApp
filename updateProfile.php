<?php
        session_start();
        require './assets/classes/user.php';

        $users = new users();

        $username = $_POST['username'];
        $fname = $_POST['firstname'];
        $sname = $_POST['surname'];
        $Dob = $_POST['Dob'];
        $address = $_POST['address'];
        $postalCode = $_POST['postal'];
        $emailAddress = $_POST['email'];

        if(!empty($username) && !empty($fname) && !empty($sname) && !empty($Dob) && !empty($address) && !empty($postalCode) && !empty($emailAddress))
        {
            // updating profile information
            $update = $users->updateProfileInformation($username,$emailAddress,$fname,$sname,$Dob,$address,$postalCode,$_SESSION['id']);
             if(isset($update)){
                header('Location:profile.php');
             }   
        }
        else{
            $_SESSION['update_error'] = 'Sorry we could not update your Details try again later';
        }

?>