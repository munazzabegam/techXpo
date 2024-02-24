<?php
session_start(); 

include("../Server/config.php"); 

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email']; 
    $password = $_POST['password']; 

    // Using prepared statement to prevent SQL injection
    $sql = "SELECT * FROM ParticipationCredentials WHERE email = ? AND password = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ss", $email, $password);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        $_SESSION['email'] = $email;
        
        header("Location: ../Server/reveletions/index.php");
        exit(); 
    } else {
        $errorMsg = "Invalid email or password!";
    }
    
    $stmt->close(); // Close the prepared statement
}

$conn->close();
?>

<!DOCTYPE html>
<!-- saved from url=(0053)https://paceconclave.com/registrations/register1.html -->
<html lang="en" class="supernova js csstransforms csstransforms3d csstransitions js csstransitions euwcvhvxnwv idc0_349 js csstransforms csstransforms3d csstransitions js csstransitions">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

<img src="" alt="">
    <title>Registration | Pace Connect</title>
      <link rel="icon" type="image/x-icon" href="../images/favicon.ico">
    <!-- ===================== META ===================== -->
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="format-detection" content="telephone=no">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="shortcut icon" href="https://localhost:5001/Content/assets/img/favicon.png">
    <!-- ===================== STYLE ===================== -->
    <link href="./form_files/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="./form_files/slick.min.css">
    <link rel="stylesheet" href="./form_files/bootstrap-grid.css">
    <link rel="stylesheet" href="./form_files/all.css">
    <link rel="stylesheet" href="./form_files/jquery.fancybox.min.css">
    <link rel="stylesheet" href="./form_files/style.css">
    <link rel="stylesheet" href="./form_files/style(1).css">
    <link rel="stylesheet" href="./form3.css">

    <script src="./form_files/jquery-2.2.4.min.js"></script>


    <link rel="stylesheet" type="text/css" href="./form_files/animate.css">
    <link rel="stylesheet" type="text/css" href="./form_files/animate.css">
    <link rel="stylesheet" type="text/css" href="./form_files/owl.carousel.css">
    <link rel="stylesheet" type="text/css" href="./form_files/settings.css">
    <link rel="stylesheet" type="text/css" href="./form_files/style_002.css">
    <link rel="stylesheet" type="text/css" href="./form_files/responsive.css">

    <!-- ===================== toster ===================== -->
    <link href="./form_files/toastr.min.css" rel="stylesheet">
    <script src="./form_files/toastr.min.js"></script>
    <script src="./form_files/toastr.init.js"></script>
    <script type="module" src="./form_files/hook.js"></script>
    <style>
        body {
            color: white;
            background: black;
        }

        input {
            background: rgb(221, 218, 218) !important;
            color: white;
        }

        textarea {
            background: rgb(221, 218, 218) !important;

        }

        .form-group h6 {
            color: red;
        }

        .title-line-left {
            color: red;
        }

        a {
            text-decoration: none;
        }

        .cont-email li h6 {
            color: white;
        }

        .cont-email li a {
            color: rgb(165, 158, 158);
        }

        .cont-email li {
            color: rgb(165, 158, 158);
        }

        .page-title {
            background: red;
        }
    </style>
</head>

<body data-new-gr-c-s-check-loaded="8.908.0" data-gr-ext-installed="" cz-shortcut-listen="true">
    <!--===================== HEADER =====================-->




    <!--=================== PAGE-TITLE ===================-->
    <div class="page-title" style="background-image: linear-gradient(rgba(255, 0, 0, 0.520),rgba(194, 1, 0, 0.520)), url(/Content/assets/img/bg-page-title.jpg); ">
        <div class="container">
            <h1 class="title-line-left">Registration Form</h1>
            <ul> <a style="color: white;" href="../">Home </a><i class="fa fa-chevron-right"></i> Revelations </ul>
        </div>
    </div>
    <!--================= PAGE-TITLE END =================-->
    <!--================= PAGE-CONTACTS =================-->
    <section class="page-contacts">
        <div class="container">
            <div class="row">
                <div class="col-12 col-sm-8">
                    <div class="waviy">
                        <span style="--i:1">R</span>
                        <span style="--i:2">E</span>
                        <span style="--i:3">V</span>
                        <span style="--i:4">E</span>
                        <span style="--i:5">L</span>
                        <span style="--i:6">A</span>
                        <span style="--i:7">T</span>
                        <span style="--i:8">I</span>
                        <span style="--i:9">O</span>
                        <span style="--i:10">N</span>
                        <span style="--i:11">S</span>
                        <span style="--i:12">'</span>
                        <span style="--i:13">2</span>
                        <span style="--i:14">4</span>
                    </div>
                    <!-- ========== form start =========== -->
                    <form action="" class="form" method="POST">

                        <div class="mb-3">
                            <label for="TeamName" class="form-label">Email ID</label>
                            <input type="text" name="email" required="" class="form-control" id="TeamName" placeholder="Enter your Email">
                        </div>

                        <div class="mb-3">
                            <label for="CollegeName" class="form-label">Password</label>
                            <input type="text" name="password" required="" class="form-control" id="CollegeName" placeholder="Enter your Password">

                        </div>

                        <br>
                        <div style="color: red;" class="error">
                            <?php echo $errorMsg; ?>
                        </div>
                        <input type="hidden" class="inputfield" id="datetime" name="date_time">
                        <br>

                        <span class="submitspan">
                            <input class="btn btn-primary" type="submit" value="Login" onclick="generateRegistrationKey();" name="submit">
                        </span>
                    </form>

                    <!-- ========= form end ======= -->

                </div>

                <div class="col-12 col-sm-4 page-cont-info">

                    <div class="cont-info-item">
                        <i class="fa fa-envelope" aria-hidden="true"></i>
                        <h5 class="title-line-left">Important Message </h5>
                        <ul class="cont-email">
                            <li style="text-align: justify;">Unauthorized access or manipulation of the Revelation'24 registration form is strictly prohibited. Any attempt to log in with unauthorized credentials, tamper with other teams' registrations, or engage in activities that disrupt the website or registration process is a punishable offense. Violators may face suspension from college and be subject to fines. </li>
                        </ul>
                    </div>
                    <div class="cont-info-item">
                        <i class="fa fa-envelope" aria-hidden="true"></i>
                        <h5 class="title-line-left">Support</h5>
                        <ul class="cont-email">
                            <li><a href="mailto:conclave@pace.edu.in">techxpo@pace.edu.in</a></li>
                            <li>+91 9535622435</li>
                        </ul>
                    </div>
                    <div class="cont-info-item">
                        <i class="fa fa-envelope" aria-hidden="true"></i>
                        <h5 class="title-line-left">Contact</h5>
                        <ul class="cont-email">
                            <li>
                                <h6>Muhammad Ajlan</h6>
                                <a href="mailto:shamnanv@gmail.com">muhammedazlan11@gmail.com</a>
                            </li>
                            <li>+91 6361557581</li> <br>
                            <li>
                                <h6>Sheikh Rifazali</h6>
                                <a href="mailto:asifhassan_ec@pace.edu.in">alirifaz21@gmail.com</a>
                            </li>
                            <li>+91 9972216838</li>
                        </ul>
                        <br><br>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--================= PAGE-CONTACTS END =================-->





    <script src="./form_files/smoothscroll.min33fa.js"></script>
    <script src="./form_files/errorNavigation33fa.js"></script>
    <!--===================== TO TOP =====================-->
    <a class="to-top" href="https://paceconclave.com/registrations/register1.html#home">
        <i class="fa fa-chevron-up" aria-hidden="true"></i>
    </a>
    <!--=================== TO TOP END ===================-->
    <!--===================== SCRIPT	=====================-->
    <!-- JQUERY JAVASCRIPT -->
    <script src="./form_files/masonry.pkgd.min.js"></script>
    <script src="./form_files/jquery.fancybox.min.js"></script>
    <script src="./form_files/slick.min.js"></script>
    <script src="./form_files/rx-lazy.js"></script>
    <script src="./form_files/scripts.js"></script>
    <script src="./form_files/contact-form-script.js"></script>
    <!-- toastr init -->
    <script src="./form_files/jquery.min.js"></script>
    <script src="./form_files/jquery-ui.js"></script>


    <script type="text/javascript" src="./form_files/jquery.js"></script>
    <script type="text/javascript" src="./form_files/bootstrap.min.js"></script>
    <script type="text/javascript" src="./form_files/mixer.js"></script>
    <script type="text/javascript" src="./form_files/wow.min.js"></script>
    <script type="text/javascript" src="./form_files/jquery.appear.js"></script>
    <script type="text/javascript" src="./form_files/prettyPhoto.js"></script>
    <script type="text/javascript" src="./form_files/jquery.shuffle.min.js"></script>
    <script type="text/javascript" src="./form_files/owl.carousel.js"></script>
    <script type="text/javascript" src="./form_files/mixer.js"></script>
    <script type="text/javascript" src="./form_files/jquery.magnific-popup.min.js"></script>
    <script type="text/javascript" src="./form_files/modernizr.custom.js"></script>
    <script type="text/javascript" src="./form_files/classie.js"></script>
    <script type="text/javascript" src="./form_files/jquery.themepunch.tools.min.js"></script>
    <script type="text/javascript" src="./form_files/jquery.themepunch.revolution.min.js"></script>
    <script type="text/javascript" src="./form_files/theme.js"></script>

    <script src="./form_files/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <!-- <script src="./form_files/form.js"></script> -->



    <div id="sp-installed"></div>
    <grammarly-desktop-integration data-grammarly-shadow-root="true"></grammarly-desktop-integration>

</body>

</html>
