<?php 

session_start();

define('TEMPLATE', true);



if (isset($_SESSION['mail']) && isset($_SESSION['pass'])) {
	include_once('admin.php');
}
else {
	include_once('login.php');
}

 ?>