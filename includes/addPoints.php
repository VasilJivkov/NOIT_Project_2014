 <?php
 	include_once 'db_connect.php';
	include_once 'functions.php';
 
	sec_session_start();

 
	$con=mysql_connect("localhost","sec_user","eKcGZr59zAa2BEWU");
	$db_found = mysql_select_db("secure_login");
	//svarzvane s DB
	$username = $_SESSION['username'] ; 
	//vzimame username 
	$result = mysql_query("UPDATE  secure_login.members  SET  Score = Score + 10 WHERE members.username = '$username'  ;");
	//SQL zaqvka za +10 tochki
	mysql_close($con);
	// prekasvane vrazka s DB 

?>