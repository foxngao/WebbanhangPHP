<?php include 'app/views/shares/header.php'; ?>
<div class="container mt-5">
    <h1 class="form-title animate__animated animate__bounceInDown">Chi tiết sản phẩm</h1>
    <div class="product-detail card">
        <?php if ($product): ?>
            <div class="row">
                <div class="col-md-6">
                    <?php if ($product->image): ?>
                        <img src="/<?php echo htmlspecialchars($product->image, ENT_QUOTES, 'UTF-8'); ?>" class="img-fluid rounded product-image" alt="<?php echo htmlspecialchars($product->name, ENT_QUOTES, 'UTF-8'); ?>">
                    <?php else: ?>
                        <img src="/images/no-image.png" class="img-fluid rounded product-image" alt="Không có ảnh">
                    <?php endif; ?>
                </div>
                <div class="col-md-6">
                    <h3 class="product-title"><?php echo htmlspecialchars($product->name, ENT_QUOTES, 'UTF-8'); ?></h3>
                    <p class="product-desc"><?php echo nl2br(htmlspecialchars($product->description, ENT_QUOTES, 'UTF-8')); ?></p>
                    <p class="product-price">💰 <?php echo number_format($product->price, 0, ',', '.'); ?> VND</p>
                    <p><strong>Danh mục:</strong> <span class="badge bg-info text-white"><?php echo !empty($product->category_name) ? htmlspecialchars($product->category_name, ENT_QUOTES, 'UTF-8') : 'Chưa có danh mục'; ?></span></p>
                    <div class="button-group mt-4">
                        <a href="/product/addToCart/<?php echo $product->id; ?>" class="btn btn-submit">➕ Thêm vào giỏ hàng</a>
                        <a href="/product" class="btn btn-back">Quay lại danh sách</a>
                    </div>
                </div>
            </div>
        <?php else: ?>
            <div class="alert alert-danger text-center animate__animated animate__shakeX">
                <h4>Không tìm thấy sản phẩm!</h4>
                <a href="/product/list" class="btn btn-back mt-2">Quay lại danh sách</a>
            </div>
        <?php endif; ?>
    </div>
</div>
<?php include 'app/views/shares/footer.php'; ?>
<style>
.product-detail {
    background: rgba(255, 255, 255, 0.95);
    padding: 30px;
    border-radius: 20px;
    box-shadow: 0 10px 40px rgba(0, 0, 0, 0.2);
    animation: slideUp 0.8s ease-out;
}

.product-image {
    max-width: 300px; /* Tăng kích thước hình ảnh */
    border-radius: 15px;
    transition: transform 0.3s ease;
    margin: 0 auto; /* Căn giữa hình ảnh */
    display: block;
}

.product-image:hover {
    transform: scale(1.05);
}

.product-title {
    font-size: 1.8rem; /* Giảm kích thước để cân đối */
    color: #2c3e50;
    margin-bottom: 10px;
}

.product-desc {
    color: #666;
    margin-bottom: 10px;
    font-size: 1rem;
}

.product-price {
    font-size: 1.5rem;
    color: #ff6b6b;
    font-weight: bold;
    margin-bottom: 10px;
}

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

.btn-submit {
    background: #ff6b6b;
    color: #fff;
    font-size: 1.1rem;
    font-weight: bold;
    padding: 10px 20px;
    border: none;
    border-radius: 50px;
    width: auto;
    cursor: pointer;
    transition: all 0.4s ease;
    box-shadow: 0 5px 20px rgba(255, 107, 107, 0.5);
    text-decoration: none;
    display: inline-block;
    text-align: center;
}

.btn-submit:hover {
    background: #e74c3c;
    transform: translateY(-5px);
    box-shadow: 0 10px 30px rgba(231, 76, 60, 0.7);
}

.btn-back {
    background: #4ecdc4;
    color: #fff;
    font-size: 1.1rem;
    padding: 10px 20px;
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
    .product-detail {
        padding: 20px;
    }
    .product-image {
        max-width: 200px;
    }
    .btn-submit, .btn-back {
        font-size: 1rem;
        padding: 8px 15px;
    }
}
</style>