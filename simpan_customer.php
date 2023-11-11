<?php
require_once 'konfig.php';

$nama = mysqli_escape_string($conn,$_POST['nama']);  //send data ke database
$alamat = mysqli_escape_string($conn,$_POST['alamat']);  
$telp = mysqli_escape_string($conn,$_POST['telp']);  
$id_card = mysqli_escape_string($conn,$_POST['id_card']);  

   $sql="insert customer(nama,alamat,telp,id_card) 
                 values('$nama','$alamat','$telp','$id_card')";
   $result = mysqli_query($conn,$sql);    

   header('Location:customer.php');