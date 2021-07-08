<?php
$fp_j_id = get_field('fp_j_id');
$fp_j_heading = get_field('fp_j_heading');
?>

<section class="offer-wrap" id="<?= fp_j_id; ?>">
    <div class="innerWrap">
        <div class="main-title">
            <?= $fp_j_heading; ?>
        </div>
        <div class="item-wrap owl-carousel">
            <?php while(has_sub_field('fp_j_items')) : $image = get_sub_field('image'); $title = get_sub_field('title'); $text = get_sub_field('text'); $button = get_sub_field('button'); ?>
            <div class="item wow bounceInUp">
                <div class="img"><img src="<?= esc_url($image['url']); ?>" alt="<?= esc_attr($image['alt']); ?>"></div>
                <div class="title"><?= fp_j_id; ?></div>
                <div class="description">
                    <p><?= fp_j_id; ?></p>
                </div>
                <?php if ($button) : ?>
                <button class="btn">Become a Bro</button>
                <?php endif; ?>
            </div>
            <?php endwhile; wp_reset_query(); ?>
        </div>
    </div>
</section>