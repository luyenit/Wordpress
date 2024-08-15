<?php

/**
 * The template for displaying archive pages
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package customify
 */

get_header(); ?>
<?php get_sidebar('left'); ?>

<div class="content-inner">


	<?php
	/**
	 * Hook before main content
	 *
	 * @since 0.2.1
	 */
	do_action('customify/before-site-content');
	?>

	<?php
	// Lấy slug trên url
	$category = get_queried_object();
	$slug = $category->slug;

	// Tạo đối tượng WP_Query
	$args = array(
		'category_name' => $slug, // Thay 'your-category-slug' bằng slug của category bạn muốn truy vấn
		// 'posts_per_page' => 10, // Số lượng bài viết muốn hiển thị
	);

	$query = new WP_Query($args);

	// Kiểm tra xem có bài viết nào không
	if ($query->have_posts()) { ?>
		<!-- // Lặp qua các bài viết -->
		<?php while ($query->have_posts()): ?>
			<?php $query->the_post(); ?>

			<!-- Hiển thị bài viết -->
			<div class="item_post">
				<a href="<?= the_permalink() ?>">
					<div class="item_post_img">
						<?= the_post_thumbnail() ?>
					</div>
					<div class="item_post_content">
						<h4><?= the_title() ?></h4>
						<div class="post_date">Ngày đăng: <?= the_date() ?></div>
						<div class="post_excerpt">
							<p><?= the_excerpt() ?></p>
						</div>
					</div>
				</a>
			</div>

		<?php endwhile ?>
		<!-- <?php wp_reset_postdata(); ?> // Phục hồi lại dữ liệu bài viết gốc -->
	<?php } else {
		// Nếu không có bài viết nào
		echo 'Không có bài viết nào.';
	}
	?>



	<?php
	// do_action('customify/content/before');
	// if (! customify_is_e_theme_location('archive')) {
	// 	customify_blog_posts_heading();
	// 	customify_blog_posts();
	// }
	// do_action('customify/content/after');
	?>
</div><!-- #.content-inner -->


<?php get_sidebar('secondary'); ?>
<?php
get_footer();
