<div class="footer">
    <footer class="wrapper">
        <div class="grid-layout">
            <div class="grid-layout__item u-1/4 u-1/2-lap u-1/1-palm">
                <p class="beta footer_header"><?php _e('Navigation'); ?></p>
                <ul class="list-bare footer__navigation">
                    <li><a href="#" class="delta footer__link transition link">Foire aux questions</a></li>
                    <li><a href="#" class="delta footer__link transition link">Liens utiles</a></li>
                    <li><a href="#" class="delta footer__link transition link">Type d'intervention</a></li>
                    <li><a href="#" class="delta footer__link transition link">Horaires</a></li>
                </ul>
            </div>
            <div class="grid-layout__item u-1/4 u-1/2-lap u-1/1-palm vcard">
             <?php $query = new WP_Query(array('post_type' => 'page')); ?>
                <?php while ($query->have_posts()) : $query->the_post(); ?>
                <?php if (get_the_ID() === 10): ?>
                    <p class="beta footer_header"><?php _e('Informations'); ?></p>
                    <ul class="list-bare footer__navigation">
                        <li><?php the_field('telephone'); ?></li>
                        <li><?php the_field('fax'); ?></li>
                        <li><?php the_field('n_dentreprise'); ?></li>
                        <li><?php the_field('compte'); ?></li>
                        <li><?php the_field('horaires'); ?></li>
                    </ul>
                <?php endif; ?>
                <?php endwhile; ?>
            </div>
            <div class="grid-layout__item u-1/4 u-1/2-lap u-1/1-palm vcard">
                <p class="beta footer_header">Nous suivre</p>
                <ul class="list-bare footer__navigation">
                    <li><a href="#" class="delta footer__link transition link">Facebook</a></li>
                    <li><a href="#" class="delta footer__link transition link">Twitter</a></li>
                    <li><a href="#" class="delta footer__link transition link tel">Linkedin</a></li>
                    <li><a href="#" class="delta footer__link transition link tel">Skype</a></li>
                </ul>
            </div>
            <div class="grid-layout__item u-1/4 u-1/2-lap u-1/1-palm vcard">
                <p class="beta footer_header">Liens utiles</p>
                <?php
                $defaults = array(
                    'theme_location' => 'liens_utiles',
                    'menu' => '',
                    'container' => 'ul',
                    'container_class' => '',
                    'container_id' => '',
                    'menu_class' => 'list-bare footer__navigation',
                    'menu_id' => '',
                    'echo' => true,
                    'fallback_cb' => 'wp_page_menu',
                    'before' => '',
                    'after' => '',
                    'link_before' => '',
                    'link_after' => '',
                    'items_wrap' => '<ul class="%2$s">%3$s</ul>',
                    'depth' => 0,
                    'walker' => ''
                );
                wp_nav_menu($defaults);
                ?>
            </div>
        </div>
    </footer>
    <div class="copy">
        <p class="wrapper">&copy;&nbsp;Daniel Schreurs</p>
    </div>
</div>
<?php wp_footer(); ?>
<?php if (is_home() || is_page('10')): ?>
    <script src="https://maps.googleapis.com/maps/api/js?v=3.exp&sensor=false"></script>
    <script src="<?= get_template_directory_uri(); ?>/js/map.js"></script>
<?php endif; ?>
</body>
</html>
