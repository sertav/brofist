<?php
    $fp_e_id = get_field('fp_e_id');
    $fp_e_heading = get_field('fp_e_heading');
    $fp_e_sub_heading = get_field('fp_e_sub_heading');
?>
<section class="hangOut-wrap" id="<?= $fp_e_id; ?>">
    <div class="innerWrap">
        <div class="main-title"><?= $fp_e_heading; ?></div>
        <div class="description"><?= $fp_e_heading; ?></div>

        <div class="slider owl-carousel">

            <?php while(has_sub_field('fp_e_events')) :
                $color = get_sub_field('color');
                $title = get_sub_field('title');
                $description = get_sub_field('description');
                $text_1 = get_sub_field('text_1');
                $text_2 = get_sub_field('text_2');
                $date = get_sub_field('date');
            ?>
            <div class="item <?= $color['value']; ?>">
                <div class="text">
                    <div class="title"><?= $title; ?></div>
                    <div class="description-item"><?= $description; ?></div>
                    <div class="text1"><?= $text_1; ?></div>
                    <div class="text2"><?= $text_2; ?></div>
                    <div class="date"><?= $date; ?></div>
                </div>

                <div class="img">
                    <img src="<?php bloginfo('template_url'); ?>/assets/images/img23.png" alt="">
                </div>
                <div class="background"></div>
            </div>
            <?php endwhile; ?>

        </div>
    </div>
</section>