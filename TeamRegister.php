<?php
$error=''; //Variable to Store error message;
if(isset($_POST['nameteam'])){
//Define $user and $pass
$nameteam=$_POST['nameteam'];
//Establishing Connection with server by passing server_name, user_id and pass as a patameter
$conn = mysqli_connect("localhost", "root", "");
//Selecting Database
$db = mysqli_select_db($conn, "test");
//sql query to fetch information of registerd user and finds user match.
$query = mysqli_query($conn, "INSERT INTO teams (name) VALUES ('$nameteam')");
echo '<script language="javascript">';
echo 'alert("Your team was succesfully registered!")';
echo '</script>';
mysqli_close($conn); // Closing connection
}
?>