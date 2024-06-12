document.addEventListener("DOMContentLoaded", function() {
  // Selecciona tu elemento HTML donde quieres inicializar el carrusel principal
  var carouselElement = document.querySelector('.carousel');
  // Configuración del carrusel principal
  const imageSliderConfig = {
    dots: true,
    accessibility: true,
    infinite: true,
    autoplay: true,
    autoplaySpeed: 6000,
    speed: 700,
    centerMode: true,
    slidesToShow: 1,
    slidesToScroll: 1,
    centerPadding: "100px",
    responsive: [
      {
        breakpoint: 992,
      },
      {
        breakpoint: 10000,
        centerMode: true,
      },
    ],
  };
  // Inicializa el carrusel principal
  new Slick(carouselElement, imageSliderConfig);

  // Selecciona tu elemento HTML donde quieres inicializar el carrusel de miniaturas
  var thumbnailCarouselElement = document.querySelectorAll('.singleRow__slider');

  // Configuración del carrusel de miniaturas
  const thumbnailSliderConfig = {
    arrows: true,
    accessibility: true,
    infinite: false,
    speed: 500,
    slidesToShow: 5,
    slidesToScroll: 1,
    nextArrow: '.slick-next',
    prevArrow: '.slick-prev',
    responsive: [
      {
        breakpoint: 1024,
        settings: {
          slidesToShow: 3,
          slidesToScroll: 1,
          infinite: true,
        },
      },
      {
        breakpoint: 600,
        settings: {
          slidesToShow: 2,
          slidesToScroll: 1,
          initialSlide: 2,
        },
      },
      {
        breakpoint: 480,
        settings: {
          slidesToShow: 2,
          slidesToScroll: 1,
          infinite: true,
        },
      },
    ],
  };
  // Inicializa el carrusel de miniaturas
  new Slick(thumbnailCarouselElement, thumbnailSliderConfig);
});