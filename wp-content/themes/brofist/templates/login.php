<?php
/* Template Name: Login */

wp_head();
?>
<br><br><br><br><br><br>
<form id="signInLog" method="post">
    <div class="input-wrap">
        <label for="" class="required">Email:</label>
        <input id="txt_email" type="text" placeholder="example@mail.com" name="email">
    </div>

    <div class="input-wrap">
        <label for="" class="required"><?php pll_e('Password'); ?>:</label>
        <input id="txt_pwd" type="password" placeholder="<?php pll_e('Password'); ?>" name="password">
    </div>

    <div class="input-wrap">
        <label for=""><?php pll_e('2FA Code'); ?></label>
        <input type="text" placeholder="<?php pll_e('2FA Code'); ?>" id="otp_attempt" name="otp_attempt">
    </div>
    <button class="btn"><?php pll_e('Login'); ?></button>
</form>

<div class="error-message">
    <?php pll_e('Bro, check all inputs...'); ?>
</div>



<?php wp_footer(); ?>
