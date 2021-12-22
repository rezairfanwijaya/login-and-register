


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


    <title>Login</title>


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

    <a href="coba.html" class="text-white text-center">KLIK saya</a>

    <!-- main -->
    <section class="main">

        <!-- text welcome -->
        <p class="title text-center" data-aos="fade-right" data-aos-delay="90" data-aos-duration="2000">Hii !!</p>
        <p class="sub-title text-center" data-aos="fade-left" data-aos-delay="90" data-aos-duration="2000">How are You today ?</p>

        <!-- vektor dan form-->

        <div class="row" >
            <div class="col-12 col-md-6 vector">
                <img src="assets/illustration/login.png" alt="login-vector" class="img-fluid" data-aos="fade-up" data-aos-delay="60" data-aos-duration="2000">
            </div>

            <div class="col-12 col-md-6 form" data-aos="fade-right" data-aos-delay="90" data-aos-duration="2000">
                <form action="" method="post" data-aos="fade-up" data-aos-delay="200" data-aos-duration="2000">
                    <p class="title">Login</p>

                    <div class="mt-5 field">
                        <label for="username">Username</label>
                        <input type="text" name="username" placeholder="ex: Abdas" id="username" autocomplete="off">
                    </div>

                    <div class="mt-5 field password">
                        <label for="password">Password</label>
                        <input type="password" name="password" id="password" autocomplete="off">
                        <img src="assets/icon/see-light.png" alt="" onclick="see(true)">
                        <img src="assets/icon/hide-light.png" alt="" onclick="see(false)">
                        <img src="assets/icon/see-dark.png" alt="" onclick="see(true)">
                        <img src="assets/icon/hide-dark.png" alt="" onclick="see(false)">

                    </div>

                    <div class="mt-3">
                        <input type="checkbox" id="check-box">
                        <label for="check-box" id="remember">Remember me</label>
                    </div>

                    <div class="mt-5 btnLogin">
                        <button type="submit" name="login">Login</button>
                        <p class="textToSignup">Don't have an account yet? <span><a href="signup.php">Sign up</a></span></p>
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


    <!-- aos -->
    <script src="https://unpkg.com/aos@next/dist/aos.js "></script>
    <script>
        AOS.init();
    </script>


    <!-- JS external -->
    <script src="js/script.js"></script>
</body>

</html>