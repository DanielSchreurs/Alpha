<?php $query = new WP_Query(array('post_type' => 'Accueil')); ?>
<?php while ($query->have_posts()) : $query->the_post(); ?>
    <div class="color-container color-container--introcution">
        <div class="wrapper">
            <h1 class="main-header"><?php the_field('mega_titre'); ?><span
                    class="main-slogant"><?php the_field('numero_de_telephone'); ?></span>
            </h1>
        </div>
    </div>
<?php endwhile; ?>
