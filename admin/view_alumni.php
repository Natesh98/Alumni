<?php include 'db_connect.php' ?>
<?php
if(isset($_GET['id'])){
$qry = $conn->query("SELECT a.*,c.course,Concat(a.lastname,', ',a.firstname,' ',a.middlename) as name from alumnus_bio a inner join courses c on c.id = a.course_id where a.id= ".$_GET['id']);
foreach($qry->fetch_array() as $k => $val){
	$$k=$val;
}
}
?>
<style type="text/css">
	
	.avatar {
	    display: flex;
	    border-radius: 100%;
	    width: 100px;
	    height: 100px;
	    align-items: center;
	    justify-content: center;
	    border: 3px solid;
	    padding: 5px;
	}
	.avatar img {
	    max-width: calc(100%);
	    max-height: calc(100%);
	    border-radius: 100%;
	}
	p{
		margin:unset;
	}
	#uni_modal .modal-footer{
		display: none
	}
	#uni_modal .modal-footer.display{
		display: block
	}
</style>
<div class="container-field">

	<div class="col-lg-12">
		<div>
			<center>
				<div class="avatar">
				 <img src="assets/uploads/<?php echo $avatar ?>" class="" alt="">
				</div>
			</center>
		</div>
		<hr>
		<div class="row">
			<div class="col-md-12">
				<!-- <p style="background-color:blue;">Name: <b><?php echo $name ?></b></p>
				<input type="text" name="name" value="<?php echo $name ?>">
				<p>Email: <b><?php echo $email ?></b></p>
				<p>Batch: <b><?php echo $batch ?></b></p>
				<p>Course: <b><?php echo $course ?></b></p> -->
				<form action="" method="post">
                                <legend>Personal Info</legend>
                                <div class="row">
									<div class="col-md-6 col-sm-12">
                                        <div class="form-group">
                                            <label>Name</label>
                                            <input type="text" name="name" id="name" class="form-control" value="<?php echo $name ?>" readonly>
                                        </div>
                                    </div>	
									<div class="col-md-6 col-sm-12">
										<div class="form-group">
											<label>Email</label>
											<input type="text" name="email" class="form-control" value="<?php echo $email ?>" readonly>
										</div>
									</div>
									<div class="col-md-6 col-sm-12">
										<div class="form-group">
											<label>Batch</label>
											<input type="text" name="batch" class="form-control" value="<?php echo $batch ?>" readonly>
										</div>
									</div>
									<div class="col-md-6 col-sm-12">
										<div class="form-group">
											<label>Course</label>
											<input type="text" name="course" class="form-control" value="<?php echo $course ?>" readonly>
										</div>
									</div>
									<div class="col-md-6 col-sm-12">
										<div class="form-group">
											<label>Gender</label>
											<input type="text" name="gender" class="form-control" value="<?php echo $gender ?>" readonly>
										</div>
									</div>
									<div class="col-md-6 col-sm-12">
										<div class="form-group">
											<label>Account Status:</label>
											<p> <b><?php echo $status == 1 ? '<span class="badge badge-primary">Verified</span>' : '<span class="badge badge-secondary">Unverified</span>' ?></b></p>										</div>
									</div>

                                </div>

                            </form>
			</div>
			<!-- <div class="col-md-0">
				<p>Gender: <b><?php echo $gender ?></b></p>
				<p>Account Status: <b><?php echo $status == 1 ? '<span class="badge badge-primary">Verified</span>' : '<span class="badge badge-secondary">Unverified</span>' ?></b></p>
			</div> -->
		</div>
	</div>
</div>
<div class="modal-footer display">
	<div class="row">
		<div class="col-lg-12">
			<button class="btn float-right btn-secondary" type="button" data-dismiss="modal">Close</button>
			<?php if($status == 1): ?>
			<button class="btn float-right btn-primary update mr-2" data-status = '0' type="button" data-dismiss="modal">Unverify Account</button>
			<?php else: ?>
				<button class="btn float-right btn-primary update mr-2" data-status = '1' type="button" data-dismiss="modal">Verify Account</button>
			<?php endif; ?>
		</div>
	</div>
</div>


<script>
	$('.update').click(function(){
		start_load()
		$.ajax({
			url:'ajax.php?action=update_alumni_acc',
			method:"POST",
			data:{id:<?php echo $id ?>,status:$(this).attr('data-status')},
			success:function(resp){
				if(resp == 1){
					alert_toast("Alumnus/Alumna account status successfully updated.")
					setTimeout(function(){
						location.reload()
					},1000)
				}
			}
		})
	})

</script>
