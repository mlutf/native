<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>APLIKASI PENDAFTARA SISWA</h1>
    <form action="#">
    <table>
        <tr>
            <td>NIS</td>
            <td>:</td>
            <td><input type="text" width="20px;"></td>
        </tr>
        <tr>
            <td>Nama</td>
            <td>:</td>
            <td><input type="text" width="20px;"></td>
        </tr>
        <tr>
            <td>JK</td>
            <td>:</td>
            <td>
            <select name="jk" id="">
            <?php
            $jk=array("Laki-Laki","Perempuan");
            foreach($jk as $jk){
                ?>
                <option value="<?php echo $jk ?>"><?php echo $jk ?></option>
            
            <?php } ?>
            </select>
            </td>
        </tr>
        <tr>
            <td>Alamat</td>
            <td>:</td>
            <td><textarea name="#" id="#" cols="30" rows="10"></textarea></td>
        </tr>
        <tr>
            <td>No Hp</td>
            <td>:</td>
            <td><input type="text" width="20px;"></td>
        </tr>
        <tr>
            <td>Agama</td>
            <td>:</td>
            <td>
            <select name="agama" >
            <?php
            $agama=array("Islam","Kristen","Hindu","Budha","Katolik","Kongucu");
            foreach($agama as $agama){
                ?>
                <option value="<?php echo $agama ?>"><?php echo $agama ?></option>
            
            <?php } ?>
            </select>
            </td>
        </tr>
        <tr>
            <td>Tgl Lahir</td>
            <td>:</td>
            <td><select name="tgl">
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
        
            <select name="bulan" >
            <?php
            $bulan=array("Januari","Februari","Maret","April","Mei","Juni","Juli","Agustus","September","Oktober","November","Desember");
            foreach($bulan as $bulan){
                ?>
                <option value="<?php echo $bulan ?>"><?php echo $bulan ?></option>
            
            <?php } ?>
            </select>
            
            <select name="tahun">
                <?php
                    for ($i=2000; $i<=2010 ; $i++) {
                ?>
                    <option value="<?php echo $i; ?>"><?php echo $i; ?></option>
                <?php
                    }
                ?>
            </select></td>
            
        </tr>
        <tr>
            <td>Tahun Lair</td>
            <td>:</td>
            <td><input type="date" name="" id=""></td>
        </tr>
    </table>
    <input type="submit" value="simpan">
    </form>
</body>
</html>