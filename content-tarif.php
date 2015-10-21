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