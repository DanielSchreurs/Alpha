<?php $query = new WP_Query(array('post_type' => 'Accueil')); ?>
<?php while ($query->have_posts()) : $query->the_post(); ?>
    <div class="color-container color-container--white section section--first">
        <div class="wrapper">
            <ul class="grid-layout">
                <li class="make_item grid-layout__item u-1/3 u-1/2-lap u-1/1-palm media-vertical">
                    <svg viewBox="0 0 100 100" class="icon antiman shape-hand">
                        <use xlink:href="#shape-hand"></use>
                    </svg>
                    <div class="media-vertical__body">
                        <h2 class="gamma make_item__header"><?php the_field('titre_1'); ?></h2>

                        <p><?php the_field('texte_1'); ?></p>
                    </div>
                </li>
                <li class="make_item grid-layout__item u-1/3 u-1/2-lap u-1/1-palm media-vertical">
                    <svg viewBox="0 0 100 100" class="icon antiman shape-social">
                        <use xlink:href="#shape-social"></use>
                    </svg>
                    <div class="media-vertical__body">
                        <h2 class="gamma make_item__header"><?php the_field('titre_2'); ?></h2>

                        <p><?php the_field('texte_2'); ?></p>
                    </div>
                </li>
                <li class="make_item grid-layout__item u-1/3 u-1/2-lap u-1/1-palm media-vertical">
                    <svg viewBox="0 0 100 100" class="icon antiman shape-psy">
                        <use xlink:href="#shape-psy"></use>
                    </svg>
                    <div class="media-vertical__body">
                        <h2 class="gamma make_item__header"><?php the_field('titre_3'); ?></h2>

                        <p><?php the_field('texte_3'); ?></p>
                    </div>
                </li>
                <li class="make_item grid-layout__item u-1/3 u-1/2-lap u-1/1-palm media-vertical">
                    <svg viewBox="0 0 100 100" class="icon antiman shape-medicale">
                        <use xlink:href="#shape-medicale"></use>
                    </svg>
                    <div class="media-vertical__body">
                        <h2 class="gamma make_item__header"><?php the_field('titre_4'); ?></h2>

                        <p><?php the_field('texte_4'); ?></p>
                    </div>
                </li>
                <li class="make_item grid-layout__item u-1/3 u-1/2-lap u-1/1-palm media-vertical">
                    <svg viewBox="0 0 100 100" class="icon antiman shape-group">
                        <use xlink:href="#shape-group"></use>
                    </svg>
                    <div class="media-vertical__body">
                        <h2 class="gamma make_item__header"><?php the_field('titre_5'); ?></h2>

                        <p><?php the_field('texte_5'); ?></p>
                    </div>
                </li>
                <li class="make_item grid-layout__item u-1/3 u-1/2-lap u-1/1-palm media-vertical">
                    <svg viewBox="0 0 100 100" class="icon antiman shape-therapie">
                        <use xlink:href="#shape-therapie"></use>
                    </svg>
                    <div class="media-vertical__body">
                        <h2 class="gamma make_item__header"><?php the_field('titre_6'); ?></h2>

                        <p><?php the_field('texte_6'); ?></p>
                    </div>
                </li>
            </ul>
        </div>
    </div>
<?php endwhile; ?>