<?php
include 'header.php' ;
?>
<div class="container">

        
        <div class='text-center'><h3>Score List </h3></div>
       
<?php
        //connect to DB
 $con=mysql_connect("localhost","sec_user","eKcGZr59zAa2BEWU");
 $db_found = mysql_select_db("secure_login");

$result = mysql_query("SELECT username,Score FROM members");
echo "<table align='center' class='table table-condensed table-hover'>
<tr>
<th>Username</th>
<th>Score</th>
</tr>";
while($row = mysql_fetch_array($result))
  {
  echo "<tr>";
  echo "<td>" . $row['username'] . "</td>";
  echo "<td>" . $row['Score'] . "</td>";
  echo "</tr>";
  }
echo "</table>";
mysql_close($con);
?>
</div><!-- /.container -->
 </body>
</html>