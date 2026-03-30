<?php
/**
 * The template for displaying the footer.
 * Customized for Bear Shop - Anime Plushie.
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Thoát nếu truy cập trực tiếp
}
?>

<?php astra_content_bottom(); ?>
	</div> </div><?php astra_content_after(); ?>

<style>
    .custom-bear-footer {
        background-color: #f042b8; /* Màu hồng neon đồng bộ với ảnh sản phẩm */
        color: #ffffff;
        padding: 60px 0 30px;
        font-family: 'Segoe UI', Roboto, Helvetica, Arial, sans-serif;
        border-top-left-radius: 40px; /* Bo góc mềm mại kiểu gấu bông */
        border-top-right-radius: 40px;
        margin-top: 40px;
    }

    .footer-container {
        max-width: 1200px;
        margin: 0 auto;
        padding: 0 20px;
    }

    .footer-bear-grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
        gap: 40px;
    }

    .footer-title {
        font-size: 22px;
        font-weight: 700;
        margin-bottom: 25px;
        color: #ffffff;
        display: flex;
        align-items: center;
        gap: 10px;
    }

    .footer-column p {
        line-height: 1.6;
        font-size: 15px;
        color: #ffe0f5;
    }

    .footer-links {
        list-style: none;
        padding: 0;
        margin: 0;
    }

    .footer-links li {
        margin-bottom: 12px;
    }

    .footer-links a {
        color: #ffe0f5;
        text-decoration: none;
        transition: all 0.3s ease;
        display: inline-block;
    }

    .footer-links a:hover {
        color: #ffffff;
        transform: translateX(8px); /* Hiệu ứng trượt khi di chuột */
    }

    .contact-info {
        font-style: normal;
    }

    .contact-item {
        margin-bottom: 15px;
        display: flex;
        align-items: center;
        gap: 10px;
    }

    .copyright-bar {
        text-align: center;
        margin-top: 50px;
        padding-top: 20px;
        border-top: 1px solid rgba(255, 255, 255, 0.2);
        font-size: 13px;
        color: #ffd1f0;
    }

    /* Tối ưu cho điện thoại */
    @media (max-width: 768px) {
        .custom-bear-footer {
            text-align: center;
            border-top-left-radius: 30px;
            border-top-right-radius: 30px;
        }
        .footer-links a:hover {
            transform: none;
        }
    }
</style>

<footer id="colophon" class="site-footer custom-bear-footer" role="contentinfo">
    <div class="footer-container">
        <div class="footer-bear-grid">
            
            <div class="footer-column">
                <h4 class="footer-title">Bear Shop 🧸</h4>
                <p>Nơi những bé gấu bông Anime "siêu hot hit" tìm thấy tổ ấm mới. Chúng mình cam kết mang đến sự mềm mại và niềm vui cho từng khách hàng.</p>
            </div>

            <div class="footer-column">
                <h4 class="footer-title">Hỗ Trợ 🎀</h4>
                <ul class="footer-links">
                    <li><a href="/chinh-sach-doi-tra">Chính sách đổi trả</a></li>
                    <li><a href="/huong-dan-giat-gau">Bí kíp giặt gấu luôn thơm</a></li>
                    <li><a href="/he-thong-cua-hang">Hệ thống cửa hàng</a></li>
                    <li><a href="/tuyen-ctv">Tuyển CTV bán hàng</a></li>
                </ul>
            </div>

            <div class="footer-column">
                <h4 class="footer-title">Kết Nối ✨</h4>
                <div class="contact-info">
                    <div class="contact-item">📍 123 Đường Anime, Quận 1, HCM</div>
                    <div class="contact-item">📞 Hotline: 0900.XXX.XXX</div>
                    <div class="contact-item">✉️ Email: hi@bearshop.vn</div>
                </div>
            </div>

        </div>

        <div class="copyright-bar">
            &copy; <?php echo date('Y'); ?> Bear Shop - Thế giới gấu bông Anime. All rights reserved.
        </div>
    </div>
</footer>

<?php
	astra_footer_before();
	// astra_footer(); // Hook mặc định của Astra - Có thể tắt nếu muốn dùng hoàn toàn footer này
	astra_footer_after();
?>

	</div><?php
	astra_body_bottom();
	wp_footer(); // CỰC KỲ QUAN TRỌNG: Không được xóa vì đây là nơi load Plugin, Chatbot...
?>
	</body>
</html>