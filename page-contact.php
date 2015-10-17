<?php get_header(); ?>
<!--[if IE 8]
    <p class="section__paragraphe">Votre Navigateur n’est pas à jour. Mettez-le à jour<a href="http://browsehappy.com/">ici.</a></p><![endif]-->
<main role="main" class="wrapper main">
    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
        <h1 class="big-header"><?php the_title(); ?></h1>
        <div class="article article_paragraph">
           <?php the_content(); ?>
        </div>
    <?php endwhile;
    else: ?>
        <h1 class="article_header"><?php _e('Sorry, no posts matched your criteria.'); ?></h1>
    <?php endif; ?>
    <?php $query = new WP_Query(array('orderby' => 'title', 'order' => 'ASC', 'post_type' => 'contact')); ?>
    <?php if (!empty($query)): ?>
        <ul class="contact-adresse grid-layout">
            <?php while ($query->have_posts()) : $query->the_post(); ?>
                <li class="grid-layout__item u-1/3 u-1/2-lap u-1/1-palm">
                    <div class="grey-blog">
                        <span
                            class="grey-blog__item grey-blog__item--light"><?php the_field('nom_de_contact'); ?></span>
                        <span class="grey-blog__item"><?php the_field('adresse'); ?></span>
                    </div>
                </li>
            <?php endwhile; ?>
        </ul>
    <?php endif; ?>
    <?php $query = new WP_Query(array('post_type' => 'page')); ?>
    <?php while ($query->have_posts()) : $query->the_post(); ?>
        <?php if (get_the_ID() === 10): ?>
            <div class="grid-layout">
                 <?php $location = get_field('carte'); ?>
                <div class="grid-layout__item u-2/3 u-1/2-lap u-1/1-palm">
                    <?php if (!empty($location)): ?>
                        <div class="acf-map carte-container carte-container--contact">
                        <div class="marker" data-lat="<?php echo $location['lat']; ?>"
                             data-lng="<?php echo $location['lng']; ?>"></div>
                    </div>
                    <?php endif; ?>
                </div>
                <div class="grid-layout__item u-1/3 u-1/2-lap u-1/1-palm">
                    <ul class="list-bare">
                        <li class="epsilon">
                            <span class="item-title"><?php the_field('rue'); ?></span>
                            <span class="item-title"><?php the_field('location'); ?></span>
                        </li>
                        <li class="epsilon item-title"><?php the_field('telephone'); ?></li>
                        <li class="epsilon item-title"><?php the_field('fax'); ?></li>
                        <li class="epsilon item-title"><?php the_field('n_dentreprise'); ?></li>
                        <li class="epsilon item-title"><?php the_field('compte'); ?></li>
                        <li class="epsilon item-title"><?php the_field('horaires'); ?></li>
                    </ul>
                </div>
            </div>
        <?php endif; ?>
    <?php endwhile; ?>
    <div class="contact_container section">
        <p class="container__header">Par téléphone</p>
        <p class="text--center contact_meta zeta">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
        <span class="btn btn--huge beta simple-gray transition btn--soft">04 223 09 03</span>
    </div>
</main>
<?php get_footer(); ?>