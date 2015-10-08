<?php get_header(); ?>
<!--[if IE 8]
    <p class="section__paragraphe">Votre Navigateur n’est pas à jour. Mettez-le à jour<a href="http://browsehappy.com/">ici.</a></p><![endif]-->
<main role="main" class="wrapper main article-container ">
    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
    <h1 class="big-header"><?php the_title(); ?></h1>
        <div class="article">
            <p class="article_paragraph"><?php the_content(); ?></p>
        </div>
    <?php endwhile;
    else: ?>
        <h1 class="article_header"><?php _e('Sorry, no posts matched your criteria.'); ?></h1>
    <?php endif; ?>
</main>
<?php get_footer(); ?>
