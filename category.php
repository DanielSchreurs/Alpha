<?php get_header(); ?>
<!--[if IE 8]
    <p class="section__paragraphe">Votre Navigateur n’est pas à jour. Mettez-le à jour<a href="http://browsehappy.com/">ici.</a></p><![endif]-->
<main role="main" class="wrapper main article-container ">
    <h1 class="big-header text--right big-header--orange"><?php single_cat_title(); ?></h1>
    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
        <div class="article">
            <h2 class="article_header"><a href="<?php the_permalink(); ?>" class="header_link"><?php the_title(); ?></a></h2>
            <p class="article_paragraph"><?php the_content(); ?></p>
        </div>
    <?php endwhile;
    else: ?>
        <h2 class="article_header"><?php _e('Sorry, no posts matched your criteria.'); ?></h2>
    <?php endif; ?>
</main>
<?php get_footer(); ?>
