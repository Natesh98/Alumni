<?php 
include 'admin/db_connect.php'; 
?>


<link rel="stylesheet" href="css/guest card.css">
<style>
       /* for text effects */
   *{
  padding: 0;
  margin: 0;
  font-family: sans-serif;
}
body{
  /* background: #000; */
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
.typed-g{
color:#fff;
text-align:center;
margin-bottom:2rem;
}
</style>
<img class="slider-activity" src="img_file\guest slider.jpg" alt="" srcset="">

<div class="container-text">
  <span class="tex1-a">Welcome to</span>
  <span class="text2-b">Guest Section</span>
</div>


<section class="section-g">
    <h1 class="typed-g"> <span class="typed-words"></span></h1>
      <div class="container-g text-center">
        <div class="row row-g">
          <div class="col-md-6 col-12">
            <div class="pray">
              <img src="img_file\guest.jpg" alt="Pray" class="" />
            </div>
          </div>
          <div class="col-md-6 col-12">
            <div class="panel text-left">
              <h1>Mr. Devid Smith</h1>
              <h5 class="panel-g">Topic: Parmabothic</h4>
              <p class="pt-4">
                Lorem, ipsum dolor sit amet consectetur adipisicing elit. Facere iure adipisci harum ducimus accusantium, repudiandae aperiam
                voluptatum, id ex ratione omnis reiciendis possimus officiis.
              </p>
              <p>
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Commodi vitae, tenetur quidem eum aliquid vel labore sint placeat
              ad deserunt consectetur fugit ullam. Eius unde neque ducimus obcaecati ipsum quos vero totam recusandae hic
              expedita nemo sit, illum harum. Quisquam impedit ullam itaque facere et ad molestiae quod reprehenderit excepturi!
            </p>
              <div class="card__media-g" bis_skin_checked="1">

                  <div class="block-g" bis_skin_checked="1">
                    <time datetime="2021-Dec-Sat">
                      <span class="month">Dec</span>
                      <br> 
                      <span class="day-number">04</span>
                      <br> 
                      <span class="day-name">Sat</span>
                      <br> 
                    </time>
                  </div>
                  
                  <div class="block-f">
                    <time class="card-ev">10:00am</time>
                    <address class="">CSIT Campus</address>

                  </div>
                
                </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <script src="js\typed.js"></script>
            <script>
            var typed = new Typed('.typed-words', {
            strings: ["Guest Speakers"],
            typeSpeed: 80,
            backSpeed: 80,
            backDelay: 4000,
            startDelay: 1000,
            loop: true,
            showCursor: true
            });
            </script>