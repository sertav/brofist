<?php get_header(); ?>
    <main>
        <section class="news-wrap">
            <div class="innerWrap">
                <div class="main-title">What’s <span>new</span>?</div>
            </div>

            <div class="item-wrap">
                <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                    <div class="item">
                        <div class="img">
                            <?php if ( has_post_thumbnail() ) { the_post_thumbnail(); } ?>
                        </div>

                        <div class="text">
                            <div class="title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></div>
                            <div class="description"><?php the_excerpt(); ?></div>
                            <div class="date"><?= get_the_date(); ?></div>
                        </div>
                    </div>
                <?php endwhile; endif; ?>
            </div>

        </section>
    </main>
<?php get_footer(); ?>