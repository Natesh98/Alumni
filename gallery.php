<?php 
include 'admin/db_connect.php'; 
?>
<head>

<link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700, 900|Playfair+Display:400,900" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Playfair+Display:400,400i,700,700i&display=swap" rel="stylesheet">
<!-- <link rel="stylesheet" href="Gallery images slider/owl.carousel.min.css+owl.theme.default.min.css.pagespeed.css" /> -->
<!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/4.5.6/css/ionicons.min.css"> -->
<!-- <link rel="stylesheet" href="Gallery images slider/A.animate.css+style.css,Mcc.wvnfW4JWaM.css.pagespeed.css" /> -->
<!-- <link rel="stylesheet" href="css\gallery slider css\A.style.css.css">
<link rel="stylesheet" href="css\gallery slider css\A.owl.carousel.min.css"> -->


<link rel="stylesheet" href="css\text display.css">
    <!-- <link rel="stylesheet" href="fonts/flaticon/font/flaticon.css">
    <link rel="stylesheet" href="css\for gallery\bootstrap.min.css">
    <link rel="stylesheet" href="css\for gallery\owl.carousel.min.css">
    <link rel="stylesheet" href="css\for gallery\jquery.fancybox.min.css">
    <link rel="stylesheet" href="css\for gallery\flaticon.css">
    <link rel="stylesheet" href="css\for gallery\aos.css"> -->
    <!-- <link rel="stylesheet" href="css\for gallery\style1.css"> -->
</head>
<style>
  .align-self-center {
    -ms-flex-item-align: center!important;
    -ms-grid-row-align: center!important;
    align-self: center!important;}

#portfolio .img-fluid{
    width: calc(100%);
    height: 30vh;
    z-index: -1;
    position: relative;
    padding: 1em;
}
.gallery-list{
cursor: pointer;
border: unset;
flex-direction: inherit;
}
.gallery-img,.gallery-list .card-body {
    width: calc(50%)
}
.gallery-img img{
    /* border-radius: 5px; */
    min-height: 32vh;
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
.gallery-text{
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
    h3{
        color:white;
    }
    /* Slider Start Css */
    @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700;800;900&display=swap');

*{
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  font-family: "Poppins", sans-serif;
}

/* header{
  z-index: 999;
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  display: flex;
  justify-content: space-between;
  align-items: center;
  padding: 15px 200px;
  transition: 0.5s ease;
} */

/* header .brand{
  color: #fff;
  font-size: 1.5em;
  font-weight: 700;
  text-transform: uppercase;
  text-decoration: none;
} */
/* 
header .navigation{
  position: relative;
}

header .navigation .navigation-items a{
  position: relative;
  color: #fff;
  font-size: 1em;
  font-weight: 500;
  text-decoration: none;
  margin-left: 30px;
  transition: 0.3s ease;
} */
/* 
header .navigation .navigation-items a:before{
  content: '';
  position: absolute;
  background: #fff;
  width: 0;
  height: 3px;
  bottom: 0;
  left: 0;
  transition: 0.3s ease;
}

header .navigation .navigation-items a:hover:before{
  width: 100%;
} */

section{
  padding: 100px 200px;
  margin:0;
}

.home{
  position: relative;
  width: 100%;
  min-height: 100vh;
  display: flex;
  justify-content: center;
  flex-direction: column;
  background: #2696E9;

}

.home:before{
  z-index: 777;
  content: '';
  position: absolute;
  background: rgba(3, 96, 251, 0.3);
  width: 100%;
  height: 100%;
  top: 0;
  left: 0;
  background-color: rgba(31,39,43,0.75);
}

.home .content{
  z-index: 888;
  color: #fff;
  width: 70%;
  margin-top: 50px;
  display: none;
}

.home .content.active{
  display: block;
}

.home .content h1{
  font-size: 4em;
  font-weight: 900;
  text-transform: uppercase;
  letter-spacing: 5px;
  line-height: 75px;
  margin-bottom: 40px;
}

.home .content h1 span{
  font-size: 1.2em;
  font-weight: 600;
}

.home .content p{
  margin-bottom: 65px;
}

.home .content a{
  background: #fff;
  padding: 15px 35px;
  color: #1680AC;
  font-size: 1.1em;
  font-weight: 500;
  text-decoration: none;
  border-radius: 2px;
}

/* .home .media-icons{
  z-index: 888;
  position: absolute;
  right: 30px;
  display: flex;
  flex-direction: column;
  transition: 0.5s ease;
} */

.home  a{
  color: #fff;
  font-size: 1.6em;
  transition: 0.3s ease;
}

.home  a:not(:last-child){
  margin-bottom: 20px;
}

.home  a:hover{
  transform: scale(1.3);
}

.home video{
  z-index: 000;
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  object-fit: cover;
}

/* .slider-navigation{
  z-index: 888;
  position: relative;
  display: flex;
  justify-content: center;
  align-items: center;
  transform: translateY(80px);
  margin-bottom: 12px;
}

.slider-navigation .nav-btn{
  width: 12px;
  height: 12px;
  background: #fff;
  border-radius: 50%;
  cursor: pointer;
  box-shadow: 0 0 2px rgba(255, 255, 255, 0.5);
  transition: 0.3s ease;
}

.slider-navigation .nav-btn.active{
  background: #2696E9;
}

.slider-navigation .nav-btn:not(:last-child){
  margin-right: 20px;
}

.slider-navigation .nav-btn:hover{
  transform: scale(1.2);
} */

.video-slide{
  position: absolute;
  width: 100%;
  clip-path: circle(0% at 0 50%);
}

.video-slide.active{
  clip-path: circle(150% at 0 50%);
  transition: 2s ease;
  transition-property: clip-path;
}

@media (max-width: 1040px){
  header{
    padding: 12px 20px;
  }

  section{
    padding: 100px 20px;
  }

  .home .media-icons{
    right: 15px;
  }

  header .navigation{
    display: none;
  }

  header .navigation.active{
    position: fixed;
    width: 100%;
    height: 100vh;
    top: 0;
    left: 0;
    display: flex;
    justify-content: center;
    align-items: center;
    background: rgba(1, 1, 1, 0.5);
  }

  header .navigation .navigation-items a{
    color: #222;
    font-size: 1.2em;
    margin: 20px;
  }

  header .navigation .navigation-items a:before{
    background: #222;
    height: 5px;
  }

  header .navigation.active .navigation-items{
    background: #fff;
    width: 600px;
    max-width: 600px;
    margin: 20px;
    padding: 40px;
    display: flex;
    flex-direction: column;
    align-items: center;
    border-radius: 5px;
    box-shadow: 0 5px 25px rgb(1 1 1 / 20%);
  }

  .menu-btn{
    background: url(menu.png)no-repeat;
    background-size: 30px;
    background-position: center;
    width: 40px;
    height: 40px;
    cursor: pointer;
    transition: 0.3s ease;
  }

  .menu-btn.active{
    z-index: 999;
    background: url(close.png)no-repeat;
    background-size: 25px;
    background-position: center;
    transition: 0.3s ease;
  }
}

@media (max-width: 560px){
  .home .content h1{
    font-size: 3em;
    line-height: 60px;
  }
}
      
    /* Slider end Css */
    /* Images Card Slider Start */
    
    /* Images Card Slider End */

</style>
        <!-- <header class="masthead">
            <div class="container-fluid h-100">
                <div class="row h-100 align-items-center justify-content-center text-center">
                    <div class="col-lg-8 align-self-end mb-4 page-title">
                        <h3 class="text-white">Gallery</h3>
                        <hr class="divider my-4" />

                    <div class="col-md-12 mb-2 justify-content-center">
                    </div>                        
                    </div>
                    
                </div>
            </div>
</header>

 -->
 <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" src="img_file\BBSULK_Convocation.gif" alt="First slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="img_file\BBSULK_Convocation.gif" alt="Second slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="img_file\BBSULK_Convocation.gif" alt="Third slide">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
 
<div class="container-text">
  <span class="tex1-a">Welcome to</span>
  <span class="text2-b">Gallery</span>
</div>


        
            
            <h1 class="typed-g"> <span class="typed-words"></span></h1>
   

    
            <div class="container-fluid mt-3 pt-2">
               
                <div class="row-items">
                <div class="col-lg-12 " >
                    <div class="row">
                <?php
                $rtl ='rtl';
                $ci= 0;
                $img = array();
                $fpath = 'admin/assets/uploads/gallery';
                $files= is_dir($fpath) ? scandir($fpath) : array();
                foreach($files as $val){
                    if(!in_array($val, array('.','..'))){
                        $n = explode('_',$val);
                        $img[$n[0]] = $val;
                    }
                }
                $gallery = $conn->query("SELECT * from gallery order by id desc");
                while($row = $gallery->fetch_assoc()):
                   
                    $ci++;
                    if($ci < 3){
                        $rtl = '';
                    }else{
                        $rtl = 'rtl';
                    }
                    if($ci == 4){
                        $ci = 0;
                    }
                ?>
                <div class="col-md-4 ">
                <div class="card gallery-list <?php echo $rtl ?>" data-id="<?php echo $row['id'] ?>">
                        <div class="gallery-img" card-img-top>

                            <img src="<?php echo isset($img[$row['id']]) && is_file($fpath.'/'.$img[$row['id']]) ? $fpath.'/'.$img[$row['id']] :'' ?>" alt="">
                        </div>
                    <div class="card-body bg-dark">
                        <div class="row align-items-center justify-content-center text-center h-100">
                            <div class="">
                                <h3>Activity</h3>
                                <div>
                                <span class="truncate text-white" style="font-size: inherit;"><small><?php echo ucwords($row['about']) ?></small></span>
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
            <!-- Video Slider Start Script file -->
            <script type="text/javascript">
    
    </script>
<!-- Video slider end Script File -->


<script>
    // $('.card.gallery-list').click(function(){
    //     location.href = "index.php?page=view_gallery&id="+$(this).attr('data-id')
    // })
    $('.book-gallery').click(function(){
        uni_modal("Submit Booking Request","booking.php?gallery_id="+$(this).attr('data-id'))
    })
    $('.gallery-img img').click(function(){
        viewer_modal($(this).attr('src'))
    })


    // nav bar scroll
    //  sticky navbar
          // When the user scrolls the page, execute myFunction
window.onscroll = function() {myFunction()};

// Get the navbar
var navbar = document.getElementById("navbar");

// Get the offset position of the navbar
var sticky = navbar.offsetTop;

// Add the sticky class to the navbar when you reach its scroll position. Remove "sticky" when you leave the scroll position
function myFunction() {
  if (window.pageYOffset >= sticky) {
    navbar.classList.add("sticky")
  } else {
    navbar.classList.remove("sticky");
  }
}

</script>
<script src="js/nav bar scroll.js"></script>


<script src="js\typed.js"></script>
            <script>
            var typed = new Typed('.typed-words', {
            strings: ["Our Gallery"],
            typeSpeed: 80,
            backSpeed: 80,
            backDelay: 4000,
            startDelay: 1000,
            loop: true,
            showCursor: true
            });
            </script>
  
  <!-- <script src="js\main.js"></script> -->

<!-- <script src="Gallery images slider\jquery.js"></script><script>eval(mod_pagespeed_OACIURszUa);</script> -->
<!-- <script>eval(mod_pagespeed_H8iVVoSALE);</script> -->
<!-- <script src="Gallery images slider\bootstrap.js"></script>
<script src="Gallery images slider\owl..js"></script><script>eval(mod_pagespeed_cXkf4bjAtg);</script> -->
<!-- <script>eval(mod_pagespeed_FaL444e9ui);</script> -->

<!-- <script src="js/gallery slider js/jquery.min.js"></script><script>eval(mod_pagespeed_QrHzTvKoYx);</script>
<script>eval(mod_pagespeed_2pAkDrkABC);</script>
<script src="js/gallery slider js/boostrap.js"></script>
<script src="js/gallery slider js/owl.carousel.min.js"></script><script>eval(mod_pagespeed_ILvLign6mU);</script>
<script>eval(mod_pagespeed_p6Qymv5ha$);</script>
<script defer src="https://static.cloudflareinsights.com/beacon.min.js/v64f9daad31f64f81be21cbef6184a5e31634941392597" integrity="sha512-gV/bogrUTVP2N3IzTDKzgP0Js1gg4fbwtYB6ftgLbKQu/V8yH2+lrKCfKHelh4SO3DPzKj4/glTO+tNJGDnb0A==" data-cf-beacon='{"rayId":"6b5da41d0e6814e1","token":"cd0b4b3a733644fc843ef0b185f98241","version":"2021.11.0","si":100}' crossorigin="anonymous"></script> -->
