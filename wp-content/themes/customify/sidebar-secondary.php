<?php

/**
 * The secondary sidebar for 3 columns layout.
 *
 * @link    https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package customify
 */

$sidebar_id = apply_filters('customify/sidebar-id', 'sidebar-2', 'secondary');
if (! is_active_sidebar($sidebar_id)) {
	return;
}
?>

<!-- <div class="sidebar-secondary-inner sidebar-inner widget-area"> -->
<div class="sidebar-two" id="sidebar-two">
	<div class="control-sidebar" id='menu-mobile-right'><i class="fa-solid fa-bars"></i></div>
	<script>
		// Đảm bảo rằng DOM đã được tải xong trước khi chạy mã JavaScript
		document.addEventListener('DOMContentLoaded', () => {
			// Lấy tham chiếu đến phần tử và nút
			var btnRight = document.getElementById('menu-mobile-right')
			var sidebarRight = document.getElementById('sidebar-two')
			var clickCount = 0; // Biến để đếm số lần nhấp


			// Thêm sự kiện click cho nút
			sidebarRight.addEventListener('click', () => {
				clickCount++;
				if (clickCount % 2 === 1) {
					// Thay đổi thuộc tính left của phần tử
					sidebarRight.style.right = '0';
				} else {
					// Thay đổi thuộc tính left của phần tử
					sidebarRight.style.right = '-240px';
				}

			});
		});
	</script>
	<div class="sidebar-content">
		<div class="block-sidebar">
			<div class="heading_box">Sản phẩm vừa xem</div>
			<div class="block-content">
				<?php
				the_widget('WC_Widget_Recently_Viewed', array());
				?>
			</div>
		</div>
		<div class="block-sidebar">
			<div class="heading_box">Giỏ hàng</div>
			<div class="block-content">
				<div id="woocommerce_widget_cart-2" class="block-cart widget woocommerce widget_shopping_cart" style="display: none;">
					<h2 class="widgettitle">Giỏ hàng</h2>
					<div class="hide_cart_widget_if_empty">
						<div class="widget_shopping_cart_content">
							<?php
							the_widget('WC_Widget_Cart', array());
							?>
							<p class="woocommerce-mini-cart__empty-message">Chưa có sản phẩm trong giỏ hàng.</p>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="block-sidebar">
			<div class="heading_box">Từ khóa sản phẩm</div>
			<div class="block-content">
				<div id="tag_cloud-2" class="block-tag widget widget_tag_cloud">
					<div class="tagcloud">
						<a href="" class="tag-cloud-link tag-link-49 tag-link-position-1" style="font-size: 8pt;" aria-label="bulong (1 mục)">bulong</a>
						<a href="" class="tag-cloud-link tag-link-51 tag-link-position-2" style="font-size: 8pt;" aria-label="Bulong nở (1 mục)">Bulong nở</a>
						<a href="" class="tag-cloud-link tag-link-50 tag-link-position-3" style="font-size: 8pt;" aria-label="Inox (1 mục)">Inox</a>
						<a href="" class="tag-cloud-link tag-link-52 tag-link-position-4" style="font-size: 8pt;" aria-label="tắc kê (1 mục)">tắc kê</a>
					</div>
				</div>
			</div>
		</div>
		<div class="block-sidebar banner-wapper">
			<a href="#">
				<img src="<?php echo get_template_directory_uri() ?>/assets/images/cong-ty-nam-hai.jpg" title="Keyweb Demo" alt="Keyweb Demo">
			</a>
		</div>
	</div>
</div>

<?php
// do_action('customify/sidebar-secondary/before');
// dynamic_sidebar($sidebar_id);
// do_action('customify/sidebar-secondary/after');
?>