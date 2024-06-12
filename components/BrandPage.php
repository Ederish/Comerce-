<main class="brandPage">
  <?php
$backgruond = [
  'https://raw.githubusercontent.com/tobicorradi/disneyplus-clone/master/public/images/brands/disney-bg.jpg',
  'https://raw.githubusercontent.com/tobicorradi/disneyplus-clone/master/public/images/brands/pixar-bg.jpg',
  'https://raw.githubusercontent.com/tobicorradi/disneyplus-clone/master/public/images/brands/marvel-bg.jpg',
  'https://raw.githubusercontent.com/tobicorradi/disneyplus-clone/master/public/images/brands/star-wars-bg.jpg',
  'https://lumiere-a.akamaihd.net/v1/images/ng_videobackground_wave_5658d367.jpeg?region=0,0,1927,1084&width=768',
];
$brands = [
  'https://raw.githubusercontent.com/tobicorradi/disneyplus-clone/master/public/images/brands/disney.png',
  'https://prod-ripcut-delivery.disney-plus.net/v1/variant/disney/7F4E1A299763030A0A8527227AD2812C049CE3E02822F7EDEFCFA1CFB703DDA5/scale?width=600&aspectRatio=1.78&format=png',
  'https://raw.githubusercontent.com/tobicorradi/disneyplus-clone/master/public/images/brands/marvel.png',
  'https://raw.githubusercontent.com/tobicorradi/disneyplus-clone/master/public/images/brands/star-wars.png',
  'https://raw.githubusercontent.com/tobicorradi/disneyplus-clone/master/public/images/brands/national-geographic.png',
];

$urlPage = get_query_var('brand');

  switch ($brand) {
    case 'disney':
      brandPage($backgruond[0], $brands[0], "7067611", "5905", "338");
      break;
    case 'pixar':
      brandPage($backgruond[1], $brands[1], "7067603", "7067605", "7067606");
      break;
    case 'marvel':
      brandPage($backgruond[2], $brands[2], "1271", "3204", "7067552");
      break;
      case 'starwars':
        brandPage($backgruond[3], $brands[3], "7067607", "8136", "7067607");
      break;
    default:
      brandPage($backgruond[4], $brands[4], "7067613", "7067613", "7067613");
      break;
  }

  function brandPage($bg, $brandImg, $row1, $row2, $row3) {
    ?>
    <main class="brandPage">
      <div class="brandPage__background">
        <img alt="" src="<?php echo $bg; ?>" />
      </div>
      <div class="brandPage__image">
        <center>
          <img src="<?php echo $brandImg; ?>" alt="" />
        </center>
      </div>
      <div class="brandPage__movies movieRows__container">
      <article class="singleRow">
    <h2 class="singleRow__title">Continue Watching</h2>
    <?php SingleRows(useSingleRows($row1));?> 
    </article>
    <article class="singleRow">
    <h2 class="singleRow__title">Disney Movies</h2>
    <?php SingleRows(useSingleRows($row2));?>
    </article>
    <article class="singleRow">
    <h2 class="singleRow__title">Star Wars</h2>
    <?php SingleRows(useSingleRows($row3));?>
    </article>
      </div>
    </main>
  <?php } ?>
</main>
