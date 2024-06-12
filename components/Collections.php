<div class="main disney-rows">
  <div class="grid">
    <div class="card-disney disney">
      <div class="item-border">
        <img src="https://raw.githubusercontent.com/DiegoBazanParra/page-disneyplus/main/img/disney/disney-txt.png" class="item-image">
        <img src="https://raw.githubusercontent.com/DiegoBazanParra/page-disneyplus/main/img/disney/disney.gif" class="item-image hover-image">
      </div>
    </div>
    <div class="card-disney pixar">
      <div class="item-border">
        <img src="https://raw.githubusercontent.com/DiegoBazanParra/page-disneyplus/main/img/disney/pixar-txt.png" class="item-image">
        <img src="https://raw.githubusercontent.com/DiegoBazanParra/page-disneyplus/main/img/disney/pixar.gif" class="item-image hover-image">
      </div>
    </div>
    <div class="card-disney marvel">
      <div class="item-border">
        <img src="https://raw.githubusercontent.com/DiegoBazanParra/page-disneyplus/main/img/disney/marvel-txt.png" class="item-image">
        <img src="https://raw.githubusercontent.com/DiegoBazanParra/page-disneyplus/main/img/disney/marvel.gif" class="item-image hover-image">
      </div>
    </div>
    <div class="card-disney starwars">
      <div class="item-border">
        <img src="https://raw.githubusercontent.com/DiegoBazanParra/page-disneyplus/main/img/disney/star-txt.png" class="item-image">
        <img src="https://raw.githubusercontent.com/DiegoBazanParra/page-disneyplus/main/img/disney/starwars.gif" class="item-image hover-image">
      </div>
    </div>
    <div class="card-disney national">
      <div class="item-border">
        <img src="https://raw.githubusercontent.com/DiegoBazanParra/page-disneyplus/main/img/disney/national-txt.png" class="item-image">
        <img src="https://raw.githubusercontent.com/DiegoBazanParra/page-disneyplus/main/img/disney/national.gif" class="item-image hover-image">
      </div>
    </div>
  </div>
</div>
<SCRIPT>
  document.querySelectorAll('.card-disney').forEach(card => {
  card.addEventListener('click', () => {
    if (card.classList.contains('disney')) {
      window.location.href = "?custom_param=brand&brand=disney";
    } else if (card.classList.contains('pixar')) {
      window.location.href = "?custom_param=brand&brand=pixar";
    } else if (card.classList.contains('marvel')) {
      window.location.href = "?custom_param=brand&brand=marvel";
    } else if (card.classList.contains('starwars')) {
      window.location.href = "?custom_param=brand&brand=starwars";
    } else if (card.classList.contains('national')) {
      window.location.href = "?custom_param=brand&brand=national";
    } else {
      window.location.href = "#";
    }
  });
});
</SCRIPT>