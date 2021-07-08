<?php get_header(); ?>
    <main>
        <section class="new-wrap">
            <div class="innerWrap">
                <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                <div class="new-inner">
                    <div class="title"><?php the_title(); ?></div>
                    <div class="date"><?php the_date(); ?></div>
                    <div class="breadcrumb">
                        <ul>
                            <li><a href="">Main</a></li>
                            <li><a href="">News</a></li>
                            <li><a href="">New one</a></li>
                        </ul>
                    </div>

                    <div class="info">
                        <div class="img">
                            <?php if ( has_post_thumbnail() ) { the_post_thumbnail(); } ?>
                        </div>

                        <div class="description">
                            <?php the_content(); ?>
                        </div>
                    </div>
                </div>
            </div>
            <?php endwhile; endif; ?>
        </section>
    </main>
<?php get_footer(); ?>