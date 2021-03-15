<?php
session_start();
if(session_destroy()) // Destroying All Sessions
{
header("refresh:0.1 /managerlogin"); // Redirecting To Home Page
}
?>