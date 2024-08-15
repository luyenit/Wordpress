<?php

/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package customify
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=10.0, user-scalable=yes">
	<link rel="profile" href="http://gmpg.org/xfn/11">

	<link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">


	<!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css"> -->

	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">


	<style>
		/* .container {
			margin: 0 auto;
			width: 1200px;
			margin-top: 8px;
		} */



		.full-row {
			float: left;
			width: 100%;
		}

		.full-header-top {
			top: 0;
			z-index: 19;
			position: fixed;
			transition: all 700ms ease;
			background-color: #018791;
			font-size: 13.6px;
			width: 100%;
		}

		.site-header {
			top : 35px;
			position: fixed;
			z-index: 19;
			transition: all 400ms ease;
			width: 100%;
		}

		.inner-container {
			max-width: 1200px;
			margin: auto;
			width: 100%;
		}

		.inner-header-top p {
			margin: 0 !important;
		}

		.left-header-top {
			color: #fff;
			float: left;
			width: 50%;
			line-height: 35px;
			text-align: left;
		}

		.right-header-top {
			color: #fff;
			float: right;
			width: 50%;
			line-height: 35px;
			text-align: right;
		}

		.header-logo {
			float: left;
			max-width: 185px;
			overflow: hidden;
			max-height: 120px;
			transition: all 0.3s;
		}
	</style>
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

	<?php
	if (function_exists('wp_body_open')) {
		wp_body_open();
	}
	?>
	<?php
	do_action('customify/site-start/before');
	?>
	<div class="full-row full-header-top" id="headerTop">
		<div class="inner-header-top inner-container">
			<p class="left-header-top">
				Chuyên bulong inox, ốc vít, thanh ren, dây xích, bulong hóa chất </p>
			<p class="right-header-top">
				Email: Sales@namhaiinox.com.vn Hotline: 0977.260.612 </p>
		</div>
	</div>
	<?php
	if (! customify_is_e_theme_location('header')) {
		/**
		 * Site start
		 *
		 * Hooked
		 *
		 * @see customify_customize_render_header - 10
		 * @see Customify_Page_Header::render - 35
		 */
		do_action('customify/site-start');
	}

	do_action('customify/site-start/after');

	/**
	 * Hook before main content
	 *
	 * @since 0.2.1
	 */
	do_action('customify/before-site-content');
	?>
	<div class="container" id="container">


		<script>
			let lastScrollTop = 0;
			const headerTop = document.getElementById('headerTop');
			const headerMain = document.getElementById('masthead');
			const container = document.getElementById('container');
			// const menuMain = document.getElementsByClassName('col-v2-center');
			console.log(container);
			// container.style.marginTop = '8px';

			window.addEventListener('scroll', function() {


				let scrollTop = window.pageYOffset || document.documentElement.scrollTop;

				if (scrollTop > lastScrollTop) {
					/* filter: grayscale(0.6)*/
					// menuMain.style.margin = '0 0 0 -9em';

					headerTop.style.top = '-50px'; // Ẩn header-top
					headerMain.style.top = '0'; // Đưa header chính lên đầu

				} else {
					headerTop.style.top = '0'; // Hiện header-top
					headerMain.style.top = '30px'; // Đưa header chính xuống
					// headerTop.style.position = 'unset';
					// headerMain.style.position = 'unset';
					// container.style.marginTop = '120px';
					// menuMain.style.margin = '0 0 0 1em';

				}
				lastScrollTop = scrollTop;
			});
		</script>