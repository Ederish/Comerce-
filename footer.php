
 <?php wp_footer(); ?>
<footer>
      <p>
        Website developed by
        <a target="_blank" href="https://github.com/Ederish">Ederish Herrera</a> - No
        commercial purporses intended, made only for showing web development techniques and to be included as a piece of portfolio. All copyrights are owned by Disney.<br/>
        This product uses the TMDb API but is not endorsed or certified by TMDb.
      </p>
      <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/7/77/Disney_Plus_logo.svg/589px-Disney_Plus_logo.svg.png" alt="Logo"/>
    </footer>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"></script>
    <script>
$(function(){
  // Carrusel 1
  $('.carousel').slick({
    dots: true,
  accessibility: true,
  infinite: true,
  autoplay: true,
  autoplaySpeed: 6000,
  speed: 700,
  centerMode: false,
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
  });
  $('.slick-track').slick({
    arrows: true,
    accessibility: true,
    infinite: false,
    speed: 500,
    slidesToShow: 5,
    slidesToScroll: 1,
    prevArrow: '.slick-prev',
    nextArrow: '.slick-next',
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
  });
});
</script>
</body>
</html>