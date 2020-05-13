<?php
	declare(strict_types = 1);
	class preview{
        public function tampilkan(){
            echo "<div id='persegi' style='background:red;'></div>";
            echo "&emsp;";
            echo "<div id='lingkaran' style='background:green;'></div>";
            echo "&emsp;";
            echo "<div id='segitiga' style='border-bottom: 200px solid blue;'></div>";
        }
    }