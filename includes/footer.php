<footer role="contentinfo">
  <div class="container__centered">
    <div class="container__one-half">
      <nav role="navigation">
        <ul class="footer__list">
          <li class="footer__list--item"><a class="footer__link" href="#about">About</a></li>
          <li class="footer__list--item"><a class="footer__link" href="#portfolio">Portfolio</a></li>
          <li class="footer__list--item"><a class="footer__link" href="#contact">Contact</a></li>
        </ul>
      </nav>
    </div>
    <div class="container__one-half--last">
      <nav role="navigation">
        <ul class="social-media__list">
          <li class="social-media__list__item">
            <a class="social-media__link" href="https://twitter.com/conwayeast" target="_blank">
              <i class="fa fa-twitter-square fa-3x"></i>
            </a>
          </li>
          <li class="social-media__list__item">
            <a class="social-media__link" href="http://www.linkedin.com/pub/ryan-conway/9/a37/660/en" target="_blank">
              <i class="fa fa-linkedin-square fa-3x"></i>
            </a>
          </li>
          <li class="social-media__list__item">
            <a class="social-media__link" href="http://instagram.com/conwayeast/" target="_blank">
              <i class="fa fa-instagram fa-3x"></i>
            </a>
          </li>
          <li class="social-media__list__item">
            <a class="social-media__link" href="https://github.com/conwayeast" target="_blank">
              <i class="fa fa-github-square fa-3x"></i>
            </a>
          </li>
          <li class="social-media__list__item--last">
            <a class="social-media__link" href="https://dribbble.com/conwayeast" target="_blank">
              <i class="fa fa-dribbble fa-3x"></i>
            </a>
          </li>
        </ul>
      </nav>
    </div>
  </div>
</footer>

<script>

$(function() {
  $('a[href*=#]:not([href=#])').click(function() {
    if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
      var target = $(this.hash);
      target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
      if (target.length) {
        $('html,body').animate({
          scrollTop: target.offset().top
        }, 1000);
        return false;
      }
    }
  });
});

</script>

<!--<script>
$(function(){

  var formTop = $('.container__portfolio--sidebar').offset().top;

   $(window).scroll(function(){

     var windowTop = $(window).scrollTop();
     var formWidth = $('.container__portfolio--sidebar').width();
     var fluidVal = ( formWidth/$(window).width() ) * 100
     if (formTop < windowTop) {
       $('.container__portfolio--sidebar__header').css({
        position: 'fixed',
         top: 300,
         width: fluidVal + "%",
         transform: "translateY(25px)",
         transform: "rotate(270deg)"
       });
     } else {
       $('.container__portfolio--sidebar__header').css({
         position: 'static',
         width: '100%',
         transform: "translateY(0px)"
       });
     }

   });
 });
</script>-->

<script>
$(window).scroll(function() {
    $(".portfolio--sidebar__header").css({
    'opacity' : 1-(($(this).scrollTop())/4500)
    });
});
</script>

</body>
</html>