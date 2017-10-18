<?php
	require_once 'db_con.php';
	$conn=mysqli_connect($servername, $username, $password,$dbname);
	if(!$conn){
		 die("Connection failed: " . mysqli_connect_error());
	}
	echo "Connected successfully";
	$sql = "SELECT * FROM members";
	$result = $conn->query($sql);
	while($row = mmysqli($result)) {
        echo "id: " . $row["id"]. " - Name: " . $row["firstname"]. " " . $row["lastname"]. "<br>";
	}
?>