<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FOXSTORE</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <style>
body {
    font-family: 'Poppins', sans-serif;
    margin: 0;
    padding: 0;
    background-color: #f5f5f5;
}

/* Header */
.navbar {
    background-color: #fff;
    padding: 15px 0;
    box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
    position: relative;
}

.navbar-brand img {
    height: 40px;
}

.navbar-nav .nav-link {
    color: #333;
    font-weight: 500;
    margin-right: 20px;
    text-transform: uppercase;
    transition: color 0.3s ease;
}

.navbar-nav .nav-link:hover {
    color: #ff6b6b;
}

.dropdown-menu {
    background-color: #fff;
    border: none;
    box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
}

.dropdown-item {
    color: #333;
    font-weight: 500;
    transition: background-color 0.3s ease, color 0.3s ease;
}

.dropdown-item:hover {
    background-color: #ff6b6b;
    color: #fff;
}

/* Thanh tìm kiếm nằm giữa */
.search-bar {
    position: absolute;
    left: 50%;
    transform: translateX(-50%);
    top: 50%;
    margin-top: -15px;
    display: flex;
    align-items: center;
}

.search-bar input {
    padding: 6px 10px;
    border: 1px solid #ddd;
    border-radius: 20px 0 0 20px;
    outline: none;
    font-family: 'Poppins', sans-serif;
    width: 200px;
}

.search-bar button {
    background-color: #ff6b6b;
    color: #fff;
    border: none;
    padding: 7px 12px;
    border-radius: 0 20px 20px 0;
    cursor: pointer;
    transition: background-color 0.3s ease;
}

.search-bar button:hover {
    background-color: #e74c3c;
}

/* Phần liên hệ và đăng nhập */
.search-contact {
    display: flex;
    flex-direction: column;
    align-items: flex-end;
    margin-left: auto;
}

.contact-info {
    display: flex;
    gap: 15px;
    margin-top: 10px;
}

.contact-info a {
    color: #333;
    text-decoration: none;
    font-weight: 500;
    transition: color 0.3s ease;
}

.contact-info a:hover {
    color: #ff6b6b;
}

/* Phần chọn vị trí */
.location-selector {
    margin-top: 10px;
    position: relative;
}

.location-selector .dropdown-toggle {
    background-color: #28a745;
    color: #fff;
    padding: 8px 15px;
    border-radius: 20px;
    font-size: 0.9rem;
    font-weight: 500;
    display: flex;
    align-items: center;
    gap: 8px;
    text-decoration: none;
    transition: background-color 0.3s ease;
}

.location-selector .dropdown-toggle:hover {
    background-color: #218838;
}

.location-selector .dropdown-toggle i {
    font-size: 1rem;
}

.location-selector .dropdown-menu {
    background-color: #fff;
    border: none;
    box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
    min-width: 200px;
}

.location-selector .dropdown-item {
    color: #333;
    font-weight: 500;
    padding: 8px 15px;
    transition: background-color 0.3s ease, color 0.3s ease;
}

.location-selector .dropdown-item:hover {
    background-color: #ff6b6b;
    color: #fff;
}

/* Hamburger menu */
.hamburger-menu {
    position: relative;
}

.hamburger-menu .nav-link {
    font-size: 1.2rem;
    padding: 8px 15px;
}

.hamburger-menu .dropdown-menu {
    min-width: 200px;
}

/* User dropdown */
.user-menu {
    position: relative;
}

.user-menu .nav-link {
    display: flex;
    align-items: center;
    gap: 8px;
    font-size: 0.9rem;
    padding: 8px 15px;
}

.user-menu .dropdown-menu {
    min-width: 250px;
    padding: 10px 0;
}

.user-menu .dropdown-header {
    display: flex;
    align-items: center;
    gap: 10px;
    padding: 10px 15px;
    font-size: 0.9rem;
    color: #333;
}

.user-menu .dropdown-header img {
    width: 40px;
    height: 40px;
    border-radius: 50%;
}

.user-menu .dropdown-header .user-info {
    flex: 1;
}

.user-menu .dropdown-header .user-info h6 {
    margin: 0;
    font-size: 1rem;
    font-weight: 600;
}

.user-menu .dropdown-header .user-info p {
    margin: 0;
    font-size: 0.8rem;
    color: #666;
}

.user-menu .dropdown-item {
    padding: 8px 15px;
    font-size: 0.9rem;
    display: flex;
    align-items: center;
    gap: 10px;
}

.user-menu .dropdown-item i {
    font-size: 1rem;
    color: #666;
}

.user-menu .dropdown-item .badge {
    background-color: #ff6b6b;
    font-size: 0.7rem;
    padding: 2px 6px;
}

/* Responsive */
@media (max-width: 768px) {
    .search-bar {
        position: static;
        transform: none;
        margin: 10px auto;
        width: 100%;
        justify-content: center;
    }

    .search-bar input {
        width: 70%;
    }

    .search-contact {
        align-items: center;
        margin-top: 10px;
    }

    .contact-info {
        flex-direction: column;
        align-items: center;
        gap: 5px;
    }

    .navbar-nav .nav-link {
        margin-right: 0;
    }

    .location-selector {
        margin-top: 15px;
    }

    .location-selector .dropdown-toggle {
        font-size: 0.85rem;
        padding: 6px 12px;
    }

    .hamburger-menu .nav-link {
        font-size: 1rem;
    }

    .user-menu .nav-link {
        font-size: 0.85rem;
        padding: 6px 12px;
    }
}
</style>
</head>
<body>
    <nav class="navbar navbar-expand-lg">
        <div class="container">
            <a class="navbar-brand" href="/">
                <img src="https://via.placeholder.com/150x40?text=FoxSNAC" alt="FoxSNAC">
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item hamburger-menu">
                        <a class="nav-link" href="#" id="hamburgerMenu" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="fas fa-bars"></i>
                        </a>
                        <div class="dropdown-menu" aria-labelledby="hamburgerMenu">
                            <a class="dropdown-item" href="/Product/">Danh sách sản phẩm</a>
                            <a class="dropdown-item" href="/Product/cart">Giỏ hàng</a>
                            <?php if (SessionHelper::isAdmin()): ?>
                                <a class="dropdown-item" href="/Product/add">Thêm sản phẩm</a>
                            <?php endif; ?>
                        </div>
                    </li>
                </ul>
                <div class="search-contact">
                    <div class="search-bar">
                        <form action="/Product/search" method="GET" style="display: flex;">
                            <input type="text" name="keyword" placeholder="Tìm kiếm sản phẩm...">
                            <button type="submit"><i class="fas fa-search"></i></button>
                        </form>
                    </div>
                    <div class="contact-info">
                        <a href="mailto:minhtienst44@gmail.com"><i class="fas fa-envelope"></i> Liên hệ</a>
                        <a href="tel:0359790618"><i class="fas fa-phone"></i> 0359790618</a>
                    </div>
                    <div class="location-selector">
                        <a class="dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="fas fa-map-marker-alt"></i> <span id="location-text">Chọn vị trí giao hàng</span>
                        </a>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="#" id="get-current-location">Lấy vị trí hiện tại</a>
                            <a class="dropdown-item" href="#">Hà Nội</a>
                            <a class="dropdown-item" href="#">TP. Hồ Chí Minh</a>
                            <a class="dropdown-item" href="#">Đà Nẵng</a>
                            <a class="dropdown-item" href="#">Cần Thơ</a>
                        </div>
                    </div>
                </div>
                <ul class="navbar-nav ml-3">
                    <li class="nav-item user-menu">
                        <a class="nav-link" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="fas fa-user"></i>
                            <?php if (SessionHelper::isLoggedIn()): ?>
                                <?php echo htmlspecialchars($_SESSION['username'], ENT_QUOTES, 'UTF-8'); ?>
                            <?php else: ?>
                                Đăng nhập
                            <?php endif; ?>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right">
                            <?php if (SessionHelper::isLoggedIn()): ?>
                                <div class="dropdown-header">
                                    <!-- <img src="https://via.placeholder.com/40?text=User" alt="User Avatar"> -->
                                    <div class="user-info">
                                        <h6><?php echo htmlspecialchars($_SESSION['username'], ENT_QUOTES, 'UTF-8'); ?></h6>
                                        <!-- <p>Miễn phí giao cho đơn hàng từ 100.000₫ trở lên</p> -->
                                    </div>
                                </div>
                                <!-- <a class="dropdown-item" href="#"><i class="fas fa-ticket-alt"></i> Phiếu mua hàng <span class="badge badge-pill">0</span></a>
                                <a class="dropdown-item" href="#"><i class="fas fa-star"></i> Ưu đãi đặc biệt</a> -->
                                <div class="dropdown-divider"></div>
                                <!-- <h6 class="dropdown-header">Thông tin cá nhân</h6> -->
                                <!-- <a class="dropdown-item" href="#"><i class="fas fa-user-edit"></i> Sửa thông tin cá nhân</a>
                                <a class="dropdown-item" href="#"><i class="fas fa-map-marker-alt"></i> Địa chỉ nhận hàng <span class="badge badge-pill">1</span></a>
                                <a class="dropdown-item" href="#"><i class="fas fa-shopping-bag"></i> Đơn hàng từng mua</a>
                                <a class="dropdown-item" href="#"><i class="fas fa-bell"></i> Chọn kênh nhận thông báo</a> -->
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="/account/logout"><i class="fas fa-sign-out-alt"></i> Đăng xuất</a>
                            <?php else: ?>
                                <a class="dropdown-item" href="/account/login">Đăng nhập</a>
                            <?php endif; ?>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="container mt-4">

    <script>
        // Lấy vị trí hiện tại khi người dùng bấm vào "Lấy vị trí hiện tại"
        document.getElementById('get-current-location').addEventListener('click', function(e) {
            e.preventDefault();
            if (navigator.geolocation) {
                navigator.geolocation.getCurrentPosition(
                    function(position) {
                        const latitude = position.coords.latitude;
                        const longitude = position.coords.longitude;
                        document.getElementById('location-text').textContent = `Vị trí: ${latitude}, ${longitude}`;
                        sessionStorage.setItem('userLocation', JSON.stringify({ lat: latitude, lng: longitude }));
                    },
                    function(error) {
                        switch(error.code) {
                            case error.PERMISSION_DENIED:
                                alert("Bạn đã từ chối cấp quyền truy cập vị trí. Vui lòng cho phép để sử dụng tính năng này.");
                                break;
                            case error.POSITION_UNAVAILABLE:
                                alert("Không thể lấy thông tin vị trí.");
                                break;
                            case error.TIMEOUT:
                                alert("Yêu cầu lấy vị trí đã hết thời gian.");
                                break;
                            default:
                                alert("Đã xảy ra lỗi khi lấy vị trí: " + error.message);
                                break;
                        }
                    }
                );
            } else {
                alert("Trình duyệt của bạn không hỗ trợ lấy vị trí.");
            }
        });

        const savedLocation = sessionStorage.getItem('userLocation');
        if (savedLocation) {
            const location = JSON.parse(savedLocation);
            document.getElementById('location-text').textContent = `Vị trí: ${location.lat}, ${location.lng}`;
        }
    </script>
</body>
</html>