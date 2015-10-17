<?php get_header(); ?>
<!--[if IE 8]
    <p class="section__paragraphe">Votre Navigateur n’est pas à jour. Mettez-le à jour<a href="http://browsehappy.com/">ici.</a></p><![endif]-->
<main role="main" class="wrapper main article-container ">
    <h1 class="big-header text--right big-header--<?php the_field('couleur_titre', 'parentalite'); ?>"><?php single_cat_title(); ?></h1>
    <?php wp_reset_postdata(); ?>
    <?php
    {
        $args = array(
            'type' => 'post',
            'child_of' => get_cat_ID(single_cat_title('', false)),
            'parent' => '',
            'orderby' => 'name',
            'order' => 'ASC',
            'hide_empty' => 1,
            'hierarchical' => 1,
            'exclude' => '',
            'include' => '',
            'number' => '',
            'taxonomy' => 'category',
            'pad_counts' => false
        );
    } ?>
    <?php $categories = get_categories($args); ?>
    <?php if (!empty($categories)): ?>
        <?php foreach ($categories as $categorie): ?>
            <h2><a class="beta" href="<?php echo(get_page_link(get_the_ID())); ?>"><?php echo($categorie->name) ?></a></h2>
            <p><?php echo($categorie->description); ?></p>
            <a class="btn btn--huge beta simple-gray transition btn--soft" href="<?php echo(get_page_link(get_the_ID())); ?>">En savoir plus <span class="visuallyhidden"> sur <?php echo($categorie->name) ?></span></a>
        <?php endforeach; ?>
    <?php else: ?>
        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
            <div class="article">
                    <h2 class="article_header"><a href="<?php the_permalink(); ?>" class="header_link"><?php the_title(); ?></a></h2>
                <?php the_content(); ?>
                </div>
        <?php endwhile;
        else: ?>
            <h2 class="article_header"><?php _e('Sorry, no posts matched your criteria.'); ?></h2>
        <?php endif; ?>
    <?php endif; ?>
</main>
<?php get_footer(); ?>
