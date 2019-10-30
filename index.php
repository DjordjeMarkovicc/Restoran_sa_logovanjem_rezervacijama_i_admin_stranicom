<?php

session_start();
include('php/header.php') ?>

<div class='container' style="margin-top: 30px;">
<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
    <li data-target="#carousel-example-generic" data-slide-to="3"></li>
    <li data-target="#carousel-example-generic" data-slide-to="4"></li>
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner" role="listbox">
    <div class="item active">
      <img src="img/slika1.jpg" alt="slika restorana">
    </div>
    <div class="item">
      <img src="img/slika2.jpg" alt="slika hrane">
    </div>
    <div class="item">
      <img src="img/slika3.jpg" alt="slika hrane">
    </div>
    <div class="item">
      <img src="img/slika4.jpg" alt="slika restorana i hrane">
    </div>
    <div class="item">
      <img src="img/slika5.jpg" alt="slika kuvara">
    </div>
  </div>

  <!-- Controls -->
  <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
</div>

<div class="container" style="padding-top: 30px; margin-bottom: 30px;">
    <div class="row" >
    <div class="col-md-1"></div>
        <div class="col-md-10 font_shadows_into_light text1">
            <p style="text-align:center;">Koncept RESTOURANT restorana zasnovan na autentičnom jelovniku, 
            brzoj i kvalitetnoj usluzi, dobroj atmosferi i zabavi.<br>
            Upotrebom isključivo prirodnih namirnica i začina,
            dobijamo jela sa bogatim sastavom minerala i vitamina čija se aroma pamti.<br></p>
        </div>
    <div class="col-md-1"></div>
    </div>
</div>

<div class="container">
  <div class="row">

    <div class="col-md-6">
      <div class="video-box videowrapper" style="margin-bottom: 30px;">
        <iframe  src="https://www.youtube.com/embed/D_2DBLAt57c" frameborder="0" 
          allow="accelerometer; encrypted-media; gyroscope; picture-in-picture" allowfullscreen>
        </iframe>
      </div>
    </div> 

    <div class="col-md-6">
      <div class="video-box videowrapper" style="margin-bottom: 30px;">
      <iframe src="https://www.youtube.com/embed/s9r-CxnCXkg" frameborder="0" 
        allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen>
      </iframe>
      </div>
    </div> 

  </div>  
</div>

<div class="container">
<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d1415.0339506068071!2d20.404059511318128!3d44.82018131674929!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xd19c66e83b10446e!2z0JPQtdC90LXQutGB!5e0!3m2!1ssr!2srs!4v1556204295298!5m2!1ssr!2srs" 
  width="100%" height="400" frameborder="0" style="border:0" allowfullscreen>
</iframe>

</div>


<?php include('php/footer.php')?>