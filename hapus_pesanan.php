<?php
require_once 'konfig.php';
   $id = mysqli_escape_string($conn,$_GET['id']);  
   $q = mysqli_query($conn,"select customer from pesanan where id=$id"); //selects customer
   $row = mysqli_fetch_array($q);
   extract($row);
   $sql="delete from pesanan where id=$id"; //delete selected customer
   $result = mysqli_query($conn,$sql);    

   header('Location:pesanan.php?cust='.$customer);
?>