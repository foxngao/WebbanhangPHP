<?php include 'app/views/shares/header.php'; ?>
<div class="container mt-5">
    <h1 class="form-title animate__animated animate__bounceInDown">Thanh toán</h1>
    <form method="POST" action="/Product/processCheckout" class="product-form">
        <div class="form-group">
            <label for="name">Họ tên:</label>
            <input type="text" id="name" name="name" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="phone">Số điện thoại:</label>
            <input type="text" id="phone" name="phone" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="address">Địa chỉ:</label>
            <textarea id="address" name="address" class="form-control" required></textarea>
        </div>
        <button type="submit" class="btn btn-submit">Thanh toán</button>
    </form>
    <a href="/Product/cart" class="btn btn-back mt-3">Quay lại giỏ hàng</a>
</div>
<?php include 'app/views/shares/footer.php'; ?>

<style>
body {
    background: linear-gradient(135deg, #ff6b6b, #4ecdc4);
    font-family: 'Poppins', sans-serif;
    min-height: 100vh;
    overflow-x: hidden;
}

.form-title {
    font-size: 2.5rem;
    color: #fff;
    text-align: center;
    text-shadow: 2px 2px 10px rgba(0, 0, 0, 0.3);
    margin-bottom: 30px;
    letter-spacing: 2px;
}

.container {
    padding: 20px;
}

.product-form {
    background: rgba(255, 255, 255, 0.95);
    padding: 30px;
    border-radius: 20px;
    box-shadow: 0 10px 40px rgba(0, 0, 0, 0.2);
    max-width: 600px;
    margin: 0 auto;
    animation: slideUp 0.8s ease-out;
}

.form-group {
    margin-bottom: 20px;
    position: relative;
}

.form-group label {
    font-size: 1.1rem;
    color: #2c3e50;
    font-weight: 600;
    margin-bottom: 8px;
    display: block;
    transition: all 0.3s ease;
}

.form-control {
    width: 100%;
    padding: 12px;
    font-size: 1rem;
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

textarea.form-control {
    min-height: 100px;
    resize: vertical;
}

.btn-submit {
    background: #ff6b6b;
    color: #fff;
    font-size: 1.2rem;
    font-weight: bold;
    padding: 12px;
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

.btn-back {
    display: block;
    text-align: center;
    background: #4ecdc4;
    color: #fff;
    font-size: 1.1rem;
    padding: 10px;
    border-radius: 50px;
    text-decoration: none;
    transition: all 0.4s ease;
    box-shadow: 0 5px 20px rgba(78, 205, 196, 0.5);
}

.btn-back:hover {
    background: #45b7aa;
    transform: translateY(-5px);
    box-shadow: 0 10px 30px rgba(69, 183, 170, 0.7);
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
    .form-title {
        font-size: 2rem;
    }
    .product-form {
        padding: 20px;
    }
    .btn-submit, .btn-back {
        font-size: 1rem;
        padding: 8px;
    }
}
</style>