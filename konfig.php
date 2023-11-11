<?php
define("DB_HOST", "localhost"); //database host
define("DB_USER", "root"); //database username
define("DB_PASSWORD", ""); //database password
define("DB_DATABASE", "showrom"); //nama database projek ini
$conn = mysqli_connect(DB_HOST,DB_USER,DB_PASSWORD,DB_DATABASE) or die('Unable to Connect');
?>