<?php
$fp_b_id = get_field('fp_b_id');
$fp_b_heading = get_field('fp_b_heading');
$fp_b_items = get_field('fp_b_items');
?>
<section class="brands-wrap" id="<?= $fp_b_id; ?>">
    <div class="innerWrap">
        <div class="main-title"><?= $fp_b_heading; ?></div>
        <div class="slider owl-carousel">
            <?php foreach($fp_b_items as $item) : $fp_b_slider_logo = get_field('fp_b_slider_logo', $item); ?>
            <div class="item">
                <div class="back"></div><img src="<?= esc_url($fp_b_slider_logo['url']); ?>" alt="<?= esc_attr($fp_b_slider_logo['alt']); ?>">
            </div>
            <?php endforeach; ?>
        </div>

        <?php foreach($fp_b_items as $item) :
        $fp_b_site = get_field('fp_b_site', $item);
        $fp_b_revenue = get_field('fp_b_revenue', $item);
        $fp_b_pc_logo = get_field('fp_b_pc_logo', $item);
        $fp_b_pc_bg = get_field('fp_b_pc_bg', $item);
        $fp_b_iphone_logo = get_field('fp_b_iphone_logo', $item);
        $fp_b_iphone_bg = get_field('fp_b_iphone_bg', $item);
        ?>
        <div class="brand-info">
            <div class="item">
                <span>Website link</span>
                <a class="website-link" href=""><?= $fp_b_site; ?></a>
            </div>

            <div class="item markets">
                <span>Markets</span>
                <div class="img-wrap">
                    <img src="<?php bloginfo('template_url'); ?>/assets/images/image864.png" alt="">
                    <img src="<?php bloginfo('template_url'); ?>/assets/images/image865.png" alt="">
                    <img src="<?php bloginfo('template_url'); ?>/assets/images/image866.png" alt="">
                    <img src="<?php bloginfo('template_url'); ?>/assets/images/image864.png" alt="">
                    <img src="<?php bloginfo('template_url'); ?>/assets/images/image865.png" alt="">
                    <img src="<?php bloginfo('template_url'); ?>/assets/images/image866.png" alt="">
                    <img src="<?php bloginfo('template_url'); ?>/assets/images/image869.png" alt="">
                    <img src="<?php bloginfo('template_url'); ?>/assets/images/image865.png" alt="">
                </div>
            </div>

            <div class="item text-center">
                <span>Payment Options</span>
                <p>19</p>
            </div>

            <div class="item text-center">
                <span>License</span>
                <p>Malta</p>
            </div>
        </div>

        <div class="brand-info mobile">
            <div class="item markets">
                <span>Markets</span>
                <div class="img-wrap">
                    <img src="<?php bloginfo('template_url'); ?>/assets/images/image864.png" alt="">
                    <img src="<?php bloginfo('template_url'); ?>/assets/images/image865.png" alt="">
                    <img src="<?php bloginfo('template_url'); ?>/assets/images/image866.png" alt="">
                    <img src="<?php bloginfo('template_url'); ?>/assets/images/image864.png" alt="">
                    <img src="<?php bloginfo('template_url'); ?>/assets/images/image865.png" alt="">
                    <img src="<?php bloginfo('template_url'); ?>/assets/images/image866.png" alt="">
                    <img src="<?php bloginfo('template_url'); ?>/assets/images/image869.png" alt="">
                    <img src="<?php bloginfo('template_url'); ?>/assets/images/image865.png" alt="">
                </div>
            </div>
        </div>


        <div class="mac_iphone-text">
            <div class="mac_iphone">
                <div class="mac_iphone-wrap">

                    <div class="mac">
                        <img class="main-img" src="<?php bloginfo('template_url'); ?>/assets/images/mac.png" alt="">
                        <div class="mac-background" style="background: #ffffff;">
                            <div class="logo"><img src="<?php bloginfo('template_url'); ?>/assets/images/img7.png" alt=""></div>
                        </div>
                    </div>

                    <div class="iphone">
                        <img class="main-img" src="<?php bloginfo('template_url'); ?>/assets/images/iphone.png" alt="">
                        <div class="iphone-background" style="background: #ffffff;">
                            <div class="logo"><img src="<?php bloginfo('template_url'); ?>/assets/images/img7.png" alt=""></div>
                        </div>
                    </div>
                </div>
                <button class="btn">Start Promoting Evospin</button>
            </div>

            <div class="text">
                <h2>Evospin Casino</h2>

                <div class="title-1">Revenue share</div>

                <div class="description">
                    <p>Your percentage depends on last mont's FTD</p>
                    <p>FTD 0 = 25% from NGR</p>
                    <p>FTD 1-5 = 30% from NGR</p>
                    <p>FTD 6-10 = 35% from NGR</p>
                    <p>FTD 11-20 = 40% from NGR</p>
                    <p>Your percentage depends on last mont's FTD</p>
                    <p>FTD 0 = 25% from NGR</p>
                    <p>FTD 1-5 = 30% from NGR</p>
                    <p>FTD 6-10 = 35% from NGR</p>
                    <p>FTD 11-20 = 40% from NGR</p>
                </div>
                <a class="show_more">More</a>

                <div class="text-info">
                    <div class="info">
                        <div class="title-2">Payments</div>
                        <p>Skrill, Neteller, Visa, Mastercard, Trustly, Zimpler, Klarna, Paysafecard, iDebit,
                            Instadebit,
                            Neosurf, EcoPayz, Rapid, Zotopay Cards, Iwallet, Astropay, iDEAL, Interac,Bank
                            Transfer</p>
                    </div>
                    <div class="info">
                        <div class="title-2">Languages</div>
                        <p>English, Russian, German, Finnish, French, Norwegian, Polish, Filipino, Hindi,
                            Spanish, Italian,
                            Japanese, Portuguese, Bulgarian, Greek, Hungarian, Croatian, Arabic, Korean, Chinese
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <?php endforeach; ?>
    </div>
</section>