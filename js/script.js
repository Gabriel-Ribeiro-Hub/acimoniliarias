// Slick

$(document).ready(function(){
  $('#banner').slick({
    autoplay: true,
    autoplaySpeed: 2000,
    infinite: true,
    speed: 500,
    slidesToShow: 1,
    slidesToScroll: 1,
    arrows: false,
    dots: false
    
  });


  $('#imoveis').slick({
    autoplay: true,
    autoplaySpeed: 3000,
    infinite: true,
    speed: 800,
    slidesToShow: 1,
    slidesToScroll: 1,
    arrows: false,
    dots: false
  });

  
  $('#depoimentos').slick({
    autoplay: true,
    autoplaySpeed: 2000,
    infinite: true,
    speed: 500,
    slidesToShow: 1,
    slidesToScroll: 1,
    arrows: true,
    dots: true
  });
});
