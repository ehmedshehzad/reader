<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>> 
    
    <!-- WRAPPER -->
    <div class="wrapper">

        <!-- HEADER -->
        <header class="header">

            <!-- PRIMARY NAVIGATION -->
            <?php
                if( has_nav_menu( 'primary' ) ) {
                    wp_nav_menu( array(
                        'theme_location'  => 'primary',
                        'container'       => 'nav',
                        'container_class' => 'primary-navigation',
                        'menu_class'      => 'menu dark-text'
                    ) );
                }
            ?>

        </header>

    </div>

    <?php wp_footer(); ?>
</body>
</html>