<?php
    $connection = mysqli_connect("localhost","root","");
    $db = mysqli_select_db($connection,"alumni_db");
    $query = " delete from department where dept_id =$_GET[pid]";
    $query_run = mysqli_query($connection,$query);
    // header('Refresh: 0; url=department.php');
    exit;
?>
