<?php include 'app/views/inc/header.php'; ?>

<div class="container mt-5">
    <h2>Kết quả tìm kiếm cho "<?= htmlspecialchars($_GET['keyword']) ?>"</h2>
    
    <?php if (empty($products)): ?>
        <div class="alert alert-info">Không tìm thấy sản phẩm nào phù hợp.</div>
    <?php else: ?>
        <div class="row">
            <?php foreach ($products as $product): ?>
                <div class="col-md-4 mb-4">
                    <div class="card">
                        <img src="<?= $product->image ?>" class="card-img-top" alt="<?= $product->name ?>">
                        <div class="card-body">
                            <h5 class="card-title"><?= htmlspecialchars($product->name) ?></h5>
                            <p class="card-text"><?= htmlspecialchars($product->description) ?></p>
                            <p class="text-danger"><?= number_format($product->price) ?> VNĐ</p>
                            <a href="/Product/show/<?= $product->id ?>" class="btn btn-primary">Xem chi tiết</a>
                            <a href="/Product/addToCart/<?= $product->id ?>" class="btn btn-success">Thêm vào giỏ</a>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    <?php endif; ?>
</div>

<?php include 'app/views/inc/footer.php'; ?>