<html>
<head>
	<title>Aplikasi Pembuatan Bangun Datar Berwarna</title>
</head>
<body>
	<style type="text/css">
		#persegi {
			width: 200px;
			height: 200px;
			display: inline-block;
		}

		#lingkaran {
			border-radius: 50%;
			width: 200px;
			height: 200px;
			display: inline-block;
		}

		#segitiga {
		    width: 0;
		    height: 0;
		    border-left: 120px solid transparent;
		    border-right: 120px solid transparent;
		    display: inline-block;
		}
	</style>
	<h2>Aplikasi Pembuatan Bangun Datar Berwarna</h2>
	<p>Oleh :</p>
	<p>[+] Moh. Taufik Afandi [21120119130050]</p>
	<p>[+] Kelompok 17 Shift 1</p>

	<form action="index.php" method="POST">
		<label>Pilih Jenis Bangun Datar: </label>
		<select name="bentuk">
			<option disabled selected>--Bentuk--</option>
			<option value="b1">Persegi</option>
			<option value="b2">Lingkaran</option>
			<option value="b3">Segitiga</option>
		</select>
		<br>
		<label>Pilih Warna Bangun Datar: </label>
		<select name="warna">
			<option disabled selected>--Warna--</option>
			<option value="red">Merah</option>
			<option value="green">Hijau</option>
			<option value="blue">Biru</option>
		</select>
		<br>
		<label>Masukkan Jumlah bangun datar: </label>
		<input type="number" name="jumlah" value="1" min=1 required>
		<br><br>
		<button type="submit" name="submit_btn">Submit</button>
		<button type="submit" name="preview_btn">Preview</button>
	</form>

	<?php
		if (isset($_POST['bentuk']) && isset($_POST['warna']) && isset($_POST['jumlah'])){
			include 'b_datar.php';
			$bdatar = new b_datar();
			$bentuk = $_POST['bentuk'];
			$bdatar -> setWarna($_POST['warna']);
			$bdatar -> setJumlah($_POST['jumlah']);
			switch ($bentuk) {
				case 'b1': //Persegi
						echo $bdatar -> persegi();
					
					break;

				case 'b2': //Lingkaran
						echo $bdatar -> lingkaran();
					
					break;
				
				case 'b3': //Segitiga
						echo $bdatar -> segitiga();
					
					break;

			}
		}

		if (isset($_POST['preview_btn'])){
			include 'preview.php';
			$contoh = new preview();
			echo $contoh -> tampilkan();
		}
	?>
</body>
</html>