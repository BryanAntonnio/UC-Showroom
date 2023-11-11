<?php
require_once 'konfig.php';

$cust = mysqli_escape_string($conn,$_POST['cust']);  
$kendaraan = mysqli_escape_string($conn,$_POST['kendaraan']);  

$q = mysqli_query($conn,"select harga from kendaraan where id=$kendaraan");
$row = mysqli_fetch_array($q);
extract($row);
if($harga=='') $harga=0;

   $sql="insert pesanan(customer,kendaraan,harga) 
                values('$cust','$kendaraan',$harga)";
   $result = mysqli_query($conn,$sql);    

   header('Location:pesanan.php?cust='.$cust);