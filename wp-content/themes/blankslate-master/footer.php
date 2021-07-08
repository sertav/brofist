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
					<li>
						<span>Support:</span>
						<a class="orange" href="">support@dazard.com</a>
					</li>
					
					<li>
						<ul class="social">
							<li><a href=""><img src="<?php bloginfo('template_url'); ?>/assets/images/icon1.svg" alt=""></a></li>
							<li><a href=""><img src="<?php bloginfo('template_url'); ?>/assets/images/icon2.svg" alt=""></a></li>
							<li><a href=""><img src="<?php bloginfo('template_url'); ?>/assets/images/icon3.svg" alt=""></a></li>
							<li><a href=""><img src="<?php bloginfo('template_url'); ?>/assets/images/icon4.svg" alt=""></a></li>
							<li><a href=""><img src="<?php bloginfo('template_url'); ?>/assets/images/icon5.svg" alt=""></a></li>
							<li><a href=""><img src="<?php bloginfo('template_url'); ?>/assets/images/icon6.svg" alt=""></a></li>
							<li><a href=""><img src="<?php bloginfo('template_url'); ?>/assets/images/icon7.svg" alt=""></a></li>
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
						<li><a href=""><img src="<?php bloginfo('template_url'); ?>/assets/images/icon1.svg" alt=""></a></li>
						<li><a href=""><img src="<?php bloginfo('template_url'); ?>/assets/images/icon2.svg" alt=""></a></li>
						<li><a href=""><img src="<?php bloginfo('template_url'); ?>/assets/images/icon3.svg" alt=""></a></li>
						<li><a href=""><img src="<?php bloginfo('template_url'); ?>/assets/images/icon4.svg" alt=""></a></li>
						<li><a href=""><img src="<?php bloginfo('template_url'); ?>/assets/images/icon5.svg" alt=""></a></li>
						<li><a href=""><img src="<?php bloginfo('template_url'); ?>/assets/images/icon6.svg" alt=""></a></li>
						<li><a href=""><img src="<?php bloginfo('template_url'); ?>/assets/images/icon7.svg" alt=""></a></li>
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
				<div class="icon"><img src="<?php bloginfo('template_url'); ?>/assets/images/icon8.png" alt=""></div>
				<div class="icon"><img src="<?php bloginfo('template_url'); ?>/assets/images/icon9.png" alt=""></div>
				<div class="icon"><img src="<?php bloginfo('template_url'); ?>/assets/images/icon10.png" alt=""></div>
			</div>
		</div>
	</div>
</footer>

<?php include 'templates/popup.php'; ?>

<?php wp_footer(); ?>
</body>
</html>