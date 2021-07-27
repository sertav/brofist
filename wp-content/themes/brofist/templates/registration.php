<?php
/* Template Name: Registration */
get_header();
?>

    <style>
        .popup {
            background: rgb(0 4 26);
            display: block;
            position: initial;
        }
    </style>

    <div class="popup-wrap">
        <div class="popup signUp_popup">
            <div class="dialog">
                <div class="form-box">
                    <div class="close-popup"><i class="eff03 fas fa-times"></i></div>
                    <div class="form-box-wrap login_form">
                        <h3><?php pll_e('Registration'); ?></h3>
                        <form id="signUpReg">
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
                                <input type="password" placeholder="<?php pll_e('Confirm password'); ?>"
                                       name="password_confirmation">
                            </div>

                            <div class="input-wrap">
                                <label for=""
                                       class="required"><?php pll_e('Your website, social media account, or advertising platform'); ?></label>
                                <input type="text" placeholder="..." name="company_name">
                            </div>

                            <div class="check-wrap">
                                <div class="check">
                                    <label>
                                        <input type="checkbox" checked="" name="terms_accepted" readonly
                                               onclick="return false;">
                                        <span></span>
                                        <p><?php pll_e('By checking the box, you accept the'); ?> <a
                                                    href="<?= get_bloginfo('url'); ?>/terms/"
                                                    target="_blank"><?php pll_e('Terms and Conditions'); ?></a></p>
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

                            <button class="btn g-recaptcha" type="submit"
                                    data-sitekey="6LeqXbcbAAAAAFqS4QuEagQSD8pNEWDG2Thw5Goc" data-callback='onSubmit'
                                    data-action='submit'><?php pll_e('Sign Up'); ?></button>
                        </form>

                        <div class="error-message">
                            <?php pll_e('Bro, check all inputs...'); ?>
                        </div>

                    </div>
                </div>
                <div class="close-popup"></div>
            </div>
        </div>
    </div>

<?php get_footer();
