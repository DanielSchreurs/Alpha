<?php get_header(); ?>
<!--[if IE 8]
    <p class="section__paragraphe">Votre Navigateur n’est pas à jour. Mettez-le à jour<a href="http://browsehappy.com/">ici.</a></p><![endif]-->
<main role="main" class="wrapper main article-container ">
    <h1 class="big-header text--right big-header--<?php the_field('couleur_titre', 'parentalite'); ?>"><?php single_cat_title(); ?></h1>
    <?php wp_reset_postdata(); ?>
        <div class="article">
            <h2 class="article_header"><a href="<?php the_permalink(); ?>" class="header_link"><?php the_title(); ?></a></h2>
            <?php the_content(); ?>
        </div>
</main>
<?php get_footer(); ?>
