<?php

/**
 * The template for displaying product content in the single-product.php template
 *
 * @see     https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce/Templates
 * @version 3.6.0
 */


?>

<div id="product-<?php the_ID(); ?>" <?php wc_product_class('', $product); ?>>

	<?php
	/**
	 * Hook: woocommerce_before_single_product_summary.
	 *
	 * Removed from theme woocommerce_show_product_sale_flash.
	 * Removed from theme woocommerce_show_product_images.
	 */
	do_action('woocommerce_before_single_product_summary');
	?>

	<?php

	// Single product class.
	$has_col = 0;
	if (has_action('woocommerce_single_product_media') || has_action('woocommerce_single_product_summary')) {
		$has_col = 1;
		if (has_action('woocommerce_single_product_media') && has_action('woocommerce_single_product_summary')) {
			$has_col = 2;
		}
	}
	?>
	<?php
	$class = array(
		'left'  => '',
		'right' => '',
	);


	?>
	<?php
	if (has_action('woocommerce_single_product_media')) { ?>
		<?php
		/**
		 * Hook woocommerce_single_product_media
		 *
		 * Add from theme. By default plugin wc have not this hook.
		 *
		 * @hooked woocommerce_show_product_images - 20
		 */
		do_action('woocommerce_single_product_media') ?>
	<?php } ?>


	<div class="entry-summary-box <?php echo esc_attr(apply_filters('woocommerce_single_product_summary_classes', '')); ?>">
		<?php
		/**
		 * Hook: woocommerce_single_product_summary.
		 *
		 * @hooked woocommerce_template_single_title - 5
		 * @hooked woocommerce_template_single_rating - 10
		 * @hooked woocommerce_template_single_price - 10
		 * @hooked woocommerce_template_single_excerpt - 20
		 * @hooked woocommerce_template_single_add_to_cart - 30
		 * @hooked woocommerce_template_single_meta - 40
		 * @hooked woocommerce_template_single_sharing - 50
		 * @hooked WC_Structured_Data::generate_product_data() - 60
		 */
		do_action('woocommerce_single_product_summary');
		?>
	</div>


	<?php
	/**
	 * Hook: woocommerce_after_single_product_summary.
	 *
	 * @hooked woocommerce_output_product_data_tabs - 10
	 * @hooked woocommerce_upsell_display - 15
	 * @hooked woocommerce_output_related_products - 20
	 */
	do_action('woocommerce_after_single_product_summary');
	?>


	<?php
	$current_product_id = get_the_ID();
	$product_categories = wp_get_post_terms($current_product_id, 'product_cat');

	if (! empty($product_categories) && ! is_wp_error($product_categories)) {
		$category_ids = wp_list_pluck($product_categories, 'term_id');

		$args = array(
			'post_type' => 'product',
			'posts_per_page' => 10,
			'post__not_in' => array($current_product_id),
			'tax_query' => array(
				array(
					'taxonomy' => 'product_cat',
					'field'    => 'term_id',
					'terms'    => $category_ids,
					'operator' => 'IN',
				),
			),
		);

		$query = new WP_Query($args);

		if ($query->have_posts()) : ?>
			<section class="related products">
				<h2>Related products</h2>
				<ul class="products customify-grid-4_md-4_sm-2_xs-1 wc-grid-view">
					<?php while ($query->have_posts()) : $query->the_post(); ?>
						<li class="customify-col product type-product post-131 status-publish first instock product_cat-bu-long product_cat-bu-long-cuong-do-cao product_cat-bu-long-hoa-chat product_cat-bu-long-inox product_cat-bu-long-neo-mong product_cat-bu-long-tu-cat product_cat-chua-phan-loai product_cat-oc-vit product_cat-san-pham-khac product_cat-thanh-ren-ti-ren-inox product_cat-ubolt-inox product_cat-vit-bake product_cat-vit-ban-go product_cat-vit-ban-ton product_cat-vit-tri has-post-thumbnail shipping-taxable product-type-simple">
							<!-- <a class="wc-product-inner"> -->
							<a href="<?= the_permalink(); ?>" class="woocommerce-LoopProduct-link woocommerce-loop-product__link">
								<?php the_post_thumbnail(); ?>
							</a>
							<div class="wc-product__title"><a href="<?php the_permalink(); ?>" class="woocommerce-LoopProduct-link woocommerce-loop-product__link"></a>
								<h2 class="woocommerce-loop-product__title"><a href="<?php the_permalink(); ?>" class="woocommerce-LoopProduct-link woocommerce-loop-product__link"></a><a href="<?php the_permalink(); ?>" class="woocommerce-LoopProduct-link woocommerce-loop-product__link"><?= the_title() ?></a></h2>
							</div>
							<div class="wc-product__add_to_cart"><a href="<?php the_permalink(); ?>" data-quantity="1" class="button product_type_simple add_to_cart_button" data-product_id="<?= the_ID() ?>" data-product_sku="" aria-label="Đọc thêm về “sadfg”" rel="nofollow"><span class="button-label">Đọc tiếp</span></a></div><a href="#" class="button yith-wcqv-button" data-product_id="<?= the_ID() ?>">Quick View</a> <!-- </a> -->
						</li>
					<?php endwhile; ?>
				</ul>
				<?php wp_reset_postdata(); ?>
			</section>
	<?php endif;
	}
	?>




</div>

<?php do_action('woocommerce_after_single_product'); ?>