<nav class="navbar">
    <div class="right">
        <?php the_custom_logo(); ?>
        <?php 
        $icons = ["home", "magnifying-glass", "plus", "star", "clopperboard", "tv"];
            $args = array(
                'theme_location' => 'principal',
                'container' => 'ul',
                'menu_class' => 'menu',
                'link_before' => '<i class="fas fa-home"></i>', // Agrega el icono antes del texto del enlace
                'link_after' => '</span>',
            );
            wp_nav_menu($args); // Genera el menú de navegación con los argumentos dados
        ?>
    </div>
    <div class="left">
        <a href="<?php echo htmlspecialchars($loginUrl); ?>">
            <button class="login">Login</button>
        </a>
    </div>
</nav>