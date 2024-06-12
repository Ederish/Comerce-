<?php
$movieId = get_query_var('movieId');
$movieData = MovieData($movieId);

echo '<main class="detailPage">
  <div class="detailPage__background">
    <div class="detailPage__overlay"></div>
    <img loading="lazy" src="https://image.tmdb.org/t/p/w1280/' . $movieData['backdrop_path'] . '">
  </div>
  <div class="detailPage__info">
    <div class="detailPage__container">
      <h1 class="detailPage__title">' . $movieData['original_title'] . '</h1>
      <div class="detaiPage__buttons">
       <button role="button" class="boton"><i class="fas fa-play"></i>Reproducir</button>
      <button role="button" class="boton"><i class="fas fa-info-circle"></i>Más información</button>
      <button role="button" class="boton"><</i></button>
      <button role="button" class="boton">></button>
      </div>
      <div class="detailPage__data">
        <span class="detailPage__years">' . $movieData['release_date'] . '</span>
        <span class="detailPage__duration">' . $movieData['runtime'] . ' minutes</span>';

// Mostrar géneros
echo '<div class="detailPage__genres">';
foreach ($movieData['genres'] as $genre) {
  echo '<span> ' . $genre['name'] . ' </span>';
}
echo '</div>';

echo '</div>
      <div class="detailPage__description">
        <p>' . $movieData['overview'] . '</p>
      </div>';
'</div>';

get_template_part('components\tabPanel');

echo '
  </div>
</main>';