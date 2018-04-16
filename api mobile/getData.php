<?php
	include_once "connect.php";
	
	$sql = "SELECT * FROM triadi";
	$query = mysqli_query($conn, $sql);

	$arraySiaran = array();
	while ($row = mysqli_fetch_array($query)){
		$arraySiaran[] = $row; 
	}
	echo json_encode($arraySiaran);
	mysqli_close($conn);
?>