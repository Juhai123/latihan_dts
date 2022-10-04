<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    
  <form method="post" action="<?php echo $_SERVER["PHP_SELF"];?>">  
  <!-- membuat inputan bilangan 1 -->
	  Bilangan 1 : <input type="text" name="bil1">
      <br><br>
      <!-- membuat inputan bilangan 2 -->
      Bilangan 2 : <input type="text" name="bil2">
	  <br><br>
	  <input type="submit" name="submit" value="Submit">  
	</form>
	<br>
	<?php
	$tampil = "";
    // mendeklarasikan fungsi if untuk menjalankan method="post"
		if ($_SERVER["REQUEST_METHOD"] == "POST") {
			$bil1 = $_POST["bil1"];
            $bil2 = $_POST["bil2"];
    // membuat fungsi untuk bilangan 1 dan 2
			$jumlah = $bil1 + $bil2;
            $kurang = $bil1 - $bil2;
            $kali = $bil1 * $bil2;
            $bagi = $bil1 / $bil2;
            echo"=============================================<br>";
            echo" hasil penjumlahan adalah = $jumlah <br>";
            echo" hasil pengurangan adalah = $kurang <br>";
            echo" hasil perkalian adalah = $kali <br>";
            echo" hasil pembagian  adalah = $bagi";

	}
?>
  </body>
</html>