<?php 
include 'admin/db_connect.php'; 
?>

<link rel="stylesheet" href="css/Events.css">





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

<img class="slider-activity" src="img_file\activities.jpg" alt="" srcset="">

<div class="container-text">
  <span class="tex1-a">Welcome in</span>
  <span class="text2-b">Activities Calender</span>
</div>



<h1 class="typed-g"> <span class="typed-words"></span></h1>
<div class="grid-container" bis_skin_checked="1">

<div class="card-for-event card--event card--event--listing card--listing" bis_skin_checked="1">
    <div class="card__media" bis_skin_checked="1">

        <div class="date-block " bis_skin_checked="1">
            <time datetime="2021-Dec-Sat">
                <span class="month">March</span>
                <span class="day-number">02</span>
                <span class="day-name">Sat</span>
            </time>
        </div>
    </div>
    <div class="card__content" bis_skin_checked="1">
        <div class="card__content__inner" bis_skin_checked="1">
            <div class="card--event__inner__left" bis_skin_checked="1">
                <h3><a href="#" hreflang="und">Baloch Culture Day </a></h3>
                <div class="card--event__info icon-meta" bis_skin_checked="1">
                    <time class="card--event__info--item time-icon">10:00am</time>
                    <address class="card--event__info--item location-icon">BBSUL</address>
                </div>
                <p class="des">Join us for a recent alumni pregame event before the Creighton men’s basketball team takes on
                    Iowa State! </p>
                <!-- <ul class="locations">
                    <li><a href="/news-events/events?location=257">Nebraska</a></li>
                </ul>


                <ul class="topics">
                    <li><a href="/news-events/events?topic=222">Alumni</a></li>
                    <li><a href="/news-events/events?topic=276">Athletics</a></li>
                </ul> -->

            </div>
            <div class="card--event__inner__right" bis_skin_checked="1">
                <a href="/news-events/events/iowa-state-pregame"><img class="img-gg"
                        src="img_file\baloch.jpg" width="640"
                        height="460" alt="Creighton basketball crowd" title="" typeof="foaf:Image">
                </a>
            </div>

        </div>
    </div>
</div>
<div class="card-for-event card--event card--event--listing card--listing" bis_skin_checked="1">
    <div class="card__media" bis_skin_checked="1">

        <div class="date-block " bis_skin_checked="1">
            <time datetime="2022-Jan-Sat">
                <span class="month">Dec</span>
                <span class="day-number">05</span>
                <span class="day-name">Sat</span>
            </time>
        </div>
    </div>
    <div class="card__content" bis_skin_checked="1">
        <div class="card__content__inner" bis_skin_checked="1">
            <div class="card--event__inner__left" bis_skin_checked="1">
                <h3><a href="/news-events/events/PS-game-watch-party" hreflang="und">Sindhi Culture Day </a></h3>
                <div class="card--event__info icon-meta" bis_skin_checked="1">
                    <time class="card--event__info--item time-icon">11:00am</time>
                    <address class="card--event__info--item location-icon">BBSUL</address>
                </div>
                <p class="des">Bluejays in the Palm Springs area — let's watch some basketball! </p>
                <!-- <ul class="locations">
                    <li><a href="/news-events/events?location=249">California</a></li>
                </ul>


                <ul class="topics">
                    <li><a href="/news-events/events?topic=222">Alumni</a></li>
                    <li><a href="/news-events/events?topic=276">Athletics</a></li>
                </ul> -->

            </div>
            <div class="card--event__inner__right" bis_skin_checked="1">
                <a href="/news-events/events/PS-game-watch-party"><img class="img-gg"
                        src="img_file\sindhi culture.jpeg" width="640"
                        height="460" alt="Creighton vs. Xavier Game Watch Party – Palm Springs " title=""
                        typeof="foaf:Image">
                </a>
            </div>

        </div>
    </div>
</div>




</div>



<h1 class="typed-g"> <span class="typed-words2"></span></h1>
<div class="grid-container" bis_skin_checked="1">

<div class="card-for-event card--event card--event--listing card--listing" bis_skin_checked="1">
    <div class="card__media" bis_skin_checked="1">

        <div class="date-block " bis_skin_checked="1">
            <time datetime="2021-Dec-Sat">
                <span class="month">March</span>
                <span class="day-number">02</span>
                <span class="day-name">Sat</span>
            </time>
        </div>
    </div>
    <div class="card__content" bis_skin_checked="1">
        <div class="card__content__inner" bis_skin_checked="1">
            <div class="card--event__inner__left" bis_skin_checked="1">
                <h3><a href="#" hreflang="und">Badminton </a></h3>
                <div class="card--event__info icon-meta" bis_skin_checked="1">
                    <time class="card--event__info--item time-icon">09:00am</time>
                    <address class="card--event__info--item location-icon">BBSUL</address>
                </div>
                <p class="des">Join us for a recent alumni pregame event before the Creighton men’s basketball team takes on
                    Iowa State! </p>
                <!-- <ul class="locations">
                    <li><a href="/news-events/events?location=257">Nebraska</a></li>
                </ul>


                <ul class="topics">
                    <li><a href="/news-events/events?topic=222">Alumni</a></li>
                    <li><a href="/news-events/events?topic=276">Athletics</a></li>
                </ul> -->

            </div>
            <div class="card--event__inner__right" bis_skin_checked="1">
                <a href="/news-events/events/iowa-state-pregame"><img class="img-gg"
                        src="img_file\BADMINTON.jpg" width="640"
                        height="460" alt="Creighton basketball crowd" title="" typeof="foaf:Image">
                </a>
            </div>

        </div>
    </div>
</div>
<div class="card-for-event card--event card--event--listing card--listing" bis_skin_checked="1">
    <div class="card__media" bis_skin_checked="1">

        <div class="date-block " bis_skin_checked="1">
            <time datetime="2022-Jan-Sat">
                <span class="month">Dec</span>
                <span class="day-number">05</span>
                <span class="day-name">Sat</span>
            </time>
        </div>
    </div>
    <div class="card__content" bis_skin_checked="1">
        <div class="card__content__inner" bis_skin_checked="1">
            <div class="card--event__inner__left" bis_skin_checked="1">
                <h3><a href="/news-events/events/PS-game-watch-party" hreflang="und">Tug of War </a></h3>
                <div class="card--event__info icon-meta" bis_skin_checked="1">
                    <time class="card--event__info--item time-icon">11:00am</time>
                    <address class="card--event__info--item location-icon">BBSUL</address>
                </div>
                <p class="des">Bluejays in the Palm Springs area — let's watch some basketball! </p>
                <!-- <ul class="locations">
                    <li><a href="/news-events/events?location=249">California</a></li>
                </ul>


                <ul class="topics">
                    <li><a href="/news-events/events?topic=222">Alumni</a></li>
                    <li><a href="/news-events/events?topic=276">Athletics</a></li>
                </ul> -->

            </div>
            <div class="card--event__inner__right" bis_skin_checked="1">
                <a href="/news-events/events/PS-game-watch-party"><img class="img-gg"
                        src="img_file\thugh of war.jpg" width="640"
                        height="460" alt="Creighton vs. Xavier Game Watch Party – Palm Springs " title=""
                        typeof="foaf:Image">
                </a>
            </div>

        </div>
    </div>
</div>


<div class="card-for-event card--event card--event--listing card--listing" bis_skin_checked="1">
    <div class="card__media" bis_skin_checked="1">

        <div class="date-block " bis_skin_checked="1">
            <time datetime="2022-Jan-Sun">
                <span class="month">Jan</span>
                <span class="day-number">30</span>
                <span class="day-name">Sun</span>
            </time>
        </div>
    </div>
    <div class="card__content" bis_skin_checked="1">
        <div class="card__content__inner" bis_skin_checked="1">
            <div class="card--event__inner__left" bis_skin_checked="1">
                <h3><a href="/news-events/events/palm-springs-presidential" hreflang="und">Cricket Tournament</a></h3>
                <div class="card--event__info icon-meta" bis_skin_checked="1">
                    <time class="card--event__info--item time-icon">01:00pm</time>
                    <address class="card--event__info--item location-icon">Lyari Ground</address>
                </div>
                <p class="des">Creighton alumni, parents, friends and fans in the Palm Springs area — please join us for a
                    Mass and reception with Creighton President the Rev. Daniel S. Hendrickson, SJ, PhD. </p>
                <!-- <ul class="locations">
                    <li><a href="/news-events/events?location=249">California</a></li>
                </ul>


                <ul class="topics">
                    <li><a href="/news-events/events?topic=222">Alumni</a></li>
                    <li><a href="/news-events/events?topic=199">Presidential Events</a></li>
                </ul> -->

            </div>
            <div class="card--event__inner__right" bis_skin_checked="1">
                <a href="/news-events/events/palm-springs-presidential"><img class="img-gg"
                        src="img_file\scricket.jpg" width="640"
                        height="460" alt="Palm Springs Presidential Reception " title="" typeof="foaf:Image">
                </a>
            </div>

        </div>
    </div>
</div>
<div class="card-for-event card--event card--event--listing card--listing" bis_skin_checked="1">
    <div class="card__media" bis_skin_checked="1">

        <div class="date-block " bis_skin_checked="1">
            <time datetime="2022-Jan-Sun">
                <span class="month">Feb</span>
                <span class="day-number">30</span>
                <span class="day-name">Sun</span>
            </time>
        </div>
    </div>
    <div class="card__content" bis_skin_checked="1">
        <div class="card__content__inner" bis_skin_checked="1">
            <div class="card--event__inner__left" bis_skin_checked="1">
                <h3><a href="/news-events/events/palm-springs-presidential" hreflang="und">Football Tournament</a></h3>
                <div class="card--event__info icon-meta" bis_skin_checked="1">
                    <time class="card--event__info--item time-icon">11:00am</time>
                    <address class="card--event__info--item location-icon">Lyari Ground</address>
                </div>
                <p class="des">Creighton alumni, parents, friends and fans in the Palm Springs area — please join us for a
                    Mass and reception with Creighton President the Rev. Daniel S. Hendrickson, SJ, PhD. </p>
                <!-- <ul class="locations">
                    <li><a href="/news-events/events?location=249">California</a></li>
                </ul>


                <ul class="topics">
                    <li><a href="/news-events/events?topic=222">Alumni</a></li>
                    <li><a href="/news-events/events?topic=199">Presidential Events</a></li>
                </ul> -->

            </div>
            <div class="card--event__inner__right" bis_skin_checked="1">
                <a href="/news-events/events/palm-springs-presidential"><img class="img-gg"
                        src="img_file\football.jpg" width="640"
                        height="460" alt="Palm Springs Presidential Reception " title="" typeof="foaf:Image">
                </a>
            </div>

        </div>
    </div>
</div>

</div>

<h1 class="typed-g"> <span class="typed-words3"></span></h1>
<div class="grid-container" bis_skin_checked="1">

<div class="card-for-event card--event card--event--listing card--listing" bis_skin_checked="1">
    <div class="card__media" bis_skin_checked="1">

        <div class="date-block " bis_skin_checked="1">
            <time datetime="2021-Dec-Sat">
                <span class="month">March</span>
                <span class="day-number">02</span>
                <span class="day-name">Sat</span>
            </time>
        </div>
    </div>
    <div class="card__content" bis_skin_checked="1">
        <div class="card__content__inner" bis_skin_checked="1">
            <div class="card--event__inner__left" bis_skin_checked="1">
                <h3><a href="#" hreflang="und">Sufi Night </a></h3>
                <div class="card--event__info icon-meta" bis_skin_checked="1">
                    <time class="card--event__info--item time-icon">06:00pm</time>
                    <address class="card--event__info--item location-icon">BBSUL</address>
                </div>
                <p class="des">Join us for a recent alumni pregame event before the Creighton men’s basketball team takes on
                    Iowa State! </p>
                <!-- <ul class="locations">
                    <li><a href="/news-events/events?location=257">Nebraska</a></li>
                </ul>


                <ul class="topics">
                    <li><a href="/news-events/events?topic=222">Alumni</a></li>
                    <li><a href="/news-events/events?topic=276">Athletics</a></li>
                </ul> -->

            </div>
            <div class="card--event__inner__right" bis_skin_checked="1">
                <a href="/news-events/events/iowa-state-pregame"><img class="img-gg"
                        src="img_file\sufi.jpg" width="640"
                        height="460" alt="Creighton basketball crowd" title="" typeof="foaf:Image">
                </a>
            </div>

        </div>
    </div>
</div>
<div class="card-for-event card--event card--event--listing card--listing" bis_skin_checked="1">
    <div class="card__media" bis_skin_checked="1">

        <div class="date-block " bis_skin_checked="1">
            <time datetime="2022-Jan-Sat">
                <span class="month">Dec</span>
                <span class="day-number">05</span>
                <span class="day-name">Sat</span>
            </time>
        </div>
    </div>
    <div class="card__content" bis_skin_checked="1">
        <div class="card__content__inner" bis_skin_checked="1">
            <div class="card--event__inner__left" bis_skin_checked="1">
                <h3><a href="/news-events/events/PS-game-watch-party" hreflang="und">Food Gala </a></h3>
                <div class="card--event__info icon-meta" bis_skin_checked="1">
                    <time class="card--event__info--item time-icon">10:00am</time>
                    <address class="card--event__info--item location-icon">BBSUL</address>
                </div>
                <p class="des">Bluejays in the Palm Springs area — let's watch some basketball! </p>
                <!-- <ul class="locations">
                    <li><a href="/news-events/events?location=249">California</a></li>
                </ul>


                <ul class="topics">
                    <li><a href="/news-events/events?topic=222">Alumni</a></li>
                    <li><a href="/news-events/events?topic=276">Athletics</a></li>
                </ul> -->

            </div>
            <div class="card--event__inner__right" bis_skin_checked="1">
                <a href="/news-events/events/PS-game-watch-party"><img class="img-gg"
                        src="img_file\food gala.jpg" width="640"
                        height="460" alt="Creighton vs. Xavier Game Watch Party – Palm Springs " title=""
                        typeof="foaf:Image">
                </a>
            </div>

        </div>
    </div>
</div>


<div class="card-for-event card--event card--event--listing card--listing" bis_skin_checked="1">
    <div class="card__media" bis_skin_checked="1">

        <div class="date-block " bis_skin_checked="1">
            <time datetime="2022-Jan-Sun">
                <span class="month">Jan</span>
                <span class="day-number">30</span>
                <span class="day-name">Sun</span>
            </time>
        </div>
    </div>
    <div class="card__content" bis_skin_checked="1">
        <div class="card__content__inner" bis_skin_checked="1">
            <div class="card--event__inner__left" bis_skin_checked="1">
                <h3><a href="/news-events/events/palm-springs-presidential" hreflang="und">Independance Day </a></h3>
                <div class="card--event__info icon-meta" bis_skin_checked="1">
                    <time class="card--event__info--item time-icon">09:00pm</time>
                    <address class="card--event__info--item location-icon">BBSUL</address>
                </div>
                <p class="des">Creighton alumni, parents, friends and fans in the Palm Springs area — please join us for a
                    Mass and reception with Creighton President the Rev. Daniel S. Hendrickson, SJ, PhD. </p>
                <!-- <ul class="locations">
                    <li><a href="/news-events/events?location=249">California</a></li>
                </ul>


                <ul class="topics">
                    <li><a href="/news-events/events?topic=222">Alumni</a></li>
                    <li><a href="/news-events/events?topic=199">Presidential Events</a></li>
                </ul> -->

            </div>
            <div class="card--event__inner__right" bis_skin_checked="1">
                <a href="/news-events/events/palm-springs-presidential"><img class="img-gg"
                        src="img_file\14 august.jpeg" width="640"
                        height="460" alt="Palm Springs Presidential Reception " title="" typeof="foaf:Image">
                </a>
            </div>

        </div>
    </div>
</div>

</div>
<script src="js\typed.js"></script>
            <script>
            var typed = new Typed('.typed-words', {
            strings: ["CULTURE DAY"],
            typeSpeed: 80,
            backSpeed: 80,
            backDelay: 4000,
            startDelay: 1000,
            loop: true,
            showCursor: true
            });
            var typed = new Typed('.typed-words2', {
            strings: ["Sports Week"],
            typeSpeed: 80,
            backSpeed: 80,
            backDelay: 4000,
            startDelay: 1000,
            loop: true,
            showCursor: true
            });
            var typed = new Typed('.typed-words3', {
            strings: ["Other Activities"],
            typeSpeed: 80,
            backSpeed: 80,
            backDelay: 4000,
            startDelay: 1000,
            loop: true,
            showCursor: true
            });
            </script>