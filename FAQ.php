
<?php
    session_start();

    $name = $_POST['name'];
    $subject = $_POST['subject'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    if (isset($name) && isset($subject) && isset($email) && isset($message)){

        $_SESSION['contact_name'] = $name;
        $_SESSION['contact_subject'] = $subject;
        $_SESSION['contact_email'] = $email;
        $_SESSION['contact_message'] = $message;
    }
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Contact Us - Driverless</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css?h=c305caef9853c9ccaee9ff7f273bf729">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat:400,400i,700,700i,600,600i">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/simple-line-icons/2.4.1/css/simple-line-icons.min.css">
    <link rel="stylesheet" href="assets/css/styles.min.css?h=f73a8ee5429b1011353d0a8fa206f55c">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.10.0/baguetteBox.min.css">
</head>

<body>
    <nav class="navbar navbar-light navbar-expand-lg fixed-top bg-white clean-navbar">
        <div class="container"><a class="navbar-brand logo" href="#" style="font-size: 17px;font-family: Montserrat, sans-serif;color: var(--blue);"><strong>Driverless cars</strong></a><button data-toggle="collapse" class="navbar-toggler" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navcol-1">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item"><a class="nav-link active" href="index.php">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">Cars</a></li>
                    <li class="nav-item"><a class="nav-link" href="profile.php">Profile</a></li>
                    <li class="nav-item"><a class="nav-link " href="contact-us.html">Contact Us</a></li>
                    
                </ul>
            </div>
        </div>
    </nav>
    <main >
        <section class="FAQ"">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12 sm-12 text-center">
                        <h4>Frequently Asked Questions(FAQ's)</h4>
                        <div class="panel panel-primary">
                            <div class="panel-heading">
                                <h3 class="panel-title">What are Autonomous Vehicles?</h3>
                            </div>
                            <div class="panel-body">
                                It is a self driving car, driverless car or a robo-car that is capable of sensing the environment and moving safely with little or no human input.
                            </div>
                        </div>
                        <div class="panel panel-primary">
                            <div class="panel-heading">
                                <h3 class="panel-title">How does Artificial Intelligence work on Autonomous Vehicles?</h3>
                            </div>
                            <div class="panel-body">
                                Artificial Intelligence equips the vehicles with multiple sensors, such as cameras, Radars and Lidar which help the cars to understand the environment better and in path planning by generating a mass amout of Data.
                            </div>
                        </div>
                        <div class="panel panel-primary">
                            <div class="panel-heading">
                                <h3 class="panel-title">Are Autonomous Vehicles safe?</h3>
                            </div>
                            <div class="panel-body">
                               According to the insurance institute for Highway safety, Autonomous technologies such as forward collision and lane departure, warning systems, side view assist and adaptive headlights will potentially prevent or mitigate crashes, and the reduction in injuries and fatalities can be up to 33%.
                            </div>
                        </div>
                        <div class="panel panel-primary">
                            <div class="panel-heading">
                                <h3 class="panel-title">Which Car Manufactures are making Autonomous Vehicles?</h3>
                            </div>
                            <div class="panel-body">
                                CMU Navlab, Google cars, Tesla, Renault, Toyota, Audi, Volvo, Mercedez Benz, Continental's AutonomousVehicles, General motors are some of the top companies making Autonomous Vehicles.
                            </div>
                        </div>
                        <div class="panel panel-primary">
                            <div class="panel-heading">
                                <h3 class="panel-title">Are Autonomous Vehicles Legal on the Road?</h3>
                            </div>
                            <div class="panel-body">
                               Currently, there are no legally operating, fully Autonomous Vehicles in the united state. How ever there are fewer vehicles with Artificial Intelligence operating with fewer feature like the Driverless vehicles.
                            </div>
                        </div>
                        <div class="panel panel-primary">
                            <div class="panel-heading">
                                <h3 class="panel-title">How much does it cost to buy an Autonomous Vehicle??</h3>
                            </div>
                            <div class="panel-body">
                                Autonomous Vehicles costs depending on Manufactures beand and features, but on average Autonomous Vehicles costs about $30,000 base price.
                            </div>
                        </div>
                        <div class="panel panel-primary">
                            <div class="panel-heading">
                                <h3 class="panel-title">When did Autonomous Vehicles start getting Developed?</h3>
                            </div>
                            <div class="panel-body">
                               The first self-sufficient Autonomous cars appeared in the 1980's, with Carnegie Mellon University's Navlab and 
                               ALV Projects in 1984 and Mercedez Benz and Bundeswehr University Munich's Eureka Prometheus Project in 1987.
                            </div>
                        </div>
                        <div class="buttons">
                            <a href="contact-us.html"><button class="btn btn-info">Back</button></a>
                            <a href="SubmitContact.php"><button class="btn btn-info">Continue Submission</button></a>
                        </div>
                        
                    </div>
                </div>
            </div>
    
        </section>
    </main>

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
                <div class="col item social"><a href="#"><i class="icon ion-social-facebook"></i></a><a href="#"><i class="icon ion-social-twitter"></i></a><a href="#"><i class="icon ion-social-snapchat"></i></a><a href="#"><i class="icon ion-social-instagram"></i></a></div>
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