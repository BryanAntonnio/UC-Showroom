<?php
require_once 'konfig.php';
   $id = mysqli_escape_string($conn,$_GET['id']);  

   $sql="delete from customer where id=$id"; //Delete selected customer
   $result = mysqli_query($conn,$sql);    

   header('Location:customer.php');
?>