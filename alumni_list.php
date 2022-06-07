<?php 
include 'admin/db_connect.php'; 
?>

<link rel="stylesheet" href="css/search box.css">
<!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/4.5.6/css/ionicons.min.css">
<link rel="stylesheet" href="css/profile slider/A.animate.css+style.css,Mcc.wvnfW4JWaM.css.pagespeed.css">
<link rel="stylesheet" href="css/profile slider/owl.carousel.min.css+owl.theme.default.min.css.pagespeed.css"> -->
    
<style>
#portfolio .img-fluid{
    width: calc(100%);
    height: 30vh;
    z-index: -1;
    position: relative;
    padding: 1em;
}
.alumni-list{
cursor: pointer;
border: unset;
flex-direction: inherit;
border-radius: 1rem;
}
.alumni-img {
    width: calc(30%);
    max-height: 30vh;
    display: flex;
    align-items: center;
    justify-content: center;
}
.alumni-list .card-body{
    width: calc(70%);
}
.alumni-img img {
    /* border-radius: 100%; */
    max-height: calc(100%);
    max-width: calc(100%);
}
span.hightlight{
    background: yellow;
}
.carousel,.carousel-inner,.carousel-item{
   min-height: calc(100%)
}
header.masthead,header.masthead:before {
        min-height: 50vh !important;
        height: 50vh !important
    }
.row-items{
    position: relative;
}
.card-left{
    left:0;
}
.card-right{
    right:0;
}
.rtl{
    direction: rtl ;
}
.alumni-text{
    justify-content: center;
    align-items: center ;
}
.masthead{
        min-height: 23vh !important;
        height: 23vh !important;
    }
     .masthead:before{
        min-height: 23vh !important;
        height: 23vh !important;
    }
.alumni-list p {
	margin:unset;
}
</style>
        <!-- <header class="masthead">
            <div class="container-fluid h-100">
                <div class="row h-100 align-items-center justify-content-center text-center">
                    <div class="col-lg-8 align-self-end mb-4 page-title">
                      <i><h3 class="text-white">BBSUL-Alumni Student!!</h3><i>
                        <hr class="divider my-4" />

                    <div class="col-md-12 mb-2 justify-content-center">
                    </div>                        
                    </div>
                    
                </div>
            </div>
        </header> -->

        <!-- top alumni -->
        <!-- profile slider -->
    <!-- <section class="ftco-section">
        <div class="container">
        <div class="row">
        <div class="col-md-12 text-center">
        <h2 class="heading-section mb-5">TOP ALUMNI</h2>
        </div>
        <div class="col-md-12">
        <div class="featured-carousel owl-carousel">
        <div class="item">
        <div class="row justify-content-center">
        <div class="col-md-11">
        <div class="testimony-wrap d-md-flex">
        <div class="img" style="background-image:url(img_file\8_img.jpg)"></div>
        <div class="img" >
    <img src="img_file\8_img.jpg" alt=""></div>

        <div class="text text-center p-4 py-xl-5 px-xl-5 d-flex align-items-center">
        <div class="desc w-100">
        <p class="h3 mb-5">"Incredible services and amazing customer support</p>
        <div class="pt-4">
        <p class="name mb-0">&mdash; Joy Smith</p>
        <span class="position">Project Manager</span>
        </div>
        </div>
        </div>
        </div>
        </div>
        </div>
        </div>
        <div class="item">
        <div class="row justify-content-center">
        <div class="col-md-11">
        <div class="testimony-wrap d-md-flex">
        <div class="img" style="background-image:url(img_file\8_img.jpg)"></div>
        <div class="img" >
    <img src="img_file\8_img.jpg" alt=""></div>
        <div class="text text-center p-4 py-xl-5 px-xl-5 d-flex align-items-center">
        <div class="desc w-100">
        <p class="h3 mb-5">"Incredible services and amazing customer support</p>
        <div class="pt-4">
        <p class="name mb-0">&mdash; Rony Smith</p>
        <span class="position">Project Manager</span>
        </div>
        </div>
        </div>
        </div>
        </div>
        </div>
        </div>
        <div class="item">
        <div class="row justify-content-center">
        <div class="col-md-11">
        <div class="testimony-wrap d-md-flex">
        <div class="img" >
    <img src="img_file\8_img.jpg" alt=""></div>

        <div class="text text-center p-4 py-xl-5 px-xl-5 d-flex align-items-center">
        <div class="desc w-100">
        <p class="h3 mb-5">"Incredible services and amazing customer support</p>
        <div class="pt-4">
        <p class="name mb-0">&mdash; John Doe</p>
        <span class="position">Project Manager</span>
        </div>
        </div>
        </div>
        </div>
        </div>
        </div>
        </div>
        </div>
        </div>
        </div>
        </div>
        </section> -->


        <!-- search box start -->
        <div class="container h-100">
     <div class="d-flex justify-content-center h-100">
         <div class="search"> <input class="search_input" id="filter" type="text" name="" placeholder="Filter name,course, etc."> <a id="search" class="search_icon box-a"><i class="fa fa-search"></i></a> </div>
     </div>
 </div>
        <!-- search box end -->
        	<!-- <div class="container"> -->
        		<!-- <div class="card mb-4 mt-4"> -->
		        <!-- <div class="card-body"> -->
		            <!-- <div class="row"> -->
		                <!-- <div class="col-md-8"> -->
		                    <!-- <div class="input-group mb-3">
		                      <div class="input-group-prepend">
		                        <span class="input-group-text" id="filter-field"><i class="fa fa-search"></i></span>
		                      </div>
		                      <input type="text" class="form-control" id="filter" placeholder="Filter name,course, etc." aria-label="Filter" aria-describedby="filter-field">
		                    </div> -->
		                <!-- </div> -->
		                <!-- <div class="col-md-4">
		                    <button class="btn btn-primary btn-block btn-sm" id="search">Search</button>
		                </div> -->
		            <!-- </div> -->
		            
		        <!-- </div> -->
		    <!-- </div> -->
        	<!-- </div>	 -->
            <div class="container-fluid mt-3 pt-2">
               
                <div class="row-items">
                <div class="col-lg-12">
                    <div class="row">
                <?php
                $fpath = 'admin/assets/uploads';
                $alumni = $conn->query("SELECT a.*,c.course,Concat(a.lastname,', ',a.firstname,' ',a.middlename) as name from alumnus_bio a inner join courses c on c.id = a.course_id order by Concat(a.lastname,', ',a.firstname,' ',a.middlename) asc");
                while($row = $alumni->fetch_assoc()):
                ?>
                <div class="col-md-4 item">
                <div class="card alumni-list" data-id="<?php echo $row['id'] ?>">
                        <div class="alumni-img" card-img-top>

                            <img src="<?php echo $fpath.'/'.$row['avatar'] ?>" alt="">
                        </div>
                    <div class="card-body">
                        <div class="row align-items-center h-100">
                            <div class="">
                                <div>
                                <p class="filter-txt"><b><?php echo $row['name'] ?></b></p>
                                <hr class="divider w-100" style="max-width: calc(100%)">
                                <p class="filter-txt">Email: <b><?php echo $row['email'] ?></b></p>
                                <p class="filter-txt">Course: <b><?php echo $row['course'] ?></b></p>
                                <p class="filter-txt">Batch: <b><?php echo $row['batch'] ?></b></p>
                                <p class="filter-txt">Currently working in/as <b><?php echo $row['connected_to'] ?></b></p>
                                    <br>
                                </div>
                            </div>
                        </div>
                        

                    </div>
                </div>
                <br>
                </div>
                <?php endwhile; ?>
                </div>
                </div>
                </div>
            </div>


<script>
    // $('.card.alumni-list').click(function(){
    //     location.href = "index.php?page=view_alumni&id="+$(this).attr('data-id')
    // })
    $('.book-alumni').click(function(){
        uni_modal("Submit Booking Request","booking.php?alumni_id="+$(this).attr('data-id'))
    })
    $('.alumni-img img').click(function(){
        viewer_modal($(this).attr('src'))
    })
     $('#filter').keypress(function(e){
    if(e.which == 13)
        $('#search').trigger('click')
   })
    $('#search').click(function(){
        var txt = $('#filter').val()
        start_load()
        if(txt == ''){
        $('.item').show()
        end_load()
        return false;
        }
        $('.item').each(function(){
            var content = "";
            $(this).find(".filter-txt").each(function(){
                content += ' '+$(this).text()
            })
            if((content.toLowerCase()).includes(txt.toLowerCase()) == true){
                $(this).toggle(true)
            }else{
                $(this).toggle(false)
            }
        })
        end_load()
    })

</script>

    <!-- <script src="js\profile slider\jquery.js"></script><script>eval(mod_pagespeed_OACIURszUa);</script> -->
        <!-- <script>eval(mod_pagespeed_H8iVVoSALE);</script>
        <script src="js/profile slider/bootstrap.min.js"></script>
        <script src="js/profile slider/owl.carousel.min.js+main.js.pagespeed.jc.j02HoBEMkT.js"></script><script>eval(mod_pagespeed_cXkf4bjAtg);</script>
        <script>eval(mod_pagespeed_FaL444e9ui);</script>
        <script defer src="https://static.cloudflareinsights.com/beacon.min.js/v64f9daad31f64f81be21cbef6184a5e31634941392597" integrity="sha512-gV/bogrUTVP2N3IzTDKzgP0Js1gg4fbwtYB6ftgLbKQu/V8yH2+lrKCfKHelh4SO3DPzKj4/glTO+tNJGDnb0A==" data-cf-beacon='{"rayId":"6b29a0816d1b14d9","token":"cd0b4b3a733644fc843ef0b185f98241","version":"2021.11.0","si":100}' crossorigin="anonymous"></script> -->

