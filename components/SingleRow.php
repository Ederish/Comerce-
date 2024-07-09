<?php
function SingleRows($request)
{
    echo '';

    foreach ($request as $movie) {
        $originalTitle = isset($movie['original_title']) ? $movie['original_title'] : 'Unknown Title';
        echo
            '<div class="slick-slide">
                        <div>
                            <div class="movieCard">
                                <a href="?custom_param=details&movieId=' . $movie['id'] . '">
                                    <div class="movieCard__container">
                                        <img loading="lazy" class="movieCard__poster" src="https://image.tmdb.org/t/p/w500/' . $movie['backdrop_path'] . '" alt="' . $originalTitle . '">
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>';
    }

    echo ' </div>
            </div>
            <button class="slick-arrow slick-next" data-role="none" currentslide="0" slidecount="8" style="display: block;">
                <svg class="MuiSvgIcon-root slick-arrows" focusable="false" viewBox="0 0 24 24" aria-hidden="true">
                    <path d="M5.88 4.12L13.76 12l-7.88 7.88L8 22l10-10L8 2z"></path>
                </svg>
            </button>
        </div>';
}
