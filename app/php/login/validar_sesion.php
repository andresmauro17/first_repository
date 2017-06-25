<?php 
session_start();

if (!(isset($_SESSION['login']) && $_SESSION['login'] != '')) {

header ("Location: ../../login.html");
/*echo"<meta http-equiv='refresh' content='0;url=login.html'>";*/

}




?>