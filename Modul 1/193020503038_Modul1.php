<!DOCTYPE html>
<html>
<head>
	<title>Anggota Keluarga</title>
</head>
<body>
	<?php 
		foreach ($anggota_keluarga = ["Ayah", "Ibu", "Kakak", "Adik"] as $ak) { 
	?>
		    Nama: <?= $ak; ?>
		<br>Jumlah kata: <?= str_word_count($ak) ?>
		<br>Jumlah huruf: <?= strlen($ak) ?>
		<br>Kebalikan nama: <?= strrev($ak) ?> <br>

		<?php
		$ak = trim($ak); //buang spasi di awal dan akhir kalimat
		$teks_modif = strtolower($ak); //ganti kalimat menjadi huruf kecil semua
		$teks = str_replace(' ','',$teks_modif); //buang spasi yang ada di tengah kata
		$jumlah = strlen($teks); //menghitung jumlah karakter pada variable $teks

		//substr_count adalah fungsi menghitung jumlah huruf/kalimat
		$a = substr_count($teks, "a"); //hitung jumlah huruf "a"
		$i = substr_count($teks, "i"); //hitung jumlah huruf "i"
		$u = substr_count($teks, "u"); //hitung jumlah huruf "u"
		$e = substr_count($teks, "e"); //hitung jumlah huruf "e"
		$o = substr_count($teks, "o"); //hitung jumlah huruf "o"

		$vocal = $a+$i+$u+$e+$o; //hitung total jumlah huruf vocal
		$konsonan = $jumlah - $vocal;

		echo "Kalimat ".$teks_modif." memiliki: "."<br>";
		echo "- Jumlah karakter = $jumlah"."<br>";
		echo "- Jumlah huruf vocal = $vocal"."<br>";
		echo "- Jumlah huruf kosonan = $konsonan"."<br>";
		?>
	<br>
	<?php 
		} 
	?>
</body>
</html>