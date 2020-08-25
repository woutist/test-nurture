
jQuery(function ($) {
   $("body").addClass("js");

   $('.module-1__slider').slick({
      dots: true,
      infinite: true,
      speed: 300,
      slidesToShow: 1,
      adaptiveHeight: true
   });

});