<?php

// cek session
require_once 'session.php';

// import file function 
require_once('function/function.php');

// if button signup si clicked
if (isset($_POST["signup"])) {
    if (registration($_POST) > 0) {
        $success = true;
    }
}

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- FavIcon  -->
    <link rel="icon" href="assets/icon/logo-dark.png">

    <!-- CSS Bootstrap -->
    <link rel="stylesheet" href="lib/node_modules/bootstrap/dist/css/bootstrap.min.css">

    <!-- CSS External -->
    <link rel="stylesheet" href="style/style.css">

    <!-- aos -->
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />


    <title>Signup</title>


</head>

<body>

    <!-- navbar -->
    <section class="navbar">

        <div class="left">
            <!-- logo -->
            <img src="assets/icon/logo-light.png" alt="">
            <img src="assets/icon/logo-dark.png" alt="">
        </div>

        <div class="right">
            <!-- mode -->

            <img src="assets/icon/dark-mode.png" onclick="darkmode(true)">
            <img src="assets/icon/light-mode.png" onclick="darkmode(false)">


            <!-- github -->
            <a href="https://github.com/rezairfanwijaya" target="blank" class="github">
                <img src="assets/icon/github-light.png" alt="">
                <img src="assets/icon/github-dark.png" alt="">
            </a>
        </div>
        </div>

    </section>
    <!-- navbar -->

    <!-- main -->
    <section class="main">

        <!-- text welcome -->
        <p class="title text-center" data-aos="fade-right" data-aos-delay="90" data-aos-duration="2000">Hello !!</p>
        <p class="sub-title text-center" data-aos="fade-left" data-aos-delay="90" data-aos-duration="2000">Please sign up first before you login</p>

        <!-- vektor dan form-->
        <div class="row">
            <div class="col-12 col-md-6 vector">
                <img src="assets/illustration/signup.png" alt="login-vector" class="img-fluid" data-aos="fade-up" data-aos-delay="60" data-aos-duration="2000">
            </div>

            <div class="col-12 col-md-6 form" data-aos="fade-right" data-aos-delay="90" data-aos-duration="2000">
                <form action="" method="post" data-aos="fade-up" data-aos-delay="200" data-aos-duration="2000">
                    <p class="title">Sign Up</p>

                    <div class="mt-5 field">
                        <label for="username">Username</label>
                        <input type="text" name="username" placeholder="ex: Abdas" id="username" autocomplete="off" required>
                    </div>

                    <div class="mt-5 field password">
                        <label for="password">Password</label>
                        <input type="password" name="password1" id="password" autocomplete="off" required>
                        <img src="assets/icon/see-light.png" alt="" onclick="see(true)">
                        <img src="assets/icon/hide-light.png" alt="" onclick="see(false)">
                        <img src="assets/icon/see-dark.png" alt="" onclick="see(true)">
                        <img src="assets/icon/hide-dark.png" alt="" onclick="see(false)">

                    </div>

                    <div class="mt-5 field Confirm-password">
                        <label for="password">Confirm Password</label>
                        <input type="password" name="password2" id="ConfirmPassword" autocomplete="off" required>
                        <img src="assets/icon/see-light.png" alt="" onclick="seeOnConfirm(true)">
                        <img src="assets/icon/hide-light.png" alt="" onclick="seeOnConfirm(false)">
                        <img src="assets/icon/see-dark.png" alt="" onclick="seeOnConfirm(true)">
                        <img src="assets/icon/hide-dark.png" alt="" onclick="seeOnConfirm(false)">

                    </div>

                    <?php if (isset($passwordError)) : ?>
                        <p class="mt-2 text-danger">error</p>
                    <?php endif ?>

                    <div class="mt-5 btnLogin">
                        <button type="submit" name="signup">Sign Up</button>
                        <p class="textToSignup">Don't have an account yet? <span><a href="login.php">Login</a></span></p>
                    </div>
                </form>
            </div>
        </div>
    </section>
    <!-- main -->


    <!-- footer -->
    <div class="footer">
        <a href="https://github.com/rezairfanwijaya" target="blank">
            <img src="assets/icon/github-light.png" alt="">
            <img src="assets/icon/github-dark.png" alt="">
        </a>
    </div>
    <!-- footer -->


    <!-- JS bootstrap -->
    <script src="lib/node_modules/jquery/dist/jquery.min.js"></script>
    <script src="lib/node_modules/bootstrap/dist/js/bootstrap.min.js"></script>

    <!-- aos -->
    <script src="https://unpkg.com/aos@next/dist/aos.js "></script>
    <script>
        AOS.init();
    </script>

    <!-- sweet alert -->
    <script src="lib/node_modules/sweetalert/dist/sweetalert.min.js"></script>


    <!-- JS external -->
    <script src="js/script.js"></script>

    <!-- sweet alert for signup success-->
    <?php if (isset($success)) : ?>
        <script>
            swal({
                title: "Sign Up Success",
                icon: "success",
                button: true,
                
            })
            .then((login) => {
                if (login){
                    location.href='index.php'    
                }
            });
        </script>
    <?php endif ?>

</body>

</html>