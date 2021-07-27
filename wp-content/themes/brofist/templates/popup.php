<?php
$popup_reg_heading = get_field('popup_reg_heading', 'option');
$popup_reg_text = get_field('popup_reg_text', 'option');
$popup_form_heading = get_field('popup_form_heading', 'option');
$popup_form_text = get_field('popup_form_text', 'option');

?>

<div class="popup-wrap">
    <div class="popup signIn_popup">
        <div class="dialog">
            <div class="form-box">
                <div class="close-popup"><i class="eff03 fas fa-times"></i></div>
                <div class="form-box-wrap login_form">
                    <h3><?php pll_e('Login'); ?></h3>
                    <form id="signIn" method="post">
                        <div class="input-wrap">
                            <label for="" class="required">Email:</label>
                            <input type="text" placeholder="example@mail.com" name="email">
                        </div>

                        <div class="input-wrap">
                            <label for="" class="required"><?php pll_e('Password'); ?>:</label>
                            <input type="password" placeholder="<?php pll_e('Password'); ?>" name="password">
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
                    <a class="reset-password"><?php pll_e('Reset Password'); ?></a>
                </div>
            </div>
            <div class="close-popup"></div>
        </div>
    </div>

    <div class="popup resetPassword_popup">
        <div class="dialog">
            <div class="form-box">
                <div class="close-popup"><i class="eff03 fas fa-times"></i></div>
                <div class="form-box-wrap login_form">
                    <h3><?php pll_e('Reset Password'); ?></h3>
                    <form id="resetPassword" method="post">
                        <div class="input-wrap">
                            <label for=""><?php pll_e('Please input your mail'); ?>:</label>
                            <input type="text" placeholder="example@mail.com" name="email">
                        </div>
                        <button class="btn g-recaptcha" data-sitekey="6LdL-r8bAAAAAHn9AwffIwkm3jDMB64ZHWeyuQd4"data-callback='onSubmit'data-action='submit'><?php pll_e('Reset'); ?></button>
                    </form>
                    <div class="error-message">
                        <?php pll_e('Bro, check all inputs...'); ?>
                    </div>
                </div>
            </div>
            <div class="close-popup"></div>
        </div>
    </div>

    <div class="popup signUp_popup">
        <div class="dialog">
            <div class="form-box">
                <div class="close-popup"><i class="eff03 fas fa-times"></i></div>
                <div class="form-box-wrap login_form">
                    <h3><?php pll_e('Registration'); ?></h3>
                    <form id="signUp">
                        <div class="input-wrap">
                            <label for="" class="required">Email:</label>
                            <input type="text" placeholder="example@mail.com" name="email">
                        </div>

                        <div class="input-wrap">
                            <label for="" class="required"><?php pll_e('Password'); ?>:</label>
                            <input type="password" placeholder="<?php pll_e('Password'); ?>" name="password">
                        </div>

                        <div class="input-wrap">
                            <label for="" class="required"><?php pll_e('Confirm password'); ?>:</label>
                            <input type="password" placeholder="<?php pll_e('Confirm password'); ?>" name="password_confirmation">
                        </div>

                        <div class="input-wrap">
                            <label for="" class="required"><?php pll_e('Your website, social media account, or advertising platform'); ?></label>
                            <input type="text" placeholder="..." name="company_name">
                        </div>

                        <div class="check-wrap">
                            <div class="check">
                                <label>
                                    <input type="checkbox" checked="" name="terms_accepted" readonly onclick="return false;">
                                    <span></span>
                                    <p><?php pll_e('By checking the box, you accept the'); ?> <a href="<?= get_bloginfo('url'); ?>/terms/" target="_blank"><?php pll_e('Terms and Conditions'); ?></a></p>
                                </label>
                            </div>
                            <div class="check">
                                <label>
                                    <input type="checkbox" name="receive_newsletter">
                                    <span></span>
                                    <p><?php pll_e('I agree to receive personalized offers from BROFIST'); ?></p>
                                </label>
                            </div>
                        </div>

                        <button class="btn g-recaptcha" type="submit" data-sitekey="6LdL-r8bAAAAAHn9AwffIwkm3jDMB64ZHWeyuQd4"data-callback='onSubmit'data-action='submit'><?php pll_e('Sign Up'); ?></button>
                    </form>

                    <div class="error-message">
                        <?php pll_e('Bro, check all inputs...'); ?>
                    </div>

                </div>
            </div>
            <div class="close-popup"></div>
        </div>
    </div>

    <div class="popup info_signin_popup signup_popup">
        <div class="dialog">
            <div class="form-box">
                <div class="close-popup"><i class="eff03 fas fa-times"></i></div>
                <div class="form-box-wrap">
                    <img src="<?php bloginfo('template_url'); ?>/assets/images/img1.png" alt="">
                    <h3><span><?= $popup_reg_heading; ?></span> <?= $popup_reg_text; ?></h3>
                    <button class="btn"><?php pll_e('Got it'); ?></button>
                </div>
            </div>
            <div class="close-popup"></div>
        </div>
    </div>

    <div class="popup info_signin_popup info_reset_popup">
        <div class="dialog">
            <div class="form-box">
                <div class="close-popup"><i class="eff03 fas fa-times"></i></div>
                <div class="form-box-wrap">
                    <img src="<?php bloginfo('template_url'); ?>/assets/images/img1.png" alt="">
                    <h3><span><?= $popup_form_heading; ?></span> <?= $popup_form_text; ?></h3>
                    <button class="btn"><?php pll_e('Got it'); ?></button>
                </div>
            </div>
            <div class="close-popup"></div>
        </div>
    </div>
</div>
