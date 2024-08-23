<?php
include_once "array.php";
?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Mohamed Nasser's Resume</title>

    
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/fontawsom-all.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/style.css" />
</head>

<body>
    <div class="container-fluid overcover">
        <div class="container profile-box">
            <div class="row">
                <div class="col-md-4 left-co">
                    <div class="left-side">
                        <div class="profile-info">
                            <img src="assets/images/medo.jpg" alt="">
                            <h3><?php echo $data["name"]?></h3>
                            <span><?php echo $data["job title"]?></span>
                        </div>
                        <h4 class="ltitle">Contact</h4>
                        <div class="contact-box pb0">
                            <div class="icon">
                                <i class="fas fa-phone"></i>
                            </div>
                            <div class="detail">
                            <?php echo $data["contact"]["phone"]?>
                            </div>
                        </div>
                        <div class="contact-box pb0">
                            <div class="icon">
                                <i class="fas fa-globe-americas"></i>
                            </div>
                            <div class="detail">
                            <?php echo $data["contact"]["email"]?>
                            </div>
                        </div>
                        <div class="contact-box">
                            <div class="icon">
                                <i class="fas fa-map-marker-alt"></i>
                            </div>
                            <div class="detail">
                            <?php echo $data["address"]?>
                            </div>
                        </div>
                        <h4 class="ltitle">Contact</h4>
                        <ul class="row social-link no-margin">
                            <li><i class="fab fa-facebook-f"></i></li>
                            <li><i class="fab fa-twitter"></i></li>
                            <li><i class="fab fa-google-plus-g"></i></li>
                            <li><i class="fab fa-linkedin-in"></i></li>
                            <li><i class="fab fa-github"></i></li>
                        </ul>
                        
                        <h4 class="ltitle">Hobbies</h4>
                        <ul class="hoby row no-margin">
                            <li><i class="fas fa-pencil-alt"></i> <br> Writing</li>
                            <li><i class="fas fa-bicycle"></i> <br> Cycling</li>
                            <li><i class="fas fa-futbol"></i> <br> Football</li>
                            <li><i class="fas fa-film"></i><br> Movies</li>
                            <li><i class="fas fa-plane-departure"></i> <br>Travel</li>
                            <li><i class="fas fa-gamepad"></i> <br> Games</li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-8 rt-div">
                    <div class="rit-cover">
                        <div class="hotkey">
                            <h1 class=""><?php echo $data["name"]?></h1>
                            <small><?php echo $data["job title"]?></small><br>
                            <small>Birthdate: <?php echo $data["birthdate"]?> -22 years</small>

                        </div>
                        <h2 class="rit-titl"><i class="far fa-user"></i> Profile</h2>
                        <div class="about">
                            <p>I am a dedicated, organized and methodical individual. I have good interpersonal skills, am an excellent team worker and am keen and very willing to learn and develop new skills. I am reliable and dependable and often seek new responsibilities within a wide range of employment areas.</p>
                            <div class="btn-ro row no-margin">
                                <ul class="btn-link">
                                    <li>
                                        <a href=""><i class="fas fa-paper-plane"></i> Hire Me</a>
                                    </li>
                                    <li>
                                        <a href=""><i class="fas fa-cloud-download-alt"></i> Download Resume</a>
                                    </li>
                                </ul>
                            </div>
                        </div>

                        <h2 class="rit-titl"><i class="fas fa-briefcase"></i> Work Experiance</h2>
                        <div class="work-exp">
                            <h6><?php echo $data["companies"][0]["job role"]?>
                            <span><?php echo $data["companies"][0]["from date"]?>-<?php echo $data["companies"][0]["to date"]?></span></h6>
                            <i><?php echo $data["companies"][0]["company name"]?></i>
                            <ul>
                                <li><i class="far fa-hand-point-right"></i><?php echo $data["companies"][0]["description"]?></li>
                                
                            </ul>
                        </div>
                        <div class="work-exp">
                            <h6><?php echo $data["companies"][1]["job role"]?>
                            <span><?php echo $data["companies"][1]["from date"]?>-<?php echo $data["companies"][1]["to date"]?></span></h6>
                            <i><?php echo $data["companies"][1]["company name"]?></i>
                            <ul>
                                <li><i class="far fa-hand-point-right"></i><?php echo $data["companies"][1]["description"]?></li>
                                
                                
                            </ul>
                        </div>
                        <div class="work-exp">
                            <h6><?php echo $data["companies"][2]["job role"]?>
                                <span><?php echo $data["companies"][2]["from date"]?>-<?php echo $data["companies"][2]["to date"]?></span></h6>
                            <i><?php echo $data["companies"][2]["company name"]?></i>
                            <ul>
                                <li><i class="far fa-hand-point-right"></i><?php echo $data["companies"][1]["description"]?></li>
                               
                            </ul>
                        </div>

                        <h2 class="rit-titl"><i class="fas fa-graduation-cap"></i> Education</h2>
                        <div class="education">
                            <ul class="row no-margin">
                                <li class="col-md-6">
                                    <span><?php echo $data["education"]["enrolling date"]?>-<?php echo $data["education"]["graduation date"]?></span> <br>
                                    <?php echo $data["education"]["degree"]?> - <?php echo $data["education"]["name"]?></li>
                              
                            </ul>
                        </div>
                        <h2 class="rit-titl"><i class="fas fa-graduation-cap"></i> Interships</h2>
                        <div class="education">
                            <ul class="row no-margin">
                                <li class="col-md-6">
                                    <span><?php echo $data["intern"]["enrolling date"]?>-<?php echo $data["intern"]["graduation date"]?></span> <br>
                                    <?php echo $data["intern"]["track"]?> - <?php echo $data["intern"]["name"]?></li>
                              
                            </ul>
                        </div>

                        <h2 class="rit-titl"><i class="fas fa-users-cog"></i> Skills</h2>
                        <div class="profess-cover row no-margin">
                            <div class="col-md-6">
                            <div class="row prog-row">
                                    <div class="col-sm-6">
                                        Web Design
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="progress">
                                            <div class="progress-bar" role="progressbar" style="width: 75%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="row prog-row">
                                    <div class="col-sm-6">
                                        PHP
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="progress">
                                            <div class="progress-bar" role="progressbar" style="width: 85%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6">
                               
                            </div>
                            <div class="col-md-6">
                                <div class="row prog-row">
                                    <div class="col-sm-6">
                                        Web Development
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="progress">
                                            <div class="progress-bar" role="progressbar" style="width: 55%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>






                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

<script src="assets/js/jquery-3.2.1.min.js"></script>
<script src="assets/js/popper.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script>



</html>