<html>
<head>
	<title>Aplikasi Pembuatan Bangun Datar Berwarna</title>
	<meta charset="utf-8">
  	<meta name="viewport" content="width=device-width, initial-scale=1">
  	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
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
	<div class="container p-3 my-3 bg-info text-white rounded">
	<center><h2>Aplikasi Pembuatan Bangun Datar Berwarna</h2>
	<p>Oleh : [+] Moh. Taufik Afandi [21120119130050] Kelompok 17 Shift 1</p></center>
	</div>

	<div class="container p-3 my-3 bg-light rounded">
	<form action="index.php" method="POST">
		<div class="form-group">
		<label>Pilih Jenis Bangun Datar: </label>
		<select name="bentuk" class="form-control">
			<option disabled selected>--Bentuk--</option>
			<option value="b1">Persegi</option>
			<option value="b2">Lingkaran</option>
			<option value="b3">Segitiga</option>
		</select>
		</div>

		<div class="form-group">
		<label>Pilih Warna Bangun Datar: </label>
		<select name="warna" class="form-control">
			<option disabled selected>--Warna--</option>
			<option value="red">Merah</option>
			<option value="green">Hijau</option>
			<option value="blue">Biru</option>
		</select>
		</div>

		<div class="form-group">
		<label>Masukkan Jumlah bangun datar: </label>
		<input class="form-control" type="number" name="jumlah" value="1" min=1 required>
		</div>
		<button type="submit" class="btn btn-primary" name="submit_btn">Submit</button>
		<button type="submit" class="btn btn-secondary" name="preview_btn">View Code</button>
	</form>
	</div>
	<?php
		include 'hasil.php';	
	?>
</body>
</html>