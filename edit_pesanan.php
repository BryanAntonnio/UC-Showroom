<?php
require_once 'konfig.php';
$id=mysqli_escape_string($conn,$_GET['id']); 
$id_pes=$id;
$q = mysqli_query($conn,"select * from pesanan where id=$id");
$row = mysqli_fetch_array($q);
extract($row);
?> 
<div>
    <h3>Edit Pesanan</h3>
</div>
<form action="update_pesanan.php" method="post">
    <input type="hidden" name="id" value="<?php echo $id?>">
    <div style="margin:10px;">  
        <div>Kendaraan</div>
        <select name="kendaraan">
            <option value=''>- Pilih Kendaraan -</option>
            <?php
                $q = mysqli_query($conn,"select * from kendaraan");
                if (mysqli_num_rows($q)>0) 
                while($row = mysqli_fetch_array($q)) {
                    extract($row);
                    ?>
                        <option value="<?php echo $id ?>" <?php if($kendaraan==$id) echo 'selected'?>><?php echo $jenis.' '.$manufaktur.' '.$model.' ('.$tahun.')'?></option>
            <?php   }
            ?>    
        </select>
    </div>    
    <div style="margin:10px;">
        <input type="submit" value="Simpan">
    </div>
</form>