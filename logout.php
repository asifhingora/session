<?php 


session_start();
//session_unset('name');
session_destroy();
header("Location:login.html");

?>