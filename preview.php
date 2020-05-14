<?php
	declare(strict_types = 1);
	class preview{
        public function tampil_persegi(){
            echo '<div class="row">';
            echo "<div class='col-sm-4 p-3 my-3 bg-light'><center>
            <div id='persegi' style='background:red;'></div></div>";
            echo '<div class="col-sm-8 p-3 my-3 bg-light">#persegi {<br>
            width: 200px;<br>
            height: 200px;<br>
            background: red;<br>
            display: inline-block;<br>
            }</div></div>';
        }

        public function tampil_lingkaran(){
            echo '<div class="row">';
            echo "<div class='col-sm-4 p-3 my-3 bg-light'><center>
            <div id='lingkaran' style='background:green;'></div></div>";
            echo '<div class="col-sm-8 p-3 my-3 bg-light">#lingkaran {<br>
            border-radius: 50%;<br>
            width: 200px;<br>
            height: 200px;<br>
            background: green;<br>
            display: inline-block;<br>
            }</div></div>';
        }

        public function tampil_segitiga(){
            echo '<div class="row">';
            echo "<div class='col-sm-4 p-3 my-3 bg-light'><center>
            <div id='segitiga' style='border-bottom: 200px solid blue;'></div></div>";
            echo '<div class="col-sm-8 p-3 my-3 bg-light">#segitiga {<br>
            width: 0;<br>
            height: 0;<br>
            border-left: 120px solid transparent;<br>
            border-right: 120px solid transparent;<br>
            border-bottom: 200px solid blue;<br>
            display: inline-block;<br>
            }</div></div>';
        }
    }