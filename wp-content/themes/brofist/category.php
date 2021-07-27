<?php get_header(); ?>
    <main>
        <section class="news-wrap">
            <div class="innerWrap">
                <div class="main-title"><?php pll_e("What’s"); ?><span><?php pll_e("new"); ?></span>?</div>
            </div>

            <div class="item-wrap">
                <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                    <div class="item">
                        <div class="img">
                            <a href="<?= get_permalink($posts->ID); ?>">
                                <?php if ( has_post_thumbnail() ) { the_post_thumbnail('medium'); } ?>
                            </a>
                        </div>

                        <div class="text">
                            <a href="<?= get_permalink($posts->ID); ?>">
                                <div class="title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></div>
                                <div class="description"><?php the_excerpt(); ?></div>
                                <div class="date"><?= get_the_date(); ?></div>
                            </a>
                        </div>
                    </div>
                <?php endwhile; endif; ?>
            </div>

        </section>
    </main>
<?php get_footer(); ?>