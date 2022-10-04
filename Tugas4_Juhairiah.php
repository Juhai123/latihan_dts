<!DOCTYPE HTML>  
<html>
<head>
</head>
<body>  

	<form method="post" action="<?php echo $_SERVER["PHP_SELF"];?>">  
	  Bilangan: <input type="text" name="bil">
	  <br><br>
	  <input type="submit" name="submit" value="Submit">  
	</form>
	<br>
	<?php
	$tampil = "";

		if ($_SERVER["REQUEST_METHOD"] == "POST") {
			$bil = $_POST["bil"];
			for($a=$bil;$a>0;$a--){
                for($b=$bil;$b>=$a;$b--){
                    echo "*";
                }
                echo "<br>";
                }
	}
?>
</body>
</html>