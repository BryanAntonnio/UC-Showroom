<?php
require_once 'konfig.php';
$id=mysqli_escape_string($conn,$_GET['id']); 
$q = mysqli_query($conn,"select * from kendaraan where id=$id");
$row = mysqli_fetch_array($q);
extract($row);
?> 
<div>
    <h3>Edit Kendaraan</h3>
</div>
<form action="update_kendaraan.php" method="post">
    <input type="hidden" name="id"  value="<?php echo $id?>">
    <div style="margin:10px;">
        <div>Jenis Kendaraan</div>
        <select name="jenis">
            <option <?php if($jenis=='MOBIL') echo 'selected'?>>MOBIL</option>
            <option <?php if($jenis=='MOTOR') echo 'selected'?>>MOTOR</option>
            <option <?php if($jenis=='TRUK') echo 'selected'?>>TRUK</option>
        </select>
    </div>  
    <div style="margin:10px;">  
        <div>Model Kendaraan</div>
        <input type='text' name="model" size="30" value="<?php echo $model?>">
    </div>    
    <div style="margin:10px;">
        <div>Tahun</div>
        <input type='number' name="tahun" size="4" value="<?php echo $tahun?>">
    </div> 
    <div style="margin:10px;">
        <div>Manufaktur</div>
        <input type='text' name="manufaktur" size="30" value="<?php echo $manufaktur?>">
    </div>
    <div style="margin:10px;">
        <div>Jumlah Penumpang</div>
        <input type='number' name="penumpang" size="30" value="<?php echo $penumpang?>">
    </div>
    <div style="margin:10px;">
        <div>Harga</div>
        <input type='number' name="harga" size="30" value="<?php echo $harga?>">
    </div>  
    <div style="margin:15px"><b>Mobil</b>
        <div style="margin:10px;">
            <div>Jenis bahan Bakar</div>
            <input type='text' name="bahan_bakar" size="30" value="<?php echo $bahan_bakar?>">
        </div>    
        <div style="margin:10px;">
            <div>Luas Bagasi</div>
            <input type='text' name="luas_bagasi" size="30" value="<?php echo $luas_bagasi?>">
        </div> 
    </div>  
    <div style="margin:15px"><b>Truk</b>
        <div style="margin:10px;">
            <div>Jumlah Roda</div>
            <input type='number' name="jml_roda" size="30" value="<?php echo $jml_roda?>">
        </div> 
        <div style="margin:10px;">
            <div>Luas Kargo</div>
            <input type='text' name="luas_kargo" size="30" value="<?php echo $luas_kargo?>">
        </div> 
    </div>
    <div style="margin:15px"><b>Motor</b>
        <div style="margin:10px;">
            <div>Ukuran Bagasi</div>
            <input type='number' name="ukuran_bagasi" size="30" value="<?php echo $ukuran_bagasi?>">
        </div> 
        <div style="margin:10px;">
            <div>Kapasitas Bensin</div>
            <input type='text' name="kapasitas_mesin" size="30" value="<?php echo $kapasitas_mesin?>">
        </div> 
    </div>
    <div style="margin:10px;">
        <input type="submit" value="Simpan">
    </div>
</form>