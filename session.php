<?php 

session_start();

// check the session, if you don't have it you will be redirected to the login page
if (!isset($_SESSION["login"])){
    header('location: login.php');
}