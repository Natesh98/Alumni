<?php
    $connection = mysqli_connect("localhost","root","");
    $db = mysqli_select_db($connection,"alumni_db");
    $query = " delete from english_batch where english_id =$_GET[cid]";
    $query_run = mysqli_query($connection,$query);
    header('Refresh: 0; url=../english_batch.php');
?>
