<?php include 'app/views/shares/header.php'; ?>
<div class="container mt-5">
    <h1 class="form-title animate__animated animate__bounceInDown">Xác nhận đơn hàng</h1>
    <div class="confirmation-message">
        <p>Cảm ơn bạn đã đặt hàng. Đơn hàng của bạn đã được xử lý thành công.</p>
    </div>
    <a href="/Product" class="btn btn-back mt-4">Tiếp tục mua sắm</a>
</div>
<?php include 'app/views/shares/footer.php'; ?>

<style>
.confirmation-message {
    background: rgba(255, 255, 255, 0.95);
    padding: 40px;
    border-radius: 20px;
    box-shadow: 0 10px 40px rgba(0, 0, 0, 0.2);
    text-align: center;
    max-width: 700px;
    margin: 0 auto;
    animation: slideUp 0.8s ease-out;
}

.confirmation-message p {
    font-size: 1.3rem;
    color: #2c3e50;
    margin-bottom: 20px;
}

/* Kế thừa style từ add.php */
body {
    background: linear-gradient(135deg, #ff6b6b, #4ecdc4);
    font-family: 'Poppins', sans-serif;
    min-height: 100vh;
    overflow-x: hidden;
}

.form-title {
    font-size: 3rem;
    color: #fff;
    text-align: center;
    text-shadow: 2px 2px 10px rgba(0, 0, 0, 0.3);
    margin-bottom: 40px;
    letter-spacing: 2px;
}

.container {
    padding: 20px;
}

.btn-back {
    display: block;
    text-align: center;
    background: #4ecdc4;
    color: #fff;
    font-size: 1.2rem;
    padding: 12px;
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
    .confirmation-message {
        padding: 20px;
    }
    .btn-back {
        font-size: 1.1rem;
        padding: 10px;
    }
}
</style>