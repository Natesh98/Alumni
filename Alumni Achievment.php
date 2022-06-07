<?php 
include 'admin/db_connect.php'; 
?>
<link rel="stylesheet" href="css/Testimonial.css">
<style>

  .slider-Alumni{
    width:100%;
    opacity: 0.5;
    
  }
  .container-text{
  text-align: center;
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%,-50%);
  /* width: 100%; */
  /* text-shadow: 0 2px 4px rgb(0 0 0 / 50%); */

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
.slider-activity{
width:100%;

}
.des{
    color:#000;
}
  .typed-g{
color:#800;
text-align:center;
/* margin-bottom:2rem; */
margin-top:2rem;
font-style:italic;
}
  </style>
<img class="slider-Alumni" src="img_file\BBSULK_Convocation.gif" alt="" srcset="">
<div class="container-text">
  <span class="tex1-a">Welcome in</span>
  <span class="text2-b">Alumni Achievements</span>
</div>



<h1 class="typed-g"> <span class="typed-words"></span></h1>

<!-- Testimonial Start -->

  <section class="testim" id="testim">
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
                        <div class="img"><img src="img_file/8_img.jpg"></div>
                        <h2>Lorem N. Ipsum</h2>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptates quasi aliquid vel voluptatum
                            deleniti! Corrupti velit, porro facere facilis laboriosam accusantium, eos beatae maiores.</p>
                    </div>
                    
                    <div>
                        <div class="img"><img src="images/img1 (2).jpg"></div>
                        <h2>Lorem L. Ipsum</h2>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptates quasi aliquid vel voluptatum
                            deleniti! Corrupti velit, porro facere facilis laboriosam accusantium, eos beatae maiores.</p>
                    </div>
                    
                    <div>
                        <div class="img"><img src="images/img1 (3).jpg"></div>
                        <h2>Lorem R. Ipsum</h2>
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
    <script src="js\testimonial.js"></script>
    <script src="js\typed.js"></script>
            <script>
            var typed = new Typed('.typed-words', {
            strings: ["Alumni Achivments"],
            typeSpeed: 80,
            backSpeed: 80,
            backDelay: 4000,
            startDelay: 1000,
            loop: true,
            showCursor: true
            });
            </script>
