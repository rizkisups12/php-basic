<?php
    //VARIABLE
    	 $maskapai = $_POST['maskapai'];
         $asal = $_POST['asal'];
         $tujuan = $_POST['tujuan'];
         $harga = $_POST['harga'];

        switch ($asal) {
            case 'CGK':
                $pajak_asal = '50000';
                break;
            case 'BDO':
                $pajak_asal = '30000';
                break;
            case 'MLG':
                $pajak_asal = '40000';
                break;
            case 'SUB':
                $pajak_asal = '40000';
                break;
            default:
                $pajak_asal = 'NULL';
                break;
        }

        switch ($tujuan) {
            case 'DPS':
                $pajak_tujuan = '80000';
                break;
            case 'UPG':
                $pajak_tujuan = '70000';
                break;
            case 'INX':
                $pajak_tujuan = '90000';
                break;
            case 'BTJ':
                $pajak_tujuan = '70000';
                break;
            default:
                $pajak_tujuan = 'NULL';
                break;
        }

        switch ($asal) {
            case 'CGK':
                $asal = 'Soekarno-Hatta (CGK)';
                break;
            case 'BDO':
                $asal = 'Husein Sastranegara (BDO)';
                break;
            case 'MLG':
                $asal = 'Abdul Rachman Saleh (MLG)';
                break;
            case 'SUB':
                $asal = 'Juanda (SUB)';
                break;
            default:
                $asal = 'NULL';
                break;
        }

        switch ($tujuan) {
            case 'DPS':
                $tujuan = 'Ngurah Rai (DPS)';
                break;
            case 'UPG':
                $tujuan = 'Hasanuddin (UPG)';
                break;
            case 'INX':
                $tujuan = 'Inanwatan (INX)';
                break;
            case 'BTJ':
                $tujuan = 'Sultan Iskandarmuda (BTJ)';
                break;
            default:
                $tujuan = 'NULL';
                break;
        }

//FUNCTION
        function totalPajak($pajak_asal, $pajak_tujuan){
            $sumPajak = $pajak_asal+$pajak_tujuan;
            return $sumPajak;
        }

        function totalHarga($harga, $pajak_asal, $pajak_tujuan){
            $sumHarga = $harga+$pajak_asal+$pajak_tujuan;
            return $sumHarga;
        }

        $totalharga = totalHarga($harga, $pajak_asal, $pajak_tujuan);
        $totalpajak = totalPajak($pajak_asal, $pajak_tujuan);
        
        //INSERT
        // read json file
        $data = file_get_contents('data/file.json');
        // var_dump($data);die;    
        // decode json
        $json_arr = json_decode($data, true);

        // add data
        $json_arr[] = array($maskapai, $asal, $tujuan, $harga, $totalpajak, $totalharga);
        // var_dump($json_arr);

        // encode json and save to file
        file_put_contents('data/file.json', json_encode($json_arr));
        
        // Redirect to e-plane.php
        header("Location: e-plane.php");
        exit();
?>