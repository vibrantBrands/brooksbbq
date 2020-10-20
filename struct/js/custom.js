// RESPONSIVE SLIDER

$(document).ready(function(){
    $(".rslides").responsiveSlides({
      auto: true,             // Boolean: Animate automatically, true or false
      speed: 1000,            // Integer: Speed of the transition, in milliseconds
      timeout: 6000,          // Integer: Time between slide transitions, in milliseconds
      pager: true,           // Boolean: Show pager, true or false
      nav: false,             // Boolean: Show navigation, true or false
      random: false,          // Boolean: Randomize the order of the slides, true or false
      pause: false,           // Boolean: Pause on hover, true or false
      pauseControls: true,    // Boolean: Pause when hovering controls, true or false
      prevText: "Previous",   // String: Text for the "previous" button
      nextText: "Next",       // String: Text for the "next" button
      maxwidth: "",           // Integer: Max-width of the slideshow, in pixels
      navContainer: "",       // Selector: Where controls should be appended to, default is after the 'ul'
      manualControls: "",     // Selector: Declare custom pager navigation
      namespace: "rslides",   // String: Change the default namespace used
      before: function(){},   // Function: Before callback
      after: function(){}     // Function: After callback
    });
});

/*$('.slides_background').slick({
  slidesToShow: 1,
  slidesToScroll: 1,
  autoplay: true,
  autoplaySpeed: 4000,
  rtl: false,
});*/

$(document).ready(function(){
    $(".rslides_products").responsiveSlides({
      auto: true,             // Boolean: Animate automatically, true or false
      speed: 1000,            // Integer: Speed of the transition, in milliseconds
      timeout: 6000,          // Integer: Time between slide transitions, in milliseconds
      pager: true,           // Boolean: Show pager, true or false
      nav: false,             // Boolean: Show navigation, true or false
      random: false,          // Boolean: Randomize the order of the slides, true or false
      pause: false,           // Boolean: Pause on hover, true or false
      pauseControls: true,    // Boolean: Pause when hovering controls, true or false
      prevText: "Previous",   // String: Text for the "previous" button
      nextText: "Next",       // String: Text for the "next" button
      maxwidth: "",           // Integer: Max-width of the slideshow, in pixels
      navContainer: "",       // Selector: Where controls should be appended to, default is after the 'ul'
      manualControls: "",     // Selector: Declare custom pager navigation
      namespace: "rslides",   // String: Change the default namespace used
      before: function(){},   // Function: Before callback
      after: function(){}     // Function: After callback
    });
});

/*$('.slides_products').slick({
  slidesToShow: 1,
  slidesToScroll: 1,
  autoplay: true,
  autoplaySpeed: 4000,
  rtl: true,
});*/

// PRETTY PHOTO

$(document).ready(function(){
     $("a[rel^='prettyPhoto']").prettyPhoto({
        default_width: 800,
        default_height: 600,  
     });
});     
   
// ANIMATE ON SCROLL   

$(function() {

  var $window = $(window),
    win_height_padded = $window.height() * 1,
    isTouch = Modernizr.touch;

  if (isTouch) {
    $('.revealOnScroll').addClass('animated');
  }

  $window.on('scroll', revealOnScroll);

  function revealOnScroll() {
    var scrolled = $window.scrollTop(),
      win_height_padded = $window.height() * 1;

    // Showed...
    $(".revealOnScroll:not(.animated)").each(function() {
      var $this = $(this),
        offsetTop = $this.offset().top;

      if (scrolled + win_height_padded > offsetTop) {
        if ($this.data('timeout')) {
          window.setTimeout(function() {
            $this.addClass('animated ' + $this.data('animation'));
          }, parseInt($this.data('timeout'), 10));
        } else {
          $this.addClass('animated ' + $this.data('animation'));
        }
      }
    });
    // Hidden...
    $(".revealOnScroll.animated").each(function(index) {
      var $this = $(this),
        offsetTop = $this.offset().top;
      if (scrolled + win_height_padded < offsetTop) {
        $(this).removeClass('animated fadeInUp flipInX lightSpeedIn')
      }
    });
  }

  revealOnScroll();
});

/* // SLICK VERTICAL SLIDER

jQuery( document ).ready(function( $ ) {

   
    verticalSlider.init();

});*/