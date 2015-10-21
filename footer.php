<div class="footer">
    <footer class="wrapper">
        <div class="grid-layout">
            <div class="grid-layout__item u-1/4 u-1/2-lap u-1/1-palm">
                <p class="beta footer_header"><?php _e('Navigation'); ?></p>
                <?php
                $defaults = array(
                    'theme_location' => 'header-menu',
                    'menu' => '',
                    'container' => 'ul',
                    'container_class' => 'list-bare footer__navigation',
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
            <div class="grid-layout__item u-1/4 u-1/2-lap u-1/1-palm vcard">
             <?php $query = new WP_Query(array('post_type' => 'page')); ?>
                <?php while ($query->have_posts()) : $query->the_post(); ?>
                <?php if (get_the_ID() === 10): ?>
                    <p class="beta footer_header"><?php _e('Informations'); ?></p>
                    <p class="gamma footer_header"><?php _e('Centre Alpha'); ?></p>
                    <ul class="list-bare footer__navigation">
                        <li><?php the_field('telephone'); ?></li>
                        <li><?php the_field('fax'); ?></li>
                        <li><?php the_field('n_dentreprise'); ?></li>
                        <li><?php the_field('compte'); ?></li>
                        <li><?php the_field('horaires'); ?></li>
                    </ul>
                    <p class="gamma footer_header"><?php the_field('titre_de_la_seconde_section'); ?></p>
                    <ul class="list-bare footer__navigation">
                        <li><?php the_field('telephone_de_lantenne_de_reduction_de_risques'); ?></li>
                        <li><?php the_field('rue_pour_lantenne_reduction_de_risque'); ?></li>
                        <li><?php the_field('location_pour_lantenne_reduction_de_risque'); ?></li>
                        <li><?php the_field('adresse_mail_pour_lantenne_reduction_de_risque'); ?></li>
                    </ul>
                <?php endif; ?>
                <?php endwhile; ?>
            </div>
            <div class="grid-layout__item u-1/4 u-1/2-lap u-1/1-palm vcard">
                <p class="beta footer_header">Nous suivre</p>
                <ul class="list-bare footer__navigation">
                    <li><a href="#" class="delta footer__link link">Facebook</a></li>
                    <li><a href="#" class="delta footer__link link">Twitter</a></li>
                    <li><a href="#" class="delta footer__link link tel">Linkedin</a></li>
                    <li><a href="#" class="delta footer__link link tel">Skype</a></li>
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
                <?php get_search_form(true); ?>
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
