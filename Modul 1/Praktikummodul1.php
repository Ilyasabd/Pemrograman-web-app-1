<?php
			/* Buatlah program web untuk mengolah nama-nama anggota keluarga anda 
		dengan kriteria sebagai berikut:
		1. Nama-nama disimpan didalam variabel array.
		2. Program menampilkan jumlah kata dan jumlah huruf pada nama yang 
		anda tuliskan.
		3. Program menampilkan kebalikan dari nama yang diinputkan.
		4. Program menampilkan jumlah konsonan dan jumlah vokal pada nama yang 
		telah diinputkanb*/
	$keluarga= ['hatta', 'meida', 'furqon', 'vetha', 'keisha'];
	function vokal($kata) {

		$a = substr_count($kata, 'a');
		$i = substr_count($kata, 'i');
		$u = substr_count($kata, 'u');
		$e = substr_count($kata, 'e');
		$o = substr_count($kata, 'o');

		$count = ($a+$i+$u+$e+$o);

		return $count;
	}
	
	function konsonan($kata) {
		$jumlah = strlen($kata);

		$a = substr_count($kata, 'a');
		$i = substr_count($kata, 'i');
		$u = substr_count($kata, 'u');
		$e = substr_count($kata, 'e');
		$o = substr_count($kata, 'o');

		$count = $jumlah - ($a+$i+$u+$e+$o);
		return $count;
	}


	?>

<!DOCTYPE HTML>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Tugas 1</title>
</head>
<body>
	<p>Praktikum Pemrograman web dan app I</p>
	<p>Muhammad Ilyas Abdullah</p>
	<p>185110500111013</p>

	<?php foreach ($keluarga as $keluargaa) : ?>
	<?php
	echo "<br>";      
	echo "nama :". $keluargaa. "<br>";
	echo "jumlah huruf:". strlen($keluargaa). "<br>";
	echo "jumlah kata:". str_word_count($keluargaa). "<br>";
	echo "kebalikan huruf:". strrev($keluargaa). "<br>";
	echo "jumlah vokal:". vokal($keluargaa). "<br>";
	echo "jumlah konsonan:". konsonan($keluargaa). "<br>";
	?>
<?php endforeach; ?>
</body>
</html>

