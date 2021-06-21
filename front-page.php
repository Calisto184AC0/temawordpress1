<?php get_header(); ?>

<?php if( have_rows('contenido') ): ?>
    <?php while( have_rows('contenido') ): the_row(); ?>
        
        <?php if (get_row_layout() == 'index_init') : ?>

            <div class="xlc-container xlc-section-vp xlc-index-init-section xlc-multiply-background">
                <div class="xlc-grid">
                    <h1 class="xlc-title"><?php the_sub_field('titulo'); ?></h1>
                    <p class="xlc-subtitle"><?php the_sub_field('descripcion'); ?></p>
                    <div></div>
                </div>
            </div>

        <?php elseif(get_row_layout() == 'index_nosotros'): ?>

            <div class="xlc-container xlc-section-vp xlc-index-nosotros-section xlc-color-background">
                <div class="xlc-grid">
                    <h2 class="xlc-title"><?php the_sub_field('titulo'); ?></h2>

                    <?php while( have_rows('cartas') ): the_row(); ?>

                        <div class="xlc-enum-card">
                            <span class="xlc-number"><?php echo get_row_index() ?></span>
                            <h3 class="xlc-title-card"><?php the_sub_field('titulo'); ?></h3>
                            <p class="xlc-description-card"><?php the_sub_field('descripcion'); ?></p>
                        </div>

                    <?php endwhile; ?>

                    <a href="<?php the_sub_field('boton'); ?>" class="xlc-orange-btn">CONÓCENOS</a>
                </div>
            </div>

        <?php elseif(get_row_layout() == 'index_colabora') : ?>
            
            <div class="xlc-container xlc-section-vp xlc-index-colabora-section">
                <div class="xlc-grid">
                    <h2 class="xlc-title"><?php the_sub_field('titulo'); ?></h2>
                    <p class="xlc-subtitle"><?php the_sub_field('descripcion'); ?></p>
                    <a href="<?php the_sub_field('boton'); ?>" class="xlc-orange-btn">¿Qué puedo hacer yo?</a>
                    <div class="xlc-img-card">
                        <div class="xlc-img">
                            <img src="<?php echo esc_url(get_sub_field('imagen_1')['url']); ?>" alt="<?php echo esc_attr(get_sub_field('imagen_1')['alt']); ?>">
                        </div>
                        <span class="xlc-caption">Si eres un/a particular</span>
                    </div>
                    <div class="xlc-img-card">
                        <div class="xlc-img">
                            <img src="<?php echo esc_url(get_sub_field('imagen_2')['url']); ?>" alt="<?php echo esc_attr(get_sub_field('imagen_2')['alt']); ?>">
                        </div>
                        <span class="xlc-caption">Si eres una empresa</span>
                    </div>
                </div>
            </div>

        <?php elseif(get_row_layout() == 'index_presentacion') : ?>
            <!-- TODO: Que aparezca una imagen y si se quiere ver el video que se pulse en la imagen y se cargue el video -->
            <div class="xlc-section-vp xlc-index-presentacion-section">
                <?php 
                    $video = get_sub_field('video')['url'];
                    $attr = array(
                        'src' => $video,
                        'preload' => 'auto',
                        'class' => 'xlc-video-container'
                    );

                    echo wp_video_shortcode($attr);
                ?>
            </div>

        <?php elseif(get_row_layout() == 'index_proyectos') : ?>

            <div class="xlc-container xlc-index-proyectos-section">
                <div class="xlc-grid">
                    <h2 class="xlc-title"><?php the_sub_field('titulo'); ?></h2>
                    <p class="xlc-subtitle"><?php the_sub_field('descripcion'); ?></p>
                </div>
                <div class="xlc-projects-list">
                    <?php
                        $loop = new WP_Query(array(
                            'post_type'         => 'proyectos',
                            'posts_per_page'    => -1
                        ));

                        while ($loop->have_posts()) : $loop->the_post();
                    ?>

                        <a class="xlc-project" href="<?php the_permalink(); ?>">
                            <h3 class="xlc-project-title"><?php the_title(); ?></h3>
                            <p class="xlc-project-description"><?php echo get_the_excerpt(); ?></p>
                            <div class="xlc-project-img">
                                <?php the_post_thumbnail(); ?>
                            </div>
                        </a>

                    <?php endwhile; wp_reset_postdata(); ?>

                    <a class="xlc-all-project" href="<?php the_sub_field('link_proyectos'); ?>">
                        <h3 class="xlc-project-title">Todos los proyectos</h3>
                        <p class="xlc-project-description">En los últimos 20 años las tortugas bobas (Caretta caretta) están eligiendo las costas del mediterráneo español como zona de nidificación.</p>
                        <div class="xlc-project-img">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/proyectos/limpieza1.png" alt="">
                        </div>
                    </a>
                    
                </div>
            </div>
        
        <?php elseif(get_row_layout() == 'index_marcas') : ?>

            <div class="xlc-container xlc-index-marcas-section">
                <div class="xlc-grid">
                    <h2 class="xlc-title"><?php the_sub_field('titulo'); ?></h2>
                </div>
                <div class="xlc-marcas-list">
                    <div class="xlc-marca">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/marcas/Grupo 48.png" alt="">
                    </div>
                    <div class="xlc-marca">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/marcas/Grupo 49.png" alt="">
                    </div>
                    <div class="xlc-marca">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/marcas/Grupo 368.png" alt="">
                    </div>
                    <div class="xlc-marca">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/marcas/Grupo 72.png" alt="">
                    </div>
                    <div class="xlc-marca">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/marcas/Grupo 107.png" alt="">
                    </div>
                    <div class="xlc-marca">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/marcas/Grupo 118.png" alt="">
                    </div>
                    <div class="xlc-marca">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/marcas/Grupo 165.png" alt="">
                    </div>
                    <div class="xlc-marca">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/marcas/Grupo 166.png" alt="">
                    </div>
                    <div class="xlc-marca">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/marcas/Grupo 331.png" alt="">
                    </div>
                    <div class="xlc-marca">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/marcas/Grupo 332.png" alt="">
                    </div>
                    <div class="xlc-marca">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/marcas/Grupo 349.png" alt="">
                    </div>
                    <div class="xlc-marca">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/marcas/Grupo 350.png" alt="">
                    </div>
                </div>
            </div>
        
        <?php endif; ?>

    <?php endwhile; ?>
<?php endif; ?>

<?php get_footer(); ?>