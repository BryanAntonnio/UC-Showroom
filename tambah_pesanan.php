<?php
require_once 'konfig.php';
$cust=mysqli_escape_string($conn,$_GET['cust']); 
?>
<div>
    <h3>Tambah Pesanan</h3>
</div>
<form action="simpan_pesanan.php" method="post">
    <input type="hidden" name="cust" value="<?php echo $cust?>">
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
                         <option value="<?php echo $id ?>"><?php echo $jenis.' '.$manufaktur.' '.$model.' ('.$tahun.')'?></option>
            <?php   }
            ?>    
        </select>
    </div>    
    <div style="margin:10px;">
        <input type="submit" value="Simpan">
    </div>
</form>