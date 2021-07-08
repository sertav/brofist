<?php
$fp_r_id = get_field('fp_r_id');
$fp_r_heading = get_field('fp_r_heading');
$fp_r_reviews = get_field('fp_r_reviews');
?>
<section class="reviews-wrap" id="<?= $fp_r_id; ?>">
    <div class="innerWrap">
        <div class="main-title">
            <?= $fp_r_heading; ?>
        </div>

        <div class="slider owl-carousel">
            <?php
            foreach( $fp_r_reviews as $review ):
            setup_postdata($review);

            $title = get_the_title( $review->ID );
            $description = get_the_content( $review->ID );
            $fp_r_rate = get_field('fp_r_rate', $review->ID);
            $fp_r_date = get_field('fp_r_date', $review->ID);

            $image = wp_get_attachment_image_src( get_post_thumbnail_id( $review->ID ), 'reviews' );
            ?>
            <div class="item">
                <div class="top">
                    <div class="img"><img src="<?= $image[0]; ?>" alt=""></div>
                    <div class="description">
                        <?= $description; ?>
                    </div>
                </div>
                <div class="date-reting">
                    <div class="date"><?= $fp_r_date; ?></div>
                    <div class="reting">
                        <?= str_repeat('<i class="fas fa-star"></i>', $fp_r_rate); ?>
                    </div>
                </div>
            </div>
            <?php endforeach;  wp_reset_postdata(); wp_reset_query(); ?>
        </div>
    </div>
</section>