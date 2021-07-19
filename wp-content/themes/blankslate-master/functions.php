<?php
add_action('after_setup_theme', 'brofist_setup');
function brofist_setup()
{
    load_theme_textdomain('brofist', get_template_directory() . '/languages');
    add_theme_support('title-tag');
    add_theme_support('automatic-feed-links');
    add_theme_support('post-thumbnails');
    register_nav_menus(array('header-menu' => esc_html__('Header Menu', 'brofist')));
    register_nav_menus(array('footer-menu' => esc_html__('Footer Menu', 'brofist')));
}

include 'include/post-types.php';

function brofist_load_scripts()
{
    wp_register_style('owl-carousel', get_stylesheet_directory_uri() . '/assets/css/css/owl.carousel.min.css', array(),
        null, false);
    wp_register_style('owl-theme', get_stylesheet_directory_uri() . '/assets/css/css/owl.theme.default.min.css',
        array(), null);
    wp_register_style('main', get_stylesheet_directory_uri() . '/assets/css/css/main.css', array(), null);
    wp_register_style('animate', get_stylesheet_directory_uri() . '/assets/css/css/animate.css', array(), null);
    wp_register_style('fonts', get_stylesheet_directory_uri() . '/assets/fonts/fonts.css', array(), null);

    // wp_deregister_script('jquery');
    wp_register_script('jquery-js', get_stylesheet_directory_uri() . '/assets/js/jquery.js', array(), null, true);
    wp_register_script('swiper', get_stylesheet_directory_uri() . '/assets/js/swiper.js', array(), null, true);
    wp_register_script('owl-carousel', get_stylesheet_directory_uri() . '/assets/js/owl.carousel.min.js', array(), null,
        true);
    wp_register_script('TweenMax', get_stylesheet_directory_uri() . '/assets/js/TweenMax.min.js', array(), null, true);
    wp_register_script('wow', get_stylesheet_directory_uri() . '/assets/js/wow.js', array(), null, true);
    wp_register_script('main', get_stylesheet_directory_uri() . '/assets/js/main.js', array(), null, true);

    if (is_front_page()) {
        wp_enqueue_style('owl-carousel');
        wp_enqueue_style('owl-carousel');
        wp_enqueue_style('owl-theme');
        wp_enqueue_style('main');
        wp_enqueue_style('animate');
        wp_enqueue_style('fonts');

        wp_enqueue_script('jquery-js');
        wp_enqueue_script('swiper');
        wp_enqueue_script('owl-carousel');
        wp_enqueue_script('TweenMax');
        wp_enqueue_script('wow');
        wp_enqueue_script('main');
    } else {
        wp_enqueue_style('main');
        wp_enqueue_style('fonts');

        wp_enqueue_script('jquery-js');
        wp_enqueue_script('main');
    }


}

add_action('wp_enqueue_scripts', 'brofist_load_scripts');


add_filter('document_title_separator', 'brofist_document_title_separator');
function brofist_document_title_separator($sep)
{
    $sep = '|';
    return $sep;
}


add_filter('intermediate_image_sizes_advanced', 'brofist_image_insert_override');
function brofist_image_insert_override($sizes)
{
    unset($sizes['medium_large']);
    return $sizes;
}


function wpse_setup_theme()
{
    add_theme_support('post-thumbnails');
    add_image_size('reviews', 190);
    add_image_size('logo-iphone', 133, 238, array('center', 'top'));
}

add_action('after_setup_theme', 'wpse_setup_theme');


add_action('wp_head', 'brofist_pingback_header');
function brofist_pingback_header()
{
    if (is_singular() && pings_open()) {
        printf('<link rel="pingback" href="%s" />' . "\n", esc_url(get_bloginfo('pingback_url')));
    }
    echo '<style>.logged-in.admin-bar header.bg-shap { top: 32px; }</style>';
}


if (function_exists('acf_add_options_page')) {
    acf_add_options_page(array(
        'page_title' => 'Theme General Settings',
        'menu_title' => 'Theme Settings',
        'menu_slug' => 'theme-general-settings',
        'capability' => 'edit_posts',
        'redirect' => true
    ));

    acf_add_options_sub_page(array(
        'page_title' => 'Theme Header Settings',
        'menu_title' => 'Header',
        'parent_slug' => 'theme-general-settings',
    ));

    acf_add_options_sub_page(array(
        'page_title' => 'Theme Footer Settings',
        'menu_title' => 'Footer',
        'parent_slug' => 'theme-general-settings',
    ));

    acf_add_options_sub_page(array(
        'page_title' => 'Theme Blocks and Popup Settings',
        'menu_title' => 'Blocks',
        'parent_slug' => 'theme-general-settings',
    ));
}


add_filter('wpcf7_form_elements', function ($content) {
    $content = preg_replace('/<(span).*?class="\s*(?:.*\s)?wpcf7-form-control-wrap(?:\s[^"]+)?\s*"[^\>]*>(.*)<\/\1>/i',
        '\2', $content);
    $content = str_replace('<br />', '', $content);
    return $content;
});

add_filter('wpcf7_form_elements', function ($content) {
    $content = preg_replace('/<(span).*?class="\s*(?:.*\s)?wpcf7-list-item(?:\s[^"]+)?\s*"[^\>]*>(.*)<\/\1>/i', '\2',
        $content);
    return $content;
});


pll_register_string('Sign In', 'Sign In');
pll_register_string('Login', 'Login');
pll_register_string('Password', 'Password');
pll_register_string('2FA Code', '2FA Code');
pll_register_string('Reset Password', 'Reset Password');
pll_register_string('Please input your mail', 'Please input your mail');
pll_register_string('Reset', 'Reset');
pll_register_string('Sign Up', 'Sign Up');
pll_register_string('Registration', 'Registration');
pll_register_string('Name', 'Name');
pll_register_string('Your Name', 'Your Name');
pll_register_string('Phone', 'Phone');
pll_register_string('Your phone', 'Your phone');
pll_register_string('Address', 'Address');
pll_register_string('Your address', 'Your address');
pll_register_string('Confirm password', 'Confirm password');
pll_register_string('Company', 'Company');
pll_register_string('Company name', 'Company name');
pll_register_string('By checking the box, you accept the', 'By checking the box, you accept the');
pll_register_string('Terms and Conditions', 'Terms and Conditions');
pll_register_string('I agree to receive personalized offers from BROFIST', 'I agree to receive personalized offers from BROFIST');
pll_register_string('Become a Bro', 'Become a Bro');
pll_register_string('Website link', 'Website link');
pll_register_string('Markets', 'Markets');
pll_register_string('Payment Options', 'Payment Options');
pll_register_string('License', 'License');
pll_register_string('Revenue share', 'Revenue share');
pll_register_string('Payments', 'Payments');
pll_register_string('Languages', 'Languages');
pll_register_string('Start Promoting', 'Start Promoting');
pll_register_string('Bro, check all inputs...', 'Bro, check all inputs...');
pll_register_string("What's", "What's");
pll_register_string("new", "new");
pll_register_string('Main', 'Main');
pll_register_string('News', 'News');
pll_register_string('More', 'More');
pll_register_string('Less', 'Less');
pll_register_string('Casino', 'Casino');
pll_register_string('Got it', 'Got it');


function more_less()
{ ?>
    <script>
        $(".brands-wrap .show_more").on("click", function () {
            $(this).parent().find(".description").toggleClass("open");

            if ($(".brands-wrap .description").hasClass("open")) {
                $(this).html("<?php pll_e('Less'); ?>");
                $(".brands-wrap .show_more").addClass("open");
            } else {
                $(this).html("<?php pll_e('More'); ?>");
                $(".brands-wrap .show_more").removeClass("open");
            }
        });
    </script>
    <?php
}
add_action('wp_footer', 'more_less', 100);


add_option('undeleteable_page_id', '427', '', 'no');
add_action('deleted_post', 'prevent_undeleteable_page_deletion');
add_action('trashed_post', 'prevent_undeleteable_page_trash');
