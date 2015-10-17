<?php get_header(); ?>
<!--[if IE 8]
    <p class="section__paragraphe">Votre Navigateur n’est pas à jour. Mettez-le à jour<a href="http://browsehappy.com/">ici.</a></p><![endif]-->
<main role="main" class="main wrapper">
    <h1><?php single_cat_title(''); ?></h1>
    <?php $query = new WP_Query(array('post_type' => 'tarifs')); ?>
    <ul class="grid-layout">
        <?php while ($query->have_posts()) : $query->the_post(); ?>
            <li class="grid-layout__item u-1/3 u-1/2-lap u-1/1-palm">
                <div class="prince-container">
                    <p class="price_box"><?php the_field('le_prix'); ?>&euro;</p>
                    <p class="price__note"><?php the_field('remarque_'); ?></p>
                     <?php if (get_the_terms(get_the_ID(), 'ouverture_de_dossier')): ?>
                            <?php foreach (get_the_terms(get_the_ID(), 'ouverture_de_dossier') as $term): ?>
                             <p><?php echo($term->name); ?></p>
                         <?php endforeach; ?>
                     <?php endif; ?>
                </div>
            </li>
        <?php endwhile; ?>
    </ul>
</main>
<?php get_footer(); ?>
