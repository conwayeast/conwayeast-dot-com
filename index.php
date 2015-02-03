<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title></title>
  <link rel="stylesheet" href="css/main.css">
  <!-- <link rel="stylesheet" href="css/styles.css"> -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
  <script src="//use.typekit.net/cdt3wla.js"></script>
  <script>try{Typekit.load();}catch(e){}</script>
  <!--  <script src="scripts/responsive-nav.js"></script>-->
</head>
<body>


<!-- NAV -->
<?php include("includes/header.php"); ?>

<!-- HERO -->

<div class="hero">
  <div class="container--nopad">
    <div class="container__centered">
      <h1 class="hero__title">Front End Development <br> &amp; Graphic Design</h1>
      <p class="hero__title__subhead">Obessed with creating good user experiences, snowboarding and anything bacon related.</p>
      <div class="btn-holder--content__callout">
        <a class="btn--red-orange">Learn More About Me</a>
      </div>
    </div>
  </div>
</div>


<!-- INSTAGRAM -->

<div class="content__callout">
  <div class="content__callout__media">
    <h2 class="content__callout__title">My Latest Instagram</h2>
    <div class="content__callout__image-wrapper">
      <div class="container__centered">
        <div class="social__img">
          <img src="http://scontent-a-lga.cdninstagram.com/hphotos-xaf1/t51.2885-15/10895335_1589603601275512_1175435413_n.jpg" alt="">
        </div>
      </div>
    </div>
  </div>
  <div class="content__callout__content">
    <div class="content__callout__body">
      <p class="content__callout__body__text--large">I like to pretend I am a photographer.</p>
      <div class="btn-holder--content__callout">
        <a class="btn--red-orange">Follow Me on Instagram</a>
      </div>
    </div>
  </div>
</div>

<!-- CONTACT BUTTON -->

<div class="container--key-west">
  <div class="container__centered">
    <div class="container__two-third">
      <h3>Need help with a project?</h3>
    </div>
    <div class="container__one-third">
      <a class="btn">Let's Get Started</a>
    </div>
  </div>
</div>


<!-- DRIBBBLE -->
<div class="content__callout">
  <div class="content__callout__content">
    <div class="content__callout__body">
      <p class="content__callout__body__text--large">I like to pretend I am a designer.</p>
      <div class="btn-holder--content__callout">
        <a class="btn--red-orange">Follow Me on Dribbble</a>
      </div>
    </div>
  </div>
  <div class="content__callout__media--reverse">
    <h2 class="content__callout__title">My Latest Dribbble</h2>
    <div class="content__callout__image-wrapper">
      <div class="container__centered">
        <div class="social__img">
          <img src="https://d13yacurqjgara.cloudfront.net/users/126415/screenshots/1009968/meditech25year.jpg" alt="">
        </div>
      </div>
    </div>
  </div>
</div>


<!-- FOOTER -->
<?php include("includes/footer.php"); ?>






<script>
  $(document).ready(function() {
  var menuToggle = $('#js-mobile-menu').unbind();
  $('#js-navigation-menu').removeClass("show");

  menuToggle.on('click', function(e) {
    e.preventDefault();
    $('#js-navigation-menu').slideToggle(function(){
      if($('#js-navigation-menu').is(':hidden')) {
        $('#js-navigation-menu').removeAttr('style');
      }
    });
  });
});

</script>

<!-- <script src="scripts/fastclick.js"></script>
<script src="scripts/scroll.js"></script>
<script src="scripts/fixed-responsive-nav.js"></script> -->

</body>
</html>