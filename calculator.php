<!DOCTYPE html>
<html>
<head>
	<title>Kalkulator</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<form action="" method="post">
	<h2>KALKULATOR</h2>
	<input class="input" type="number" name="bil1" placeholder="Bilangan 1"><br>
	<input class="input" type="number" name="bil2" placeholder="Bilangan 2"><br>
	<select class="input" name="calculate">
		<option value="tambah">+</option>
		<option value="kurang">-</option>
		<option value="kali">X</option>
		<option value="bagi">/</option>
	</select>
	<br>
	<input class="button" type="submit" value="submit">
</form>

<?php 
	 $bil1 = $_POST['bil1'];
	 $bil2 = $_POST['bil2'];
	 $calculate = $_POST['calculate'];
	 if($bil1 != null){
	 	function kalkulator($bil1, $bil2, $calculate){
	 	switch ($calculate) {
	 		case 'tambah':
	 			$hasil = $bil1+$bil2;
	 			break;
	 		case 'kurang':
	 			$hasil = $bil1-$bil2;
	 			break;
	 		case 'kali':
	 			$hasil = $bil1*$bil2;
	 			break;
	 		case 'bagi':
	 			$hasil = $bil1/$bil2;
	 			break;
	 		default:
	 			$hasil = 'NULL';
	 			break;
	 	}

	 	return $hasil;
	 }

	 echo '<input class="input" type="number" value="'.kalkulator($bil1, $bil2, $calculate).'">';
	 }
?>

</body>
</html>
