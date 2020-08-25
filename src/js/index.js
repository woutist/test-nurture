jQuery(function ($) {

   var $info = $('.module-1__info-slider'),
       $slider = $('.module-1__slider');

    $slider.on('init reInit afterChange', function (event, slick, currentSlide, nextSlide) {
        var i = (currentSlide ? currentSlide : 0) + 1;
        $info.text(i + '/' + slick.slideCount);
    });

    $slider.slick({
      dots: true,
      infinite: true,
      speed: 300,
      slidesToShow: 1,
      adaptiveHeight: true
   });

});