<footer class="footer">
    <div class="container">
        <div class="row align-items-center">
            <!-- Cột thông tin chính -->
            <div class="col-lg-4 col-md-12 mb-4">
                <h5 class="footer-title">QUẢN LÝ SẢN PHẨM</h5>
                <p class="footer-text">
                    Hệ thống quản lý sản phẩm giúp bạn theo dõi và cập nhật thông tin sản phẩm dễ dàng.
                </p>
                <h5 class="footer-title">Thông tin liên hệ:</h5>
                <p>hotline: 0359790618</p>
                <P>Email: minhtienst77@gmail.com</P>
            </div>
            <!-- Cột liên kết nhanh -->
            <div class="col-lg-4 col-md-6 mb-4 text-center">
                <h5 class="footer-title">LIÊN KẾT NHANH</h5>
                <ul class="footer-links">
                    <li><a href="/Product/">Danh sách sản phẩm</a></li>
                    <?php if (SessionHelper::isAdmin()): ?>
                    <li><a href="/Product/add">Thêm sản phẩm</a></li>
                    <?php endif; ?>
                    <li><a href="/Product/cart">Giỏ hàng</a></li>
                    <li><a href="/account/register">Đăng ký tài khoản</a></li>
                </ul>
            </div>
            <!-- Cột mạng xã hội -->
            <div class="col-lg-4 col-md-6 mb-4 text-center">
                <h5 class="footer-title">KẾT NỐI VỚI CHÚNG TÔI</h5>
                <div class="social-icons">
                    <a href="#" class="social-icon">
                        <img src="/public/images/social-icons/facebook.png" alt="Facebook" class="social-icon-img">
                    </a>
                    <a href="#" class="social-icon">
                        <img src="/public/images/social-icons/twitter.png" alt="Twitter" class="social-icon-img">
                    </a>
                    <a href="#" class="social-icon">
                        <img src="/public/images/social-icons/instagram.png" alt="Instagram" class="social-icon-img">
                    </a>
                </div>
            </div>
        </div>
    </div>
    <!-- Dòng bản quyền -->
    <div class="footer-bottom">
        <p>© 2025 Quản lý sản phẩm. All rights reserved.</p>
    </div>
</footer>

<style>
/* Reset và thiết lập chung */
.footer {
    background: linear-gradient(135deg, #ff6b6b, #4ecdc4);
    padding: 50px 0 0;
    color: #fff;
    position: relative;
    overflow: hidden;
    margin-top: 40px;
}

.footer .container {
    position: relative;
    z-index: 1;
}

.footer-title {
    font-size: 1.5rem;
    font-weight: bold;
    text-transform: uppercase;
    margin-bottom: 20px;
    letter-spacing: 1.5px;
    text-shadow: 1px 1px 5px rgba(0, 0, 0, 0.3);
}

.footer-text {
    font-size: 1rem;
    line-height: 1.6;
    opacity: 0.9;
}

.footer-links {
    list-style: none;
    padding: 0;
}

.footer-links li {
    margin-bottom: 15px;
}

.footer-links a {
    color: #fff;
    text-decoration: none;
    font-size: 1.1rem;
    transition: all 0.3s ease;
    position: relative;
}

.footer-links a:hover {
    color: #ffd700;
    padding-left: 10px;
}

.footer-links a::before {
    content: '→';
    position: absolute;
    left: -20px;
    opacity: 0;
    transition: all 0.3s ease;
}

.footer-links a:hover::before {
    opacity: 1;
    left: -10px;
}

/* Mạng xã hội */
.social-icons {
    display: flex;
    justify-content: center;
    gap: 20px;
}

.social-icon {
    display: inline-flex;
    align-items: center;
    justify-content: center;
    width: 50px;
    height: 50px;
    background: #fff;
    border-radius: 50%;
    transition: all 0.4s ease;
    box-shadow: 0 5px 15px rgba(0, 0, 0, 0.2);
}

.social-icon-img {
    width: 70%; /* Giảm kích thước hình ảnh để vừa khung */
    height: 70%; /* Đảm bảo tỷ lệ hình ảnh */
    object-fit: contain; /* Giữ tỷ lệ hình ảnh mà không bị méo */
}

.social-icon:hover {
    background: #ffd700;
    transform: rotate(360deg) scale(1.2);
}

.footer-bottom {
    background: rgba(0, 0, 0, 0.8);
    text-align: center;
    padding: 15px 0;
    margin-top: 30px;
}

.footer-bottom p {
    margin: 0;
    font-size: 1rem;
    opacity: 0.9;
}

.footer::before {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: radial-gradient(circle, rgba(255, 255, 255, 0.2) 0%, transparent 70%);
    opacity: 0.3;
    z-index: 0;
    animation: glow 5s infinite alternate;
}

@keyframes glow {
    0% { transform: scale(1); opacity: 0.3; }
    100% { transform: scale(1.2); opacity: 0.5; }
}

@media (max-width: 768px) {
    .footer-title {
        font-size: 1.3rem;
    }
    .footer-text {
        font-size: 0.9rem;
    }
    .footer-links a {
        font-size: 1rem;
    }
    .social-icon {
        width: 40px;
        height: 40px;
    }
    .social-icon-img {
        width: 70%; /* Giảm kích thước hình ảnh trên mobile */
        height: 70%;
    }
}
</style>