<?php
    $connection = mysqli_connect("localhost","root","");
    $db = mysqli_select_db($connection,"alumni_db");
    $query = " delete from education_batch where education_id =$_GET[lid]";
    $query_run = mysqli_query($connection,$query);
    header('Refresh: 0; url=../education_batch.php');
?>
