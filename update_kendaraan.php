<?php
require_once 'konfig.php';
$id = mysqli_escape_string($conn,$_POST['id']); 
$jenis = mysqli_escape_string($conn,$_POST['jenis']);  
$model = mysqli_escape_string($conn,$_POST['model']);  
$tahun = mysqli_escape_string($conn,$_POST['tahun']);  
$manufaktur = mysqli_escape_string($conn,$_POST['manufaktur']);  
$penumpang = mysqli_escape_string($conn,$_POST['penumpang']);  
$harga = mysqli_escape_string($conn,$_POST['harga']);  
$bahan_bakar = mysqli_escape_string($conn,$_POST['bahan_bakar']);  
$luas_bagasi = mysqli_escape_string($conn,$_POST['luas_bagasi']);  
$jml_roda = mysqli_escape_string($conn,$_POST['jml_roda']);  
$luas_kargo = mysqli_escape_string($conn,$_POST['luas_kargo']);  
$ukuran_bagasi = mysqli_escape_string($conn,$_POST['ukuran_bagasi']);  
$kapasitas_mesin = mysqli_escape_string($conn,$_POST['kapasitas_bensin']);  

   $sql="update kendaraan set jenis='$jenis',model='$model',tahun='$tahun',manufaktur='$manufaktur',penumpang='$penumpang',harga='$harga'
                        ,bahan_bakar='$bahan_bakar',luas_bagasi='$luas_bagasi',jml_roda='$jml_roda',luas_kargo='luas_kargo',ukuran_bagasi='$ukuran_bagasi'
                        ,kapasitas_mesin='$kapasitas_mesin' where id=$id";

   $result = mysqli_query($conn,$sql);    

  header('Location:kendaraan.php');