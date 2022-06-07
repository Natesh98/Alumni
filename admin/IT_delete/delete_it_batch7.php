<?php
    $connection = mysqli_connect("localhost","root","");
    $db = mysqli_select_db($connection,"alumni_db");
    $query = " delete from it_batch where it_batch_id =$_GET[itd]";
    $query_run = mysqli_query($connection,$query);
    header('Refresh: 0; url=../it_batch.php');
?>
