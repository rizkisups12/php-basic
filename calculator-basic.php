<form action="" method="post">
	Bilangan 1 = <input type="number" name="bil1">
	Bilangan 2 = <input type="number" name="bil2">
	<input type="submit" value="submit">
</form>

<?php 
	 $bil1 = $_POST['bil1'];
	 $bil2 = $_POST['bil2'];

	 //membuat penjumlahan antara bil1 dan bil2
	function penjumlahan($bil1, $bil2){
		$jumlah = $bil1+$bil2;
		return $jumlah;
	}

	 //membuat pengurangan antara bil1 dan bil2
	function pengurangan($bil1, $bil2){
		$jumlah = $bil1-$bil2;
		return $jumlah;
	}

	 //membuat perkalian antara bil1 dan bil2
	function perkalian($bil1, $bil2){
		$jumlah = $bil1*$bil2;
		return $jumlah;
	}

	 //membuat pembagian antara bil1 dan bil2
	function pembagian($bil1, $bil2){
		$jumlah = $bil1/$bil2;
		return $jumlah;
	}

	//Hasil yang tercetak
	echo "Bilangan 1 : ".$bil1."<br>";
	echo "Bilangan 2 : ".$bil2;
	echo "<hr>";
	echo "<hr>";
	echo "hasil penjumlahan adalah : ".penjumlahan($bil1, $bil2)."<br>";
	echo "hasil pengurangan adalah : ".pengurangan($bil1, $bil2)."<br>";
	echo "hasil perkalian adalah : ".perkalian($bil1, $bil2)."<br>";
	echo "hasil pembagian adalah : ".pembagian($bil1, $bil2)."<br>";

?>