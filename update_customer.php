<?php
require_once 'konfig.php';
$id = mysqli_escape_string($conn,$_POST['id']); 
$nama = mysqli_escape_string($conn,$_POST['nama']);  
$alamat = mysqli_escape_string($conn,$_POST['alamat']);  
$telp = mysqli_escape_string($conn,$_POST['telp']);  
$id_card = mysqli_escape_string($conn,$_POST['telp']);  

   $sql="update customer set nama='$nama',alamat='$alamat',telp='$telp',id_card='$id_card' where id=$id";

   $result = mysqli_query($conn,$sql);    

  header('Location:customer.php');