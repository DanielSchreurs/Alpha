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


    <div class="vCard-container">
        <?php $query = new WP_Query(array('post_type' => 'equipe')); ?>
        <?php while ($query->have_posts()) : $query->the_post(); ?>
            <ul>
                <li class="people">
                    <dl>
                        <dt class="people__first_name"><?php the_field('nom'); ?> <span><?php the_field('prenom') ?></span></dt>
                        <dd><?php the_field('poste') ?></dd>
                        <dd><?php the_field('secteur_dactivite') ?></dd>
                    </dl>
                </li>
            </ul>
        <?php endwhile; ?>
    </div>
</main>
<?php get_footer(); ?>
