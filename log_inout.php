<?php
include_once 'includes/db_connect.php';
include_once 'includes/functions.php';

sec_session_start();

if (login_check($mysqli) == true) {
    //User-a e lognat 
	header("Location: logout.php");
 } 
else {
	//User-a ne e lognat
   header("Location: login.php");
}



?>