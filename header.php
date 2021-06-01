<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <?php wp_head(); ?>
        <title>Página principal</title>
    </head>
<body>
    <header class="xlc-container xlc-header">
        <div class="xlc-grid">
            <a class="xlc-header-logo" href="<?php echo home_url(); ?>" ><img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo.png" alt="" /></a>
            <?php  
                $args_menu1 = array(
                    'theme_location' => 'header-menu1',
                    'container' => false,
                    'menu_class' => 'xlc-header-menu1'
                );

                $args_menu2 = array(
                    'theme_location' => 'header-menu2',
                    'container' => false,
                    'menu_class' => 'xlc-header-menu2'
                );
                
                wp_nav_menu($args_menu1);
                wp_nav_menu($args_menu2);
            ?>
            <a class="xlc-header-shop" href="">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/icon/carrito.svg" alt="">
                <span>Carrito</span>
            </a>
        </div>
    </header>