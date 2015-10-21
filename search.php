<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme and one
 * of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query,
 * e.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */

get_header(); ?>
<!--[if IE 8]
    <p class="section__paragraphe">Votre Navigateur n’est pas à jour. Mettez-le à jour<a href="http://browsehappy.com/">ici.</a></p><![endif]-->
<main role="main" class="main wrapper">

    <?php if (have_posts()) : ?>
        <h1 class="big-header"><?php echo(__('Résultats pour : ') . get_search_query()); ?></h1>
        <?php
        // Start the loop.
        $_SESSION['i'] = 0;
        while (have_posts()) : the_post(); ?>
            <?php $_SESSION['i'] = $_SESSION['i']+1;?>
            <?php get_template_part('content','search'); ?>

        <?php endwhile;?>
        <?php // Previous/next page navigation.
        the_posts_pagination(array(
            'prev_text' => __('Précédent'),
            'next_text' => __('Suivant'),
            'before_page_number' => '',
            'after_page_number' => ' >',
            'screen_reader_text'=>'La navigation entre les articles'
        )); ?>
    <?php else : ?>
        <h1 class="header--404">
        <b><?php _e('Oups'); ?>&hellip;</b>
        <span><?php echo(__('Nous n’avons pas trouvé de résulats pour :') . get_search_query()); ?></span>
    </h1>
        <div class="search-form-container search-form-container--no-result"><?php get_search_form(true); ?></div>
    <?php endif; ?>
</main>
<?php get_footer(); ?>
