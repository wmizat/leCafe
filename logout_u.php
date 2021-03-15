<?php
session_start();
if(session_destroy()) // Destroying All Sessions
{
header("refresh:0.1 /customerlogin"); // Redirecting To Home Page
}
?>