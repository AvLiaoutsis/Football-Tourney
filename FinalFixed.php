<!-- 
<?php

session_start();

$POWER = array();
$j=0;
$ID = $_SESSION['CURRENTID'];
var_dump($ID);
if (isset($_POST['submit']))
{
$POWER=$_POST['power'];
};
$username = "admin";
 $password = "";
 $hostname = "localhost"; 

foreach($ID as $key=>$n)
{
    $sql = "UPDATE  `teams` SET `power` = $POWER[$key] WHERE `teams`.`id`= $n";
    var_dump($sql);
    $dbconnect=mysqli_connect($hostname, $username, $password, "test")
    or die("unable to connect");
    mysqli_query($dbconnect, $sql);
if (mysqli_error($dbconnect))
{
    ECHO "Error Description:".mysqli_error($dbconnect);};

};

?>
-->
<?php
$db_host = 'localhost'; // Server Name
$db_user = 'admin'; // Username
$db_pass = ''; // Password
$db_name = 'test'; // Database Name

$conn = mysqli_connect($db_host, $db_user, $db_pass, $db_name);
if (!$conn) {
	die ('Failed to connect to MySQL: ' . mysqli_connect_error());	
}


$sql = 'SELECT * 
		FROM (select * from teams ORDER BY RAND()) AS x ORDER BY power DESC';
/*$sql = 'SELECT * 
		FROM teams ORDER BY power DESC';*/			
$query = mysqli_query($conn, $sql);



if (!$query) {
	die ('SQL Error: ' . mysqli_error($conn));
}

?>
<html>
<head>

	<title>Displaying MySQL Data in HTML Table</title>
	<style type="text/css">
		body {
			font-size: 15px;
			color: #343d44;
			font-family: "segoe-ui", "open-sans", tahoma, arial;
			padding: 0;
			margin: 0;
		}
		table {
			margin: auto;
			font-family: "Lucida Sans Unicode", "Lucida Grande", "Segoe Ui";
			font-size: 12px;
		}

		h1 {
			margin: 25px auto 0;
			text-align: center;
			text-transform: uppercase;
			font-size: 17px;
			color:black;

		}

		table td {
			transition: all .5s;
		}
		
		/* Table */
		.data-table {
			border-collapse: collapse;
			font-size: 14px;
			min-width: 537px;
		}

		.data-table th, 
		.data-table td {
			border: 1px solid #e1edff;
			padding: 7px 17px;
		}
		.data-table caption {
			margin: 7px;
		}

		/* Table Header */
		.data-table thead th {
			background-color: #508abb;
			color: #FFFFFF;
			border-color: #6ea1cc !important;
			text-transform: uppercase;
		}

		/* Table Body */
		.data-table tbody td {
			color: #353535;
		}
		.data-table tbody td:first-child,
		.data-table tbody td:nth-child(4),
		.data-table tbody td:last-child {
			text-align: right;
			background-color: #f4fbff;
		}

		.data-table tbody tr:nth-child(odd) td {
			background-color: #f4fbff;
		}
		.data-table tbody tr:hover td {
			background-color: #ffffa2;
			border-color: #ffff0f;
		}

		/* Table Footer */
		.data-table tfoot th {
			background-color: #e5f5ff;
			text-align: right;
		}
		.data-table tfoot th:first-child {
			text-align: left;
		}
		.data-table tbody td:empty
		{
			background-color: #ffcccc;
		}
	</style>
</head>
<body background="https://cdn.wallpapersafari.com/36/2/hCSgmt.jpg">
	<h1>GROUP A</h1>
	<table class="data-table">
		<thead>
			<tr>
				<th>name</th>
			</tr>
		</thead>
		<tbody>
		<?php
		while ($row = mysqli_fetch_array($query))
		{
			echo '<tr>			
					<td>'.$row['name'].'</td>
				</tr>';
			$j++;
		if($j == 4){
			$j=0;
			break;
			}
		}?>
		</tbody>
	</table>
	<h1>GROUP B</h1>
	<table class="data-table">
		<thead>
			<tr>
				<th>name</th>
			</tr>
		</thead>
		<tbody>
		<?php
		while ($row = mysqli_fetch_array($query))
		{
			echo '<tr>
					<td>'.$row['name'].'</td>
				</tr>';
			$j++;
		if($j == 4){
			$j=0;
			break;
			}
		}?>
		</tbody>
	</table>
	<h1>GROUP C</h1>
	<table class="data-table">
		<thead>
			<tr>
				<th>name</th>
			</tr>
		</thead>
		<tbody>
		<?php
		while ($row = mysqli_fetch_array($query))
		{
			echo '<tr>
					<td>'.$row['name'].'</td>
				</tr>';
			$j++;
		if($j == 4){
			$j=0;
			break;
			}
		}?>
		</tbody>
	</table>
	<h1>GROUP D</h1>
	<table class="data-table">
		<thead>
			<tr>
				<th>name</th>
			</tr>
		</thead>
		<tbody>
		<?php
		while ($row = mysqli_fetch_array($query))
		{
			echo '<tr>
					<td>'.$row['name'].'</td>
				</tr>';
			$j++;
		if($j == 4){
			$j=0;
			break;
			}
		}?>
		</tbody>
	</table>
</body>
</html>