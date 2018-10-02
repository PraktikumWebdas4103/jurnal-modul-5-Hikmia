<?php
include 'connect.php';

 	if(isset($_POST['input'])){
	$NIM = $_POST['NIM'];
	$Nama = $_POST['Nama'];
	$Email = $_POST['Email'];
	$sql = "INSERT INTO mahasiswa (NIM,Nama,Email) values ('$NIM','$Nama','$Email')";
	if (mysqli_query($con, $sql)){
		echo "<center>Database sudah masuk</center>";
	}else{
		echo "ERROR";
	}
}
?>