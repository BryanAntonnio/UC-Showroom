<?php
require_once 'konfig.php';
$id=mysqli_escape_string($conn,$_GET['id']); 
$q = mysqli_query($conn,"select * from customer where id=$id");
$row = mysqli_fetch_array($q);
extract($row);
?> 
<div>
    <h3>Edit Customer</h3>
</div>
<form action="update_customer.php" method="post">
    <input type="hidden" name="id"  value="<?php echo $id?>">
    <div style="margin:10px;">  
        <div>Nama Customer</div>
        <input type='text' name="nama" size="30" value="<?php echo $nama?>">
    </div>    
    <div style="margin:10px;">
        <div>Alamat</div>
        <input type='text' name="alamat" size="30" value="<?php echo $alamat?>">
    </div>
    <div style="margin:10px;">
        <div>No Telp</div>
        <input type='text' name="telp" size="30" value="<?php echo $telp?>">
    </div>
    <div style="margin:10px;">
        <div>ID Card</div>
        <input type='number' name="id_card" size="30" value="<?php echo $id_card?>">
    </div>  

    <div style="margin:10px;">
        <input type="submit" value="Simpan">
    </div>
</form>