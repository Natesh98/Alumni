 <!-- Masthead-->
        <!-- <header class="masthead">
            <div class="container h-100">
                <div class="row h-100 align-items-center justify-content-center text-center">
                    <div class="col-lg-10 align-self-end mb-4" style="background: black;">
                    	 <h1 class="text-uppercase text-white font-weight-bold">About Us</h1>
                        <hr class="divider my-4" />
                    </div>
                    
                </div>
            </div>
        </header> -->
        <style>
              .slider-Alumni{
    width:100%;
    opacity: 0.5;
    
  }
  .container-text{
  text-align: center;
  position: absolute;
  top: 20rem;
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

/* body {
  font-family: Arial, Helvetica, sans-serif;
  margin: 0;
}

html {
  box-sizing: border-box;
} */

/* *, *:before, *:after {
  box-sizing: inherit;
} */

.column-at {
  float: left;
  width: 33.33%;
  margin-bottom: 16px;
  padding: 0 8px;
  text-align:center;
}

.card-at {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  margin: 8px;
}

/* .about-section {
  padding: 50px;
  text-align: center;
  background-color: #474e5d;
  color: white;
} */

.container-at {
  padding: 0 16px;
}

.container-at::after, .row-at::after {
  content: "";
  clear: both;
  display: table;
}

.title-at {
  color: grey;
}

.button-at {
  border: none;
  outline: 0;
  display: inline-block;
  padding: 8px;
  color: white;
  background-color: #000;
  text-align: center;
  cursor: pointer;
  width: 100%;
}

.button-at:hover {
  background-color: #555;
}

@media screen and (max-width: 650px) {
  .column-at {
    width: 100%;
    display: block;
  }
}
            </style>
        <img class="slider-Alumni" src="img_file\about.jpg" alt="" srcset="">
        <div class="container-text">
  <span class="tex1-a">Welcome in</span>
  <span class="text2-b">About Section</span>
</div>




<section class="page-section">
        <h1 class="typed-g"> <span class="typed-words"></span></h1>
        <div class="container-at">
    <?php echo html_entity_decode($_SESSION['system']['about_content']) ?> 
    </div>
        </section> .
    
        <h1 class="typed-g"> <span class="typed-words2"></span></h1>
<div class="row-at">
  <div class="column-at">
    <div class="card-at">
      <img src="img_file\IMG-20211008-WA0005.jpg" alt="Jane" style="width:100%">
      <div class="container-at">
        <h2>Jane Doe</h2>
        <p class="title-at">CEO & Founder</p>
        <p>Some text that describes me lorem ipsum ipsum lorem.</p>
        <p>jane@example.com</p>
        <p><button class="button-at">Contact</button></p>
      </div>
    </div>
  </div>

  <div class="column-at">
    <div class="card-at">
      <img src="img_file\IMG-20211008-WA0005.jpg" alt="Mike" style="width:100%">
      <div class="container-at">
        <h2>Mike Ross</h2>
        <p class="title-at">Art Director</p>
        <p>Some text that describes me lorem ipsum ipsum lorem.</p>
        <p>mike@example.com</p>
        <p><button class="button-at">Contact</button></p>
      </div>
    </div>
  </div>
  
  <div class="column-at">
    <div class="card-at">
      <img src="img_file\IMG-20211008-WA0005.jpg" alt="John" style="width:100%">
      <div class="container-at">
        <h2>John Doe</h2>
        <p class="title-at">Designer</p>
        <p>Some text that describes me lorem ipsum ipsum lorem.</p>
        <p>john@example.com</p>
        <p><button class="button-at">Contact</button></p>
      </div>
    </div>
  </div>
</div>
            
        </div>
        </section>
        <script src="js\typed.js"></script>
            <script>
            var typed = new Typed('.typed-words', {
            strings: ["About Us"],
            typeSpeed: 80,
            backSpeed: 80,
            backDelay: 4000,
            startDelay: 1000,
            loop: true,
            showCursor: true
            });
            var typed = new Typed('.typed-words2', {
            strings: ["OUR TEEAM"],
            typeSpeed: 80,
            backSpeed: 80,
            backDelay: 4000,
            startDelay: 1000,
            loop: true,
            showCursor: true
            });
            </script>