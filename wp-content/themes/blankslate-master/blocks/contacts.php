<?php
    $fp_c_id = get_field('fp_c_id');
    $fp_c_title = get_field('fp_c_title');
    $fp_c_cf = get_field('fp_c_cf');
?>
<section class="form-wrap" id="<?= $fp_c_id; ?>">
    <div class="innerWrap">
        <div class="main-title">
            <?= $fp_c_title; ?>
        </div>
        <div class="form-innerWrap">
            <div class="left">
                <div class="form">
                    <?= do_shortcode('[cf7form cf7key="'. $fp_c_cf->post_name .'"]'); ?>
                </div>
            </div>
            <div class="right">
                <div class="img1 work__item">
                    <div class="work__item-img-outer"
                         style="transform-origin: center center 0px; transform: matrix3d(0.985715, 0, 0.16842, 0, 0.00918134, 0.998513, -0.0537358, 0, -0.16817, 0.0545145, 0.98425, 0, -50.4509, 16.3544, -4.72514, 1);">
                        <img src="<?php bloginfo('template_url'); ?>/assets/images/img1.png" alt=""></div>
                </div>
                <div class="img2"><img src="<?php bloginfo('template_url'); ?>/assets/images/img2.png" alt=""></div>
            </div>
        </div>
    </div>
</section>
