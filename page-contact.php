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
                <?php get_template_part('content','contact'); ?>
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
    <div class="contact_container section">
        <p class="alpha"><?php the_field('titre_de_la_seconde_section'); ?></p>
        <p class="text--center contact_meta zeta"><?php the_field('information_suplementaire_pour_lantenne'); ?></p>
        <span class="btn btn--huge beta simple-gray transition btn--soft"><?php the_field('telephone_de_lantenne_de_reduction_de_risques'); ?></span>
    </div>
        <div class="grid-layout">
             <?php $location = get_field('carte_reduction'); ?>
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
                        <span class="item-title"><?php the_field('rue_pour_lantenne_reduction_de_risque'); ?></span>
                        <span class="item-title"><?php the_field('location_pour_lantenne_reduction_de_risque'); ?></span>
                    </li>
                    <li class="epsilon item-title"><?php the_field('adresse_mail_pour_lantenne_reduction_de_risque'); ?></li>
                    <li class="epsilon item-title"><?php the_field('telephone_de_lantenne_de_reduction_de_risques'); ?></li>
                    <li class="epsilon item-title"><?php the_field('fax_pour_lantenne_reduction_de_risques'); ?></li>
                    <li class="epsilon item-title"><?php the_field('horaire_pour_lantenne_reduction_de_risques'); ?></li>
                </ul>
            </div>
        </div>
    <?php endif; ?>
<?php endwhile; ?>
</main>
<?php get_footer(); ?>
