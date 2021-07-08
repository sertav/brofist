<?php
$fp_benefits_id = get_field('fp_benefits_id');
$fp_benefits_heading = get_field('fp_benefits_heading');
$fp_benefits_text = get_field('fp_benefits_text');
$fp_benefits_text_2 = get_field('fp_benefits_text_2');
?>
<section class="welcome-text" id="<?= $fp_benefits_id; ?>">
    <div class="innerWrap">
        <div class="left">
            <div class="title"><?= $fp_benefits_heading; ?></div>
            <div class="description">
                <?= $fp_benefits_text; ?>
            </div>

            <div class="description mobile">
                <?= $fp_benefits_text_2; ?>
            </div>
            <button class="btn">Become a Bro</button>
            <div class="arrow"><img src="<?php bloginfo('template_url'); ?>/assets/images/img4.png" alt=""></div>
        </div>

        <div class="right">
            <div class="img1 work__item">
                <div class="work__item-img-outer"><img src="<?php bloginfo('template_url'); ?>/assets/images/img1.png" alt=""></div>
            </div>
            <div class="img2"><img src="<?php bloginfo('template_url'); ?>/assets/images/img2.png" alt=""></div>
            <div class="description">
                <?= $fp_benefits_text_2; ?>
            </div>
        </div>
        <div class="scroll-img">
            <img src="<?php bloginfo('template_url'); ?>/assets/images/img6.png" alt="">
        </div>
    </div>
</section>