<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body>
    <form  method="post">
    <?php
                        $algoritma = $_POST['algoritma'];
                        $statistik = $_POST['statistik'];
                        $aljabar = $_POST['aljabar'];
                        $logaritma = $_POST['logaritma'];
                        if(isset($_POST['hitung'])){
                            $total= $algoritma + $statistik + $algoritma + $statistik;
                            $rata= $total/4;
                            if($rata==100){
                                $mutu="A";
                                $status="Lulus";
                            }
                            elseif($rata>=75){
                                $mutu="B";
                                $status="Lulus";
                            }
                            else{
                                $mutu="C";
                                $status="Tidak Lulus";
                            }
                        }

                    ?>
            <div class="container mt-5">
            <h1 class="lead">
            Form Mahasiswa
            </h1>
            <div class="row g-3 mt-10">
            <div class="col-md-6">
                <label for="inputnim" class="form-label">NIM</label>
                <input type="number" id="inputnim" class="form-control" placeholder="--Masukan NIM--" name="nim">
            </div>
            <div class="col-md-6">
                <label for="inputemail" class="form-label">Email</label>
                <input type="email" id="inputemail" class="form-control" placeholder="--Masukan Email--" name="email">
            </div>
            <div class="col-md-6">
                <label for="inputnama" class="form-label">Nama</label>
                <input type="text" id="inputnama" class="form-control" placeholder="--Masukan Nama" name="nama">
            </div>
            <div class="col-md-6">
            <div class="row">
                <label for="inputtgl" class="form-label">Tgl Lahir</label>
                <div class="col-md-4">
                    <select id="inputtgl" name="tgl"class="form-select">
                    <option selected>--Tanggal--</option>
                        <?php
                            for ($tgl=1; $tgl<=31 ; $tgl++) {
                                if($tgl<10){
                                    $tgl="0".$tgl;
                                }
                        ?>
                        <option value="<?php echo $tgl; ?>"><?php echo $tgl; ?></option>
                        <?php
                            }
                        ?>
                    </select>
                </div>
                <div class="col-md-4">
                    <select name="bulan" class="form-control">
                    <option selected>--Bulan--</option>
                    <?php
                    $bulan=array("Januari","Februari","Maret","April","Mei","Juni","Juli","Agustus","September","Oktober","November","Desember");
                    foreach($bulan as $bulan){
                        ?>
                        <option value="<?php echo $bulan ?>"><?php echo $bulan ?></option>
                    
                    <?php } ?>
                    </select>
                </div>
                <div class="col-md-4">
                    <select name="tahun" class="form-select" id="autoSizingSelect">
                    <option selected>--Tahun--</option>
                    <?php
                        for ($i=2000; $i<=2010 ; $i++) {
                    ?>
                        <option value="<?php echo $i; ?>"><?php echo $i; ?></option>
                    <?php
                        }
                    ?>
                </select>
                </div>
            </div>
            </div>
            <div class="col-md-6">
                <div class="row">
                <label for="inputjk" class="form-label">Jenis Kelamin</label>
                    <div class="col-md-6">
                        <select id="inputjk" name="jk" class="form-control">
                        <option selected>--Jenis Kelamin--</option>
                            <?php
                            $jk=array("Laki-Laki","Perempuan");
                            foreach($jk as $jk){
                                ?>
                                <option value="<?php echo $jk ?>"><?php echo $jk ?></option>
                            
                            <?php } ?>
                        </select>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="row">
                <label for="inputgd" class="form-label">Golongan Darah</label>
                    <div class="col-md-6">
                    <select name="gd" id="inputgd" class="form-control">
                    <option selected>--Golongan Darah--</option>
                        <?php
                        $gd=array("A","B","AB","O");
                        foreach($gd as $gd){
                            ?>
                            <option value="<?php echo $gd ?>"><?php echo $gd ?></option>
                        
                        <?php } ?>
                    </select>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <span class="input-group-text" for="inputalamat">Alamat</span>
                <textarea class="form-control" id="inputalamat" placeholder="--Masukan Alamat--" aria-label="With textarea"></textarea>
            </div>
            <div class="col-md-6">
                
                <div class="row">
                    <label for="inputjurusan" class="form-label">Jurusan</label>
                        <div class="col-md-6">
                        <select id="inputjurusan" name="jurusan" class="form-control">
                        <option selected>--Jurusan--</option>
                        <?php
                        $jurusan=array("TI","SI","MI");
                        foreach($jurusan as $jurusan){
                            ?>
                            <option value="<?php echo $jurusan ?>"><?php echo $jurusan ?></option>
                        
                        <?php } ?>
                    </select>
                        </div>
                    </div>
                
            </div>
            <div class="col-md-6">
                <label for="inputnohp" class="form-label">No HP</label>
                <input type="number" class="form-control" id="inputnohp" placeholder="--Masukan No HP--" name="nohp">
            </div>
            <div class="col-md-6 mt-4">
                <label for="inmputemail" class="form-label"></label>
                <button class="btn btn-primary form-control" type="submit">Simpan</button>
               
            </div>
            <div class="col-md-6">
                <div class="mb-5 mt-5">
                    <h1 class="lead">
                    Menghitung Nilai
                    </h1>
                </div>
                <div class="row">
                    <label for="inputalgoritma" class="form-label">Algoritma</label>
                    <div class="col-md-6">
                        <input type="text" id="inputalgoritma" class="form-control" name="algoritma">
                    </div>
                    <div class="col-md-6">
                        <div class="form-floating mb-3">
                            <input type="number" class="form-control" id="floatingInput" value="<?php echo $total; ?>" >
                            <label for="floatingInput" >Total</label>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <label for="inputstatistik" class="form-label">Statistik</label>
                    <div class="col-md-6">
                        <input type="text" id="inputstatistik" class="form-control" name="statistik">
                    </div>
                    <div class="col-md-6">
                        <div class="form-floating mb-3">
                            <input type="number" class="form-control" id="floatingInput" value="<?php echo $rata; ?>">
                            <label for="floatingInput">Rata-rata</label>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <label for="inputaljabar" class="form-label">Aljabar</label>
                    <div class="col-md-6">
                        <input type="text" id="inputaljabar"class="form-control" name="aljabar">
                    </div>
                    <div class="col-md-6">
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" id="floatingInput" value="<?php echo $mutu; ?>" >
                            <label for="floatingInput">Hitung Mutu</label>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <label for="inputlogaritma" class="form-label">Logaritma</label>
                    <div class="col-md-6">
                        <input type="text" id="inputlogaritma"class="form-control" name="logaritma">
                    </div>
                    <div class="col-md-6">
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" id="floatingInput"  value="<?php echo $status; ?>">
                            <label for="floatingInput">Status</label>
                        </div>
                    </div>
                </div>
                <div class="mb-5">
                    <button type="submit" name="hitung" class="btn btn-success">Hitung</button>
                </div>
            </div>
            
            
            <!-- <tr>
                <td>Algoritma</td>
                <td>:</td>
                <td><input type="text" name="algoritma"></td>
                <td>Total</td>
                <td>:</td>
                <td><input type="text" name="total" value="<?php echo $total; ?>"></td>
            </tr>
            <tr>
                <td>Statistik</td>
                <td>:</td>
                <td><input type="text" name="statistik"></td>
                <td>Rata</td>
                <td>:</td>
                <td><input type="text" name="rata" value="<?php echo $rata; ?>"></td>
            </tr>
            <tr>
                <td>Aljabar</td>
                <td>:</td>
                <td><input type="text" name="aljabar"></td>
                <td>Hitung Mutu</td>
                <td>:</td>
                <td><input type="text" name="mutu" value="<?php echo $mutu; ?>"></td>
            </tr>
            <tr>
                <td>Logaritma</td>
                <td>:</td>
                <td>
                    <input type="text" name="logaritma">
                    <input name="hitung" type="submit" value="hitung">
                    
                </td>
                <td>Status</td>
                <td>:</td>
                <td><input type="text" name="status" value="<?php echo $status; ?>"></td>
            </tr>
            </div> -->
            
    </form>
</body>
</html>
