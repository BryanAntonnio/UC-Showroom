<?php
require_once 'konfig.php';
$id = mysqli_escape_string($conn,$_POST['id']); 
$kendaraan = mysqli_escape_string($conn,$_POST['kendaraan']);  
$q = mysqli_query($conn,"select harga from kendaraan where id=$kendaraan");
$row = mysqli_fetch_array($q);
extract($row);
if($harga=='') $harga=0;

$q = mysqli_query($conn,"select customer from pesanan where id=$id");
$row = mysqli_fetch_array($q);
extract($row);

   $sql="update pesanan set kendaraan='$kendaraan',harga='$harga' where id=$id";
   $result = mysqli_query($conn,$sql);    

  header('Location:pesanan.php?cust='.$customer);