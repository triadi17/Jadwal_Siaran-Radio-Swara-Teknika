<?php
$servername = "localhost"; 
$username = "id3635402_triadiputra";
$password = "SwaraTeknika98"; 
$dbname = "id3635402_swarateknika";
 
// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname); 
// Check connection
if (!$conn) { 
    die("Connection failed: " . mysqli_connect_error());
}else{
	//echo "Koneksi berhasil";
} 
?> 