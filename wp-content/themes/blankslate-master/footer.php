<?php
    $f_logo = get_field('f_logo', 'option');
    $f_title = get_field('f_title', 'option');
?>

<footer>
	<div class="innerWrap">
		<div class="title"><?= $f_title; ?></div>
		<div class="footer-menu">
			<div class="icons-wrap">
				<ul>
                    <?php while(has_sub_field('f_mail', 'option')) : $title = get_sub_field('title'); $mail = get_sub_field('mail'); ?>
					<li>
						<span><?= $title; ?></span>
						<a class="orange" href="mailto:<?= $mail; ?>"><?= $mail; ?></a>
					</li>
                    <?php endwhile; ?>
					
					<li>
						<ul class="social">
                            <?php while(has_sub_field('f_socials', 'option')) : $soc = get_sub_field('soc'); $link = get_sub_field('link'); ?>
							<li><a rel="nofollow" target="_blank" href="
							<?php
                                if ($soc['value'] == 'skype') {
                                    echo 'skype:'. $soc['value'] .'?chat';
                                } else {
                                    echo $link;
                                }
                                ?>"><img src="<?php bloginfo('template_url'); ?>/assets/images/<?= $soc['value']; ?>.svg" alt="<?= $soc['label']; ?>"></a></li>
                            <?php endwhile; ?>
						</ul>
					</li>
				</ul>
			</div>
			<div class="menu">
				<div class="item-menu">
					<ul>
						<li><a href="">Data Protection Policy</a></li>
						<li><a href="">Terms and Conditions</a></li>
						<li><a href="">FAQ</a></li>
					</ul>
				</div>
				<div class="item-menu">
					<ul>
						<li><a href="">СРА</a></li>
						<li><a href="">Dynamic RevShare</a></li>
						<li><a href="">Subpartner</a></li>
					</ul>
				</div>
				<div class="item-menu">
					<ul>
						<li><a href="">Logo pack</a></li>
						<li><a href="">Favicon pack</a></li>
					</ul>
				</div>
				
				<div class="item-menu mobile">
					<ul class="social">
                        <?php while(has_sub_field('f_socials', 'option')) : $soc = get_sub_field('soc'); $link = get_sub_field('link'); ?>
                            <li><a rel="nofollow" target="_blank" href="
							<?php
                                if ($soc['value'] == 'skype') {
                                    echo 'skype:'. $soc['value'] .'?chat';
                                } else {
                                    echo $link;
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
                $size = 'medium'; // (thumbnail, medium, large, full or custom size)
                if( $f_rating ):
                    foreach( $f_rating as $image ): ?>
                        <div class="icon"><img src="<?php echo esc_url($image['sizes']['thumbnail']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" /></div>
                    <?php endforeach;
                endif; ?>
			</div>
		</div>
	</div>
</footer>

<?php include 'templates/popup.php'; ?>

<?php wp_footer(); ?>
</body>
</html>