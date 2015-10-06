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

get_header();?>
<!--[if IE 8]
    <p class="section__paragraphe">Votre Navigateur n’est pas à jour. Mettez-le à jour<a href="http://browsehappy.com/">ici.</a></p><![endif]-->
<main role="main">
    <?php get_template_part('content/introduction'); ?>
    <?php get_template_part('content/makes'); ?>
    <?php get_template_part('content/slider'); ?>
    <?php get_template_part('content/contact'); ?>
    <?php get_template_part('content/carte'); ?>
</main>
<?php get_footer(); ?>
