<?php
require_once 'konfig.php';

$jenis = mysqli_escape_string($conn,$_POST['jenis']);  //send added / updated data dari text fields
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

   $sql="insert kendaraan(jenis,model,tahun,manufaktur,penumpang,harga,bahan_bakar,luas_bagasi,jml_roda,luas_kargo,ukuran_bagasi,kapasitas_mesin) 
                 values('$jenis','$model','$tahun','$manufaktur','$penumpang','$harga','$bahan_bakar','$luas_bagasi','$jml_roda','$luas_kargo','$ukuran_bagasi','$kapasitas_mesin')";
   $result = mysqli_query($conn,$sql);    

   header('Location:kendaraan.php');