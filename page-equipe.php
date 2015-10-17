<?php get_header(); ?>
<!--[if IE 8]
    <p class="section__paragraphe">Votre Navigateur n’est pas à jour. Mettez-le à jour<a href="http://browsehappy.com/">ici.</a></p><![endif]-->
<main role="main" class="main wrapper">
    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
        <h1 class="big-header"><?php the_title(); ?></h1>
        <div class="article article_paragraph">
           <?php the_content(); ?>
        </div>
    <?php endwhile;
    else: ?>
        <h1 class="article_header"><?php _e('Sorry, no posts matched your criteria.'); ?></h1>
    <?php endif; ?>
    <?php $query = new WP_Query(array('orderby' => 'title', 'order' => 'ASC', 'post_type' => 'equipe')); ?>
    <ul class="grid-layout">
        <?php while ($query->have_posts()) : $query->the_post(); ?>
            <?php $image = get_field('image_personnel') ?>
            <li class="people-container grid-layout__item u-1/3 u-1/2-lap u-1/1-palm">
                    <dl class="people-carte">
                        <dt class="people__first_name people__header transition--soft gamma"><?php the_field('nom'); ?>
                            <span><?php the_field('prenom') ?></span></dt>
                        <dd class="people__body">
                            <?php if (!empty($image)): ?>
                                <img width="150" height="150" class="people__image transition--soft"
                                     src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>"/>
                            <?php endif; ?>
                            <?php if (get_the_terms(get_the_ID(), 'Formations')): ?>
                                <div class="people-meta people-meta--activity delta people-meta--small">
                                    <?php foreach (get_the_terms(get_the_ID(), 'Formations') as $term): ?>
                                        <span><?php echo($term->name); ?></span>
                                    <?php endforeach; ?>
                                </div>
                            <?php endif; ?>
                            <?php if (get_the_terms(get_the_ID(), 'Fonctions')): ?>
                                <div class="people-meta people-meta--activity delta people-meta--small">
                                    <?php foreach (get_the_terms(get_the_ID(), 'Fonctions') as $term): ?>
                                        <span><?php echo($term->name); ?></span>
                                    <?php endforeach; ?>
                                </div>
                            <?php endif; ?>
                            <?php if (get_the_terms(get_the_ID(), 'team')): ?>
                                <div class="people-meta people-meta--activity delta people-meta--small">
                                    <?php foreach (get_the_terms(get_the_ID(), 'team') as $term): ?>
                                        <span><?php echo($term->name); ?></span>
                                    <?php endforeach; ?>
                                </div>
                            <?php endif; ?>
                            <cite class="people-meta people-meta--slogan"><span class="big-quote">&laquo;</span><?php the_field('une_phrase') ?><span class="visuallyhidden">&raquo;</span></cite>
                        </dd>
                    </dl>
                </li>
        <?php endwhile; ?>
            </ul>
</main>
<?php get_footer(); ?>
