<div class="container-fluid bc_nav_container_desktop">
    <div class="container">
        <nav class="navbar navbar-expand-lg navbar-dark m-auto p-0 w-100">
            <div id="navbarSupportedContent" class="navbar-collapse collapse" style="">
                <?php 
                    $args = [
                    'menu' => 'main-menu',
                    'depth' => 3,
                    'theme_location' => 'primary',
                    'container' => false,
                    'container_class' => 'collapse navbar-collapse',
                    'container_id' => 'navbarSupportedContent',
                    'menu_class' => 'navbar-nav m-auto',
                    'fallback_cb'     => 'Bluecorona_WP_Bootstrap_Navwalker::fallback',
                    'walker' => new Bluecorona_WP_Bootstrap_Navwalker(),
                    ];
                    wp_nav_menu( $args )
                ?>
            </div>
        </nav>
    </div>
</div>
