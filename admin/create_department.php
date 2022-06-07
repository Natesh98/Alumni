<?php
	$connection = mysqli_connect("localhost","root","");
	$db = mysqli_select_db($connection,"alumni_db");

	$query = "insert into department values(null,'$_POST[department_name]')";
	$query_run = mysqli_query($connection,$query);
header("location:department.php");
?>
<!-- <script type="text/javascript">
	alert("Lead successfully Create .....")
	window.location.href = "all_leads.php";
</script> -->