<?php 
include 'admin/db_connect.php'; 
?>
<link rel="stylesheet" href="css/home card.css">
<link rel="stylesheet" href="css/Testimonial.css">
<link rel="stylesheet" href="css/Events.css">

<style>

/* video slider open */
@import url('https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700;800;900&display=swap');

 *{
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  font-family: "Poppins", sans-serif;
} 

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

/* video slider closed */

#portfolio .img-fluid{
    width: calc(100%);
    height: 30vh;
    z-index: -1;
    position: relative;
    padding: 1em;
}
.event-list{
cursor: pointer;
}
span.hightlight{
    background: yellow;
}
.banner{
        display: flex;
        justify-content: center;
        align-items: center;
        min-height: 26vh;
        width: calc(30%);
    }
    .banner img{
        width: calc(100%);
        height: calc(100%);
        cursor :pointer;

    }
.event-list{
cursor: pointer;
border: unset;
flex-direction: inherit;
height: 250px;
}
}

.event-list .banner {
    width: calc(40%)
}
.event-list .card-body {
    width: calc(60%)
}
.event-list .banner img {
    border-top-left-radius: 5px;
    border-bottom-left-radius: 5px;
    /* min-height: 50vh; */
}
span.hightlight{
    background: yellow;
}
.banner{
   min-height: calc(100%)
}

.container-text{
  text-align: center;
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%,-50%);
  /* width: 100%; */
  /* text-shadow: 0 2px 4px rgb(0 0 0 / 50%); */
  z-index: 777;

}
.container-text span{
  text-transform: uppercase;
  display: block;
}
.tex1-a{
  color: #800;
  font-size: 60px;
  font-weight: 700;
  letter-spacing: 8px;
  margin-bottom: 20px;
  background: #fff;
  position: relative;
  animation: text 3s 1;
  /* width:25%; */
}
.tex1-c{
  color: #800;
  font-size: 50px;
  font-weight: 200;
  letter-spacing: 2px;
  margin-bottom: 20px;
  /* background: #fff; */
  position: relative;
  animation: text 3s 1;
  /* width:25%; */
}
.text2-b{
  font-size: 30px;
  color: #800;
  background: #fff;
  
}

@keyframes text {
  0%{
    color: black;
    margin-bottom: -40px;
  }
  30%{
    letter-spacing: 25px;
    margin-bottom: -40px;
  }
  85%{
    letter-spacing: 8px;
    margin-bottom: -40px;
  }
}


</style>



        <!-- <header class="masthead">
            <div class="container-fluid h-100">
                <div class="row h-100 align-items-center justify-content-center text-center">
                    <div class="col-lg-8 align-self-end mb-4 page-title">
                    	<h3 class="text-white">Welcome to <?php echo $_SESSION['system']['name']; ?></h3>
                        <hr class="divider my-4" />

                    <div class="col-md-12 mb-2 justify-content-center">
                    </div>                        
                    </div>
                    
                </div>
            </div>
        </header> -->
                        <!-- video slider section -->
<section class="home">
        <video class="video-slide active" src="video\bbsul.mp4" autoplay muted loop></video>
        <!-- <video class="video-slide" src="2.mp4" autoplay muted loop></video>
        <video class="video-slide" src="3.mp4" autoplay muted loop></video>
        <video class="video-slide" src="4.mp4" autoplay muted loop></video>
        <video class="video-slide" src="5.mp4" autoplay muted loop></video> -->
        <!-- <div class="content active">
          <h1>Wonderful.<br><span>Island</span></h1>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
          <a href="#">Read More</a> -->
                        <!-- </div> -->
        </section>
        <div class="container-text">
  <span class="tex1-a">Welcome to the</span>
  <span class="text2-b">Alumni Portal</span>
</div>


        
            <div class="container mt-3 pt-2" id="events-connection" >
            <h1 class="typed-g"> <span class="typed-words3"></span></h1>
               
                <?php
                $event = $conn->query("SELECT * FROM events where date_format(schedule,'%Y-%m%-d') >= '".date('Y-m-d')."' order by unix_timestamp(schedule) asc");
                while($row = $event->fetch_assoc()):
                    $trans = get_html_translation_table(HTML_ENTITIES,ENT_QUOTES);
                    unset($trans["\""], $trans["<"], $trans[">"], $trans["<h2"]);
                    $desc = strtr(html_entity_decode($row['content']),$trans);
                    $desc=str_replace(array("<li>","</li>"), array("",","), $desc);
                ?>
                <div class="card event-list" data-id="<?php echo $row['id'] ?>">
                     <div class='banner'>
                        <?php if(!empty($row['banner'])): ?>
                            <img src="admin/assets/uploads/<?php echo($row['banner']) ?>" alt="">
                        <?php endif; ?>
                    </div>
                    <div class="card-body">
                        <div class="row  align-items-center justify-content-center text-center h-100">
                            <div class="">
                                <h3><b class="filter-txt"><?php echo ucwords($row['title']) ?></b></h3>
                                <div><small><p><b><i class="fa fa-calendar"></i> <?php echo date("F d, Y h:i A",strtotime($row['schedule'])) ?></b></p></small></div>
                                <hr>
                                <larger class="truncate filter-txt"><?php echo strip_tags($desc) ?></larger>
                                <br class='hr-g'>
                                <hr class="divider"  style="max-width: calc(80%)">
                                <button class="btn btn-primary float-right read_more" data-id="<?php echo $row['id'] ?>">Read More</button>
                            </div>
                        </div>
                        

                    </div>
                </div>
                <br>
                <?php endwhile; ?>

                </div>


                
                
                
        <script> // video slider
// const btns = document.querySelectorAll(".nav-btn");
//     const slides = document.querySelectorAll(".video-slide");
//     const contents = document.querySelectorAll(".content");

//     var sliderNav = function(manual){
//       btns.forEach((btn) => {
//         btn.classList.remove("active");
//       });

//       slides.forEach((slide) => {
//         slide.classList.remove("active");
//       });

//       contents.forEach((content) => {
//         content.classList.remove("active");
//       });

//       btns[manual].classList.add("active");
//       slides[manual].classList.add("active");
//       contents[manual].classList.add("active");
//     }

//     btns.forEach((btn, i) => {
//       btn.addEventListener("click", () => {
//         sliderNav(i);
//       });
//     });
</script>
                
           
            
<style>

.card{
     /* width: 20%;
     display: inline-block; */
     box-shadow: 2px 2px 20px black;
     border-radius: 5px; 
     /* margin: 2%; */
    }
    .typed-g{
color:#800;
text-align:center;
/* margin-bottom:2rem; */
margin-top:2rem;
font-style:italic;
font-weight: 500;
    font-size: xxx-large;
}

</style>
<h1 class="typed-g"> <span class="typed-words"></span></h1>
<!-- <h2 class='heading-card'>Alumni Engagement</h2> -->
    <div class="grids">
        <div class="card-three">
          <div class="card">
            <div class="card__side card__side--front" id="front-1">
              <div class="text-box">
                <!-- <h3 class="text-box-top">Flipping Cards</h3> -->
                <h1 class="text-box-middle">Job Placement</h1>
                <?php if(isset($_SESSION['login_id'])): ?>
                <a href="index.php?page=careers"><button class="button-section" style="vertical-align:middle"><span>Click Here</span></button></a>
                <?php endif; ?>
              </div>
            </div>
            <!-- <div class="card__side card__side--back" id="back-3">
              <div class="text-box">
                <h3 class="text-box-top">Cards Flipped</h3>
                <h1 class="text-box-middle">Great!</h1>
                <h3 class="text-box-lower">--- More Text ---</h3>
              </div>
            </div> -->
          </div>
        </div>
        <div class="card-four">
          <div class="card">
            <div class="card__side card__side--front" id="front-2">
              <div class="text-box">
                <!-- <h3 class="text-box-top">Flipping Cards</h3> -->
                <h1 class="text-box-middle">Activity Program</h1>
      
      <a href="index.php?page=Activity Calender"><button class="button-section" style="vertical-align:middle"><span>Click Here</span></button></a>
       </div>
            </div>
            <!-- <div class="card__side card__side--back" id="back-4">
              <div class="text-box">
                <h3 class="text-box-top">Cards Flipped</h3>
                <h1 class="text-box-middle">Great!</h1>
                <h3 class="text-box-lower">--- More Text ---</h3>
              </div>
            </div> -->
          </div>
        </div>
        <div class="card-five">
          <div class="card">
            <div class="card__side card__side--front" id="front-3">
              <div class="text-box">
                <!-- <h3 class="text-box-top">Flipping Cards</h3> -->
                <h1 class="text-box-middle">Alumni Achievements</h1>
                <a href="index.php?page=Alumni Achievment"><button class="button-section" style="vertical-align:middle"><span>Click Here</span></button></a>
         </div>
            </div>
            <!-- <div class="card__side card__side--back" id="back-5">
              <div class="text-box">
                <h3 class="text-box-top">Cards Flipped</h3>
                <h1 class="text-box-middle">Great!</h1>
                <h3 class="text-box-lower">--- More Text ---</h3>
              </div>
            </div> -->
          </div>
        </div>
      </div>
      <div class="grids">
        <div class="card-three">
          <div class="card">
            <div class="card__side card__side--front" id="front-4">
              <div class="text-box">
                <!-- <h3 class="text-box-top">Flipping Cards</h3> -->
                <h1 class="text-box-middle">Guest Speaker Session</h1>
                <a href="index.php?page=Guest speaker">
                <button class="button-section" style="vertical-align:middle"><span>Click Here</span></button>
                </a>
              </div>
            </div>
          </div>
        </div>
        <div class="card-four">
          <div class="card">
            <div class="card__side card__side--front" id="front-5">
              <div class="text-box">
                <!-- <h3 class="text-box-top">Flipping Cards</h3> -->
                <h1 class="text-box-middle">Events</h1>
      
                <a href="#events-connection"><button class="button-section" style="vertical-align:middle"><span>Click Here</span></button></a>
                
              </div>
            </div>
          </div>
        </div>
        <div class="card-five">
          <div class="card">
            <div class="card__side card__side--front" id="front-6">
              <div class="text-box">
                <!-- <h3 class="text-box-top">Flipping Cards</h3> -->
                <h1 class="text-box-middle">Gallery</h1>
                <a href="index.php?page=gallery"><button class="button-section" style="vertical-align:middle"><span>Click Here</span></button></a>
        </div>
            </div>
          </div>
        </div>
  </div>

  <!-- Testimonial Start -->
  <!-- <h2 class='heading-card'>Meet Our Faculty</h2> -->
  <section class="testim sect-t" id="testim">
    <h1 class="typed-g"> <span class="typed-words2"></span></h1>
            <div class="wrap">
    
                <span id="right-arrow" class="arrow right fa fa-chevron-right"></span>
                <span id="left-arrow" class="arrow left fa fa-chevron-left"></span>
    
                <ul class="dots" id="testim-dots">
                    <li class="dot active"></li>
                    <li class="dot"></li>
                    <li class="dot"></li>
                    <li class="dot"></li>
                    <li class="dot"></li>
                </ul>
    
                <div class="cont" id="testim-content">
    
                    <div class="active">
                        <div class="img"><img src="img_file\IMG-20211008-WA0005.jpg"></div>
                        <h2>Sir Ali Orangzaib</h2>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptates quasi aliquid vel voluptatum
                            deleniti! Corrupti velit, porro facere facilis laboriosam accusantium, eos beatae maiores.</p>
                    </div>
                    
                    <div>
                        <div class="img"><img src="images/img1 (2).jpg"></div>
                        <h2>Dr. Mazhar Ali Dhotio</h2>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptates quasi aliquid vel voluptatum
                            deleniti! Corrupti velit, porro facere facilis laboriosam accusantium, eos beatae maiores.</p>
                    </div>
                    
                    <div>
                        <div class="img"><img src="images/img1 (3).jpg"></div>
                        <h2>Shafiq Awan</h2>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptates quasi aliquid vel voluptatum
                            deleniti! Corrupti velit, porro facere facilis laboriosam accusantium, eos beatae maiores.</p>
                    </div>
                    
                    <div>
                        <div class="img"><img src="p4.jpg"></div>
                        <h2>Lorem P. Ipsum</h2>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptates quasi aliquid vel voluptatum
                            deleniti! Corrupti velit, porro facere facilis laboriosam accusantium, eos beatae maiores.</p>
                    </div>
                    
                    <div>
                        <div class="img"><img src="p5.jpg"></div>
                        <h2>Lorem Q. Ipsum</h2>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptates quasi aliquid vel voluptatum
                            deleniti! Corrupti velit, porro facere facilis laboriosam accusantium, eos beatae maiores.</p>
                    </div>
                </div>
    
            </div>
        </section>
    <!-- Testimonial End -->

    

<script>
     $('.read_more').click(function(){
         location.href = "index.php?page=view_event&id="+$(this).attr('data-id')
     })
     $('.banner img').click(function(){
        viewer_modal($(this).attr('src'))
    })
    $('#filter').keyup(function(e){
        var filter = $(this).val()

        $('.card.event-list .filter-txt').each(function(){
            var txto = $(this).html();
            txt = txto
            if((txt.toLowerCase()).includes((filter.toLowerCase())) == true){
                $(this).closest('.card').toggle(true)
            }else{
                $(this).closest('.card').toggle(false)
               
            }
        })
    })
</script>

<!-- Video Slider Start Script file -->
<script>
      
    //Javacript for responsive navigation menu
    // const menuBtn = document.querySelector(".menu-btn");
    // const navigation = document.querySelector(".navigation");

    // menuBtn.addEventListener("click", () => {
    //   menuBtn.classList.toggle("active");
    //   navigation.classList.toggle("active");
    // });

    //Javacript for video slider navigation
    const btns = document.querySelectorAll(".nav-btn");
    const slides = document.querySelectorAll(".video-slide");
    const contents = document.querySelectorAll(".content");

    var sliderNav = function(manual){
      btns.forEach((btn) => {
        btn.classList.remove("active");
      });

      slides.forEach((slide) => {
        slide.classList.remove("active");
      });

      contents.forEach((content) => {
        content.classList.remove("active");
      });

      btns[manual].classList.add("active");
      slides[manual].classList.add("active");
      contents[manual].classList.add("active");
    }

    btns.forEach((btn, i) => {
      btn.addEventListener("click", () => {
        sliderNav(i);
      });
    });
    
<!-- Video slider end Script File -->
</script>
<script src="js\typed.js"></script>
            <script>
            var typed = new Typed('.typed-words', {
            strings: ["ALUMNI ENGAGEMENT"],
            typeSpeed: 80,
            backSpeed: 80,
            backDelay: 4000,
            startDelay: 1000,
            loop: true,
            showCursor: true
            });
            var typed = new Typed('.typed-words2', {
            strings: ["TESTIMONIAL"],
            typeSpeed: 80,
            backSpeed: 80,
            backDelay: 4000,
            startDelay: 1000,
            loop: true,
            showCursor: true
            });
            var typed = new Typed('.typed-words3', {
            strings: ["UPCOMING EVENTS"],
            typeSpeed: 80,
            backSpeed: 80,
            backDelay: 4000,
            startDelay: 1000,
            loop: true,
            showCursor: true
            });
            </script>
<script src="js\testimonial.js"></script>