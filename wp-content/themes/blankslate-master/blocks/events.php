<?php
    $fp_e_id = get_field('fp_e_id');
    $fp_e_heading = get_field('fp_e_heading');
    $fp_e_sub_heading = get_field('fp_e_sub_heading');
    $fp_e_events = get_field('fp_e_events');
?>
<section class="hangOut-wrap" id="<?= $fp_e_id; ?>">
    <div class="innerWrap">
        <div class="main-title"><?= $fp_e_heading; ?></div>
        <div class="description"><?= $fp_e_sub_heading; ?></div>

        <div class="slider owl-carousel">
            <?php
            foreach( $fp_e_events as $event ):
                setup_postdata($event);

                $title = get_the_title( $event->ID );
                $description = get_the_content( $event->ID );
                $fp_e_color = get_field('fp_e_color', $event->ID);
                $fp_e_name = get_field('fp_e_name', $event->ID);
                $fp_e_text = get_field('fp_e_text', $event->ID);
                $fp_e_date = get_field('fp_e_date', $event->ID);

                $image = wp_get_attachment_image_src( get_post_thumbnail_id( $event->ID ), '' );
            ?>
            <div class="item <?= $fp_e_color['value']; ?>">
                <div class="text">
                    <div class="title"><?= $title; ?></div>
                    <div class="description-item"><?= $description; ?></div>
                    <div class="text1"><?= $fp_e_name; ?></div>
                    <div class="text2"><?= $fp_e_text; ?></div>
                    <div class="date"><?= $fp_e_date; ?></div>
                </div>

                <div class="img">
                    <img src="<?= $image[0]; ?>" alt="">
                </div>
                <div class="background"></div>
            </div>
            <?php endforeach;  wp_reset_postdata(); wp_reset_query(); ?>

        </div>
    </div>
</section>