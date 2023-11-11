<?php
require_once 'konfig.php';
?>
<h3>Master Customer</h3>
<a href="tambah_customer.php">Tambah customer</a> <?php //Tombol untuk ke halaman Create Customer?>
<div style="margin-top:20px;margin-bottom:40px">
<table border="1" style="border-collapse: collapse;" cellpadding="5"> 
    <?php
	$q = mysqli_query($conn,"select * from customer"); //Connect ke database, lalu get customer lists yang ada di database customer
	if (mysqli_num_rows($q)>0) 
	{   ?>
        <tr>
            <th>NO</th><th>NAMA</th><th>ALAMAT</th><th>NO TELP</th><th>ID CARD</th><th>AKSI</th>
        </tr>
		<?php $i=0; 
		while($row = mysqli_fetch_array($q)) { //Code untuk mengambil dan mengecek isi databasenya, yang nanti dipanggil di bawah
            $i++;
			extract($row);
            ?>
             <tr>
                <td><?php echo $i?></td> <?php //Nomer?>
                <td><?php echo $nama?></td> <?php //Nama Customer?>
                <td><?php echo $alamat?></td> <?php //Alamat Customer?>
                <td><?php echo $telp?></td> <?php //Nomor telpon customer?>
                <td><?php echo $id_card?></td> <?php //id customer?>
                <td>
                    <a href="edit_customer.php?id=<?php echo $id?>">Edit</a> &nbsp;&nbsp;&nbsp; <?php //tombol edit untuk proses edit customer?>
                    <a href="hapus_customer.php?id=<?php echo $id?>">Hapus</a> &nbsp;&nbsp;&nbsp; <?php //tombol hapus untuk proses hapus customer?>
                    <a href="pesanan.php?cust=<?php echo $id?>">Pesanan</a> <?php //tombol untuk menuju halaman list pesanan customer?>
                </td>
             </tr>   

	<?php		}
		} else {
            echo "Data tidak ditemukan";
        }
	?>	
</table>
</div>
<a href="index.php">< Home</a>