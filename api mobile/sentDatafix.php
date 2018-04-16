<?php
 
	include_once "connect.php";
	
	 $json = file_get_contents('php://input');
	 
	$obj = json_decode($json,true);

	$tanggal = $obj['tanggal'];
	$nama = $obj['nama'];
	$ajang = $obj['ajang'];
	$materi= $obj['materi'];
	$job = $obj['job'];
	 
	$cek_data=mysqli_num_rows(mysqli_query($conn,("SELECT tanggal FROM triadi WHERE tanggal='$tanggal'")));

	if ($cek_data > 0){
		$MSG = 'Input gagal! Data terlampir' ;
		$json = json_encode($MSG);
		echo $json ;
	}
	else{
		$Sql_Query = "INSERT INTO triadi (tanggal,nama,ajang,materi,job) values ('$tanggal','$nama','$ajang','$materi','$job')";
	 
	 	if(mysqli_query($conn,$Sql_Query)){
				$MSG = 'Data Siaran Berhasil!' ;
				$json = json_encode($MSG);
			 	echo $json ;
	 	}
	 	else{
				$MSG = 'Input data gagal!' ;
				$json = json_encode($MSG);
			 	echo $json ;
	 	} 	
	} //penutup cek data
	mysqli_close($conn);
	
?>