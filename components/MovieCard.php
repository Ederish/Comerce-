<?php
    foreach (ApiRest("13334") as $movie) {
        echo '<div data-index="0" class="slick-slide slick-active slick-current" tabindex="-1" aria-hidden="false" style="outline: none; width: 251px;">
                <div>
                    <div class="movieCard">
                        <a href="?custom_param=details&movieId='.$movie['movie_Id'].'">
                            <div class="movieCard__container">
                                <img class="movieCard__poster" src="https://image.tmdb.org/t/p/w500/' . $movie['backdrop_path'] . '" alt="' . $movie['original_title'] . '">
                            </div>
                        </a>
                    </div>
                </div>
            </div>';
}