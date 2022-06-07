<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Alumni Management System</title>


  <meta content="" name="descriptison">
  <meta content="" name="keywords">



  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
  <link rel="stylesheet" href="assets/font-awesome/css/all.min.css">


  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/icofont/icofont.min.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/venobox/venobox.css" rel="stylesheet">
  <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-datepicker/css/bootstrap-datepicker.min.css" rel="stylesheet">
  <link href="assets/DataTables/datatables.min.css" rel="stylesheet">
  <link href="assets/css/jquery.datetimepicker.min.css" rel="stylesheet">
  <link href="assets/css/select2.min.css" rel="stylesheet">


  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">
  <link type="text/css" rel="stylesheet" href="assets/css/jquery-te-1.4.0.css">

  <script src="assets/vendor/jquery/jquery.min.js"></script>
  <script src="assets/DataTables/datatables.min.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/jquery.easing/jquery.easing.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/venobox/venobox.min.js"></script>
  <script src="assets/vendor/waypoints/jquery.waypoints.min.js"></script>
  <script src="assets/vendor/counterup/counterup.min.js"></script>
  <script src="assets/vendor/owl.carousel/owl.carousel.min.js"></script>
  <script src="assets/vendor/bootstrap-datepicker/js/bootstrap-datepicker.min.js"></script>
  <script type="text/javascript" src="assets/js/select2.min.js"></script>
  <script type="text/javascript" src="assets/js/jquery.datetimepicker.full.min.js"></script>
  <script type="text/javascript" src="assets/font-awesome/js/all.min.js"></script>
  <script type="text/javascript" src="assets/js/jquery-te-1.4.0.min.js" charset="utf-8"></script>




</head>
<style>
  body {
    background: maroon;
  }

  .modal-dialog.large {
    width: 80% !important;
    max-width: unset;
  }

  .modal-dialog.mid-large {
    width: 50% !important;
    max-width: unset;
  }

  #viewer_modal .btn-close {
    position: absolute;
    z-index: 999999;
    /*right: -4.5em;*/
    background: unset;
    color: white;
    border: unset;
    font-size: 27px;
    top: 0;
  }

  #viewer_modal .modal-dialog {
    width: 80%;
    max-width: unset;
    height: calc(90%);
    max-height: unset;
  }

  #viewer_modal .modal-content {
    background: black;
    border: unset;
    height: calc(100%);
    display: flex;
    align-items: center;
    justify-content: center;
  }

  #viewer_modal img,
  #viewer_modal video {
    max-height: calc(100%);
    max-width: calc(100%);
  }
</style>

<body>
  <style>
    .logo {
      margin: auto;
      font-size: 20px;
      background: white;
      padding: 7px 11px;
      border-radius: 50% 50%;
      color: #000000b3;
    }
  </style>

  <nav class="navbar navbar-light fixed-top bg-dark" style="padding:0;min-height: 3.5rem">
    <div class="container-fluid mt-2 mb-2">
      <div class="col-lg-12">
        <div class="col-md-1 float-left" style="display: flex;">

        </div>
        <div class="col-md-4 float-left text-white">
          <large><b>Alumni Management System</b></large>
        </div>
        <div class="float-right">
          <div class=" dropdown mr-4">
            <a href="#" class="text-white dropdown-toggle" id="account_settings" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Admin </a>
            <div class="dropdown-menu" aria-labelledby="account_settings" style="left: -2.5em;">
              <a class="dropdown-item" href="javascript:void(0)" id="manage_my_account"><i class="fa fa-cog"></i> Manage Account</a>
              <a class="dropdown-item" href="ajax.php?action=logout"><i class="fa fa-power-off"></i> Logout</a>
            </div>
          </div>
        </div>
      </div>

  </nav>

  <script>
    $('#manage_my_account').click(function() {
      uni_modal("Manage Account", "manage_user.php?id=1&mtype=own")
    })
  </script>
  <style>
    .collapse a {
      text-indent: 10px;
    }

    /* nav#sidebar{
		background: url(assets/uploads/1633968420_thinkstockphotos-639780580-100735148-large.jpg) !important
	} */
  </style>

  <nav id="sidebar" class='mx-lt-5 bg-white'>

    <div class="sidebar-list">
      <a href="index.php?page=home" class="nav-item nav-home"><span class='icon-field'><i class="fa fa-home"></i></span> Home</a>
      <a href="index.php?page=gallery" class="nav-item nav-gallery"><span class='icon-field'><i class="fa fa-image"></i></span> Gallery </a>
      <a href="index.php?page=courses" class="nav-item nav-courses"><span class='icon-field'><i class="fa fa-list"></i></span> Course List</a>
      <a href="index.php?page=department" class="nav-item nav-department"><span class='icon-field'><i class="fa fa-list"></i></span> Department</a>
      <a href="index.php?page=alumni" class="nav-item nav-alumni"><span class='icon-field'><i class="fa fa-users"></i></span> Alumni List</a>
      <a href="index.php?page=jobs" class="nav-item nav-jobs"><span class='icon-field'><i class="fa fa-briefcase"></i></span> Jobs</a>
      <a href="index.php?page=events" class="nav-item nav-events"><span class='icon-field'><i class="fa fa-calendar-day"></i></span> Events</a>
      <a href="index.php?page=forums" class="nav-item nav-forums"><span class='icon-field'><i class="fa fa-comments"></i></span> Forum</a>
      <a href="index.php?page=users" class="nav-item nav-users"><span class='icon-field'><i class="fa fa-users"></i></span> Users</a>
      <a href="index.php?page=site_settings" class="nav-item nav-site_settings"><span class='icon-field'><i class="fa fa-cogs"></i></span> System Settings</a>
    </div>

  </nav>
  <!-- <script>
	$('.nav_collapse').click(function(){
		console.log($(this).attr('href'))
		$($(this).attr('href')).collapse()
	})
	$('.nav-department').addClass('active')
</script> -->
  <div class="toast" id="alert_toast" role="alert" aria-live="assertive" aria-atomic="true">
    <div class="toast-body text-white">
    </div>
  </div>
  <main id="view-panel">


    <div class="container-fluid">

      <div class="col-lg-12">
        <div class="row">
          <!-- FORM Panel -->
          <div class="col-md-4">
            <form action="" id="manage-course" method="post">
              <div class="card">
                <div class="card-header">
                  Add Data Batch
                </div>
                <div class="card-body">
                  <!-- <input type="hidden" name="id"> -->
                  <div class="form-group">
                    <label class="control-label">Name</label>
                    <input type="text" name="it_batch7_name" class="form-control" required>
                  </div>
                  <div class="form-group">
                    <label class="control-label">Registration No:</label>
                    <input type="text" name="it_batch7_reg" class="form-control" required>
                  </div>
                  <div class="form-group">
                    <label class="control-label">Current Desination</label>
                    <input type="text" name="it_batch7_desgination" class="form-control" required>
                  </div>
                  <div class="form-group">
                    <label class="control-label">Contact No:</label>
                    <input type="number" name="it_batch7_contact_no" class="form-control" maxlength="11" oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" required>
                  </div>
                  <div class="form-group">
                    <label class="control-label">Email</label>
                    <input type="email" name="it_batch7_email" class="form-control" required>
                  </div>
                  <div class="form-group">
                    <label class="control-label">CNIC</label>
                    <input type="text" name="it_batch7_cnic" class="form-control"  maxlength="13" oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" required>
                  </div>

                  <div class="form-group">
                    <label class="control-label">CGPA</label>
                    <input type="text" name="it_batch7_cgpa" class="form-control" required>
                  </div>

                </div>

                <div class="card-footer">
                  <div class="row">
                    <div class="col-md-12">
                      <button class="btn btn-sm btn-success col-sm-3 offset-md-3" name="add"> Add</button>

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
                <h5><b> IT Batch 07</b></h5>
              </div>
              <div class="card-body">
                <table class="table table-bordered table-hover table-responsive">
                  <thead>
                    <tr>
                      <th class="text-center">#</th>
                      <th class="text-center">Name</th>
                      <th class="text-center">Registration No:</th>
                      <th class="text-center">Current Designation</th>
                      <th class="text-center">Contact No</th>
                      <th class="text-center">Email</th>
                      <th class="text-center">CNIC</th>
                      <th class="text-center">CGPA</th>
                      <!-- <th class="text-center">Action</th> -->
                    </tr>
                  </thead>
                  <tbody>
                    <?php
                    $connection = mysqli_connect("localhost", "root", "");
                    $db = mysqli_select_db($connection, "alumni_db");
                    // $it_batch7_id = "";
                    // $it_batch7_name = "";
                    // $it_batch7_reg = "";
                    // $it_batch7_desgination = "";
                    $query = "select * from it_batch7 ";
                    $query_run = mysqli_query($connection, $query);
                    while ($row = mysqli_fetch_assoc($query_run)) {
                      extract($row);


                    ?>
                      <tr>
                        <td class="text-center">
                          <?php echo $it_batch7_id ?>
                        </td>
                        <td class="">
                          <?php echo $it_batch7_name ?>
                        </td>
                        <td class="">
                          <?php echo $it_batch7_reg ?>
                        </td>
                        <td class="">
                          <?php echo $it_batch7_desgination ?>
                        </td>
                        <td class="">
                          <?php echo $it_batch7_contact_no ?>
                        </td>
                        <td class="">
                          <?php echo $it_batch7_email ?>
                        </td>
                        <td class="">
                          <?php echo $it_batch7_cnic ?>
                        </td>
                        <td class="">
                          <?php echo $it_batch7_cgpa ?>
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


  </main>

  <?php
  if (isset($_POST['add'])) {
    $connection = mysqli_connect("localhost", "root", "");
    $db = mysqli_select_db($connection, "alumni_db");

    $query = "insert into it_batch7 values(null,'$_POST[it_batch7_name]','$_POST[it_batch7_reg]','$_POST[it_batch7_desgination]', '$_POST[it_batch7_contact_no]', '$_POST[it_batch7_email]', '$_POST[it_batch7_cnic]', '$_POST[it_batch7_cgpa]')";
    $query_run = mysqli_query($connection, $query);
    echo "<script>location.href='it_batch7.php'</script>";
  }
  ?>

  <div id="preloader"></div>
  <a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>

  <div class="modal fade" id="confirm_modal" role='dialog'>
    <div class="modal-dialog modal-md" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">Confirmation</h5>
        </div>
        <div class="modal-body">
          <div id="delete_content"></div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-success" id='confirm' onclick="">Continue</button>
          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>
  <div class="modal fade" id="uni_modal" role='dialog'>
    <div class="modal-dialog modal-md" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title"></h5>
        </div>
        <div class="modal-body">
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-primary" id='submit' onclick="$('#uni_modal form').submit()">Save</button>
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
        </div>
      </div>
    </div>
  </div>
  <div class="modal fade" id="viewer_modal" role='dialog'>
    <div class="modal-dialog modal-md" role="document">
      <div class="modal-content">
        <button type="button" class="btn-close" data-dismiss="modal"><span class="fa fa-times"></span></button>
        <img src="" alt="">
      </div>
    </div>
  </div>



</body>
<script>
  window.start_load = function() {
    $('body').prepend('<di id="preloader2"></di>')
  }
  window.end_load = function() {
    $('#preloader2').fadeOut('fast', function() {
      $(this).remove();
    })
  }
  window.viewer_modal = function($src = '') {
    start_load()
    var t = $src.split('.')
    t = t[1]
    if (t == 'mp4') {
      var view = $("<video src='" + $src + "' controls autoplay></video>")
    } else {
      var view = $("<img src='" + $src + "' />")
    }
    $('#viewer_modal .modal-content video,#viewer_modal .modal-content img').remove()
    $('#viewer_modal .modal-content').append(view)
    $('#viewer_modal').modal({
      show: true,
      backdrop: 'static',
      keyboard: false,
      focus: true
    })
    end_load()

  }
  window.uni_modal = function($title = '', $url = '', $size = "") {
    start_load()
    $.ajax({
      url: $url,
      error: err => {
        console.log()
        alert("An error occured")
      },
      success: function(resp) {
        if (resp) {
          $('#uni_modal .modal-title').html($title)
          $('#uni_modal .modal-body').html(resp)
          if ($size != '') {
            $('#uni_modal .modal-dialog').addClass($size)
          } else {
            $('#uni_modal .modal-dialog').removeAttr("class").addClass("modal-dialog modal-md")
          }
          $('#uni_modal').modal({
            show: true,
            backdrop: 'static',
            keyboard: false,
            focus: true
          })
          end_load()
        }
      }
    })
  }
  window._conf = function($msg = '', $func = '', $params = []) {
    $('#confirm_modal #confirm').attr('onclick', $func + "(" + $params.join(',') + ")")
    $('#confirm_modal .modal-body').html($msg)
    $('#confirm_modal').modal('show')
  }
  window.alert_toast = function($msg = 'TEST', $bg = 'success') {
    $('#alert_toast').removeClass('bg-success')
    $('#alert_toast').removeClass('bg-danger')
    $('#alert_toast').removeClass('bg-info')
    $('#alert_toast').removeClass('bg-warning')

    if ($bg == 'success')
      $('#alert_toast').addClass('bg-success')
    if ($bg == 'danger')
      $('#alert_toast').addClass('bg-danger')
    if ($bg == 'info')
      $('#alert_toast').addClass('bg-info')
    if ($bg == 'warning')
      $('#alert_toast').addClass('bg-warning')
    $('#alert_toast .toast-body').html($msg)
    $('#alert_toast').toast({
      delay: 3000
    }).toast('show');
  }
  $(document).ready(function() {
    $('#preloader').fadeOut('fast', function() {
      $(this).remove();
    })
  })
  $('.datetimepicker').datetimepicker({
    format: 'Y/m/d H:i',
    startDate: '+3d'
  })
  $('.select2').select2({
    placeholder: "Please select here",
    width: "100%"
  })
</script>