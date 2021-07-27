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




<!--<form action="https://brofist.partners/wp-content/themes/brofist/blocks/mail.php" method="POST">-->
<!--    <p>Name</p> <input type="text" name="name">-->
<!--    <p>Email</p> <input type="text" name="email">-->
<!--    <p>Phone</p> <input type="text" name="phone">-->
<!---->
<!--    <p>Request Phone Call:</p>-->
<!--    Yes:<input type="checkbox" value="Yes" name="call"><br />-->
<!--    No:<input type="checkbox" value="No" name="call"><br />-->
<!---->
<!--    <p>Website</p> <input type="text" name="website">-->
<!---->
<!--    <p>Priority</p>-->
<!--    <select name="priority" size="1">-->
<!--        <option value="Low">Low</option>-->
<!--        <option value="Normal">Normal</option>-->
<!--        <option value="High">High</option>-->
<!--        <option value="Emergency">Emergency</option>-->
<!--    </select>-->
<!--    <br />-->
<!---->
<!--    <p>Type</p>-->
<!--    <select name="type" size="1">-->
<!--        <option value="update">Website Update</option>-->
<!--        <option value="change">Information Change</option>-->
<!--        <option value="addition">Information Addition</option>-->
<!--        <option value="new">New Products</option>-->
<!--    </select>-->
<!--    <br />-->
<!---->
<!--    <p>Message</p><textarea name="message" rows="6" cols="25"></textarea><br />-->
<!--    <input type="submit" value="Send"><input type="reset" value="Clear">-->
<!--</form>-->