<?php
  $connection = mysqli_connect("localhost","root","");
   $db = mysqli_select_db($connection,"alumni_db");
    
   $query = "insert into commerce_batch values(null,'$_POST[commerce_batch_name]')";
   $query_run = mysqli_query($connection,$query);
   header('Refresh: 0; url=commerce_batch.php');
?>