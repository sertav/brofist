<?php
$fp_com_id = get_field('fp_com_id');
$fp_com_heading = get_field('fp_com_heading');
$fp_com_text = get_field('fp_com_text');
$fp_com_add_text = get_field('fp_com_add_text');
?>
<section class="chart-wrap" id="<?= $fp_n_id; ?>">
    <div class="innerWrap">
        <div class="main-title"><?= $fp_com_heading; ?></div>
        <div class="description"><?= $fp_com_text; ?></div>

        <div class="chat-innerWrap">
            <?php $i = 0; while(has_sub_field('fp_com_items')) : $title = get_sub_field('title'); $text = get_sub_field('text'); $i++; ?>
            <?php if ($i == 1) : ?>
            <div class="item wow fadeInDown" data-wow-delay="0.1s">
                <div class="text">
                    <div class="title"><?= $title; ?></div>
                    <div class="info"><?= $text; ?></div>
                </div>
                <div class="ul">
                    <div class="li yellow"></div>
                </div>
            </div>
            <?php elseif ($i == 2) : ?>
            <div class="item wow fadeInDown" data-wow-delay="0.3s">
                <div class="text">
                    <div class="title"><?= $title; ?></div>
                    <div class="info"><?= $text; ?></div>
                </div>
                <div class="ul">
                    <div class="li yellow"></div>
                    <div class="li orange"></div>
                </div>
            </div>
            <?php elseif ($i == 3) : ?>
            <div class="item wow fadeInDown" data-wow-delay="0.5s">
                <div class="text">
                    <div class="title"><?= $title; ?></div>
                    <div class="info"><?= $text; ?></div>
                </div>
                <div class="ul">
                    <div class="li white"></div>
                    <div class="li orange"></div>
                    <div class="li yellow"></div>
                </div>
            </div>
            <?php elseif ($i == 4) : ?>
            <div class="item wow fadeInDown" data-wow-delay="0.7s">
                <div class="text">
                    <div class="title"><?= $title; ?></div>
                    <div class="info"><?= $text; ?></div>
                </div>
                <div class="ul">
                    <div class="li white"></div>
                    <div class="li yellow"></div>
                    <div class="li orange"></div>
                    <div class="li yellow"></div>
                </div>
            </div>
            <?php elseif ($i == 5) : ?>
            <div class="item wow fadeInDown" data-wow-delay="0.9s">
                <div class="text">
                    <div class="title"><?= $title; ?></div>
                    <div class="info"><?= $text; ?></div>
                </div>
                <div class="ul">
                    <div class="li yellow"></div>
                    <div class="li orange"></div>
                    <div class="li white"></div>
                    <div class="li white"></div>
                    <div class="li yellow"></div>
                </div>
            </div>
            <?php endif; endwhile; wp_reset_query(); ?>
        </div>

        <div class="bottom-text"><?= $fp_com_add_text; ?></div>
    </div>
</section>