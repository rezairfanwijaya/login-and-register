<?php

// start session
session_start();

require_once('function/function.php');

// check if the cookie has been created
if (isset($_COOKIE["id"]) && isset($_COOKIE["username"])){
    // take the contents of the cookie
    $id = $_COOKIE["id"];
    $username = $_COOKIE["username"];

    // is there a username with the id listed in the cookie?
    $query = mysqli_query($conn, "SELECT * FROM user where id = $id") ;
    $req = mysqli_fetch_assoc($query);

    // if there is then make a session
    if ($username === hash("sha256", $req["nama"])){
        // create session
        $_SESSION["login"] = true;
    }
}
if(isset($_SESSION["login"])){
    header('location: index.php');
}




if (isset($_POST["login"])) {

    // retrieve the data typed by the user
    $username = $_POST["username"];
    $password = $_POST["password"];

    // check if there is a user in the database
    $sql = "SELECT * FROM user where nama = '$username' ";
    $query = mysqli_query($conn, $sql);

    // if the user is in the database then check the password
    if (mysqli_num_rows($query) === 1) {
        // check password
        $data = mysqli_fetch_assoc($query);
        if (password_verify($password, $data["password"])) {

            // make cookie
            if (isset($_POST["remember"])) {
                setcookie("id", $data["id"], time() + 60);
                setcookie("username", hash("sha256", $data["nama"]), time() + 60);
            }

            // make session
            $_SESSION["id"] = $data["id"];
            $_SESSION["login"] = true;

            // success login
            $success = true;
        } else {

            // if password wrong
            echo '
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            <strong>Password wrong</strong>, Please check your password
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
        ';
        }
    } else {
        // if username dont match
        echo '
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            <strong>Sorry! unregistered user</strong>, Please check your username or signup first
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
        ';
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



    <!-- main -->
    <section class="main">

        <!-- text welcome -->
        <p class="title text-center" data-aos="fade-right" data-aos-delay="90" data-aos-duration="2000">Hii !!</p>
        <p class="sub-title text-center" data-aos="fade-left" data-aos-delay="90" data-aos-duration="2000">How are You today ?</p>

        <!-- vektor dan form-->

        <div class="row">
            <div class="col-12 col-md-6 vector">
                <img src="assets/illustration/login.png" alt="login-vector" class="img-fluid" data-aos="fade-up" data-aos-delay="60" data-aos-duration="2000">
            </div>

            <div class="col-12 col-md-6 form" data-aos="fade-right" data-aos-delay="90" data-aos-duration="2000">
                <form action="" method="post" data-aos="fade-up" data-aos-delay="200" data-aos-duration="2000">
                    <p class="title">Login</p>

                    <div class="mt-5 field">
                        <label for="username">Username</label>
                        <input type="text" name="username" placeholder="ex: Abdas" id="username" autocomplete="off" required>
                    </div>

                    <div class="mt-5 field password">
                        <label for="password">Password</label>
                        <input type="password" name="password" id="password" autocomplete="off" required>
                        <img src="assets/icon/see-light.png" alt="" onclick="see(true)">
                        <img src="assets/icon/hide-light.png" alt="" onclick="see(false)">
                        <img src="assets/icon/see-dark.png" alt="" onclick="see(true)">
                        <img src="assets/icon/hide-dark.png" alt="" onclick="see(false)">

                    </div>

                    <div class="mt-3">
                        <input type="checkbox" id="check-box" name="remember">
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


    <!-- jquery -->
    <script src="lib/node_modules/jquery/dist/jquery.js"></script>

    <!-- js bootstrap -->
    <script src="lib/node_modules/bootstrap/dist/js/bootstrap.js"></script>

    <!-- aos -->
    <script src="https://unpkg.com/aos@next/dist/aos.js "></script>
    <script>
        AOS.init();
    </script>

    <!-- JS external -->
    <script src="js/script.js"></script>

    <!-- sweet alert -->
    <script src="lib/node_modules/sweetalert/dist/sweetalert.min.js"></script>
    <?php if (isset($success)) : ?>
        <script>
            swal({
                title: "Login Successfuly",
                icon: "success",
                button: true,
            })
            .then ((login)=>{
                if (login){
                    location.href= 'index.php'
                }

            });
        </script>

    <?php endif ?>

</body>

</html>