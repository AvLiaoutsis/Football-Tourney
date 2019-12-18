<?php
session_start();
$username = "admin";
$password = "";
$hostname = "localhost"; 
$Idtemp = array();
$i=0;
$sql = "SELECT `id`,`name` FROM `teams`";

$dbconnect=mysqli_connect($hostname, $username, $password, "test")
 or die("unable to connect"); 

$result = mysqli_query($dbconnect, $sql);

ECHO "<table border=\"2\">
  <tr bgcolor=\"#cccccc\">
  <td width=\"200\">Name</td>
  <td align=\"center\" width=\"100\">Power</td>
</tr>";

while($row = mysqli_fetch_array($result))
{   
    ECHO "<td width=\"200\">".$row['name']."</td>";
    ECHO "<form action=\"FinalFixed.php\" method=\"post\"><td align=\"center\"><input type=\"number\" name=\"power[]\" size=\"10\"</td></tr>";
    $IDtemp[$i]=$row['id'];
    $i++;};


ECHO "
<body background='https://images.alphacoders.com/264/264503.jpg'>
<table>
<tr>
  <td colspan=\"8\" align=\"center\"><input type=\"submit\" name=\"submit\" value=\"Submit \"></td>
</tr>
</table>
</body>";

$_SESSION['CURRENTID']=$IDtemp;

?>