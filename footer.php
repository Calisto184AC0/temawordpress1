    <footer class="xlc-container xlc-footer">

    <?php if( get_field('tipo_de_footer') == 'Dona' ): ?>

        <div class="xlc-grid xlc-footer-dona">
            <h2 class="xlc-title">¡Dona!</h2>
            <p class="xlc-subtitle">Con tu donación nos ayudas a seguir realizando proyectos propios para concienciar al mayor número de personas sobre los problemas medioambientales y avanzar en la conservación del entorno marino. </p>
            <a class="xlc-orange-btn" href="<?php the_field('link_footer'); ?>">QUIERO AYUDAR</a>
        </div>

    <?php elseif( get_field('tipo_de_footer') == 'Colabora' ) : ?>

        <div class="xlc-grid xlc-footer-colabora">
            <h2 class="xlc-title">¡Hazte voluntaria/o!</h2>
            <p class="xlc-subtitle">La parte más importante de Xaloc sois vosotros. Si quieres participar en nuestros voluntariados, rellena el formulario y prepárate para unirte a la familia de Hermanos de Sal.</p>
            <a class="xlc-orange-btn" href="<?php the_field('link_footer'); ?>">QUIERO AYUDAR</a>
        </div>

    <?php endif; ?>
        
        <div class="xlc-grid  xlc-footer-info">
            <ul class="xlc-links">
                <?php
                    $args_menu1 = array(
                        'theme_location' => 'footer-menu1',
                        'container' => false,
                        'items_wrap' => '%3$s'
                    );

                    $args_menu2 = array(
                        'theme_location' => 'footer-menu2',
                        'container' => false,
                        'items_wrap' => '%3$s',
                        'add_li_class' => 'xlc-footer-menu2'
                    );

                    wp_nav_menu($args_menu1);
                    wp_nav_menu($args_menu2);
                ?>
            </ul>
            <ul class="xlc-legal-info">
                <li><a href="">Envíos y devoluciones</a></li>
                <li><a href="">Aviso legal y política de privacidad</a></li>
                <li><a href="">Política de cookies</a></li>
            </ul>
            <div class="xlc-newsletter"></div>
            <a href="<?php echo home_url(); ?>" class="xlc-footer-logo">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo.png" alt="">
            </a>
            <p class="xlc-ubi-info">
                <b>Asociación para el estudio <br/>
                y conservación del mar</b><br/><br/>
                Calle de la Democracia, 31 puerta 12<br/>
                46018 Valencia – España<br/>
                CIF: G98261266<br/><br/>
                <a href="tel:+34960226499">+34 960 226 499</a><br/>
                <a href="mailto:xaloc@hermanosdesal.org">xaloc@hermanosdesal.org</p>
            <div class="xlc-rrss">
                <a href=""><img src="<?php echo get_template_directory_uri(); ?>/assets/img/rrss/logo-facebook.svg" alt=""></a>
                <a href=""><img src="<?php echo get_template_directory_uri(); ?>/assets/img/rrss/logo-instagram.svg" alt=""></a>
                <a href=""><img src="<?php echo get_template_directory_uri(); ?>/assets/img/rrss/logo-youtube.svg" alt=""></a>
                <a href=""><img src="<?php echo get_template_directory_uri(); ?>/assets/img/rrss/logo-linkedin.svg" alt=""></a>
            </div>
            <span class="xlc-copyright">Copyright ©2020 Xaloc. Todos los derechos reservados.</span>
        </div>
    </footer>
    <?php wp_footer(); ?>
</body>
</html>