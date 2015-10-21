<?php if ($post->post_type === "post"): ?>
    <section>
        <?php if ($_SESSION['i']===1): ?>
            <h2><?php _e('Dans les articles : ') ?></h2>
            <?php $eDisplayed = true; ?>
        <?php endif; ?>
        <article id="post-<?php the_ID(); ?>" <?php post_class('container-default'); ?>>
                <?php the_title(sprintf('<h3 class="entry-title beta"><a class="link--orange" href="%s" rel="bookmark">', esc_url(get_permalink())), '</a></h3>'); ?>
                <?php the_content() ; ?>
            </article><!-- #post-## -->
    </section>
<?php endif; ?>
<?php if ($post->post_type === "equipe"): ?>
    <section>
        <?php if ($_SESSION['i']===1): ?>
            <h2><?php _e('Dans les membre de l’équipe : ') ?></h2>
        <?php endif; ?>
            <div class="grid-layout">
                 <?php get_template_part('content', 'equipe'); ?>
            </div>
    </section>
<?php endif; ?>
<?php if ($post->post_type === "tarifs"): ?>
    <section>
        <?php if ($_SESSION['i']===1): ?>
            <h2><?php _e('Dans nos tarifs : ') ?></h2>
        <?php endif; ?>
        <div class="grid-layout">
            <?php get_template_part('content','tarif'); ?>
        </div>
    </section>
<?php endif; ?>
<?php if ($post->post_type === "contact"): ?>
    <section>
        <?php if ($_SESSION['i']===1): ?>
            <h2><?php _e('Dans nos contact : ') ?></h2>
        <?php endif; ?>
        <div class="contact-adresse grid-layout">
            <?php get_template_part('content','contact'); ?>
        </div>
    </section>
<?php endif; ?>
