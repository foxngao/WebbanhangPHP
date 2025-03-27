<?php include 'app/views/shares/header.php'; ?>
<div class="container mt-5">
    <h1 class="form-title animate__animated animate__bounceInDown">Thêm sản phẩm mới</h1>
    <?php if (!empty($errors)): ?>
        <div class="alert alert-danger animate__animated animate__shakeX">
            <ul>
                <?php foreach ($errors as $error): ?>
                    <li><?php echo htmlspecialchars($error, ENT_QUOTES, 'UTF-8'); ?></li>
                <?php endforeach; ?>
            </ul>
        </div>
    <?php endif; ?>
    <form method="POST" action="/Product/save" enctype="multipart/form-data" class="product-form" onsubmit="return validateForm();">
        <div class="form-group">
            <label for="name">Tên sản phẩm:</label>
            <input type="text" id="name" name="name" class="form-control" placeholder="Nhập tên sản phẩm" required>
        </div>
        <div class="form-group">
            <label for="description">Mô tả:</label>
            <textarea id="description" name="description" class="form-control" placeholder="Nhập mô tả sản phẩm" rows="4" required></textarea>
        </div>
        <div class="form-group">
            <label for="price">Giá:</label>
            <input type="number" id="price" name="price" class="form-control" step="0.01" placeholder="Nhập giá sản phẩm (VD: 100000)" required>
        </div>
        <div class="form-group">
            <label for="category_id">Danh mục:</label>
            <select id="category_id" name="category_id" class="form-control" required>
                <option value="">Chọn danh mục</option>
                <?php foreach ($categories as $category): ?>
                    <option value="<?php echo $category->id; ?>">
                        <?php echo htmlspecialchars($category->name, ENT_QUOTES, 'UTF-8'); ?>
                    </option>
                <?php endforeach; ?>
            </select>
        </div>
        <div class="form-group">
            <label for="image">Hình ảnh:</label>
            <input type="file" id="image" name="image" class="form-control-file">
        </div>
        <button type="submit" class="btn btn-submit">Thêm sản phẩm</button>
    </form>
    <a href="/Product" class="btn btn-back mt-3">Quay lại danh sách</a>
</div>

<style>
/* Reset mặc định và cài đặt chung */
* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

body {
    background: linear-gradient(135deg, #ff6b6b, #4ecdc4);
    font-family: 'Poppins', sans-serif;
    min-height: 100vh;
    overflow-x: hidden;
}

/* Tiêu đề */
.form-title {
    font-size: 2.5rem; /* Giảm kích thước để cân đối */
    color: #fff;
    text-align: center;
    text-shadow: 2px 2px 10px rgba(0, 0, 0, 0.3);
    margin-bottom: 30px; /* Giảm khoảng cách */
    letter-spacing: 2px;
}

/* Container chính */
.container {
    padding: 20px;
}

/* Form sản phẩm */
.product-form {
    background: rgba(255, 255, 255, 0.95);
    padding: 30px; /* Giảm padding để không quá rộng */
    border-radius: 20px;
    box-shadow: 0 10px 40px rgba(0, 0, 0, 0.2);
    max-width: 600px; /* Giảm chiều rộng để cân đối */
    margin: 0 auto;
    animation: slideUp 0.8s ease-out;
}

/* Nhóm form */
.form-group {
    margin-bottom: 20px; /* Giảm khoảng cách giữa các trường */
    position: relative;
}

.form-group label {
    font-size: 1.1rem; /* Giảm kích thước chữ để cân đối */
    color: #2c3e50;
    font-weight: 600;
    margin-bottom: 8px; /* Giảm khoảng cách */
    display: block;
    transition: all 0.3s ease;
}

/* Trường nhập liệu */
.form-control {
    width: 100%;
    padding: 12px; /* Giảm padding để không quá lớn */
    font-size: 1rem; /* Đồng bộ kích thước chữ */
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
    min-height: 100px; /* Giảm chiều cao để cân đối */
    resize: vertical;
}

.form-control-file {
    padding: 8px 0; /* Giảm padding */
}

/* Nút Submit */
.btn-submit {
    background: #ff6b6b;
    color: #fff;
    font-size: 1.2rem; /* Giảm kích thước chữ */
    font-weight: bold;
    padding: 12px; /* Giảm padding */
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

/* Nút Quay lại */
.btn-back {
    display: block;
    text-align: center;
    background: #4ecdc4;
    color: #fff;
    font-size: 1.1rem; /* Giảm kích thước chữ */
    padding: 10px; /* Giảm padding */
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

/* Hiệu ứng Animation */
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

/* Responsive */
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

<script>
function validateForm() {
    const name = document.getElementById('name').value;
    const description = document.getElementById('description').value;
    const price = document.getElementById('price').value;
    const category = document.getElementById('category_id').value;

    if (name.trim() === '') {
        alert('Tên sản phẩm không được để trống');
        return false;
    }
    if (description.trim() === '') {
        alert('Mô tả không được để trống');
        return false;
    }
    if (price <= 0) {
        alert('Giá phải lớn hơn 0');
        return false;
    }
    if (category === '') {
        alert('Vui lòng chọn danh mục');
        return false;
    }
    return true;
}
</script>
<?php include 'app/views/shares/footer.php'; ?>