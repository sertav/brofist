<?php
$fp_n_id = get_field('fp_n_id');
$fp_n_heading = get_field('fp_n_heading');

$args = array(
    'post_type' => 'post',
);
$posts = new WP_Query( $args );

?>
<section class="whats-new-wrap" id="<?= $fp_n_id; ?>">
    <div class="innerWrap">
        <div class="main-title"><?= $fp_n_heading; ?></div>
    </div>
    <div class="slider owl-carousel">

        <div class="item">
            <?php if ( $posts->have_posts() ) : while ( $posts->have_posts() ) : $posts->the_post(); ?>

                <div class="option">

                    <div class="img">
                        <a href="<?= get_permalink($posts->ID); ?>">
                            <?php if ( has_post_thumbnail() ) { the_post_thumbnail('medium'); } ?>
                        </a>
                    </div>

                    <div class="text">
                        <a href="<?= get_permalink($posts->ID); ?>">
                            <div class="title"><?php the_title(); ?></div>
                            <div class="description"><?php the_excerpt(); ?></div>
                            <div class="date"><?php the_date(); ?></div>
                        </a>
                    </div>

                </div>

            <?php endwhile; endif; wp_reset_query(); ?>
        </div>

    </div>


    <div class="slider mobile owl-carousel">
        <?php if ( $posts->have_posts() ) : while ( $posts->have_posts() ) : $posts->the_post(); ?>
        <div class="item">

                <div class="option">
                    <div class="img">
                        <a href="<?= get_permalink($posts->ID); ?>">
                            <?php if ( has_post_thumbnail() ) { the_post_thumbnail('medium'); } ?>
                        </a>
                    </div>

                    <div class="text">
                        <a href="<?= get_permalink($posts->ID); ?>">
                            <div class="title"><?php the_title(); ?></div>
                            <div class="description"><?php the_excerpt(); ?></div>
                            <div class="date"><?php the_date(); ?></div>
                        </a>
                    </div>
                </div>

        </div>
        <?php endwhile; endif; wp_reset_query(); ?>
    </div>
</section>