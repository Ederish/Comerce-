<?php
$movieData = MovieData($movieId);
function Credits($movieId)
{
  $requestUrl = "https://api.themoviedb.org/3/movie/{$movieId}/credits?api_key=a6304e3aeae5ada05e23b5e4bbbb9eff";
  $response = file_get_contents($requestUrl);
  $data = json_decode($response, true);
  return $data;
}
$credits = Credits($movieId);
?>
<div class="tabpanel-wrapper">
    <ul class="tab-list">
        <li class="tab active" data-tab="tab-1">Recomendados</li>
        <li class="tab" data-tab="tab-2">Comentarios</li>
        <li class="tab" data-tab="tab-3">Detalles</li>
    </ul>
    <div class="tab-content active" id="tab-1">
        <?php SingleRows(useDetailPage($movieId)); ?>
    </div>
    <div class="tab-content" id="tab-2">
        <?php get_template_part('comments') ?>
    </div>
    <div class="tab-content" id="tab-3">
        <div class="tab__mainColumn">
            <h2 class="tab__title"><?php echo $movieData['original_title']; ?></h2>
            <p class="tab__description">
                <?php echo $movieData['overview']; ?>
            </p>
        </div>
        <div class="tab__itemsColumn">
            <div class="tab_itemSubColumn">
                <div class="tab__item">
                    <h3 class="tab__subtitle">Duration:</h3>
                    <?php echo $movieData['runtime']; ?> minutos
                </div>
                <div class="tab__item">
                    <h3 class="tab__subtitle">Release Date:</h3>
                    <?php echo $movieData['release_date']; ?>
                </div>
            </div>
            <div class="tab_itemSubColumn">
                <div class="tab__item">
                    <h3 class="tab__subtitle">Genres:</h3> 
                    <?php
                    foreach ($movieData['genres'] as $genre) {
                        echo '<p>' . $genre['name'] . '</p>';
                    }
                    ?>      
                </div>
                <div class="tab__item">
                    <h3 class="tab__subtitle">Cast:</h3>
                    <ul>
                        <?php 
                        foreach ($credits['cast'] as $actor) {
                            echo '<li>' . $actor['name'] . '</li>';
                        }
                        ?>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
document.addEventListener('DOMContentLoaded', function() {
    const tabs = document.querySelectorAll('.tab');
    const contents = document.querySelectorAll('.tab-content');

    tabs.forEach(tab => {
        tab.addEventListener('click', function() {
            const target = this.getAttribute('data-tab');

            tabs.forEach(t => t.classList.remove('active'));
            this.classList.add('active');

            contents.forEach(content => {
                content.classList.remove('active');
                if (content.getAttribute('id') === target) {
                    content.classList.add('active');
                }
            });
        });
    });
});
</script>