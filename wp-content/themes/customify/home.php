<?php get_header(); ?>

<!-- banner  -->
<div class="banner">
    <?php
    echo do_shortcode('[smartslider3 slider="2"]');
    ?>
</div>
<h1 class="home_slogan">"Bulong Nam Hải – Cùng bạn phát triển!"</h1>

<!-- Bu lông  -->
<div class="home-box-category">
    <div class="woocommerce columns-4">
        <ul class="home-category columns-4">
            <?php
            // Mảng danh sách các danh mục cha và các danh mục con tương ứng
            $categories_to_display = array(
                'bu lông' => array('bu lông cường độ cao', 'bu lông hóa chất', 'bu lông inox', 'bu lông neo móng'), // Danh sách danh mục con của 'bu lông'	
                'ốc vít' => array('vít bake', 'vít bắn gỗ', 'vít bắn tôn', 'vít trí'), // Danh sách danh mục con của 'ốc vít'
            );

            foreach ($categories_to_display as $parent_name => $child_names) {
                // Lấy thông tin của danh mục cha
                $parent_category = get_term_by('name', $parent_name, 'product_cat');

                if ($parent_category) {
                    echo '<div class="home-category">';
                    echo '<h3>' . $parent_category->name . '</h3>';
                    // Hiển thị danh mục con tương ứng với danh mục cha
                    echo '<div class="child-categories">';
                    foreach ($child_names as $child_name) {
                        // Lấy thông tin của từng danh mục con
                        $child_category = get_term_by('name', $child_name, 'product_cat');

                        if ($child_category) {
                            $thumbnail_id = get_term_meta($child_category->term_id, 'thumbnail_id', true);
                            $image = wp_get_attachment_url($thumbnail_id);
                            echo '<li class="product-category">';
                            echo '<a class="home-category-item"  href="' . get_term_link($child_category) . '">';
                            if ($image) {
                                echo '<img src="' . esc_url($image) . '" alt="' . esc_attr($child_category->name) . '">';
                            }
                            echo '<h2>' . $child_category->name . '<p class="count" >' . $child_category->count . ' Sản phẩm</p>' . '</h2>';
                            echo '</a>';
                            echo '</li>';
                        }
                    }
                    echo '</div>';
                    echo '</div>';
                    echo '<p class="view-all">' . '<a href="' . get_term_link($parent_category) . '">>> Xem tất cả</a>' . '</p>';
                }
            }
            ?>
        </ul>
    </div>
</div>

<!-- Dự án đã góp án  -->
<div class="home-box-du-an">
    <div class="home-box-du-an-left">
        <h3>CÁC DỰ ÁN ĐÃ GÓP MẶT</h3>
        <div class="swiper-container">
            <div class="slideshow-container">
                <div class="slide active">
                    <a href="">
                        <h4>Dự án đường sắt trên cao Nhổn – Ga Hà nội – Nam hải</h4>
                        <img loading="lazy" src="<?= get_template_directory_uri() ?>/assets/images/banner_nho_1.jpg" title="Dự án đường sắt trên cao Nhổn – Ga Hà nội – Nam hải" alt="Dự án đường sắt trên cao Nhổn – Ga Hà nội – Nam hải">
                    </a>
                </div>
                <div class="slide">
                    <a href="">
                        <h4>Dự án VINHOMES OCEAN PARK</h4>
                        <img loading="lazy" src="<?= get_template_directory_uri() ?>/assets/images/banner_nho_2.jpg" title="Dự án VINHOMES OCEAN PARK" alt="Dự án VINHOMES OCEAN PARK">
                    </a>
                </div>
                <div class="slide">
                    <a href="">
                        <h4>Dự án cầu Nhật Tân</h4>
                        <img loading="lazy" src="<?= get_template_directory_uri() ?>/assets/images/banner_nho_3.jpg" title="Dự án cầu Nhật Tân" alt="Dự án cầu Nhật Tân">
                    </a>
                </div>

                <button class="prev" onclick="changeSlide(-1)">&#10094;</button>
                <button class="next" onclick="changeSlide(1)">&#10095;</button>
            </div>
        </div>
        <script>
            let slideIndex = 0;
            showSlides();

            function showSlides() {
                const slides = document.getElementsByClassName("slide");
                for (let i = 0; i < slides.length; i++) {
                    slides[i].style.display = "none";
                }
                slideIndex++;
                if (slideIndex >= slides.length) {
                    slideIndex = 0;
                }
                slides[slideIndex].style.display = "block";
            }

            function changeSlide(n) {
                const slides = document.getElementsByClassName("slide");
                slides[slideIndex].style.display = "none";
                slideIndex += n;
                if (slideIndex >= slides.length) {
                    slideIndex = 0;
                }
                if (slideIndex < 0) {
                    slideIndex = slides.length - 1;
                }
                slides[slideIndex].style.display = "block";
            }
        </script>
    </div>
    <div class="home-box-du-an-right">
        <h3>Tại sao bạn nên chọn bulong Nam Hải?</h3>
        <h4><span>1.</span>Chúng tôi luôn đặt tiêu chí phục vụ khách hàng lên hàng đầu</h4>
        <p>Toàn bộ đội ngũ nhân viên của chúng tôi thấu hiểu một điều rằng thành công của chúng tôi nằm trong những giá trị mà chúng tôi đem lại cho khách hàng. Chính vì lẽ đó, Bulong Nam Hải luôn cố gắng phát triển bền vững và không ngừng nâng cấp về chất lượng sản xuất.</p>
        <h4><span>2.</span>Chúng tôi là lựa chọn của nhiều các doanh nghiệp lớn và nhỏ</h4>
        <p>Bulong Nam Hải giúp các doanh nghiệp lớn và nhỏ tiết kiệm thời gian và chi phí của mình bằng cách cung cấp đa dạng các chủng loại bu lông – ốc vít inox đặc thù yêu cầu chính xác theo bản vẽ phục vụ cho các ngành: Giao thông, viễn thông, điện lực, cơ khí, đóng tàu, kết cấu nhà thép, nhiệt điện, lọc hóa dầu, cấp thoát nước, cơ điện lạnh, xi măng…</p>
        <h4><span>3.</span>Chúng tôi coi trọng mối quan hệ lâu dài</h4>
        <p>Hành trình phát triển của Công ty TNHH đầu tư thương mại và xuất nhập khẩu Nam Hải chúng tôi bắt đầu bằng việc khởi tạo các mối quan hệ hợp tác tin tưởng – và hoàn thành công việc bằng việc duy trì mối quan hệ dài lâu qua chính sách hỗ trợ, hậu mãi tạo dựng niềm tin cho khách hàng.</p>

    </div>
</div>
<!-- Banner 1  -->
<div class="home-box-banner-1">
    <div class="home-box-banner-1-left">
        <img loading="lazy" src="<?= get_template_directory_uri() ?>/assets/images/bbbbb.jpg" title="Keyweb Demo" alt="Keyweb Demo">
        <a href="#">Xem chi tiết tiêu chuẩn kỹ thuật</a>
    </div>
    <div class="home-box-banner-1-right">
        <img loading="lazy" src="<?= get_template_directory_uri() ?>/assets/images/hhhh.jpg" title="Keyweb Demo" alt="Keyweb Demo">
        <a href="#">Tư Vấn Báo Giá: 0977260612</a>
    </div>
</div>

<!-- Kinh nghiệm hay  -->
<div class="home-box-tin-tuc">
    <h3>KINH NGHIỆM HAY</h3>
    <img loading="lazy" src="<?= get_template_directory_uri() ?>/assets/images/kinh-nghiem-hay.jpg" title="KINH NGHIỆM HAY" alt="KINH NGHIỆM HAY">
    <div class="home-box-tin-tuc-right">

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

                echo '<div class="tin-tuc-item">';
                echo '<a href="' . get_permalink() . '">';
                echo '<h4>' . get_the_title() . '</h4>';
                echo '<strong>' . get_the_date('d/m/Y') . '</strong>';
                echo  get_the_excerpt();
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


<!-- banner 2 -->
<div class="home-box-banner-2">
    <img loading="lazy" src="<?= get_template_directory_uri() ?>/assets/images/banner-3.jpg" title="" alt="">
</div>

<!-- Khách hàng nói gì về chúng tôi -->
<div class="home-box-kh-danhgia">
    <h3>Khách hàng nói về chúng tôi</h3>
    <div class="home-inner-kh-danhgia">
        <div class="kh-danhgia-img">
            <img loading="lazy" src="<?= get_template_directory_uri() ?>/assets/images/khach-hang-1.jpg" title="<b>TIẾN TỚI</b> / KỸ SƯ XÂY DỰNG" alt="<b>TIẾN TỚI</b> / KỸ SƯ XÂY DỰNG">
        </div>
        <div class="kh-danhgia-content">
            "Chúng tôi chọn bu lông Nam Hải vì sản phẩm rất bền và đẹp, bu lông đa dạng chủng loại và kích thước. Đặc biệt hơn sản xuất theo bản vẽ rất chính xác, đạt tiêu chuẩn về chất lượng.vì vậy khi chọn Nam Hải chúng tôi hoàn toàn yên tâm về chất lượng bu lông,cũng như giá thành rất hợp lý. Tôi rất hài lòng!"
        </div>
        <div class="kh-danhgia-name">
            <b>TIẾN TỚI</b> / KỸ SƯ XÂY DỰNG
        </div>
    </div>
    <div class="home-inner-kh-danhgia">
        <div class="kh-danhgia-img">
            <img loading="lazy" src="<?= get_template_directory_uri() ?>/assets/images/khach-hang-2.jpg" title="<b>HẢI NAM</b> / Kỹ sư công trình biển" alt="<b>HẢI NAM</b> / Kỹ sư công trình biển">
        </div>
        <div class="kh-danhgia-content">
            "Là đơn vị uy tín trên thị trường được các đối tác lớn lựa chọn sản phẩm bulong inox các loại. Từ khi chọn bu lông Nam Hải chúng tôi luôn yên tâm về chất lượng sản phẩm cũng như tiến độ cung cấp hàng hóa, giao hàng nhanh, nhân viên rất nhiệt tình và thân thiện. Chúc cho bu lông Nam Hải ngày càng lớn mạnh!"
        </div>
        <div class="kh-danhgia-name">
            <b>HẢI NAM</b> / Kỹ sư công trình biển
        </div>
    </div>
    <div class="home-inner-kh-danhgia">
        <div class="kh-danhgia-img">
            <img loading="lazy" src="<?= get_template_directory_uri() ?>/assets/images/khach-hang-3.jpg" title="<b>HOÀNG MINH</b> / GĐ THIẾT BỊ ĐIỆN SINO" alt="<b>HOÀNG MINH</b> / GĐ THIẾT BỊ ĐIỆN SINO">
        </div>
        <div class="kh-danhgia-content">
            "Chúng tôi luôn mang sản phẩm tốt nhất đến tay khách hàng bởi vậy việc chọn một nhà cung cấp tin cậy như bu lông Nam Hải là đương nhiên. Tiêu chuẩn bu lông chính xác, bu lông ốc vít đa dạng chủng loại và kích thước. Hàng hóa luôn sẵn kho, nhập khẩu chính hãng không qua trung gian nên giá rất tốt. Cảm ơn các bạn!"
        </div>
        <div class="kh-danhgia-name">
            <b>HOÀNG MINH</b> / GĐ THIẾT BỊ ĐIỆN SINO
        </div>
    </div>
</div>


<div class="home-box-kh-thanthiet">
    <h3>KHÁCH HÀNG THÂN THIẾT</h3>
    <div class="swiper-container tt">
        <div class="swiper-wrapper">
            <div class="swiper-slide"><img src="<?= get_template_directory_uri() ?>/assets/images/logo-doi-tac-nam-hai.jpg" alt="" srcset=""></div>
            <div class="swiper-slide"><img src="<?= get_template_directory_uri() ?>/assets/images/LOGO-HASKY.jpg" alt="" srcset=""></div>
            <div class="swiper-slide"><img src="<?= get_template_directory_uri() ?>/assets/images/logo-Hawee.jpg" alt="" srcset=""></div>
            <div class="swiper-slide"><img src="<?= get_template_directory_uri() ?>/assets/images/LOGO-HOA-BINH.jpg" alt="" srcset=""></div>
            <div class="swiper-slide"><img src="<?= get_template_directory_uri() ?>/assets/images/logo-lilama.jpg" alt="" srcset=""></div>
            <div class="swiper-slide"><img src="<?= get_template_directory_uri() ?>/assets/images/VINACONEX.jpg" alt="" srcset=""></div>
            <div class="swiper-slide"><img src="<?= get_template_directory_uri() ?>/assets/images/logo-doi-tac-nam-hai.jpg" alt="" srcset=""></div>
            <div class="swiper-slide"><img src="<?= get_template_directory_uri() ?>/assets/images/LOGO-HASKY.jpg" alt="" srcset=""></div>
            <div class="swiper-slide"><img src="<?= get_template_directory_uri() ?>/assets/images/logo-Hawee.jpg" alt="" srcset=""></div>
            <div class="swiper-slide"><img src="<?= get_template_directory_uri() ?>/assets/images/LOGO-HOA-BINH.jpg" alt="" srcset=""></div>
            <div class="swiper-slide"><img src="<?= get_template_directory_uri() ?>/assets/images/logo-lilama.jpg" alt="" srcset=""></div>
            <div class="swiper-slide"><img src="<?= get_template_directory_uri() ?>/assets/images/VINACONEX.jpg" alt="" srcset=""></div>
        </div>
        <!-- Add Arrows -->
        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>
    </div>
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    <script>
        var swiper = new Swiper('.tt', {
            slidesPerView: 6,
            spaceBetween: 10,
            loop: true,
            navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev',
            },
            breakpoints: {
                1024: {
                    slidesPerView: 6,
                    slidesPerGroup: 6,
                },
                768: {
                    slidesPerView: 5,
                    slidesPerGroup: 5,
                },
                480: {
                    slidesPerView: 4,
                    slidesPerGroup: 4,
                },
                20: {
                    slidesPerView: 3,
                    slidesPerGroup: 3,
                }
            },
        });
    </script>


</div>

<?php get_footer(); ?>