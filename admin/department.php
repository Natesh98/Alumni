<?php
$connection = mysqli_connect("localhost","root","");
$db = mysqli_select_db($connection,"alumni_db");
$dept_id = "";
$department_name = "";
$query = "select * from department ";
$query_run = mysqli_query($connection,$query);
while($row = mysqli_fetch_assoc($query_run)){
$dept_id = $row['dept_id'];
$department_name = $row['department_name'];

}
?>


<style>
.card-header{

	background: gray;
	color: white;
}

.table-hover{

background:gray;	

}

	</style>


<div class="container-fluid">
	
	<div class="col-lg-12">
		<div class="row">
			<!-- FORM Panel -->
			<div class="col-md-4">
			<form action="" id="manage-course" method="post">
				<div class="card">
					<div class="card-header">
						    Add Department
				  	</div>
					<div class="card-body">
							<!-- <input type="hidden" name="id"> -->
							<div class="form-group">
								<label class="control-label">Department</label>
								<input type="text" name="department_name" class="form-control" required>
							</div>
							
					</div>
							
					<div class="card-footer">
						<div class="row">
							<div class="col-md-12">
								<button class="btn btn-sm btn-success col-sm-3 offset-md-3" name="login"> Add</button>
								
							</div>
						</div>
					</div>
				</div>
			</form>
			</div>
			<!-- FORM Panel -->

            <!-- Table Panel -->
			<div class="col-md-8">
				<div class="card">
					<div class="card-header">
						<h4><b>Department</b></h4>
					</div>
					<div class="card-body ">
						<table class="table table-bordered table-hover">
							<thead>
								<tr>
									<th class="text-center">#</th>
									<th class="text-center ">Department</th>
									<th class="text-center ">Action</th>
								</tr>
							</thead>
							<tbody>
                            <?php
                                $connection = mysqli_connect("localhost","root","");
                                $db = mysqli_select_db($connection,"alumni_db");
                                $dept_id = "";
                                $department_name = "";
                                $query = "select * from department ";
                                $query_run = mysqli_query($connection,$query);
                                while($row = mysqli_fetch_assoc($query_run)){
                                $dept_id = $row['dept_id'];
                                $department_name = $row['department_name'];

                             
                                ?>
								<tr>
									<td class="text-center">
                                    <?php echo $dept_id ?>
                                    </td>
									<td class="">
										<?php echo $department_name?>
									</td>
									<td class="text-center">
										<?php
											if($department_name == "BBA"){
												?>
											<a href="bba_batch.php"><button class="btn btn-success">Open</button></a>
											<a href="delete_bba_batch.php?aid=<?php echo $row['dept_id'];?>" class="delete btn btn-danger" title="Delete" data-toggle="tooltip" >Delete</a>
											<?php
											}
											else if($department_name == "Information Technology"){
												?>
											<a href="it_batch.php"><button class="btn btn-success">Open</button></a>
											<a href="delete_it_batch.php?iid=<?php echo $row['dept_id'];?>" class="delete btn btn-danger" title="Delete" data-toggle="tooltip" >Delete</a>

												<?php
											}
											else if($department_name == "Computer Science"){
												?>
											<a href="cs_batch.php"><button class="btn btn-success">Open</button></a>
											<a href="delete_cs_batch.php?csd=<?php echo $row['dept_id'];?>" class="delete btn btn-danger" title="Delete" data-toggle="tooltip" >Delete</a>

												<?php
											}
											else if($department_name == "English"){
												?>
											<a href="english_batch.php"><button class="btn btn-success">Open</button></a>
											<a href="delete_english_batch.php?eid=<?php echo $row['dept_id'];?>" class="delete btn btn-danger" title="Delete" data-toggle="tooltip" >Delete</a>

												<?php
											}
											else if($department_name == "Commerce"){
												?>
											<a href="commerce_batch.php"><button class="btn btn-success">Open</button></a>
											<a href="delete_commerce_batch.php?cod=<?php echo $row['dept_id'];?>" class="delete btn btn-danger" title="Delete" data-toggle="tooltip" >Delete</a>


												<?php
											}
											else if($department_name == "Pharmacy"){
												?>
											<a href="pharmacy_batch.php"><button class="btn btn-success">Open</button></a>
											<a href="delete_pharmacy_batch.php?pid=<?php echo $row['dept_id'];?>" class="delete btn btn-danger" title="Delete" data-toggle="tooltip" >Delete</a>
		
												<?php
											}
											else if($department_name == "Education"){
												?>
											<a href="education_batch.php"><button class="btn btn-success">Open</button></a>
											<a href="delete_education_batch.php?edd=<?php echo $row['dept_id'];?>" class="delete btn btn-danger" title="Delete" data-toggle="tooltip" >Delete</a>

												<?php
											}
											else{
												echo "no record found";
											}
										?>
                                        <!-- <a href="bba_batch.php"><button class="btn btn-primary">Open</button></a> -->
                                   
									</td>
								</tr>
                                <?php
                                }
                                ?>
							</tbody>
						</table>
					</div>
				</div>
			</div>
			<!-- Table Panel -->
		</div>
	</div>	

</div>

<script>
    $('table').dataTable()
</script>
<?php
	if(isset($_POST['login'])){
	$connection = mysqli_connect("localhost","root","");
	$db = mysqli_select_db($connection,"alumni_db");

	$query = "insert into department values(null,'$_POST[department_name]')";
	$query_run = mysqli_query($connection,$query);
	// header('Refresh: 0; url=department.php');
	}
?>