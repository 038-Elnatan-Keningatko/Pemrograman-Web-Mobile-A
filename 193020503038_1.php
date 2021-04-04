<?php 
	if ($_SERVER["REQUEST_METHOD"] == "POST") {
		$user = $_POST["user"];
		$pass = $_POST["pass"];
		$_user = strlen($user);
		$_pass = strlen($pass);
		$x = false;

		if (!preg_match("/[0-7]*/", $user)) {
			echo "Username tidak boleh lebih dari 7 karakter<br>";
			$x = true;
		}

		if (!preg_match("/[A-Z]/", $pass)) {
			echo "Password harus terdiri dari huruf kapital<br>";
			$x = true;
		}

		if (!preg_match("/[a-z]/", $pass)) {
			echo "Password harus terdiri dari huruf kecil<br>";
			$x = true;
		}

		if (!preg_match("/[0-9]/", $pass)) {
			echo "Password harus terdiri dari karakter khusus (simbol atau angka)<br>";
			$x = true;
		}

		if (!preg_match("/[{n,10}]/", $_pass)) {
			echo "Password tidak boleh kurang dari 10 karakter";
			$x = true;
		}

		if ($x == false) {
			echo "Selamat Datang"."<br>";
			echo "Login Berhasil";
		}
	}
?>

<!DOCTYPE html>
<html>
<body>
	<br><br>
	<a href="193020503038.php">Kembali ke Login Menu
</body>
</html>