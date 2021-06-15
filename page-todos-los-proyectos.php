<?php get_header(); ?>
<?php if( have_rows('contenido') ): ?>
    <?php while( have_rows('contenido') ): the_row(); ?>
        
        <?php if (get_row_layout() == 'proyectos_init') : ?>

            <div class="xlc-container xlc-section-vp xlc-proyectos-init-section xlc-multiply-background">
                <div class="xlc-grid">
                    <h1 class="xlc-title"><?php the_sub_field('titulo'); ?></h1>
                    <p class="xlc-subtitle"><?php the_sub_field('descripcion'); ?></p>
                    <div></div>
                </div>
            </div>

        <?php elseif(get_row_layout() == 'proyectos_info'): ?>

            <div class="xlc-container xlc-section-vp xlc-proyectos-info-section xlc-color-background">
                <div class="xlc-grid">
                    <h2 class="xlc-title"><?php the_sub_field('titulo'); ?></h2>

                    <?php while( have_rows('cartas') ): the_row(); ?>

                        <div class="xlc-enum-card">
                            <span class="xlc-number"><?php echo get_row_index() ?></span>
                            <h3 class="xlc-title-card"><?php the_sub_field('titulo'); ?></h3>
                            <p class="xlc-description-card"><?php the_sub_field('descripcion'); ?></p>
                        </div>

                    <?php endwhile; ?>

                </div>
            </div>
        
        <?php elseif(get_row_layout() == 'proyectos_lista') : ?>

            <div class="xlc-container xlc-proyectos-lista-section">

            <?php while( have_rows('tipo_de_proyecto') ): the_row(); $taxonomy = get_sub_field('categoria'); ?>

                <div class="xlc-grid">
                    <h2 class="xlc-title"><?php echo esc_html( $taxonomy->name ); ?></h2>
                </div>

                <div class="xlc-projects-list">
                    <?php
                        $loop = new WP_Query(array(
                            'post_type'         => 'proyectos',
                            'posts_per_page'    => -1,
                            'tax_query'         => array(array(
                                                        'taxonomy'  => $taxonomy->taxonomy,
                                                        'field'     => 'slug',
                                                        'terms'     => $taxonomy->slug
                                                    ))
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
                    
                </div>

            <?php endwhile; ?>

            </div>
        
        <?php endif; ?>

    <?php endwhile; ?>
<?php endif; ?>
<?php get_footer(); ?>