<?php
    $fp_p_id = get_field('fp_p_id');
    $fp_p_heading = get_field('fp_p_heading');
?>
<section class="our-partners" id="<?= $fp_p_id; ?>">
    <div class="innerWrap">
        <div class="main-title"><?= $fp_p_heading; ?></div>
        <div class="slider owl-carousel">
            <?php while(has_sub_field('fp_p_partners')) : $image = get_sub_field('image'); $link = get_sub_field('link'); ?>
            <div class="item">
                <?php if($link) : ?>
                <a href="<?= $link; ?>" target="_blank"><img src="<?= esc_url($image['url']); ?>" alt="<?= esc_attr($image['alt']); ?>"></a>
                <?php else : ?>
                <img src="<?= esc_url($image['url']); ?>" alt="<?= esc_attr($image['alt']); ?>">
                <?php endif; ?>
            </div>
            <?php endwhile; ?>
        </div>

        <div class="slider mobile owl-carousel">
            <div class="innerItem">
                <div class="item">
                    <?php if($link) : ?>
                        <a href="<?= $link; ?>" target="_blank"><img src="<?= esc_url($image['url']); ?>" alt="<?= esc_attr($image['alt']); ?>"></a>
                    <?php else : ?>
                        <img src="<?= esc_url($image['url']); ?>" alt="<?= esc_attr($image['alt']); ?>">
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
</section>