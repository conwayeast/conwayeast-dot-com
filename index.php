<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title></title>
  <link rel="stylesheet" href="css/main.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
  <script src="//use.typekit.net/cdt3wla.js"></script>
  <script>try{Typekit.load();}catch(e){}</script>
</head>
<body>


<!-- NAV -->
<?php include("includes/header.php"); ?>

<!-- HERO -->

<div class="hero">
  <div class="container--nopad">
    <div class="container__centered">
      <h1 class="hero__title">Front End Development <br> &amp; Graphic Design</h1>
      <p class="hero__title__subhead">A few reasons why this product is worth using, who it's for and why they need it.</p>
    </div>
  </div>
</div>


<!-- BULLETS -->
<div class="container">
  <div class="container__centered">
    <ul class="bullets">
      <li class="bullet three-col-bullet">
        <div class="bullet-icon bullet-icon-1">
          <img src="https://raw.githubusercontent.com/thoughtbot/refills/master/source/images/placeholder_logo_2.png
    " alt="">
        </div>
        <div class="bullet-content">
          <h2>This Bullet Title</h2>
          <p>Lorem dolor sit amet consectetur adipisicing elit. Doloremque, minus, blanditiis, voluptatibus nulla quia ipsam sequi quos iusto aliquam iste magnam accusamus molestias quo illum impedit. Odit officia autem.</p>
          </div>
      </li>
      <li class="bullet three-col-bullet">
        <div class="bullet-icon bullet-icon-2">
          <img src="https://raw.githubusercontent.com/thoughtbot/refills/master/source/images/placeholder_logo_3.png" alt="">
        </div>
        <div class="bullet-content">
          <h2>Another Bullet Title</h2>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloremque, minus, blanditiis, voluptatibus nulla quia ipsam sequi quos iusto aliquam iste magnam accusamus molestias quo illum.</p>
        </div>
      </li>
      <li class="bullet three-col-bullet">
        <div class="bullet-icon bullet-icon-3">
          <img src="https://raw.githubusercontent.com/thoughtbot/refills/master/source/images/placeholder_logo_4.png" alt="">
        </div>
        <div class="bullet-content">
          <h2>Last Bullet Title</h2>
          <p>Lorem ipsum sit amet consectetur adipisicing elit. Doloremque, minus, blanditiis, voluptatibus nulla quia ipsam sequi quos iusto aliquam iste magnam accusamus molestias quo illum impedit. Odit officia autem.</p>
        </div>
      </li>
    </ul>
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

</body>
</html>