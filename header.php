<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <?php wp_head(); ?>

        <?php if (get_post_type() == 'proyectos'): // de este modo se podrán ver los fondos para los proyectos?>

            <style>
                <?php while( have_rows('contenido') ): the_row(); ?>
                    <?php if (get_row_layout() == 'proyecto_init') : ?>

                        .xlc-proyecto-init-section::after {
                            background-image: url('<?php echo esc_url(get_the_post_thumbnail_url()); ?>');
                        }

                    <?php elseif(get_row_layout() == 'proyecto_info'): ?>

                        .xlc-proyecto-info-section::after {
                            background-image: url('<?php echo esc_url(get_sub_field('fondo')['url']); ?>');
                        }

                    <?php endif; ?>
                <?php endwhile; ?>
            </style>

        <?php endif; ?>
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