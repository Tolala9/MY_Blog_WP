<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>

	<meta charset="<?php bloginfo('charset'); ?>">

	<title><?php wp_title(' | ', 'echo', 'right'); ?><?php bloginfo('name'); ?> </title>

	

	<meta name="description" content="">

	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

	

	<link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/img/favicon/48x48.png" >
	<link rel="apple-touch-icon" href="<?php echo get_template_directory_uri(); ?>/img/favicon/57x57.png">
	<link rel="apple-touch-icon" sizes="72x72" href="<?php echo get_template_directory_uri(); ?>/img/favicon/72x72.png">
	<link rel="apple-touch-icon" sizes="114x114" href="<?php echo get_template_directory_uri(); ?>/img/favicon/114x114.png">

	<!-- Chrome, Firefox OS and Opera -->
	<meta name="theme-color" content="#000">
	<!-- Windows Phone -->
	<meta name="msapplication-navbutton-color" content="#000">
	<!-- iOS Safari -->
	<meta name="apple-mobile-web-app-status-bar-style" content="#000">

	<style>body { opacity: 0; overflow-x: hidden; } html { background-color: #fff; }</style>

	<!-- CSS Styles -->
	
	<?php wp_head(); ?> 

</head>

<body <?php body_class(); ?>>
	<div class="content">
		<!-- PRELOADER -->
		<div class="lds-css ng-scope">
			<div style="width:100%;height:100%" class="lds-wedges">
				<div><div><div></div></div><div><div></div>
			</div><div><div></div></div><div><div></div>
		</div></div></div></div>
		<!-- END PRELOADER -->

		<!-- HEADER -->
		<header>
			<div class="header-line">

				<?php if (is_user_logged_in()) { ?>

					<?php $current_user = wp_get_current_user();  ?>

					<a class="user-icon" title="<?php echo $current_user->display_name ?>" href="#">
						<?php echo get_avatar(get_current_user_id(), 40); ?>
					</a>

					<div class="user-box hidden">

						<a class="signup-button" href="<?php echo wp_logout_url(); ?>"><p>Log Out</p></a>
					</div>

				<?php }  
				else{ ?>


					<a class="user-icon" title="User" href="#">
						<i class="far fa-user"></i>
					</a>
					<div class="user-box hidden">
						<a class="login-button" href="<?php echo wp_login_url(); ?>"><p>log in</p></a>
						<div class="gray-line"></div>
						<a class="signup-button" href="<?php echo wp_registration_url(); ?>"><p>sign up</p></a>
					</div>

				<?php } ?>





				<div class="container">
					<div class="row">
						<div class="col-sm-12 col-xs-12">

							<div class="col-xs-1 col-sm-1 col-sm-offset-2 col-xs-offset-2"> 
								<div class="logo" title="Home"><a class="no-copy" href="<?php echo site_url('/') ?>">L<sup>b</sup></a></div>

							</div>

							<div class="col-xs-6  col-sm-4 col-sm-offset-1">
								<nav class="menu-line">
									<ul>

										<?php wp_nav_menu(array(
											'theme_location' => 'headerMenuLocation',
											'menu' => 'main-menu',
											'container' => '',
											'items_wrap' => '%3$s' 
										)); ?>

									</ul>
								</nav> 
							</div>

							<div class="col-xs-1  col-sm-1 col-sm-offset-1 ">
								<div class="search-box" title="Search"><a class="no-copy" href="#">S<sup>h</sup></a></div>

							</div>


							<div class="col-xs-6 col-xs-offset-3  col-sm-2 col-sm-offset-0">
								<?php get_search_form(); ?>
							</div>


							<button class="toggle-mnu">
								<span class="sandwich"> 
									<span class="sw-topper"></span>
									<span class="sw-bottom"></span>
									<span class="sw-footer"></span>
								</span>
							</button>

							<nav class="top-mnu">  
								<ul>
									<?php wp_nav_menu(array(
										'theme_location' => 'mobileMenuLocation',
										'menu' => 'main-menu',
										'container' => '',
										'items_wrap' => '%3$s' 
									)); ?>
								</ul>
							</nav>

						</div>
					</div>
				</div>
			</div>
		</header>
	<!--END HEADER -->