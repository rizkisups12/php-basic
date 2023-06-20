<?php
	$karyawan = ['rizki','Bekasi','2003'];

	function hitungUmur($tahun_now, $tahun_lahir){
		$umur = $tahun_now - $tahun_lahir;
	return $umur;
	}

	for ($i=0; $i < count($karyawan); $i++) { 
			echo $karyawan[$i]."<br>";
		if($i == 2){
			echo hitungUmur(date('Y'), $karyawan['2'])." tahun.";
		}
	}
?>