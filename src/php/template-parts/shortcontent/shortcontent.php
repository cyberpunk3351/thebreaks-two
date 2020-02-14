
<div class="contentAll__left--top"></div>
<?php if (have_posts()) :
while (have_posts()) : the_post(); ?>            
    <div class="info__left_shortNews">
        <?php the_post_thumbnail('thumbnail'); ?>
        <div class="info__left_shortNews_author">
            <h1><a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h1>
            <p><?php the_time("d M Y"); ?></p>
            <!-- <p><?php the_author() ?></p> -->
            <p><?php the_excerpt() ?></p>
            <p><a href="<?php the_permalink() ?>">Читать</a></p>
        </div>
    </div>
    <?php endwhile; ?>
<?php else : ?>
    <p>Non d sdf sde</p>
<?php endif; ?>