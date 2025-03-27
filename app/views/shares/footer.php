</div>
    <footer class="footer">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-4 col-md-12 mb-4">
                    <h5 class="footer-title">FoxSNAC</h5>
                    <p class="footer-text">Thương hiệu ăn vặt - Mang đến những sản phẩm chất Ngon Miệng đến mọi người.</p>
                    <p>Hotline: 035 979 0618</p>
                    <p>Email: minhtienst44@gmail.com</p>
                </div>
                <div class="col-lg-4 col-md-6 mb-4 text-center">
                    <h5 class="footer-title">Liên kết nhanh</h5>
                    <ul class="footer-links">
                        <li><a href="/Product/">Danh sách sản phẩm</a></li>
                        <?php if (SessionHelper::isAdmin()): ?>
                        <li><a href="/Product/add">Thêm sản phẩm</a></li>
                        <?php endif; ?>
                        <li><a href="/Product/cart">Giỏ hàng</a></li>
                        <li><a href="/account/register">Đăng ký tài khoản</a></li>
                    </ul>
                </div>
                <div class="col-lg-4 col-md-6 mb-4 text-center">
                    <h5 class="footer-title">Kết nối với chúng tôi</h5>
                    <div class="social-icons">
                        <a href="#" class="social-icon"><i class="fab fa-facebook-f"></i></a>
                        <a href="#" class="social-icon"><i class="fab fa-twitter"></i></a>
                        <a href="#" class="social-icon"><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-bottom">
            <p>© 2025 FoxSNAC. All rights reserved.</p>
        </div>
    </footer>

    <style>
        .footer {
            background-color: #333;
            color: #fff;
            padding: 50px 0 0;
        }

        .footer-title {
            font-size: 1.5rem;
            font-weight: bold;
            text-transform: uppercase;
            margin-bottom: 20px;
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
            transition: color 0.3s ease;
        }

        .footer-links a:hover {
            color: #ff0000;
        }

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
            color: #333;
            transition: all 0.4s ease;
        }

        .social-icon:hover {
            background: #ff0000;
            color: #fff;
        }

        .footer-bottom {
            background: #222;
            text-align: center;
            padding: 15px 0;
            margin-top: 30px;
        }
    </style>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>