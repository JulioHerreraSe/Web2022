<?php
   define('DB_SERVER', 'localhost');
   define('DB_USERNAME', 'root');
   define('DB_PASSWORD', '');
   define('DB_DATABASE', 'web2022');

   $con  = mysqli_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD);

   mysqli_select_db($con,DB_DATABASE);
?>