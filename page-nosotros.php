<?php get_header(); ?>
<?php if( have_rows('contenido') ): ?>
    <?php while( have_rows('contenido') ): the_row(); ?>
        
        <?php if (get_row_layout() == 'nosotros_init') : ?>

            <div class="xlc-container xlc-section-vp xlc-nosotros-init-section xlc-multiply-background">
                <div class="xlc-grid">
                    <h1 class="xlc-title"><?php the_sub_field('titulo'); ?></h1>
                    <p class="xlc-subtitle"><?php the_sub_field('descripcion'); ?></p>
                    <div></div>
                </div>
            </div>

        <?php elseif(get_row_layout() == 'nosotros_info'): ?>

            <div class="xlc-container xlc-section-vp xlc-nosotros-info-section xlc-color-background">
                <div class="xlc-grid">
                    <h2 class="xlc-title"><?php the_sub_field('titulo'); ?></h2>
                    <p class="xlc-description"><?php the_sub_field('descripcion'); ?></p>
                    <div class="xlc-valores">
                        <h3 class="xlc-valores-title">Valores</h3>
                        <ul class="xlc-valores-list">
                            <li>Pasión</li>
                            <li>Transparencia</li>
                            <li>Compromiso</li>
                            <li>Colaboración</li>
                            <li>Acción</li>
                            <li>Respeto</li>
                            <li>Rigor científico</li>
                        </ul>
                    </div>
                    <div class="xlc-ods">
                        <h3 class="xlc-ods-title">ODS</h3>
                        <ul class="xlc-ods-list">
                            <li><span>5</span>Igualdad de género</li>
                            <li><span>13</span>Acción por el clima</li>
                            <li><span>14</span>Vida submarina</li>
                            <li><span>15</span>Vida de ecosistema terrestres</li>
                            <li><span>17</span>Alianzas para lograr los objetivos</li>
                        </ul>
                        <p class="xlc-ods-info">En Xaloc estamos alineados directamente con los siguientes ODS.</p>
                    </div>
                    
                </div>
            </div>
        
        <?php elseif(get_row_layout() == 'nosotros_integrantes') : ?>

            <div class="xlc-container xlc-nosotros-integrantes-section">
                <div class="xlc-grid">

                <?php $i = 0; while( have_rows('integrantes') && $i < 7 ): the_row(); ?>

                    <div class="xlc-img-card">
                        <div class="xlc-member-img">
                            <img src="<?php echo esc_url(get_sub_field('imagen')['url']); ?>" alt="<?php echo esc_attr(get_sub_field('imagen')['alt']); ?>">
                        </div>
                        <p class="xlc-member-name"><?php the_sub_field('nombre'); ?></p>
                        <p class="xlc-member-occupation"><?php the_sub_field('ocupacion'); ?></p>
                        <br>
                        <p class="xlc-member-description"><?php the_sub_field('descripcion'); ?></p>
                    </div>

                <?php $i++; endwhile; ?>

                </div>
            </div>
        
        <?php endif; ?>

    <?php endwhile; ?>
<?php endif; ?>
<?php get_footer(); ?>