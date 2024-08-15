<?php

/**
 * The sidebar containing the main widget area
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package customify
 */

// $sidebar_id = apply_filters('customify/sidebar-id', 'sidebar-1', 'primary');
// if (! is_active_sidebar($sidebar_id)) {
//     return;
// }
?>


<div class="sidebar-one" id="sidebar-one">
    <div class="control-sidebar" id="menu-mobile-Left"><i class="fa-solid fa-bars"></i></div>
    <script>
        // Đảm bảo rằng DOM đã được tải xong trước khi chạy mã JavaScript
        document.addEventListener('DOMContentLoaded', () => {
            // Lấy tham chiếu đến phần tử và nút
            var btnLeft = document.getElementById('menu-mobile-Left')
            var sidebar = document.getElementById('sidebar-one')
            var clickCount = 0; // Biến để đếm số lần nhấp


            // Thêm sự kiện click cho nút
            btnLeft.addEventListener('click', () => {
                clickCount++;
                if (clickCount % 2 === 1) {
                    // Thay đổi thuộc tính left của phần tử
                    sidebar.style.left = '0';
                } else {
                    // Thay đổi thuộc tính left của phần tử
                    sidebar.style.left = '-240px';
                }

            });
        });
    </script>
    <div class="sidebar-content">

        <?php if (is_page() || is_category() || is_single()) { ?>
        <?php } else { ?>
            <div class="block-sidebar">
                <div class="heading_box">LỌC TÌM SẢN PHẨM</div>

                <div class="filter-section firt">

                    <h4>LỌC THEO GIÁ</h4>
                    <?php
                    the_widget('WC_Widget_Price_Filter', array());
                    ?>
                    <!-- <div class="price-range">
                        <input type="range" id="priceRange" min="0" max="300000" value="150000" step="1000">
                    </div>
                    <div class="price-range">
                        <button class="filter-button">Lọc</button>
                        <span id="currentPriceRange">Giá 0 — 150,000</span>
                    </div>  -->
                </div>

                <div class="filter-section">
                    <h4>THEO MÀU SẮC</h4>
                    <?php
                    the_widget('WC_Widget_Layered_Nav', array(
                        'attribute'    => 'loc-theo-mau', // Thay 'pa_color' bằng slug của thuộc tính bạn muốn lọc
                        'display_type' => 'list',     // Kiểu hiển thị: 'list' hoặc 'dropdown'
                        'query_type'   => 'and'       // Kiểu truy vấn: 'and' hoặc 'or'
                    ));
                    ?>
                    <!-- <label>
                        <input type="checkbox">
                        <span>Trắng</span>
                    </label>  -->
                </div>

                <div class="filter-section">
                    <h4>THEO CHẤT LIỆU</h4>
                    <?php
                    the_widget('WC_Widget_Layered_Nav', array(
                        'attribute'    => 'loc-theo-chat-lieu', // Thay 'pa_color' bằng slug của thuộc tính bạn muốn lọc
                        'display_type' => 'list',     // Kiểu hiển thị: 'list' hoặc 'dropdown'
                        'query_type'   => 'and'       // Kiểu truy vấn: 'and' hoặc 'or'
                    ));
                    ?>
                    <!-- <label>
                        <input type="checkbox">
                        <span>SUS201</span>
                    </label>
                    <label>
                        <input type="checkbox">
                        <span>SUS304</span>
                    </label> -->
                </div>

                <div class="filter-section">
                    <h4>THEO HÃNG</h4>
                    <?php
                    the_widget('WC_Widget_Layered_Nav', array(
                        'attribute'    => 'loc-theo-hang', // Thay 'pa_color' bằng slug của thuộc tính bạn muốn lọc
                        'display_type' => 'list',     // Kiểu hiển thị: 'list' hoặc 'dropdown'
                        'query_type'   => 'and'       // Kiểu truy vấn: 'and' hoặc 'or'
                    ));
                    ?>
                    <!-- 
                    <label>
                        <input type="checkbox">
                        <span>Nam Hải</span>
                    </label> -->
                </div>
            </div>

            <script>
                // const priceRange = document.getElementById('priceRange');
                // const currentPriceRange = document.getElementById('currentPriceRange');

                // priceRange.addEventListener('input', function() {
                //     currentPriceRange.textContent = `Giá 0 — ${parseInt(this.value).toLocaleString()}`;
                // });
            </script>
        <?php } ?>

        <!-- Danh mục sản phẩm  -->
        <div class="block-sidebar">
            <div class="heading_box">Danh mục sản phẩm</div>
            <div class="block-content">
                <ul id="menu-sidebar">
                    <?php
                    $parent_categories = array('bu lông', 'ốc vít', 'sản phẩm khác');
                    $uncategorized = null;
                    foreach ($parent_categories as $parent_name) {
                        $parent_category = get_term_by('name', $parent_name, 'product_cat');
                        if ($parent_category) {
                            if ($parent_category->slug == 'uncategorized') {
                                continue;
                            }

                            $child_categories = get_terms(array(
                                'taxonomy' => 'product_cat',
                                'child_of' => $parent_category->term_id,
                                'hide_empty' => false,
                            ));

                            echo '<li class="cat-item cat-item-28">';
                            echo '<a href="' . get_term_link($parent_category) . '">' . $parent_category->name . '</a>';
                            echo '<ul class="children">';
                            foreach ($child_categories as $child_category) {
                                echo ' <li class="cat-item cat-item-32"><a href="' . get_term_link($child_category) . '">' . $child_category->name . '</a>';
                                echo '</li>';
                            }
                            echo '</ul>';
                            echo '</li>';
                        }
                    }
                    ?>
                </ul>
            </div>
        </div>
        <!-- Dan mục tin tức -->
        <div class="block-sidebar">
            <div class="heading_box">Danh mục tin tức</div>
            <div class="block-content">
                <ul id="menu-sidebar">
                    <?php
                    $args = array(
                        'taxonomy'   => 'category',
                        'orderby'    => 'name',
                        'order'      => 'ASC',
                        'hide_empty' => false,
                    );

                    $product_categories = get_terms($args);

                    if (!empty($product_categories) && !is_wp_error($product_categories)) {
                        foreach ($product_categories as $category) {
                            echo '<li class="cat-item cat-item-17"><a href="' .  get_term_link($category->term_id) . '">' . esc_html($category->name) . '</a></li>';
                        }
                    } else {
                        echo 'No product categories found.';
                    }
                    ?>
                </ul>
            </div>
        </div>
        <!-- Bài viết mới nhất -->
        <div class="block-sidebar category-wapper">
            <div class="heading_box">Bài viết mới nhất</div>
            <div class="block-content">

                <?php
                $args = array(
                    'post_type' => 'post',
                    'posts_per_page' => 4,
                    'order' => 'DESC',
                );
                $query = new WP_Query($args);
                if ($query->have_posts()) {
                    while ($query->have_posts()) {
                        $query->the_post();
                        echo '<div class="item-post">';
                        echo '<a href="' . get_permalink() . '">';
                        // if (has_post_thumbnail()) {
                        echo '<div class="item-images">';
                        echo '<img src="' . get_the_post_thumbnail();
                        echo '</div>';
                        // }

                        echo '<div class="item-detail">';
                        echo '<h4 class="title">' . get_the_title() . '</h4>';
                        echo '<div class="item-date">' . get_the_date('d/m/Y') . '</div>';
                        echo '</div>';
                        echo '</a>';
                        echo '</div>';
                    }
                    wp_reset_postdata();
                } else {
                    echo '<p>Không có bài viết nào.</p>';
                }
                ?>
            </div>
        </div>
        <!-- ảnh banner left  -->
        <div class="block-sidebar banner-wapper">
            <a href="">
                <img src="<?php echo get_template_directory_uri() ?>/assets/images/qc-left-1.jpg" title="Keyweb Demo" alt="Keyweb Demo">
            </a>
        </div>
    </div>
</div>