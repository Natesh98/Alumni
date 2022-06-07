<?php
    $connection = mysqli_connect("localhost","root","");
    $db = mysqli_select_db($connection,"alumni_db");
    $query = " delete from bba_batch where bba_batch_id =$_GET[aid]";
    $query_run = mysqli_query($connection,$query);
    header('Refresh: 0; url=../bba_batch.php');
?>
