<?php get_header(); ?>
<!--[if IE 8]
    <p class="section__paragraphe">Votre Navigateur n’est pas à jour. Mettez-le à jour<a href="http://browsehappy.com/">ici.</a></p><![endif]-->
<main role="main" class="main wrapper">
    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
        <h1 class="big-header"><?php the_title(); ?></h1>
        <div class="article article_paragraph">
           <?php the_content(); ?>
        </div>
    <?php endwhile;
    else: ?>
        <h1 class="article_header"><?php _e('Sorry, no posts matched your criteria.'); ?></h1>
    <?php endif; ?>
    <?php $query = new WP_Query(array('orderby' => 'title', 'order' => 'ASC', 'post_type' => 'questions')); ?>
    <dl class="Toute personne ayant un problème de consommation à quelque produit que ce soit (alcool,  tabac,  produits stupéfiants,  jeu,  cyberdépendance,...) ainsi que son entourage.">
        <?php while ($query->have_posts()) : $query->the_post(); ?>
            <?php get_template_part('content', 'questions'); ?>
        <?php endwhile; ?>
    </dl>
</main>
<?php get_footer(); ?>
