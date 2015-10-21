<?php get_header(); ?>
<!--[if IE 8]
    <p class="section__paragraphe">Votre Navigateur n’est pas à jour. Mettez-le à jour<a href="http://browsehappy.com/">ici.</a></p><![endif]-->
<main role="main" class="wrapper main">
    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
        <h1 class="big-header"><?php the_title(); ?></h1>
        <div class="article article_paragraph">
           <p class="column-default large-paragraphe"><?php echo get_the_content(); ?></p>
        </div>
    <?php endwhile;
    else: ?>
        <h1 class="article_header"><?php _e('Sorry, no posts matched your criteria.'); ?></h1>
    <?php endif; ?>
    <?php if (function_exists('ninja_forms_display_form')): ?>
        <div class="form-wrapper">
            <p><?php _e('Les champs munis d’une '); ?><span class="ninja-forms-req-symbol">*</span><?php _e('sont obligatoires'); ?></p>
            <?php ninja_forms_display_form(5); ?>
        </div>
    <?php endif; ?>
</main>
<?php get_footer(); ?>
