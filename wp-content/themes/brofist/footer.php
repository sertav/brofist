<?php
    $f_logo = get_field('f_logo', 'option');
    $f_title = get_field('f_title', 'option');
?>

<footer>
	<div class="innerWrap">
		<div class="title"><?= $f_title; ?></div>
		<div class="footer-menu">
			<div class="icons-wrap">
                <div class="ul">
                    <div class="li">
                    <?php while(has_sub_field('f_mail', 'option')) : $title = get_sub_field('title'); $mail = get_sub_field('mail'); ?>
						<span><?= $title; ?></span>
						<a class="orange" href="mailto:<?= $mail; ?>"><?= $mail; ?></a>
                    </div>
                    <?php endwhile; ?>

                    <div class="li">
						<ul class="social">
                            <?php while(has_sub_field('f_socials', 'option')) : $soc = get_sub_field('soc'); $link = get_sub_field('link'); ?>
							<li><a rel="nofollow" target="_blank" href="
							<?php
                                if ($soc['value'] == 'skype') {
                                    echo 'skype:'. $soc['value'] .'?chat';
                                } elseif ($soc['value'] == 'telegram') {
                                    echo 'https://telegram.me/'. $link;
                                } elseif ($link) {
                                    echo $link;
                                } else {
                                    echo '#';
                                }
                                ?>"><img src="<?php bloginfo('template_url'); ?>/assets/images/<?= $soc['value']; ?>.svg" alt="<?= $soc['label']; ?>"></a></li>
                            <?php endwhile; ?>
						</ul>
					</div>
				</div>
			</div>

			<div class="menu">
                <?php
                wp_nav_menu( [
                    'theme_location'  => 'footer-menu',
                    'menu'            => '',
                    'container'       => 'div',
                    'container_class' => 'item-menu',
                    'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
                    'depth'           => 0,
                    'walker'          => '',
                ] );
                ?>
				
				<div class="item-menu mobile">
					<ul class="social">
                        <?php while(has_sub_field('f_socials', 'option')) : $soc = get_sub_field('soc'); $link = get_sub_field('link'); ?>
                            <li><a rel="nofollow" target="_blank" href="
							<?php
                                if ($soc['value'] == 'skype' && !empty($link)) {
                                    echo 'skype:'. $soc['value'] .'?chat';
                                } elseif ($soc['value'] == 'telegram' && !empty($link)) {
                                    echo 'https://telegram.me/'. $soc['value'];
                                } elseif ($link) {
                                    echo $link;
                                } else {
                                    echo '#';
                                }
                                ?>"><img src="<?php bloginfo('template_url'); ?>/assets/images/<?= $soc['value']; ?>.svg" alt="<?= $soc['label']; ?>"></a></li>
                        <?php endwhile; ?>
					</ul>
				</div>
			</div>

			<div class="item-menu logo-item">
				<div class="logo"><a href=""><img src="<?= esc_url($f_logo['url']); ?>" alt="<?= esc_attr($f_logo['alt']); ?>"></a></div>
			</div>
		</div>
		
		<div class="footer-bottom">
			<span>© 2021 BROFIST LTD.</span>
			<div class="icons">
                <?php
                $f_rating = get_field('f_rating', 'option');
                $size = 'medium';
                if( $f_rating ):
                    foreach( $f_rating as $image ): ?>
                        <div class="icon"><img src="<?php echo esc_url($image['sizes']['thumbnail']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" /></div>
                    <?php endforeach;
                endif; ?>
			</div>
		</div>
	</div>
</footer>

<?php if (!is_page('registration')) include 'templates/popup.php'; ?>

<?php wp_footer(); ?>
</body>
</html>