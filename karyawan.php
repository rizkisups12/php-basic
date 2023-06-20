<?php 
	$datakaryawan = array(
					array(1,'INDAH','PEREMPUAN',2000,1987,'KASIR',5000000),
					array(2,'APIH SETIAWAN','LAKI-LAKI',2004,1985,'TEKNISI JARINGAN',6000000),
					array(3,'FAJAR ISMAIL','LAKI-LAKI',2000,1986,'KEUANGAN',6500000),
					array(4,'IIS','PEREMPUAN',2017,1988,'BIRO AKADEMIK',5600000),
				);

	// echo count($datakaryawan);

	$tahun = date('Y');

	function umur ($tahun, $tahunLahir){
		$hasil = $tahun-$tahunLahir;
		return $hasil;
	}

	function masakerja($tahun, $tahunMasuk){
		$masakerja = $tahun-$tahunMasuk;
		return $masakerja;
	}

	for ($i = 0; $i < count($datakaryawan); $i++) {
	    echo "ID: " . $datakaryawan[$i][0] . "<br>";
	    echo "NAMA: " . $datakaryawan[$i][1] . "<br>";
	    echo "JENIS KELAMIN: " . $datakaryawan[$i][2] . "<br>";
	    echo "TAHUN MASUK: " . $datakaryawan[$i][3] . "<br>";
	    echo "TAHUN LAHIR: " . $datakaryawan[$i][4] . "<br>";
	    echo "JABATAN: " . $datakaryawan[$i][5] . "<br>";
	    echo "PENGHASILAN: " . $datakaryawan[$i][6] . "<br>";
	    echo "UMUR: " . umur($tahun,$datakaryawan[$i][4]). " TAHUN. <br>";
	    echo "MASA KERJA: " . masakerja($tahun,$datakaryawan[$i][3]). " TAHUN. <br><hr>";
	}

	$karyawan = [
					[
					"name"=> "A",
					"Gaji"=> 500000
					]
				];

	foreach ($karyawan as $key) {
		echo $key['name'];
	}
?>