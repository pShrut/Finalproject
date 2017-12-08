<?php

session_start();
error_reporting(0);
define('SITE_URL','https://web.njit.edu/~sp2372/finalproject/');
define('SITE_TITLE','TODO');
$conn = new PDO('mysql:host=sql1.njit.edu;dbname=sp2372;charset=utf8','sp2372','EUGtORiY');
$conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
	           
?>
