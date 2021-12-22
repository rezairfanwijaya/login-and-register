<?php 
// deleting session
$_SESSION =[];
session_unset();
session_destroy();

// deleting cookie
setcookie("id", '');
setcookie("username", '');