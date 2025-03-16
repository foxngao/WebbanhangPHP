<?php include 'app/views/shares/header.php'; ?>
<div class="container mt-5">
    <h1 class="form-title animate__animated animate__bounceInDown">Giỏ hàng</h1>
    <?php if (!empty($cart)): ?>
    <ul class="list-group product-list">
        <?php 
        $totalAmount = 0;
        foreach ($cart as $id => $item): 
            $subtotal = $item['price'] * $item['quantity'];
            $totalAmount += $subtotal;
        ?>
        <li class="list-group-item product-item">
            <h2><?php echo htmlspecialchars($item['name'], ENT_QUOTES, 'UTF-8'); ?></h2>
            <?php if ($item['image']): ?>
            <img src="/<?php echo $item['image']; ?>" alt="Product Image" style="max-width: 100px;">
            <?php endif; ?>
            <p>Giá: <?php echo htmlspecialchars($item['price'], ENT_QUOTES, 'UTF-8'); ?> VND</p>
            <p>Số lượng: <?php echo htmlspecialchars($item['quantity'], ENT_QUOTES, 'UTF-8'); ?></p>
            <div class="quantity-controls">
                <a href="/Product/decreaseQuantity/<?php echo $id; ?>" class="btn quantity-btn">-</a>
                <span><?php echo htmlspecialchars($item['quantity'], ENT_QUOTES, 'UTF-8'); ?></span>
                <a href="/Product/increaseQuantity/<?php echo $id; ?>" class="btn quantity-btn">+</a>
            </div>
            <a href="/Product/removeFromCart/<?php echo $id; ?>" class="btn btn-danger">Xóa</a>
        </li>
        <?php endforeach; ?>
    </ul>
    <p class="total-amount">Tổng tiền: <?php echo number_format($totalAmount, 0, ',', '.'); ?> VND</p>
    <?php else: ?>
    <p class="empty-cart">Giỏ hàng của bạn đang trống.</p>
    <?php endif; ?>
    <div class="button-group mt-4">
        <a href="/Product" class="btn btn-back">Tiếp tục mua sắm</a>
        <a href="/Product/checkout" class="btn btn-submit">Thanh Toán</a>
    </div>
</div>
<?php include 'app/views/shares/footer.php'; ?>

<style>
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

.quantity-controls {
    display: flex;
    align-items: center;
    gap: 10px;
    margin: 15px 0;
}

.quantity-btn {
    background: #4ecdc4;
    color: #fff;
    padding: 5px 10px;
    border-radius: 50%;
    text-decoration: none;
    font-size: 1.2rem;
    transition: all 0.4s ease;
}

.quantity-btn:hover {
    background: #45b7aa;
    transform: translateY(-3px);
}

.total-amount {
    font-size: 1.5rem;
    color: #ff6b6b;
    font-weight: bold;
    text-align: right;
    margin-top: 20px;
}

.empty-cart {
    text-align: center;
    color: #fff;
    font-size: 1.2rem;
    font-style: italic;
    padding: 20px;
    background: rgba(255, 255, 255, 0.8);
    border-radius: 10px;
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

.btn-danger {
    background: #e74c3c;
    color: #fff;
    padding: 10px;
    border-radius: 50px;
    transition: all 0.4s ease;
    text-decoration: none;
}

.btn-danger:hover {
    background: #c0392b;
    transform: translateY(-5px);
    box-shadow: 0 10px 30px rgba(231, 76, 60, 0.7);
}

.button-group {
    display: flex;
    gap: 10px;
    justify-content: center;
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
    .btn-submit, .btn-back, .btn-danger {
        font-size: 1.1rem;
        padding: 10px;
    }
}
</style>