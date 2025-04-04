<?php include 'app/views/shares/header.php'; ?>
<div class="container mt-5">
    <!-- CẬP NHẬT: Thay đổi tiêu đề và thêm class animate -->
    <h1 class="form-title animate__animated animate__bounceInDown">Danh sách sản phẩm</h1>
    
    <!-- CẬP NHẬT: Kiểm tra quyền admin và thay đổi class nút -->
    <?php if (SessionHelper::isAdmin()): ?>
        <a href="/Product/add" class="btn btn-submit mb-4">Thêm sản phẩm mới</a>
    <?php endif; ?>
    
    <!-- CẬP NHẬT: Thêm class động dựa trên quyền admin/user -->
    <ul class="list-group product-list <?php echo SessionHelper::isAdmin() ? 'admin-view' : 'user-view'; ?>" id="product-list">
        <!-- Danh sách sản phẩm sẽ được tải từ API và hiển thị tại đây -->
    </ul>
</div>
<?php include 'app/views/shares/footer.php'; ?>

<script> 
document.addEventListener("DOMContentLoaded", function() { 
    const token = localStorage.getItem('jwtToken'); 
    if (!token) { 
        alert('Vui lòng đăng nhập'); 
        location.href = '/account/login'; // Điều hướng đến trang đăng nhập 
        return; 
    } 
    fetch('/api/product', { 
        method: 'GET', 
        headers: { 
            'Content-Type': 'application/json', 
            'Authorization': 'Bearer ' + token 
        } 
    }) 
        .then(response => response.json()) 
        .then(data => { 

 
            const productList = document.getElementById('product-list'); 
            data.forEach(product => { 
                const productItem = document.createElement('li'); 
                productItem.className = 'list-group-item'; 
                productItem.innerHTML = ` 
                    <h2><a 
href="/Product/show/${product.id}">${product.name}</a></h2> 
                    <p>${product.description}</p> 
                    <p>Giá: ${product.price} VND</p> 
                    <p>Danh mục: ${product.category_name}</p> 
                    <a href="/Product/edit/${product.id}" class="btn btn
warning">Sửa</a> 
                    <button class="btn btn-danger" 
onclick="deleteProduct(${product.id})">Xóa</button> 
                `; 
                productList.appendChild(productItem); 
            }); 
        }); 
}); 
function deleteProduct(id) { 
    if (confirm('Bạn có chắc chắn muốn xóa sản phẩm này?')) { 
        fetch(`/api/product/${id}`, { 
            method: 'DELETE' 
        }) 
        .then(response => response.json()) 
        .then(data => { 
            if (data.message === 'Product deleted successfully') { 
                location.reload(); 
            } else { 
                alert('Xóa sản phẩm thất bại'); 
            } 
        }); 
    } 
} 
</script> 

<style>
/* Style chung cho danh sách sản phẩm */
.product-list {
    list-style: none;
    padding: 0;
}

/* Giao diện dạng cột (Admin) */
.product-list.admin-view .product-item {
    background: rgba(255, 255, 255, 0.95);
    padding: 20px;
    border-radius: 20px;
    box-shadow: 0 10px 40px rgba(0, 0, 0, 0.2);
    margin-bottom: 20px;
    animation: slideUp 0.8s ease-out;
    transition: transform 0.3s ease;
    display: flex;
    align-items: center;
    gap: 20px;
}

/* Giao diện dạng lưới (User) */
.product-list.user-view {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
    gap: 20px;
}

.product-list.user-view .product-item {
    background: rgba(255, 255, 255, 0.95);
    padding: 20px;
    border-radius: 20px;
    box-shadow: 0 10px 40px rgba(0, 0, 0, 0.2);
    animation: slideUp 0.8s ease-out;
    transition: transform 0.3s ease;
    display: flex;
    flex-direction: column;
    align-items: center;
    text-align: center;
}

.product-item:hover {
    transform: translateY(-10px);
}

.product-image img {
    max-width: 120px;
    border-radius: 10px;
    object-fit: cover;
}

.product-info {
    flex: 1;
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
    flex-wrap: wrap;
    justify-content: center; /* Căn giữa các nút trong giao diện lưới */
}

.btn-danger {
    background: #e74c3c;
    color: #fff;
    padding: 10px 20px;
    border-radius: 50px;
    transition: all 0.4s ease;
    font-size: 1.1rem;
}

.btn-danger:hover {
    background: #c0392b;
    transform: translateY(-5px);
    box-shadow: 0 10px 30px rgba(231, 76, 60, 0.7);
}

/* Style chung */
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

.product-item h2 {
    font-size: 1.5rem;
    margin: 0;
}

.product-item p {
    margin: 5px 0;
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
    .form-title {
        font-size: 2rem;
    }
    .product-list.admin-view .product-item {
        padding: 15px;
        flex-direction: column;
        align-items: flex-start;
    }
    .product-list.user-view {
        grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
    }
    .product-item img {
        max-width: 100px;
    }
    .btn-submit, .btn-back, .btn-danger {
        font-size: 1rem;
        padding: 8px 15px;
    }
}
</style>