<?php $query = new WP_Query(array('post_type' => 'slider')); ?>
<?php if ($query->have_posts()): ?>
    <div class="slider-container">
        <div class="wrapper slider-wrapper text--center">
            <div id="slider" class="slider">
                <ul>
                    <?php while ($query->have_posts()) : $query->the_post(); ?>
                        <li class="beta slider__item"><?php the_field('le_temoignage'); ?></li>
                    <?php endwhile; ?>
                </ul>
            </div>
            <a href="#" class="control_prev">
                <svg viewBox="0 0 100 100" class="icon slider__before">
                    <use xlink:href="#shape-next"></use>
                </svg>
            </a><a href="#" class="control_next">
                <svg viewBox="0 0 100 100" class="icon slider__next">
                    <use xlink:href="#shape-next"></use>
                </svg>
            </a>
            <a class="btn btn-round btn-round--bold transition--soft btn-round--slider" href="<?php echo(get_page_link('10')); ?>">Nous contacter</a>
        </div>
    </div>
<?php endif; ?>
