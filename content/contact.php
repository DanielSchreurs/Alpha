<?php $query = new WP_Query(array('post_type' => 'Accueil')); ?>
<?php while ($query->have_posts()) : $query->the_post(); ?>
<div class="wrapper contact_container section">
    <p class="container__header"><?php the_field('titre_de_contact'); ?></p>

    <p class="text--center contact_meta zeta"> <?php the_field('slogan_de_contact'); ?></p><a href="#" class="btn btn--huge beta simple-gray transition btn--soft">Nous contacter</a>
</div>
<?php endwhile; ?>