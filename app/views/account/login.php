<?php include 'app/views/shares/header.php'; ?>
<section class="vh-100 gradient-custom">
    <div class="container py-5 h-100">
        <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col-12 col-md-8 col-lg-6 col-xl-5">
                <div class="card product-form">
                    <div class="card-body p-5 text-center">
                        <form action="/account/checklogin" method="post">
                            <div class="mb-md-5 mt-md-4 pb-5">
                                <h2 class="form-title-login">Đăng nhập</h2>
                                <p class="text-muted mb-5">Vui lòng nhập tên đăng nhập và mật khẩu của bạn!</p>
                                <div class="form-group mb-4">
                                    <label class="form-label" for="username">Tên đăng nhập</label>
                                    <input type="text" name="username" id="username" class="form-control form-control-lg" required />
                                </div>
                                <div class="form-group mb-4">
                                    <label class="form-label" for="password">Mật khẩu</label>
                                    <input type="password" name="password" id="password" class="form-control form-control-lg" required />
                                </div>
                                <p class="small mb-4 pb-lg-2"><a class="text-muted" href="#!">Quên mật khẩu?</a></p>
                                <button class="btn btn-submit btn-lg px-5" type="submit">Đăng nhập</button>
                                <div class="social-login d-flex justify-content-center text-center mt-4 pt-1">
                                    <a href="#!" class="social-icon">
                                        <img src="/public/images/social-icons/facebook.png" alt="Facebook" class="social-icon-img">
                                    </a>
                                    <a href="#!" class="social-icon">
                                        <img src="/public/images/social-icons/twitter.png" alt="Twitter" class="social-icon-img">
                                    </a>
                                    <a href="#!" class="social-icon">
                                        <img src="/public/images/social-icons/google.png" alt="Google" class="social-icon-img">
                                    </a>
                                </div>
                                <div class="mt-4">
                                    <p class="mb-0">Chưa có tài khoản? <a href="/account/register" class="text-muted fw-bold">Đăng ký</a></p>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<?php include 'app/views/shares/footer.php'; ?>

<style>
/* CSS */
body {
    background: linear-gradient(135deg, #ff6b6b, #4ecdc4);
    font-family: 'Poppins', sans-serif;
    min-height: 100vh;
    overflow-x: hidden;
}

.gradient-custom {
    background: linear-gradient(135deg, #ff6b6b, #4ecdc4);
}

.container {
    padding: 20px;
}

.product-form {
    background: rgba(255, 255, 255, 0.95);
    border-radius: 20px;
    box-shadow: 0 10px 40px rgba(0, 0, 0, 0.2);
    animation: slideUp 0.8s ease-out;
}

.form-title-login {
    font-size: 2.5rem;
    color: #2c3e50;
    text-align: center;
    margin-bottom: 20px;
    letter-spacing: 1.5px;
}

.form-group {
    margin-bottom: 25px;
    position: relative;
}

.form-group label {
    font-size: 1.2rem;
    color: #2c3e50;
    font-weight: 600;
    margin-bottom: 10px;
    display: block;
    transition: all 0.3s ease;
}

.form-control {
    width: 100%;
    padding: 15px;
    font-size: 1.1rem;
    border: 2px solid #ddd;
    border-radius: 10px;
    transition: all 0.4s ease;
    background: #f9f9f9;
}

.form-control:focus {
    border-color: #ff6b6b;
    box-shadow: 0 0 15px rgba(255, 107, 107, 0.5);
    outline: none;
    background: #fff;
}

.btn-submit {
    background: #ff6b6b;
    color: #fff;
    font-size: 1.3rem;
    font-weight: bold;
    padding: 15px;
    border: none;
    border-radius: 50px;
    width: 100%;
    cursor: pointer;
    transition: all 0.4s ease;
    box-shadow: 0 5px 20px rgba(255, 107, 107, 0.5);
}

.btn-submit:hover {
    background: #e74c3c;
    transform: translateY(-5px);
    box-shadow: 0 10px 30px rgba(231, 76, 60, 0.7);
}

/* Mạng xã hội */
.social-login {
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
    width: 70%;
    height: 70%;
    object-fit: contain;
}

.social-icon:hover {
    background: #ffd700;
    transform: rotate(360deg) scale(1.2);
}

@keyframes slideUp {
    from {
        opacity: 0;
        transform: translateY(50px);
    }
    to {
        opacity: 1;
        transform: translateY(0);
    }
}

@media (max-width: 768px) {
    .form-title-login {
        font-size: 2rem;
    }
    .product-form {
        padding: 20px;
    }
    .btn-submit {
        font-size: 1.1rem;
        padding: 10px;
    }
    .social-icon {
        width: 40px;
        height: 40px;
    }
    .social-icon-img {
        width: 70%;
        height: 70%;
    }
}
</style>