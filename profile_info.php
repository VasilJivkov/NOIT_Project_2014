<?php
include 'header.php' ;
include_once 'includes/functions.php';
?>
<div class="container">

        
        <div class='text-center'><h3>your profile information</h3></div>
       
<?php
 	include_once 'includes/db_connect.php';

 

	$username = $_SESSION['username'] ; 
        //connect to DB
 $con=mysql_connect("localhost","sec_user","eKcGZr59zAa2BEWU");
 $db_found = mysql_select_db("secure_login");

$result = mysql_query("SELECT username,email,Score FROM members WHERE members.username = '$username' ");
echo "<table align='center' class='table '>
<tr>
<th>username</th>
<th>e-mail</th>
<th>Points</th>
</tr>";
while($row = mysql_fetch_array($result))
  {
  echo "<tr>";
  echo "<td>" . $row['username'] . "</td>";
  echo "<td>" . $row['email'] . "</td>";
  echo "<td>" . $row['Score'] . "</td>";
  echo "</tr>";
  }
echo "</table>";
mysql_close($con);
?>
</div><!-- /.container -->
 </body>
</html>