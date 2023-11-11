<?php
require_once 'konfig.php';
?>
<h3>Master Kendaraan</h3>
<a href="tambah_kendaraan.php">Tambah Kendaraan</a>
<div style="margin-top:20px;margin-bottom:40px">
<table border="1" style="border-collapse: collapse;" cellpadding="5"> 
    <?php
	$q = mysqli_query($conn,"select * from kendaraan"); //shows kendaraan lists
	if (mysqli_num_rows($q)>0) 
	{   ?>
        <tr>
            <th>NO</th><th>JENIS</th><th>MODEL</th><th>TAHUN</th><th>MANUFAKTUR</th><th>PENUMPANG</th><th>HARGA</th><th>AKSI</th>
        </tr>
		<?php $i=0; 
		while($row = mysqli_fetch_array($q)) {
            $i++;
			extract($row);
            ?>
             <tr>
                <td><?php echo $i?></td>
                <td><?php echo $jenis?></td>
                <td><?php echo $model?></td>
                <td><?php echo $tahun?></td>
                <td><?php echo $manufaktur?></td>
                <td><?php echo $penumpang?></td>
                <td><?php echo $harga?></td> 
                <td>
                    <a href="edit_kendaraan.php?id=<?php echo $id?>">Edit</a> &nbsp;&nbsp;&nbsp; 
                    <a href="hapus_kendaraan.php?id=<?php echo $id?>">Hapus</a>
                </td>
             </tr>   

	<?php		}
		} else {
            echo "Data tidak ditemukan"; //if tidak ada kendaraan di database
        }
	?>	
</table>
</div>
<a href="index.php">< Home</a>