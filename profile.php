<?php
include_once 'header.php';
include_once 'includes/db_connect.php';
include_once 'includes/functions.php';

sec_session_start();

if (login_check($mysqli) == true) {
    //User-a e lognat 
	include_once 'profile_info.php' ;
 } 
else {
	//User-a ne e lognat
   include_once 'notloged-error.html'; 
}



?>