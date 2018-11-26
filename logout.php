<?php
session_start();
if($_SESSION['logged_in'])
{
  session_destroy();
  header('location: login/login.html');
}
else
{
  echo'Login First';
  header('location: login/login.html');
}
 ?>
