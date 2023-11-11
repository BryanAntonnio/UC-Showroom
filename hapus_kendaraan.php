<?php
require_once 'konfig.php';
   $id = mysqli_escape_string($conn,$_GET['id']);  

   $sql="delete from kendaraan where id=$id"; //Delete selected kendaraan
   $result = mysqli_query($conn,$sql);    

   header('Location:kendaraan.php');
?>