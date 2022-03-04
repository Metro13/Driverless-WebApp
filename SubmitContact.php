<?php 
    session_start();
    require './assets/classes/user.php';


    //intializing the users class 
    $users = new users();

    $name = $_SESSION['contact_name'];
    $subject = $_SESSION['contact_subject'];
    $email = $_SESSION['contact_email'];
    $message =  $_SESSION['contact_message'];

    if (isset($name) && isset($subject) && isset($email) && isset($message)){

        $submitDetails = $users->sendContactMessage($name,$subject,$email,$message);

        if($submitDetails == true)
        {
            header('Location:contact-us.html');
        }
        else{
            
            header('Location:FAQ.phps');
        }
    }
?>