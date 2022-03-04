<?php
      session_start();

            $host ="localhost";
            $dbusername="root";
            $dbpassword="";
            $database="DriverlessDB";

             // Create connection
            $con = mysqli_connect($host,$dbusername,$dbpassword) or die(mysqli_error($con));
           
            // Check connection
            if (!$con) {
                die("Connection failed: " . mysqli_connect_error($con));
                }
               
            // Creating Database
            
            $sql = "CREATE DATABASE DriverlessDB";
            if (mysqli_query($con, $sql)) {
                } else {
                 echo die (mysqli_error($con));
                }

            mysqli_close($con);
            
              // creating User table
            $con = mysqli_connect($host,$dbusername,$dbpassword,$database) or die(mysqli_error($con));
            $query = "CREATE TABLE Users (
                Username varchar(30),
                Firstname varchar(30),
                Lastname varchar(30),
                Password varchar(10),
                Email Varchar(30),
                DoB varchar(10),
                Address varchar(40),
                Postalcode varchar(10),
                Status int NOT NULL DEFAULT '0',
                PRIMARY KEY (Username)
            )";
          $result= mysqli_query($con,$query) or die("Table Creation Failed");

          // Creating Contact us table
          $con = mysqli_connect($host,$dbusername,$dbpassword,$database) or die(mysqli_error($con));
            $query = "CREATE TABLE Contacts (
                ID int NOT NULL AUTO_INCREMENT,
                Fullname Varchar(30) NOT NULL,
                Subject Varchar(30) NOT NULL,
                Email Varchar(30),
                Message varchar(200),
                PRIMARY KEY (ID)
            )";
          $res= mysqli_query($con,$query) or die("Table Creation Failed");

          // Creating newsletter table
          $con = mysqli_connect($host,$dbusername,$dbpassword,$database) or die(mysqli_error($con));
            $query = "CREATE TABLE newsletter (
                ID INT NOT NULL AUTO_INCREMENT,
                emailAdress Varchar(40),
                PRIMARY KEY (ID)
            )";
          $res= mysqli_query($con,$query) or die("Table creation failed");

          if($res == true){
              header('Location:Sign in.php');
          }
    ?>