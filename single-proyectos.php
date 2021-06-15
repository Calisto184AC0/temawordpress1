<?php get_header(); ?>

<?php if( have_rows('contenido') ): ?>
    <?php while( have_rows('contenido') ): the_row(); ?>
        
        <?php if (get_row_layout() == 'proyecto_init') : ?>

            <div class="xlc-container xlc-section-vp xlc-proyecto-init-section xlc-multiply-background">
                <div class="xlc-grid">
                    <h1 class="xlc-title">Campamento Tortuga</h1>
                    <p class="xlc-subtitle">En los últimos 20 años las tortugas bobas (Caretta caretta) están eligiendo las costas del mediterráneo español como zona de nidificación.</p>
                    <div></div>
                </div>
            </div>

        <?php elseif(get_row_layout() == 'proyecto_info'): ?>

            <div class="xlc-container xlc-section-vp xlc-proyecto-info-section xlc-color-background">
                <div class="xlc-grid">
                    <h2 class="xlc-title"><?php the_sub_field('titulo'); ?></h2>
                    <p class="xlc-description"><?php the_sub_field('descripcion'); ?></p>

                    <div class="xlc-descargas">
                        <?php while( have_rows('descargas') ): the_row(); ?>

                            <div class="xlc-descarga">
                                <span class="xlc-descarga-title"><?php echo get_sub_field('fichero')['filename']; ?></span>
                                <a href="<?php echo get_sub_field('fichero')['url']; ?>" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/assets/icon/cloud-download.svg" alt=""></a>
                            </div>
                            
                        <?php endwhile; ?>
                    </div>

                </div>
            </div>

        <?php elseif(get_row_layout() == 'proyecto_destacados') : ?>
            
            <div class="xlc-container xlc-proyecto-destacados-section">
                <?php while( have_rows('destacado') ): the_row(); ?>

                    <div class="xlc-grid">
                        <span class="xlc-destacado-title"><?php the_sub_field('titulo'); ?></span>
                        <p class="xlc-destacado-description"><?php the_sub_field('descripcion'); ?></p>
                    </div>

                <?php endwhile; ?>
            </div>

        <?php elseif(get_row_layout() == 'proyecto_cta') : ?>

            <div class="xlc-container xlc-proyecto-cta-section">
                <div class="xlc-grid">
                    <h2 class="xlc-title"><?php the_sub_field('titulo'); ?></h2>
                    <p class="xlc-description"><?php the_sub_field('descripcion'); ?></p>
                    <a href="<?php the_sub_field('url'); ?>" class="xlc-orange-btn"><?php the_sub_field('nombre_boton'); ?></a>
                </div>
            </div>

        <?php elseif(get_row_layout() == 'proyecto_more_info') : ?>

            <div class="xlc-container xlc-proyecto-more-info-section">
                <div class="xlc-grid">
                    <h2 class="xlc-title"><?php the_sub_field('titulo'); ?></h2>
                    <p class="xlc-description"><?php the_sub_field('descripcion'); ?></p>
                </div>
            </div>
        
        <?php elseif(get_row_layout() == 'proyecto_galeria') : ?>

            <div class="xlc-container xlc-proyecto-gallery-section">
                <div class="xlc-grid">
                    <h2 class="xlc-title">Galeria</h2>
                    <div class="xlc-gallery-container">

                        <?php $images = get_sub_field('galeria'); ?>
                        <?php foreach( $images as $image ): ?>
                            <img class="xlc-image" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>">
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>

        <?php elseif(get_row_layout() == 'proyecto_video') : ?>
        
            <div class="xlc-container xlc-proyecto-video-section">
                <div class="xlc-grid">
                    <h2 class="xlc-title"><?php the_sub_field('titulo'); ?></h2>
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
            </div>

        <?php endif; ?>
        

    <?php endwhile; ?>
<?php endif; ?>

<?php get_footer(); ?>