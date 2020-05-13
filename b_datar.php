<?php
	declare(strict_types = 1);
	class b_datar{
		private $jumlah;
		private $warna;

		function setJumlah(int $jumlah){ $this->jumlah = $jumlah; }
		function setWarna(string $warna){ $this->warna = $warna; }

		function getJumlah() { return $this->jumlah; }
		function getWarna() { return $this->warna; }

		public function persegi(){
			for ($i=0; $i<$this->getJumlah(); $i++){
				echo "<div id='persegi' style='background:". $this->getWarna() .";'></div>";
				echo "&emsp;";
			}
		}

		public function lingkaran(){
			for ($i=0; $i<$this->getJumlah(); $i++){
				echo "<div id='lingkaran' style='background:". $this->getWarna() .";'></div>";
				echo "&emsp;";
			}
		}

		public function segitiga(){
			for ($i=0; $i<$this->getJumlah(); $i++){
				echo "<div id='segitiga' style='border-bottom: 200px solid ". $this->getWarna() .";'></div>";
				echo "&emsp;";
			}
		}
	}
?>