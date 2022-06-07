<?php
    $connection = mysqli_connect("localhost","root","");
    $db = mysqli_select_db($connection,"alumni_db");
    $query = " delete from pharmacy_batch where pharmacy_id =$_GET[kid]";
    $query_run = mysqli_query($connection,$query);
    header('Refresh: 0; url=../pharmacy_batch.php');
?>
