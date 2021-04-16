
(function($){
  $(document).ready(function(){
    $('.banner').slick({
      autoplay: true,
      autoplaySpeed: 2000,
      slidesToShow: 1,
      slidesToScroll: 1,
      infinite: true,
      fade: true,
      cssEase: 'linear',
    });
  });    
})(jQuery);