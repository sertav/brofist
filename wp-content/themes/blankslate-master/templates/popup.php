<div class="popup-wrap">
    <div class="popup signIn_popup">
        <div class="dialog">
            <div class="form-box">
                <div class="close-popup"><i class="eff03 fas fa-times"></i></div>
                <div class="form-box-wrap login_form">
                    <h3>Login</h3>
                    <?  var_dump($_SESSION["api_errors"]);  ?>
                    <form action="<?= get_bloginfo('template_directory'); ?>/api/sign_in.php" method="post">
                        <div class="input-wrap">
                            <label for="" class="required">Email:</label>
                            <input type="text" class="error" placeholder="example@mail.com">
                        </div>

                        <div class="input-wrap">
                            <label for="" class="required">Password:</label>
                            <input type="password" placeholder="password">
                        </div>

                        <div class="input-wrap">
                            <label for="">2FA Code</label>
                            <input type="text" placeholder="2FA Code">
                        </div>
                        <button class="btn">Login</button>
                    </form>

                    <div class="error-message">
                        Bro, check all inputs...
                    </div>
                    <a class="reset-password">Reset Password</a>
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
                    <h3>REGISTRATION</h3>
                    <form id="signUp">
                        <div class="input-wrap">
                            <label for="">Name</label>
                            <input type="text" placeholder="Your Name" name="full_name">
                        </div>

                        <div class="input-wrap">
                            <label for="" class="required">Email:</label>
                            <input type="text" class="error" placeholder="example@mail.com" name="email">
                        </div>

                        <div class="input-wrap">
                            <label for="" class="required">Password:</label>
                            <input type="password" placeholder="password" name="password">
                        </div>

                        <div class="input-wrap">
                            <label for="" class="required">Confirm password:</label>
                            <input type="password" placeholder="Confirm password" name="password_confirmation">
                        </div>

                        <div class="input-wrap">
                            <label for="" class="required">Company</label>
                            <input type="text" placeholder="..." name="company_name">
                        </div>
                        <div class="input-wrap">
                            <label for="" >Skype</label>
                            <input type="text" placeholder="@example" name="skype">
                        </div>
                        <div class="input-wrap">
                            <label for="">Telegram</label>
                            <input type="text" placeholder="@example" name="telegram">
                        </div>

                        <div class="check-wrap">
                            <div class="check">
                                <label>
                                    <input type="checkbox" checked="" name="terms_accepted">
                                    <span></span>
                                    <p>By checking the box, you accept the <a href="">Terms and Conditions</a></p>
                                </label>
                            </div>
                            <div class="check">
                                <label>
                                    <input type="checkbox" name="receive_newsletter">
                                    <span></span>
                                    <p>I agree to receive personalized offers from BROFIST</p>
                                </label>
                            </div>
                        </div>

                        <button class="btn" type="submit">Sign Up</button>
                    </form>

                    <div class="error-message">
                        Bro, check all inputs...
                    </div>

                </div>
            </div>
            <div class="close-popup"></div>
        </div>
    </div>

    <div class="popup info_signin_popup">
        <div class="dialog">
            <div class="form-box">
                <div class="close-popup"><i class="eff03 fas fa-times"></i></div>
                <div class="form-box-wrap">
                    <img src="<?php bloginfo('template_url'); ?>/assets/images/img1.png" alt="">
                    <h3><span>Thanks for signing up, bro!</span> We'll get back to you soon</h3>
                    <button class="btn">GOT IT</button>
                </div>
            </div>
            <div class="close-popup"></div>
        </div>
    </div>
</div>



