<?php get_header(); ?>
<!--[if IE 8]
    <p class="section__paragraphe">Votre Navigateur n’est pas à jour. Mettez-le à jour<a href="http://browsehappy.com/">ici.</a></p><![endif]-->
<main role="main" class="main wrapper">
    <h1><?php the_title(''); ?></h1>
    <?php the_content(); ?>
    <?php $query = new WP_Query(array('post_type' => 'tarifs')); ?>
    <ul class="grid-layout">
        <?php while ($query->have_posts()) : $query->the_post(); ?>
            <?php get_template_part('content','tarif'); ?>
        <?php endwhile; ?>
    </ul>
</main>
<?php get_footer(); ?>
