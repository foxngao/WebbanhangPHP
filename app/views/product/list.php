<?php include 'app/views/shares/header.php'; ?>
<div class="container mt-5">
    <h1 class="form-title animate__animated animate__bounceInDown">Danh sách sản phẩm</h1>
    <a href="/Product/add" class="btn btn-submit mb-4">Thêm sản phẩm mới</a>
    <ul class="list-group product-list">
        <?php foreach ($products as $product): ?>
        <li class="list-group-item product-item">
            <h2><a href="/Product/show/<?php echo $product->id; ?>" class="product-link"><?php echo htmlspecialchars($product->name, ENT_QUOTES, 'UTF-8'); ?></a></h2>
            <?php if ($product->image): ?>
            <img src="/<?php echo $product->image; ?>" alt="Product Image" style="max-width: 100px;">
            <?php endif; ?>
            <p><?php echo htmlspecialchars($product->description, ENT_QUOTES, 'UTF-8'); ?></p>
            <p>Giá: <?php echo htmlspecialchars($product->price, ENT_QUOTES, 'UTF-8'); ?> VND</p>
            <p>Danh mục: <?php echo htmlspecialchars($product->category_name, ENT_QUOTES, 'UTF-8'); ?></p>
            <div class="button-group">
                <a href="/Product/edit/<?php echo $product->id; ?>" class="btn btn-back">Sửa</a>
                <a href="/Product/delete/<?php echo $product->id; ?>" class="btn btn-danger" onclick="return confirm('Bạn có chắc chắn muốn xóa sản phẩm này?');">Xóa</a>
                <a href="/Product/addToCart/<?php echo $product->id; ?>" class="btn btn-submit">Thêm vào giỏ hàng</a>
            </div>
        </li>
        <?php endforeach; ?>
    </ul>
</div>
<?php include 'app/views/shares/footer.php'; ?>

<style>
/* Style cho trang chi tiết sản phẩm */
.product-list {
    list-style: none;
    padding: 0;
}

.product-item {
    background: rgba(255, 255, 255, 0.95);
    padding: 30px;
    border-radius: 20px;
    box-shadow: 0 10px 40px rgba(0, 0, 0, 0.2);
    margin-bottom: 20px;
    animation: slideUp 0.8s ease-out;
    transition: transform 0.3s ease;
}

.product-item:hover {
    transform: translateY(-10px);
}

.product-link {
    color: #2c3e50;
    text-decoration: none;
    font-weight: 600;
}

.product-link:hover {
    color: #ff6b6b;
}

.button-group {
    display: flex;
    gap: 10px;
    margin-top: 15px;
}

.btn-danger {
    background: #e74c3c;
    color: #fff;
    padding: 10px;
    border-radius: 50px;
    transition: all 0.4s ease;
}

.btn-danger:hover {
    background: #c0392b;
    transform: translateY(-5px);
    box-shadow: 0 10px 30px rgba(231, 76, 60, 0.7);
}

/* Style cho danh sách sản phẩm */
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

.btn-submit {
    background: #ff6b6b;
    color: #fff;
    font-size: 1.3rem;
    font-weight: bold;
    padding: 15px;
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
    .product-item {
        padding: 20px;
    }
    .btn-submit, .btn-back {
        font-size: 1.1rem;
        padding: 10px;
    }
}
</style>