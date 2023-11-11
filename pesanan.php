<?php
require_once 'konfig.php';
$cust=mysqli_escape_string($conn,$_GET['cust']); 
$q = mysqli_query($conn,"select nama from customer where id=$cust");
$row = mysqli_fetch_array($q);
extract($row);
?>
<h3>Pesanan <?php echo $nama?></h3>
<a href="tambah_pesanan.php?cust=<?php echo $cust?>">Tambah Pesanan</a>
<div style="margin-top:20px;margin-bottom:40px">
<table border="1" style="border-collapse: collapse;" cellpadding="5"> 
    <?php
	$q = mysqli_query($conn,"select p.*,k.jenis,k.manufaktur,k.model,k.tahun from pesanan p left outer join kendaraan k on(k.id=p.kendaraan) where p.customer=$cust");
	if (mysqli_num_rows($q)>0) //show list pesanan
	{   ?>
        <tr>
            <th>NO</th><th>KENDARAAN</th><th>HARGA</th><th>AKSI</th>
        </tr>
		<?php $i=0; $tharga=0;
		while($row = mysqli_fetch_array($q)) {
            $i++;
			extract($row);
            $tharga=$tharga+$harga;
            ?>
             <tr>
                <td><?php echo $i?></td>
                <td><?php echo $jenis.' '.$manufaktur.' '.$model.' ('.$tahun.')'?></td>
                <td><?php echo $harga?></td>
                <td>
                    <a href="edit_pesanan.php?id=<?php echo $id?>">Edit</a> &nbsp;&nbsp;&nbsp; 
                    <a href="hapus_pesanan.php?id=<?php echo $id?>">Hapus</a> 
                </td>
             </tr>   

	<?php	} ?>
                 <tr>
                     <th colspan="2">TOTAL HARGA</th><th><?php echo $tharga?></th>
                 </tr>
   <?php    } else {
            echo "Belum ada Pesanan";
        }
	?>	
</table>
</div>
<a href="customer.php">< Customer</a>