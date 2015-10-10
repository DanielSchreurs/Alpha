<?php $query = new WP_Query(array('post_type' => 'Accueil')); ?>
<?php while ($query->have_posts()) : $query->the_post(); ?>
    <?php $location = get_field('carte_accueil'); ?>
    <?php if (!empty($location)): ?>
        <div class="acf-map carte-container">
            <div class="marker" data-lat="<?php echo $location['lat']; ?>"
                 data-lng="<?php echo $location['lng']; ?>"></div>
        </div>
    <?php endif; ?>
<?php endwhile; ?>