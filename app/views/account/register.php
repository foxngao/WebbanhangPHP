<?php include 'app/views/shares/header.php'; ?>
<section class="vh-100 gradient-custom">
    <div class="container py-5 h-100">
        <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col-12 col-md-8 col-lg-6 col-xl-5">
                <div class="card product-form">
                    <div class="card-body p-5 text-center">
                        <h2 class="form-title-login">Đăng ký</h2>
                        <p class="text-muted mb-5">Vui lòng điền thông tin để tạo tài khoản mới!</p>
                        <?php
                        if (isset($errors)) {
                            echo '<div class="alert alert-danger animate__animated animate__shakeX">';
                            echo "<ul>";
                            foreach ($errors as $err) {
                                echo "<li>" . htmlspecialchars($err, ENT_QUOTES, 'UTF-8') . "</li>";
                            }
                            echo "</ul>";
                            echo "</div>";
                        }
                        ?>
                        <form class="user" action="/account/save" method="post" onsubmit="return validateForm();">
                            <div class="form-group row">
                                <div class="col-sm-6 mb-3 mb-sm-0 form-field">
                                    <label class="form-label" for="username">Tên ĐN</label>
                                    <input type="text" class="form-control form-control-user" id="username" name="username" placeholder="Tên đăng nhập" required>
                                </div>
                                <div class="col-sm-6 form-field">
                                    <label class="form-label" for="fullname">Họ và tên</label>
                                    <input type="text" class="form-control form-control-user" id="fullname" name="fullname" placeholder="Họ và tên" required>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-6 mb-3 mb-sm-0 form-field">
                                    <label class="form-label" for="password">Mật khẩu</label>
                                    <input type="password" class="form-control form-control-user" id="password" name="password" placeholder="Mật khẩu" required>
                                </div>
                                <div class="col-sm-6 form-field">
                                    <label class="form-label" for="confirmpassword">Xác nhận MK</label>
                                    <input type="password" class="form-control form-control-user" id="confirmpassword" name="confirmpassword" placeholder="Xác nhận mật khẩu" required>
                                </div>
                            </div>
                            <div class="form-group text-center mt-4">
                                <button class="btn btn-submit btn-lg px-5" type="submit">Đăng ký</button>
                            </div>
                            <div class="mt-4">
                                <p class="mb-0">Đã có tài khoản? <a href="/account/login" class="text-muted fw-bold">Đăng nhập</a></p>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<script>
function validateForm() {
    const password = document.getElementById('password').value;
    const confirmPassword = document.getElementById('confirmpassword').value;

    if (password !== confirmPassword) {
        alert('Mật khẩu và xác nhận mật khẩu không khớp!');
        return false;
    }
    return true;
}
</script>

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

.form-group.row {
    display: flex;
    justify-content: space-between;
    align-items: stretch; /* Đảm bảo các cột có chiều cao bằng nhau */
    gap: 20px; /* Khoảng cách giữa các cột */
    margin-bottom: 25px;
}

.form-field {
    flex: 1; /* Đảm bảo các cột có kích thước bằng nhau */
    display: flex;
    flex-direction: column;
}

.form-group label {
    font-size: 1.2rem;
    color: #2c3e50;
    font-weight: 600;
    margin-bottom: 10px;
    text-align: left;
}

.form-control {
    width: 100%;
    padding: 15px;
    font-size: 1.1rem;
    border: 2px solid #ddd;
    border-radius: 10px;
    transition: all 0.4s ease;
    background: #f9f9f9;
    box-sizing: border-box;
    flex: 1; /* Đảm bảo input chiếm toàn bộ không gian còn lại trong cột */
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

.alert-danger {
    background: rgba(231, 76, 60, 0.1);
    border: 1px solid #e74c3c;
    border-radius: 10px;
    padding: 15px;
    margin-bottom: 20px;
}

.alert-danger ul {
    list-style: none;
    padding: 0;
    margin: 0;
}

.alert-danger li {
    color: #e74c3c;
    font-size: 1rem;
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
    .form-group.row {
        flex-direction: column; /* Xếp dọc trên mobile */
        gap: 10px;
    }
    .form-field {
        width: 100%; /* Đảm bảo các trường chiếm toàn bộ chiều rộng trên mobile */
    }
}
</style>