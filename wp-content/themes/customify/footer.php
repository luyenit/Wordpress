<?php

/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package customify
 */

?>

</div><!-- #container -->


<footer class="full-row full-footer">
    <div class="inner-footer inner-container">
        <div class="footer-box footer-box-1">
            <h2>CÔNG TY TNHH ĐẦU TƯ TM &amp; XNK NAM HẢI</h2>
            <div class="footer-content">
                <p><i class="fa-solid fa-house"></i>Địa chỉ: Số nhà 1037 Đường Giải Phóng, Phường Thịnh Liệt, Quận Hoàng Mai, TP. Hà Nội</p>
                <p><i class="fa-solid fa-phone"></i>Tel: 0977.260.612</p>
                <p><i class="fa-solid fa-envelope"></i>Email: Sales@namhaiinox.com.vn</p>
                <p><i class="fa-solid fa-globe"></i>Website: www.bulongnamhai.com</p>
            </div>
        </div>
        <div class="footer-box footer-box-2">
            <h2>CHÍNH SÁCH BÁN HÀNG</h2>
            <div class="footer-content">
                <ul id="footer-menu" class="menu">
                    <li id="menu-item-181" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-181"><a href="#">Chính sách thanh toán</a></li>
                    <li id="menu-item-182" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-182"><a href="#">Chính sách vận chuyển</a></li>
                    <li id="menu-item-183" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-183"><a href="#">Chính sách bảo hành</a></li>
                    <li id="menu-item-184" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-184"><a href="#">Chính sách đối/ trả và hoàn tiền</a></li>
                    <li id="menu-item-185" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-185"><a href="#">Chính sách bảo mật thông tin</a></li>
                </ul>
            </div>
        </div>
        <div class="footer-box footer-box-3">
            <h2>BẢN ĐỒ</h2>
            <div class="footer-content">
                <iframe srckw="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3724.0561850082076!2d105.7829330149188!3d21.030437785997403!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x313454ac865806f3%3A0xe622b11fb8df6b87!2sC%C3%B4ng+ty+TNHH+KEYSKY!5e0!3m2!1svi!2s!4v1558230378876!5m2!1svi!2s" width="100%" frameborder="0" style="border:0" allowfullscreen="" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3724.0561850082076!2d105.7829330149188!3d21.030437785997403!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x313454ac865806f3%3A0xe622b11fb8df6b87!2sC%C3%B4ng+ty+TNHH+KEYSKY!5e0!3m2!1svi!2s!4v1558230378876!5m2!1svi!2s"></iframe>
            </div>
        </div>
        <div class="footer-box footer-box-4">
            <h2>KẾT NỐI VỚI CHÚNG TÔI</h2>
            <div class="footer-content">
                <a href="#"><i class="fa-brands fa-facebook-f"></i>Facebook</a>
                <a href="#"><i class="fa-brands fa-youtube"></i>Youtube</a>
                <a href="#"><i class="fa-brands fa-twitter"></i>Twitter</a>
                <a href="#"><i class="fa-brands fa-instagram"></i>Instagram</a>
                <a class="link_bct" href="#"><img loading="lazy" src="<?= get_template_directory_uri() ?>/assets/images/dathongbao.png" title="bct" alt="bct"></a>
            </div>
        </div>
    </div>
</footer>
<div class="full-row full-footer-bottom">
    <div class="inner-footer-bottom inner-container">
        <div class="footer-bottom left-footer-bottom">
            Copyright 2019 © Bulông Nam Hải </div>
        <div class="footer-bottom mid-footer-bottom">
            <a href="">
                <img loading="lazy" class="dmca" src="<?= get_template_directory_uri() ?>/assets/images/dmca.png" title="dmca" alt="dmca">
            </a>
        </div>
        <div class="footer-bottom right-footer-bottom">
            <a class="design-by" href="https://keyweb.vn/">Thiết kế website bởi Keyweb.vn</a>
        </div>
    </div>
</div>
<div id="bttop" title="Lên đầu trang" class="fa fa-chevron-up" style="display: block;">
    <script type="text/javascript">
        
        // Get the button
        let scrollTopBtn = document.getElementById("bttop");

        // When the user scrolls down 20px from the top of the document, show the button
        window.onscroll = function() {
            if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
                scrollTopBtn.style.display = "block";
            } else {
                scrollTopBtn.style.display = "none";
            }
        };

        // When the user clicks on the button, scroll to the top of the document
        scrollTopBtn.addEventListener('click', function() {
            window.scrollTo({
                top: 0,
                behavior: 'smooth'
            });
        });
    </script>
</div>
<?php wp_footer(); ?>

</body>

</html>