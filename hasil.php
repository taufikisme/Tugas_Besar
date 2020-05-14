<?php
	include 'preview.php';
	$contoh = new preview();
	include 'b_datar.php';
	$bdatar = new b_datar();

	if (isset($_POST['bentuk']) && isset($_POST['warna']) && isset($_POST['jumlah'])){
		$bentuk = $_POST['bentuk'];
		$bdatar -> setWarna($_POST['warna']);
		$bdatar -> setJumlah($_POST['jumlah']);
		echo '<div class="container p-3 my-3 bg-success text-white rounded">';
		echo '<center><h2>HASIL</h2></center></div>';
		echo '<div class="container p-3 my-4 bg-light rounded"><center>';
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
		echo '</center></div>';
	}

	if (isset($_POST['preview_btn'])){
		echo '<div class="container p-3 my-3 bg-secondary text-white rounded">';
		echo '<center><h2>LIHAT CODE</h2></center></div>';
		echo '<div class="container p-3 my-4 bg-light rounded">';
		echo $contoh -> tampil_persegi();
		echo $contoh -> tampil_lingkaran();
		echo $contoh -> tampil_segitiga();
		echo '</div>';
	}
?>