<?php
        session_start();
        require './assets/classes/user.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css?h=c305caef9853c9ccaee9ff7f273bf729">
    <link href='https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha1/dist/css/bootstrap.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat:400,400i,700,700i,600,600i">
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/simple-line-icons/2.4.1/css/simple-line-icons.min.css">
    <link rel="stylesheet" href="assets/css/styles.min.css?h=f73a8ee5429b1011353d0a8fa206f55c">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.10.0/baguetteBox.min.css">
    <title>Profile - Driverless</title>
</head>

<body>
    <!-------Navigation bar--->
    <nav class="navbar navbar-light navbar-expand-lg fixed-top bg-white clean-navbar">
        <div class="container"><a class="navbar-brand logo" href="#"
                style="font-size: 17px;font-family: Montserrat, sans-serif;color: var(--blue);"><strong>Driverless
                    cars</strong></a><button data-toggle="collapse" class="navbar-toggler" data-target="#navcol-1"><span
                    class="sr-only">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navcol-1">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item"><a class="nav-link active" href="index.php">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="cars.html">Cars</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">Profile</a></li>
                    <li class="nav-item"><a class="nav-link" href="contact-us.html">Contact Us</a></li>
                   
                </ul>
            </div>
        </div>
    </nav>

    <!----profile details section---->

    <section>

        <!---------Profile details------------->

        <div class="container rounded bg-white mt-5 mb-5">
            <div class="row">
                <?php
                // fetching user data from the database
                    $_SESSION['id'] = 'Metro';
                    $users = new users();
                  //  $_SESSION['id'] = 'Sylvesternyanga@gmail.com'; // to be replaced with the actual user session id
                    if(isset($_SESSION['id'])){
                        $getInfo = $users->getProfileData($_SESSION['id']);
                        
                        $row = mysqli_fetch_assoc($getInfo);
                        var_dump($row);
                    }
                ?>
                <div class="col-md-3 border-right">
                    <div class="d-flex flex-column align-items-center text-center p-3 py-5">
                        <img
                            class="rounded-circle  mt-5" width="150px"
                            src="./assets/img/avatars/icons8_favorite_male_350px.png">
                            <span class="text-black-50"><span class="font-weight-bold P-4">USERNAME : </span><?php echo $row['Username']; ?></span>
                            <span
                            class="text-black-50"><span class="font-weight-bold P-4">FULL NAME : </span><?php echo $row['Firstname'] . '&nbsp;'. $row['Lastname']; ?></span>
                            <span
                            class="text-black-50"><span class="font-weight-bold P-4">EMAIL : </span><?php echo $row['Email']; ?></span>
                            <span class="text-black-50"><span class="font-weight-bold P-4">DOB : </span><?php echo $row['DoB']; ?></span>
                            <span class="text-black-50"><span class="font-weight-bold P-4">ADDRESS : </span><?php echo $row['Address']; ?></span>
                            <span class="text-black-50"><span class="font-weight-bold P-4">POSTAL CODE : </span><?php echo $row['Postalcode']; ?></span>
                    </div>

                </div>
                <?php  ?>
                 <!---------updating Profile settings------------->
                <div class="col-md-5 border-right">
                    <form action="updateProfile.php" method="POST">
                        <div class="p-3 py-5">
                            <div class="d-flex justify-content-between align-items-center mb-3">
                                <h4 class="text-right">Profile Settings</h4>
                            </div>
                            <div class="row mt-2">
                                <div class="col-md-6"><label class="labels">Name</label><input type="text"
                                        class="form-control" name="firstname" placeholder="" value="<?php echo $row['Firstname']; ?>"></div>
                                <div class="col-md-6"><label class="labels">Surname</label><input type="text"
                                        class="form-control" name="surname" value="<?php echo $row['Lastname']; ?>" placeholder=""></div>
                            </div>
                            <div class="row mt-3">
                            <div class="col-md-12"><label class="labels">Username</label><input type="text"
                                    class="form-control" name="username" placeholder="" value="<?php echo $row['Username']; ?>"></div>
                                <div class="col-md-12"><label class="labels">Email Address</label><input type="email"
                                    class="form-control" name="email" placeholder="" value="<?php echo $row['Email']; ?>"></div>
                                <div class="col-md-12"><label class="labels">Date of Birth</label><input type="date"
                                        class="form-control" name="Dob" placeholder="enter address line 2" value="<?php echo $row['DoB']; ?>"></div>
                                <div class="col-md-12"><label class="labels">Physical Address</label><input type="text"
                                        class="form-control" name="address" placeholder="" value="<?php echo $row['Address']; ?>"></div>
                                <div class="col-md-12"><label class="labels">Postal code</label><input type="text"
                                        class="form-control" name="postal" placeholder="" value="<?php echo $row['Postalcode']; ?>"></div>
                                
                               
                            </div>
                           
                            <div class="mt-5 text-center"><button class="btn btn-primary profile-button" type="submit">Save
                                    Details</button></div>
                        </div>
                    </form>
                   
                </div>

                <!---------Changing password------------->
                <div class="col-md-4">
                    <div class="p-3 py-5">
                        <div class="d-flex justify-content-between align-items-center experience">
                            <span>Change Password</span></div><br>
                                    <form action="updatePassword.php" method="POST">
                                        <div class="col-md-12"><label class="labels">Type the old password</label><input type="password"
                                            class="form-control" placeholder="Old Password.." name="old_password" ></div> <br>
                                    <div class="col-md-12"><label class="labels">Type new password</label><input type="password"
                                            class="form-control" placeholder="New Password.." name="new_password" ></div>
                                    

                                    <div class="text-center mt-4">
                                        <button class="btn btn-primary profile-button" type="submit">Save
                                            Password</button></div>
                                        </div>    
                                        </form>  
                    </div>
                </div>
            </div>
        </div>
        </div>
        </div>
        <script type='text/javascript'
            src='https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha1/dist/js/bootstrap.bundle.min.js'></script>
        <script type='text/javascript'></script>
</body>

</html>
</section>

<!-- Start: Footer Dark -->
<!-- Footer Dark -->
<footer class="footer-dark">
    <div class="container">
        <div class="row">
            <div class="col-sm-6 col-md-3 item">
                <h3>Services</h3>
                <ul>
                    <li><a href="#">Web design</a></li>
                    <li><a href="#">Development</a></li>
                    <li><a href="#">Hosting</a></li>
                </ul>
            </div>
            <div class="col-sm-6 col-md-3 item">
                <h3>About</h3>
                <ul>
                    <li><a href="#">Company</a></li>
                    <li><a href="#">Team</a></li>
                    <li><a href="#">Careers</a></li>
                </ul>
            </div>
            <div class="col-md-6 item text">
                <h3>Driverless</h3>
                <p> Driverless is a Company that Provides information about autonomous vehicles including the Technology of Artificial Intelligence(AI) that is used to develop the Cars.</p>
            </div>
            <div class="col item social"><a href="#"><i class="icon ion-social-facebook"></i></a><a href="#"><i
                        class="icon ion-social-twitter"></i></a><a href="#"><i
                        class="icon ion-social-snapchat"></i></a><a href="#"><i
                        class="icon ion-social-instagram"></i></a></div>
        </div>
        <p class="copyright">Driverless © 2021</p>
    </div>
</footer>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/js/bootstrap.bundle.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.10.0/baguetteBox.min.js"></script>
<script src="assets/js/script.min.js?h=f79f07d57e29993a7bb88b05adbc616d"></script>
</body>

</html>