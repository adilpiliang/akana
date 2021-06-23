<<?php 
	include_once 'conn.php';
	if(isset($_POST['save'])){ 
 
		$email = $_POST{'email'};
		$nama_perusahaan = $_POST{'nama_perusahaan'};
		$alamat = $_POST{'alamat'};
		$no_hp = $_POST{'no_hp'};
		$query1 =  "select * from registrasi.data_pendaftaran where email = '$email'";
		$is_exist = pg_query($dbconn, $query1);
		$row1 = pg_fetch_array($is_exist);
		if ($row1 && $row1[0]) {
  		echo("email udah ada.\n"); 
  		exit;
		}
		$query2 =  "select * from registrasi.data_pendaftaran where no_hp = '$no_hp'";
		$is_exist = pg_query($dbconn, $query2);
		$row2 = pg_fetch_array($is_exist);
		if ($row2 && $row2[0]) {
  		echo("no hp udah ada.\n"); 
  		exit;
		}
		$query_insert = "INSERT INTO registrasi.data_pendaftaran(email,nama_perusahaan,alamat,no_hp)
		values ('$email','$nama_perusahaan','$alamat','$no_hp' )";
		if($result = pg_query($query_insert)){ 
			echo "data added";
		}
		else{ 
			echo "error";
		}
	}

	?>