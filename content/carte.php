<?php $query = new WP_Query(array('post_type' => 'Accueil')); ?>
<?php while ($query->have_posts()) : $query->the_post(); ?>
    <div class="carte-container">
        <?php //the_field('carte_accueil'); ?>
        <iframe
            src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d2530.054175345005!2d5.575916!3d50.644685!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x20773e701d5ad772!2sCentre+Alfa!5e0!3m2!1sfr!2sbe!4v1443900533863"
            frameborder="0" style="border:0" allowfullscreen></iframe>
    </div>
<?php endwhile; ?>