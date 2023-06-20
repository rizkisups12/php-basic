<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E-PLANE</title>
    <link rel="stylesheet" type="text/css" href="library/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="library/css/style.css">
</head>
<body>
    <nav class="navbar bg-primary">
        <div class="container">
          <a class="navbar-brand" href="#">
            <img src="gambar/supz.png" alt="Bootstrap" width="30" height="24">
          </a>
              <h3>PENDAFTARAN RUTE TERSEDIA</h3>
        </div>
    </nav>
    <form action="create.php" method="POST">
        <div class="form-group">
            <div class="col-12">
                <div class="col-6">
                    <div class="mb-3 mt-3">
                        <label for="maskapai" class="form-label">Maskapai:</label>
                        <input type="text" class="form-control" id="maskapai" placeholder="Maskapai" name="maskapai" required>
                    </div>
                    <div class="mb-3">
                        <label for="asal" class="form-label">Bandara Asal:</label>
                        <select class="form-control" name="asal" id="asal" required>
                            <option selected disabled> - - - PILIH BANDARA ASAL - - - </option>
                            <option value="CGK">Soekarno-Hatta (CGK)</option>
                            <option value="BDO">Husein Sastranegara (BDO)</option>
                            <option value="MLG">Abdul Rachman Saleh (MLG)</option>
                            <option value="SUB">Juanda (SUB)</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="tujuan" class="form-label">Bandara Tujuan:</label>
                        <select class="form-control" name="tujuan" id="tujuan" required>
                            <option selected disabled> - - - PILIH BANDARA TUJUAN - - - </option>
                            <option value="DPS">Ngurah Rai (DPS)</option>
                            <option value="UPG">Hasanuddin (UPG)</option>
                            <option value="INX">Inanwatan (INX)</option>
                            <option value="BTJ">Sultan Iskandarmuda (BTJ)</option>
                        </select>
                    </div>
                    <div class="mb-3 mt-3">
                        <label for="harga" class="form-label">Harga Tiket:</label>
                        <input type="number" class="form-control" id="harga" placeholder="Harga Tiket" name="harga" required>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>  
                </div>
            </div>
        </div>
    </form>
    <div class="form-group">
        <div class="col-12">
        <?php
        // File json yang akan dibaca (full path file)
        $file = "data/file.json";
        
        // Mendapatkan file json
        $anggota = file_get_contents($file);
        
        // Mendecode anggota.json
        $data = json_decode($anggota, true);
        ?>
        <!-- // Membaca data array menggunakan foreach -->
        
            <table class="table table-striped table-bordered table-hover">
            <thead>
                <tr>
                    <th>Maskapai</th>
                    <th>Asal Penerbangan</th>
                    <th>Tujuan Penerbangan</th>
                    <th>Harga Tiket</th>
                    <th>Pajak</th>
                    <th>Total Harga Tiket</th>
                </tr>
            </thead>
            <tbody>
            <?php foreach ($data as $d) { ?>
                <tr>
                    <td><?php echo $d[0]?></td>
                    <td><?php echo $d[1]?></td>
                    <td><?php echo $d[2]?></td>
                    <td><?php echo $d[3]?></td>
                    <td><?php echo $d[4]?></td>
                    <td><?php echo $d[5]?></td>
                </tr>
            <?php } ;?>
            </tbody>
            </table>
        </div>
    </div>
</body>
</html>
<script src="library/js/bootstrap.min.js"></script>
<script>

</script>