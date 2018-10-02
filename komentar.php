<form action="" method="POST">
	<tr>
		<td>Komentar Anda</td>
		<td>: <input type="textarea" name="komentar"></td>
	</tr>
	<tr>
		<td><input type="submit" name="input" value="input"></td>
	</tr>
</form>
<?php
	if(isset($_POST['input'])){
		$jumlah = strlen($_POST['komentar']);
		echo "Jumlah Kata :".$jumlah;
	}
?>