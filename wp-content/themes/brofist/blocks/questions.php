<?php
    $fp_q_id = get_field('fp_q_id');
    $fp_q_heading = get_field('fp_q_heading');
    $fp_q_sub_heading = get_field('fp_q_sub_heading');
?>
<section class="help_center-wrap" id="<?= $fp_q_id; ?>">
    <div class="innerWrap">
        <div class="main-title"><?= $fp_q_heading; ?></div>
        <div class="description"><?= $fp_q_sub_heading; ?></div>
        <div class="faq-fixImg">
            <div class="faq">
                <ul class="faq_list">
                    <?php while(has_sub_field('fp_q_repeater')) : $title = get_sub_field('title'); ?>
                    <li>
                        <div class="title"><?= $title; ?></div>
                        <div class="description-faq">

                            <?php while(has_sub_field('items')) : $question = get_sub_field('question'); $answer = get_sub_field('answer'); ?>
                            <div class="description-faq-item">
                                <div class="title-desc"><?= $question; ?></div>
                                <div class="desc-desc">
                                    <p><?= $answer; ?></p>
                                </div>
                            </div>
                            <?php endwhile; wp_reset_query(); ?>
                        </div>
                    </li>
                    <?php endwhile; ?>
                </ul>
            </div>
            <div class="fixImg">
                <div class="img">
                    <img src="<?php bloginfo('template_url'); ?>/assets/images/img24.png" alt="">
                </div>
            </div>
        </div>
    </div>
</section>