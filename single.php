<?php get_header(); ?>
<!--[if IE 8]
    <p class="section__paragraphe">Votre Navigateur n’est pas à jour. Mettez-le à jour<a href="http://browsehappy.com/">ici.</a></p><![endif]-->
<main role="main" class="wrapper main article-container ">
    <h1 class=""><?php the_title(); ?></h1>
    <?php wp_reset_postdata(); ?>
        <div class="column-default">
            <?php the_content(); ?>
        </div>
</main>
<?php get_footer(); ?>
