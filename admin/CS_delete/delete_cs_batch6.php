<?php
    $connection = mysqli_connect("localhost","root","");
    $db = mysqli_select_db($connection,"alumni_db");
    $query = " delete from cs_batch where cs_id =$_GET[fid]";
    $query_run = mysqli_query($connection,$query);
    header('Refresh: 0; url=../cs_batch.php');
?>
