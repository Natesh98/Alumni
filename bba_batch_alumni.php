<!DOCTYPE html>
<html lang="en">
<meta charset="utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
<meta name="description" content="" />
<meta name="author" content="" />
<title>Alumni Management System</title>
<!-- Favicon-->
<link rel="icon" type="image/x-icon" href="assets/img/favicon.ico" />
<!-- Font Awesome icons (free version)-->
<script src="https://use.fontawesome.com/releases/v5.13.0/js/all.js" crossorigin="anonymous"></script>
<!-- Google fonts-->
<link href="https://fonts.googleapis.com/css?family=Merriweather+Sans:400,700" rel="stylesheet" />
<link href="https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic" rel="stylesheet" type="text/css" />
<!-- Third party plugin CSS-->
<link href="admin/assets/css/jquery.datetimepicker.min.css" rel="stylesheet">
<link href="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/magnific-popup.min.css" rel="stylesheet" />
<!-- Core theme CSS (includes Bootstrap)-->
<link href="admin/assets/vendor/bootstrap-datepicker/css/bootstrap-datepicker.css" rel="stylesheet" />
<link href="css/styles.css" rel="stylesheet" />
<link type="text/css" rel="stylesheet" href="admin/assets/css/jquery-te-1.4.0.css">

<link href="admin/assets/css/select2.min.css" rel="stylesheet">

<script src="admin/assets/vendor/jquery/jquery.min.js"></script>
<script src="admin/assets/vendor/bootstrap-datepicker/js/bootstrap-datepicker.js"></script>

<script type="text/javascript" src="admin/assets/js/select2.min.js"></script>

<script type="text/javascript" src="admin/assets/js/jquery.datetimepicker.full.min.js"></script>
<script type="text/javascript" src="admin/assets/js/jquery-te-1.4.0.min.js" charset="utf-8"></script>





<style>
    /* header.masthead {
        background: url(admin/assets/uploads/<br />
<b>Warning</b>: Array to string conversion in <b>F:\xampp\htdocs\alumni\index.php</b> on line <b>20</b><br /> Array);
        background-repeat: no-repeat;
        background-size: cover;
    } */

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



    /* body, footer {
    background: #000000e6 !important;
} */


    body,
    footer {
        background: black !important;
    }






    a.jqte_tool_label.unselectable {
        height: auto !important;
        min-width: 4rem !important;
        padding: 5px
    }

    /*
a.jqte_tool_label.unselectable {
    height: 22px !important;
}*/
</style>

<body id="page-top">
    <!-- Navigation-->
    <div class="toast" id="alert_toast" role="alert" aria-live="assertive" aria-atomic="true">
        <div class="toast-body text-white">
        </div>
    </div>
    <nav class="navbar navbar-expand-lg navbar-light fixed-top py-3" id="mainNav">
        <div class="container" style="width: 100%">
            <a class="navbar-brand js-scroll-trigger" href="./">Alumni Management System</a>
            <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ml-auto my-2 my-lg-0">
                    <li class="nav-item"><a class="nav-link js-scroll-trigger" href="index.php?page=home">Home</a></li>
                    <li class="nav-item">
                        <div class=" dropdown">
                            <a href="#" class="nav-link js-scroll-trigger" id="account_settings" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Department <i class="fa fa-angle-down"></i></a>
                            <div class="dropdown-menu" aria-labelledby="department">
                                <a class="dropdown-item" href="index.php?page=cs_dept" id="dept_cs">CS Department</a>
                                <a class="dropdown-item" href="index.php?page=it_dept" id="dept_it">IT Department</a>
                                <a class="dropdown-item" href="index.php?page=bba_dept" id="dept_bba">BBA Department</a>
                            </div>
                        </div>
                    </li>
                    <li class="nav-item"><a class="nav-link js-scroll-trigger" href="index.php?page=gallery">Gallery</a></li>
                    <li class="nav-item"><a class="nav-link js-scroll-trigger" href="index.php?page=careers">Jobs</a></li>
                    <li class="nav-item"><a class="nav-link js-scroll-trigger" href="index.php?page=forum">Forums</a></li>

                    <li class="nav-item"><a class="nav-link js-scroll-trigger" href="index.php?page=about">About</a></li>
                    <li class="nav-item">
                        <div class=" dropdown mr-4">
                            <a href="#" class="nav-link js-scroll-trigger" id="account_settings" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Admin <i class="fa fa-angle-down"></i></a>
                            <div class="dropdown-menu" aria-labelledby="account_settings" style="left: -2.5em;">
                                <a class="dropdown-item" href="index.php?page=my_account" id="manage_my_account"><i class="fa fa-cog"></i> Manage Account</a>
                                <a class="dropdown-item" href="admin/ajax.php?action=logout2"><i class="fa fa-power-off"></i> Logout</a>
                            </div>
                        </div>
                    </li>


                </ul>
            </div>
        </div>
    </nav>






    <style>
        #portfolio .img-fluid {
            width: calc(100%);
            height: 30vh;
            z-index: -1;
            position: relative;
            padding: 1em;
        }

        .alumni-list {
            cursor: pointer;
            border: unset;
            flex-direction: inherit;
        }

        .alumni-img {
            width: calc(30%);
            max-height: 30vh;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .alumni-list .card-body {
            width: calc(70%);
        }

        .alumni-img img {
            border-radius: 100%;
            max-height: calc(100%);
            max-width: calc(100%);
        }

        span.hightlight {
            background: yellow;
        }

        .carousel,
        .carousel-inner,
        .carousel-item {
            min-height: calc(100%)
        }

        header.masthead,
        header.masthead:before {
            min-height: 50vh !important;
            height: 50vh !important
        }

        .row-items {
            position: relative;
        }

        .card-left {
            left: 0;
        }

        .card-right {
            right: 0;
        }

        .rtl {
            direction: rtl;
        }

        .alumni-text {
            justify-content: center;
            align-items: center;
        }

        .masthead {
            min-height: 23vh !important;
            height: 23vh !important;
        }

        .masthead:before {
            min-height: 23vh !important;
            height: 23vh !important;
        }

        .alumni-list p {
            margin: unset;
        }
    </style>
    <header class="masthead">
        <div class="container-fluid h-100">
            <div class="row h-100 align-items-center justify-content-center text-center">
                <div class="col-lg-8 align-self-end mb-4 page-title">
                    <i>
                        <h3 class="text-white">BBSUL-Alumni BBA Department!!</h3><i>
                            <hr class="divider my-4" />

                            <div class="col-md-12 mb-2 justify-content-center">
                            </div>
                </div>

            </div>
        </div>
    </header>
    <div class="container">

    </div>
    </div>
    <div class="container-fluid mt-3 pt-2">

        <div class="row justify-content-center">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header text-center">
                        <h4><b> BBA Alumni List</b></h4>
                    </div>
                    <div class="card-body">
                        <table class="table table-bordered table-hover">
                            <thead>
                                <tr>
                                    <th class="text-center">ID</th>
                                    <th class="text-center">Name</th>
                                    <th class="text-center">Reg-no</th>
                                    <th class="text-center">Designation</th>
                                    <th class="text-center">Contact No</th>
                                    <th class="text-center">Email</th>
                                    <th class="text-center">CGPA</th>
                                    <th class="text-center">Action</th>

                                    <!-- <th class="text-center">Action</th> -->
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $connection = mysqli_connect("localhost", "root", "");
                                $db = mysqli_select_db($connection, "alumni_db");
                                $bid = $_GET['bid'];
                                if ($bid === '1') {

                                    $query = "select * from bba_batch1 ";
                                    $query_run = mysqli_query($connection, $query);
                                    while ($row = mysqli_fetch_assoc($query_run)) {
                                        extract($row)


                                ?>
                                        <tr>
                                            <td class="text-center">
                                                <?php echo $bba_batch1_id ?>
                                            </td>
                                            <td class="">
                                                <?php echo $bba_batch1_name ?>
                                            </td>
                                            <td class="">
                                                <?php echo $bba_batch1_reg ?>
                                            </td>
                                            <td class="">
                                                <?php echo $bba_batch1_desgination ?>
                                            </td>
                                            <td class="">
                                                <?php echo $bba_batch1_contact_no ?>
                                            </td>
                                            <td class="">
                                                <?php echo $bba_batch1_email ?>
                                            </td>
                                            <td class="">
                                                <?php echo $bba_batch1_cgpa ?>
                                            </td>


                                            <td class="">
                                                <a href="">
                                                    View <i class="fa fa-eye"></i>
                                                </a>
                                            </td>
                                        </tr>
                                    <?php
                                    }
                                }
                                else if ($bid === '2') {

                                    $query = "select * from bba_batch2 ";
                                    $query_run = mysqli_query($connection, $query);
                                    while ($row = mysqli_fetch_assoc($query_run)) {
                                        extract($row)


                                    ?>
                                        <tr>
                                            <td class="text-center">
                                                <?php echo $bba_batch2_id ?>
                                            </td>
                                            <td class="">
                                                <?php echo $bba_batch2_name ?>
                                            </td>
                                            <td class="">
                                                <?php echo $bba_batch2_reg ?>
                                            </td>
                                            <td class="">
                                                <?php echo $bba_batch2_desgination ?>
                                            </td>
                                            <td class="">
                                                <?php echo $bba_batch2_contact_no ?>
                                            </td>
                                            <td class="">
                                                <?php echo $bba_batch2_email ?>
                                            </td>
                                            <td class="">
                                                <?php echo $bba_batch2_cgpa ?>
                                            </td>


                                            <td class="">
                                                <a href="">
                                                    View <i class="fa fa-eye"></i>
                                                </a>
                                            </td>
                                        </tr>
                                <?php
                                    }
                                }

                                else if ($bid === '3') {

                                    $query = "select * from bba_batch3 ";
                                    $query_run = mysqli_query($connection, $query);
                                    while ($row = mysqli_fetch_assoc($query_run)) {
                                        extract($row)


                                    ?>
                                        <tr>
                                            <td class="text-center">
                                                <?php echo $bba_batch3_id ?>
                                            </td>
                                            <td class="">
                                                <?php echo $bba_batch3_name ?>
                                            </td>
                                            <td class="">
                                                <?php echo $bba_batch3_reg ?>
                                            </td>
                                            <td class="">
                                                <?php echo $bba_batch3_desgination ?>
                                            </td>
                                            <td class="">
                                                <?php echo $bba_batch3_contact_no ?>
                                            </td>
                                            <td class="">
                                                <?php echo $bba_batch3_email ?>
                                            </td>
                                            <td class="">
                                                <?php echo $bba_batch3_cgpa ?>
                                            </td>


                                            <td class="">
                                                <a href="">
                                                    View <i class="fa fa-eye"></i>
                                                </a>
                                            </td>
                                        </tr>
                                <?php
                                    }
                                }

                                else if ($bid === '4') {

                                    $query = "select * from bba_batch4 ";
                                    $query_run = mysqli_query($connection, $query);
                                    while ($row = mysqli_fetch_assoc($query_run)) {
                                        extract($row)


                                    ?>
                                        <tr>
                                            <td class="text-center">
                                                <?php echo $bba_batch4_id ?>
                                            </td>
                                            <td class="">
                                                <?php echo $bba_batch4_name ?>
                                            </td>
                                            <td class="">
                                                <?php echo $bba_batch4_reg ?>
                                            </td>
                                            <td class="">
                                                <?php echo $bba_batch4_desgination ?>
                                            </td>
                                            <td class="">
                                                <?php echo $bba_batch4_contact_no ?>
                                            </td>
                                            <td class="">
                                                <?php echo $bba_batch4_email ?>
                                            </td>
                                            <td class="">
                                                <?php echo $bba_batch4_cgpa ?>
                                            </td>


                                            <td class="">
                                                <a href="">
                                                    View <i class="fa fa-eye"></i>
                                                </a>
                                            </td>
                                        </tr>
                                <?php
                                    }
                                }

                                else if ($bid === '5') {

                                    $query = "select * from bba_batch5 ";
                                    $query_run = mysqli_query($connection, $query);
                                    while ($row = mysqli_fetch_assoc($query_run)) {
                                        extract($row)


                                    ?>
                                        <tr>
                                            <td class="text-center">
                                                <?php echo $bba_batch5_id ?>
                                            </td>
                                            <td class="">
                                                <?php echo $bba_batch5_name ?>
                                            </td>
                                            <td class="">
                                                <?php echo $bba_batch5_reg ?>
                                            </td>
                                            <td class="">
                                                <?php echo $bba_batch5_desgination ?>
                                            </td>
                                            <td class="">
                                                <?php echo $bba_batch5_contact_no ?>
                                            </td>
                                            <td class="">
                                                <?php echo $bba_batch5_email ?>
                                            </td>
                                            <td class="">
                                                <?php echo $bba_batch5_cgpa ?>
                                            </td>


                                            <td class="">
                                                <a href="">
                                                    View <i class="fa fa-eye"></i>
                                                </a>
                                            </td>
                                        </tr>
                                <?php
                                    }
                                }


                                else if ($bid === '6') {

                                    $query = "select * from bba_batch6 ";
                                    $query_run = mysqli_query($connection, $query);
                                    while ($row = mysqli_fetch_assoc($query_run)) {
                                        extract($row)


                                    ?>
                                        <tr>
                                            <td class="text-center">
                                                <?php echo $bba_batch6_id ?>
                                            </td>
                                            <td class="">
                                                <?php echo $bba_batch6_name ?>
                                            </td>
                                            <td class="">
                                                <?php echo $bba_batch6_reg ?>
                                            </td>
                                            <td class="">
                                                <?php echo $bba_batch6_desgination ?>
                                            </td>
                                            <td class="">
                                                <?php echo $bba_batch6_contact_no ?>
                                            </td>
                                            <td class="">
                                                <?php echo $bba_batch6_email ?>
                                            </td>
                                            <td class="">
                                                <?php echo $bba_batch6_cgpa ?>
                                            </td>


                                            <td class="">
                                                <a href="">
                                                    View <i class="fa fa-eye"></i>
                                                </a>
                                            </td>
                                        </tr>
                                <?php
                                    }
                                }


                                else if ($bid === '7') {

                                    $query = "select * from bba_batch7 ";
                                    $query_run = mysqli_query($connection, $query);
                                    while ($row = mysqli_fetch_assoc($query_run)) {
                                        extract($row)


                                    ?>
                                        <tr>
                                            <td class="text-center">
                                                <?php echo $bba_batch7_id ?>
                                            </td>
                                            <td class="">
                                                <?php echo $bba_batch7_name ?>
                                            </td>
                                            <td class="">
                                                <?php echo $bba_batch7_reg ?>
                                            </td>
                                            <td class="">
                                                <?php echo $bba_batch7_desgination ?>
                                            </td>
                                            <td class="">
                                                <?php echo $bba_batch7_contact_no ?>
                                            </td>
                                            <td class="">
                                                <?php echo $bba_batch7_email ?>
                                            </td>
                                            <td class="">
                                                <?php echo $bba_batch7_cgpa ?>
                                            </td>


                                            <td class="">
                                                <a href="">
                                                    View <i class="fa fa-eye"></i>
                                                </a>
                                            </td>
                                        </tr>
                                <?php
                                    }
                                }

                                else if ($bid === '8') {

                                    $query = "select * from bba_batch8 ";
                                    $query_run = mysqli_query($connection, $query);
                                    while ($row = mysqli_fetch_assoc($query_run)) {
                                        extract($row)


                                    ?>
                                        <tr>
                                            <td class="text-center">
                                                <?php echo $bba_batch8_id ?>
                                            </td>
                                            <td class="">
                                                <?php echo $bba_batch8_name ?>
                                            </td>
                                            <td class="">
                                                <?php echo $bba_batch8_reg ?>
                                            </td>
                                            <td class="">
                                                <?php echo $bba_batch8_desgination ?>
                                            </td>
                                            <td class="">
                                                <?php echo $bba_batch8_contact_no ?>
                                            </td>
                                            <td class="">
                                                <?php echo $bba_batch8_email ?>
                                            </td>
                                            <td class="">
                                                <?php echo $bba_batch8_cgpa ?>
                                            </td>


                                            <td class="">
                                                <a href="">
                                                    View <i class="fa fa-eye"></i>
                                                </a>
                                            </td>
                                        </tr>
                                <?php
                                    }
                                }

                                else if ($bid === '9') {

                                    $query = "select * from bba_batch9 ";
                                    $query_run = mysqli_query($connection, $query);
                                    while ($row = mysqli_fetch_assoc($query_run)) {
                                        extract($row)


                                    ?>
                                        <tr>
                                            <td class="text-center">
                                                <?php echo $bba_batch9_id ?>
                                            </td>
                                            <td class="">
                                                <?php echo $bba_batch9_name ?>
                                            </td>
                                            <td class="">
                                                <?php echo $bba_batch9_reg ?>
                                            </td>
                                            <td class="">
                                                <?php echo $bba_batch9_desgination ?>
                                            </td>
                                            <td class="">
                                                <?php echo $bba_batch9_contact_no ?>
                                            </td>
                                            <td class="">
                                                <?php echo $bba_batch9_email ?>
                                            </td>
                                            <td class="">
                                                <?php echo $bba_batch9_cgpa ?>
                                            </td>


                                            <td class="">
                                                <a href="">
                                                    View <i class="fa fa-eye"></i>
                                                </a>
                                            </td>
                                        </tr>
                                <?php
                                    }
                                }

                                else if ($bid === '10') {

                                    $query = "select * from bba_bacth10 ";
                                    $query_run = mysqli_query($connection, $query);
                                    while ($row = mysqli_fetch_assoc($query_run)) {
                                        extract($row)


                                    ?>
                                        <tr>
                                            <td class="text-center">
                                                <?php echo $bba_batch10_id ?>
                                            </td>
                                            <td class="">
                                                <?php echo $bba_batch10_name ?>
                                            </td>
                                            <td class="">
                                                <?php echo $bba_batch10_reg ?>
                                            </td>
                                            <td class="">
                                                <?php echo $bba_batch10_desgination ?>
                                            </td>
                                            <td class="">
                                                <?php echo $bba_batch10_contact_no ?>
                                            </td>
                                            <td class="">
                                                <?php echo $bba_batch10_email ?>
                                            </td>
                                            <td class="">
                                                <?php echo $bba_batch10_cgpa ?>
                                            </td>


                                            <td class="">
                                                <a href="">
                                                    View <i class="fa fa-eye"></i>
                                                </a>
                                            </td>
                                        </tr>
                                <?php
                                    }
                                }


                                else if ($bid === '11') {

                                    $query = "select * from bba_batch11 ";
                                    $query_run = mysqli_query($connection, $query);
                                    while ($row = mysqli_fetch_assoc($query_run)) {
                                        extract($row)


                                    ?>
                                        <tr>
                                            <td class="text-center">
                                                <?php echo $bba_batch11_id ?>
                                            </td>
                                            <td class="">
                                                <?php echo $bba_batch11_name ?>
                                            </td>
                                            <td class="">
                                                <?php echo $bba_batch11_reg ?>
                                            </td>
                                            <td class="">
                                                <?php echo $bba_batch11_desgination ?>
                                            </td>
                                            <td class="">
                                                <?php echo $bba_batch11_contact_no ?>
                                            </td>
                                            <td class="">
                                                <?php echo $bba_batch11_email ?>
                                            </td>
                                            <td class="">
                                                <?php echo $bba_batch2_cgpa ?>
                                            </td>


                                            <td class="">
                                                <a href="">
                                                    View <i class="fa fa-eye"></i>
                                                </a>
                                            </td>
                                        </tr>
                                <?php
                                    }
                                }

                                else if ($bid === '12') {

                                    $query = "select * from bba_batch12 ";
                                    $query_run = mysqli_query($connection, $query);
                                    while ($row = mysqli_fetch_assoc($query_run)) {
                                        extract($row)


                                    ?>
                                        <tr>
                                            <td class="text-center">
                                                <?php echo $bba_batch12_id ?>
                                            </td>
                                            <td class="">
                                                <?php echo $bba_batch12_name ?>
                                            </td>
                                            <td class="">
                                                <?php echo $bba_batch12_reg ?>
                                            </td>
                                            <td class="">
                                                <?php echo $bba_batch12_desgination ?>
                                            </td>
                                            <td class="">
                                                <?php echo $bba_batch12_contact_no ?>
                                            </td>
                                            <td class="">
                                                <?php echo $bba_batch12_email ?>
                                            </td>
                                            <td class="">
                                                <?php echo $bba_batch12_cgpa ?>
                                            </td>


                                            <td class="">
                                                <a href="">
                                                    View <i class="fa fa-eye"></i>
                                                </a>
                                            </td>
                                        </tr>
                                <?php
                                    }
                                }


                               










                                ?>




                       

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <script>
        // $('.card.alumni-list').click(function(){
        //     location.href = "index.php?page=view_alumni&id="+$(this).attr('data-id')
        // })
        //     $('.book-alumni').click(function(){
        //         uni_modal("Submit Booking Request","booking.php?alumni_id="+$(this).attr('data-id'))
        //     })
        //     $('.alumni-img img').click(function(){
        //         viewer_modal($(this).attr('src'))
        //     })
        //      $('#filter').keypress(function(e){
        //     if(e.which == 13)
        //         $('#search').trigger('click')
        //    })
        //     $('#search').click(function(){
        //         var txt = $('#filter').val()
        //         start_load()
        //         if(txt == ''){
        //         $('.item').show()
        //         end_load()
        //         return false;
        //         }
        //         $('.item').each(function(){
        //             var content = "";
        //             $(this).find(".filter-txt").each(function(){
        //                 content += ' '+$(this).text()
        //             })
        //             if((content.toLowerCase()).includes(txt.toLowerCase()) == true){
        //                 $(this).toggle(true)
        //             }else{
        //                 $(this).toggle(false)
        //             }
        //         })
        //         end_load()
        //     })
    </script>

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
                    <button type="button" class="btn btn-primary" id='confirm' onclick="">Continue</button>
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
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
    <div class="modal fade" id="uni_modal_right" role='dialog'>
        <div class="modal-dialog modal-full-height  modal-md" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title"></h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span class="fa fa-arrow-righ t"></span>
                    </button>
                </div>
                <div class="modal-body">
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







    <!-- Footer -->


    <div id="preloader"></div>
    <footer class=" py-5">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8 text-center">
                    <i>
                        <h2 class="mt-0 text-success">Further Detail Contact</h2>
                    </i>
                    <hr class="divider my-4" />
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 ml-auto text-center mb-5 mb-lg-0">
                    <i class="fas fa-phone fa-3x mb-3 text-muted"></i>
                    <div class="text-white">0300778909775</div>
                </div>
                <div class="col-lg-4 mr-auto text-center">
                    <i class="fas fa-envelope fa-3x mb-3 text-muted"></i>
                    <!-- Make sure to change the email address in BOTH the anchor text and the link target below! -->
                    <a class="d-block" href="mailto:bbsul98@gmail.com">bbsul98@gmail.com</a>
                </div>
            </div>
        </div>
        <br>
        <div class="container">
            <div class="small text-center text-muted"> Alumni Management System</div>
        </div>
    </footer>
    <style>
        .modal-dialog.large {
            width: 80% !important;
            max-width: unset;
        }

        .modal-dialog.mid-large {
            width: 50% !important;
            max-width: unset;
        }
    </style>

    <script>
        $('.datepicker').datepicker({
            format: "yyyy-mm-dd"
        })
        window.start_load = function() {
            $('body').prepend('<di id="preloader2"></di>')
        }
        window.end_load = function() {
            $('#preloader2').fadeOut('fast', function() {
                $(this).remove();
            })
        }

        window.uni_modal = function($title = '', $url = '', $size = '') {
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
        window.uni_modal_right = function($title = '', $url = '') {
            start_load()
            $.ajax({
                url: $url,
                error: err => {
                    console.log()
                    alert("An error occured")
                },
                success: function(resp) {
                    if (resp) {
                        $('#uni_modal_right .modal-title').html($title)
                        $('#uni_modal_right .modal-body').html(resp)

                        $('#uni_modal_right').modal('show')
                        end_load()
                    }
                }
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
                focus: true
            })
            end_load()

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
        window._conf = function($msg = '', $func = '', $params = []) {
            $('#confirm_modal #confirm').attr('onclick', $func + "(" + $params.join(',') + ")")
            $('#confirm_modal .modal-body').html($msg)
            $('#confirm_modal').modal('show')
        }
        window.load_cart = function() {
            $.ajax({
                url: 'admin/ajax.php?action=get_cart_count',
                success: function(resp) {
                    if (resp > -1) {
                        resp = resp > 0 ? resp : 0;
                        $('.item_count').html(resp)
                    }
                }
            })
        }
        $('#login_now').click(function() {
            uni_modal("LOGIN", 'login.php')
        })
        $(document).ready(function() {
            load_cart()
            $('#preloader').fadeOut('fast', function() {
                $(this).remove();
            })
        })
    </script>
    <!-- Bootstrap core JS-->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.bundle.min.js"></script>
    <!-- Third party plugin JS-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/jquery.magnific-popup.min.js"></script>
    <!-- Core theme JS-->

    <script src="js/scripts.js"></script>
    -->



</body>
<script type="text/javascript">
    $('#login').click(function() {
        uni_modal("Login", 'login.php')
    })
</script>

</html>