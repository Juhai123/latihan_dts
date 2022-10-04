<html>
<head>
<title>Aplikasi Kalkulator Sederhana</title>
<style>
    <?php include'file.css';
    ?>
</style>
   
</head>
<body>
<header>
 <h2>Perpustakaan Umum</h2>
</header>
<section>
<div class="text-center"><h4>Input Bilangan</h4></div>
<form method="post" action="<?php echo $_SERVER["PHP_SELF"];?>">  
<table id="tabel-input">
    <tr>
        <td>Bilangan 1 : </td>
        <td><input type="text" name="bil1" class="form-control" placeholder="Masukkan bilangan ke-1"></td>
    </tr>
    <tr>
        <td>Bilangan 2 : </td>
        <td><input type="text" name="bil2" class="form-control" placeholder="Masukkan bilangan ke-2"></td>
    </tr>
    <tr>
        <td><input type="submit" name="submit" value="Submit"></td>

    </tr>
</form>
</table>
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
</section>
<!-- <footer>
 <p>Developed By Nama Anda</p>
</footer> -->
</body>
</html>
