<?php
    $h_logo = get_field('h_logo', 'option');
?>

<!DOCTYPE html>
<html <?php language_attributes(); ?>>
	<head>
		<meta charset="<?php bloginfo( 'charset' ); ?>" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
		<?php wp_head(); ?>
	</head>
	
	<body <?php body_class(); ?>>
		<div class="welcome-wrap">
			<header class="navigation-wrap">
				<div class="innerWrap">
					<div class="logo">
						<a href=""><img src="<?= esc_url($h_logo['url']); ?>" alt="<?= esc_attr($h_logo['alt']); ?>"></a>
					</div>
					<nav>
                        <?php
                        wp_nav_menu( [
                            'theme_location'  => 'header-menu',
                            'menu'            => '',
                            'container'       => 'div',
                            'container_class' => 'menu',
                            'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
                            'depth'           => 0,
                            'walker'          => '',
                        ] );
                        ?>
						<div class="signInWrap">
							<ul>
								<li class="language">
									<div class="active-lang-wrap">
										<div class="active-lang lang">
                                        <?php
                                            $currLangs = pll_the_languages(array('raw' => 1, 'flag' => 1, 'current_lang' => 1));
                                            $current = array_filter($currLangs, function($v) { return (bool) $v["current_lang"]; });
                                            $current = reset($current);
                                            echo '<img src="'. $current['flag'] .'" alt="" /><span>' . mb_strimwidth($current['name'], 0, 3, "")  . '</span>';
                                        ?>
										</div>
										<i class="fas fa-caret-down"></i>
									</div>
									
									<div class="subNavigation">
                                    <?php
                                        $languages = pll_the_languages(array('raw' => 1, 'show_flags' => 1));
                                        foreach ($languages as $lang) {
                                            if ( $lang['slug'] ) {
                                                echo '<div class="lang">';
                                                echo '<a href="' . $lang['url'] . '" class="">'. $lang['flag'] .'<span>' . mb_strimwidth($lang['name'], 0, 3, "") . '</span></a>';
                                                echo '</div>';
                                            }
                                        }
                                    ?>
									</div>
								</li>
								<li class="signUp"><a><img src="<?php bloginfo('template_url'); ?>/assets/images/icon11.png" alt=""> Sign Up</a></li>
								<li class="signIn"><a>Sign In</a></li>
							</ul>
						</div>
						
						<div class="language mobile">
							<div class="active-lang-wrap">
								<div class="active-lang lang">
                                <?php
                                    $currLangs = pll_the_languages(array('raw' => 1, 'flag' => 1, 'current_lang' => 1));
                                    $current = array_filter($currLangs, function($v) { return (bool) $v["current_lang"]; });
                                    $current = reset($current);
                                    echo '<img src="'. $current['flag'] .'" alt="" /><span>' . mb_strimwidth($current['name'], 0, 3, "")  . '</span>';
                                ?>
								</div>
								<i class="fas fa-caret-down"></i>
							</div>
							
							<div class="subNavigation">
                            <?php
                                $languages = pll_the_languages(array('raw' => 1, 'show_flags' => 1));
                                foreach ($languages as $lang) {
                                    if ( $lang['slug'] ) {
                                        echo '<div class="lang">';
                                        echo '<a href="' . $lang['url'] . '" class="">'. $lang['flag'] .'<span>' . mb_strimwidth($lang['name'], 0, 3, "") . '</span></a>';
                                        echo '</div>';
                                    }
                                }
                            ?>
							</div>
						</div>
					</nav>
					
					<div class="menu-toggle mobile">
						<div class="m-lines">
							<div class="one"></div>
							<div class="two"></div>
							<div class="three"></div>
						</div>
					</div>
				</div>
			</header>

            <?php include 'blocks/benefits.php'; ?>
		</div>		