<?php get_header(); ?>

<main>
    <?php
    $fp_b_show = get_field('fp_b_show');
    $fp_j_show = get_field('fp_j_show');
    $fp_com_show = get_field('fp_com_show');
    $fp_n_show = get_field('fp_n_show');
    $fp_r_show = get_field('fp_r_show');
    $fp_e_show = get_field('fp_e_show');
    $fp_q_show = get_field('fp_q_show');
    $fp_p_show = get_field('fp_p_show');
    $fp_c_show = get_field('fp_c_show');

    if ($fp_b_show == true) {
        include 'blocks/brands.php';
    }
    if ($fp_j_show == true) {
        include 'blocks/jobs.php';
    }
    if ($fp_com_show == true) {
        include 'blocks/commissions.php';
    }
    if ($fp_n_show == true) {
        include 'blocks/news.php';
    }
    if ($fp_r_show == true) {
        include 'blocks/reviews.php';
    }
    if ($fp_e_show == true) {
        include 'blocks/events.php';
    }
    if ($fp_q_show == true) {
        include 'blocks/questions.php';
    }
    if ($fp_p_show == true) {
        include 'blocks/partners.php';
    }
    if ($fp_c_show == true) {
        include 'blocks/contacts.php';
    }
    ?>
</main>

<?php get_footer(); ?>
