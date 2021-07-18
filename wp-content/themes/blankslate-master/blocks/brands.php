<?php
$fp_b_id = get_field('fp_b_id');
$fp_b_heading = get_field('fp_b_heading');
$fp_b_items = get_field('fp_b_items');
?>
<section class="brands-wrap" id="<?= $fp_b_id; ?>">
    <div class="innerWrap">

        <div class="main-title"><?= $fp_b_heading; ?></div>
        <?php if (count($fp_b_items) < 1) : ?>
        <div class="slider owl-carousel">
            <?php foreach($fp_b_items as $item) : $fp_b_slider_logo = get_field('fp_b_slider_logo', $item); ?>
            <div class="item">
                <div class="back"></div><img src="<?= esc_url($fp_b_slider_logo['url']); ?>" alt="<?= esc_attr($fp_b_slider_logo['alt']); ?>">
            </div>
            <?php endforeach; wp_reset_query(); ?>
        </div>
        <?php endif; ?>

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
                <span><?php pll_e('Website link'); ?></span>
                <a class="website-link" href="http://<?= $fp_b_site; ?>" target="_blank" rel="nofollow"><?= $fp_b_site; ?></a>
            </div>

            <div class="item markets">
                <span><?php pll_e('Markets'); ?></span>
                <div class="img-wrap">
                    <?php
                    $cities = get_the_terms( $item->ID, 'brands-city' );
                    foreach($cities as $city) :
                        $city_flag = get_field('city_flag', $city);
                    if ($city) :
                    ?>
                    <img src="<?= esc_url($city_flag['url']); ?>" alt="<?= esc_attr($city_flag['alt']); ?>">
                    <?php endif; endforeach; wp_reset_query(); ?>
                </div>
            </div>

            <div class="item text-center">
                <span><?php pll_e('Payment Options'); ?></span>
                <?php $payments = get_the_terms( $item->ID, 'brands-payments' ); ?>
                <p><?php if($payments) echo count($payments); ?></p>
            </div>

            <div class="item text-center">
                <span><?php pll_e('License'); ?></span>
                <?php $license = get_the_terms( $item->ID, 'brands-license' ); ?>
                <p><?php if($license) echo $license[0]->name; ?></p>
            </div>
        </div>

        <div class="brand-info mobile">
            <div class="item markets">
                <span><?php pll_e('Markets'); ?></span>
                <div class="img-wrap">
                    <?php
                    foreach($cities as $city) :
                        $city_flag = get_field('city_flag', $city);
                    if (isset($cities)) :
                    ?>
                        <img src="<?= esc_url($city_flag['url']); ?>" alt="<?= esc_attr($city_flag['alt']); ?>">
                    <?php endif; endforeach; wp_reset_query(); ?>
                </div>
            </div>
        </div>


        <div class="mac_iphone-text">
            <div class="mac_iphone">
                <div class="mac_iphone-wrap">

                    <div class="mac">
                        <img class="main-img" src="<?php bloginfo('template_url'); ?>/assets/images/mac.png" alt="">
                        <div class="mac-background" style="background: <?= $fp_b_pc_bg; ?>;">
                            <div class="logo"><img src="<?= $fp_b_pc_logo['url']; ?>" alt="<?= esc_attr($fp_b_pc_logo['alt']); ?>"></div>
                        </div>
                    </div>

                    <div class="iphone">
                        <img class="main-img" src="<?php bloginfo('template_url'); ?>/assets/images/iphone.png" alt="">
                        <div class="iphone-background" style="background: <?= $fp_b_iphone_bg; ?>;">
                            <div class="logo"><img src="<?= $fp_b_iphone_logo['url']; ?>" alt="<?= esc_attr($fp_b_iphone_logo['alt']); ?>"></div>
                        </div>
                    </div>
                </div>
                <button class="btn"><?php pll_e('Start Promoting'); ?> <?= $item->post_title; ?></button>
            </div>

            <div class="text">
                <h2><?= $item->post_title; ?> <?php pll_e('Casino'); ?></h2>

                <?php if ($fp_b_revenue) : ?>
                <div class="title-1"><?php pll_e('Revenue share'); ?></div>

                <div class="description">
                    <p><?= $fp_b_revenue; ?></p>
                </div>
                <a class="show_more"><?php pll_e('More'); ?></a>
                <?php endif; ?>

                <div class="text-info">
                    <div class="info">
                        <div class="title-2"><?php pll_e('Payments'); ?></div>
                        <p>
                            <?php
                            if ($payments) {
                                $last_payment = array_pop($payments);
                                foreach ($payments as $payment) :
                                    echo $payment->name . ', ';
                                endforeach;
                                echo $last_payment->name;
                            }
                            ?>
                        </p>
                    </div>
                    <div class="info">
                        <div class="title-2"><?php pll_e('Languages'); ?></div>
                        <p>
                            <?php
                            $languages = get_the_terms($item->ID, 'brands-languages');
                            $last_language = array_pop($languages);
                            if ($languages) {
                                foreach ($languages as $language) :
                                    echo $language->name . ', ';
                                endforeach;
                                echo $last_language->name;
                            }
                            ?>
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <?php endforeach; ?>
    </div>
</section>
