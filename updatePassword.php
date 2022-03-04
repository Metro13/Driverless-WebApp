<?php
        session_start();
        require './assets/classes/user.php';

        $users = new users();

        // getting POST data
        $old_Pass = $_POST['old_password'];
        $new_Pass = $_POST['new_password'];
        $user_ID = $_SESSION['id'];

        
        if(isset($user_ID)){
            // fetching user information from the database
            $getInfo = $users->getProfileData($user_ID);
            $row = mysqli_fetch_assoc($getInfo);
        }

        if(isset($old_Pass) && isset($new_Pass)){

            // checking the old password and the submitted old password
            if($row['Password'] == $old_Pass){
                //updating password
                $update = $users->updatePassword($new_Pass,$user_ID);
                if(isset($update)){
                    header('Location:sign in.php');
                }
            }
            else{
                //setting session error message
                $_SESSION['old_PassError'] = 'please enter your correct old password';
            }
        }
        else{
            $_SESSION['null_values'] = "You can't submit Empty Fields";
        }
        
?>