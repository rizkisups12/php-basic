<form action="" method="post">
	Jumlah bintang = <input type="number" name="jumlah">
	<input type="submit" value="submit">
</form>

<?php 
	 $jumlah = $_POST['jumlah'];

	function buatBintang($jumlah){
		for ($i = 1; $i <= $jumlah; $i++) {
		    // Membuat pola bintang pada setiap tingkat
		    for ($j = 1; $j <= $i; $j++) {
		        echo "* ";
		    }
		    echo "<br>";
		}
		return $bintang;
	}

	echo buatBintang($jumlah);
?>