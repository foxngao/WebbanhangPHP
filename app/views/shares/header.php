<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quản lý sản phẩm</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
    <style>
        /* CSS cho toàn bộ trang */
        body {
            background: linear-gradient(135deg, #ff6b6b, #4ecdc4);
            font-family: 'Poppins', sans-serif;
            min-height: 100vh;
            overflow-x: hidden;
        }

        /* Navbar */
        .navbar {
            background: linear-gradient(135deg, #ff6b6b, #4ecdc4);
            padding: 20px 0;
            position: relative;
            box-shadow: 0 8px 30px rgba(0, 0, 0, 0.2);
            border-bottom: 2px solid rgba(255, 255, 255, 0.2);
        }

        .navbar::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: radial-gradient(circle, rgba(255, 255, 255, 0.2) 0%, transparent 70%);
            opacity: 0.3;
            z-index: 0;
            animation: glow 5s infinite alternate;
        }

        /* .navbar-brand {
            font-size: 2rem;
            font-weight: 700;
            color: #fff;
            text-transform: uppercase;
            letter-spacing: 2px;
            position: relative;
            z-index: 1;
            transition: all 0.4s ease;
        } */

        .navbar-brand:hover {
            color: #ffd700;
            transform: scale(1.05);
            text-shadow: 0 0 10px rgba(255, 215, 0, 0.5);
        }

        .navbar-nav {
            position: relative;
            z-index: 1;
        }

        .navbar-nav .nav-link {
            color: #fff;
            font-size: 1.2rem;
            font-weight: 500;
            padding: 10px 20px;
            transition: all 0.4s ease;
            position: relative;
            border-radius: 25px;
        }

        .navbar-nav .nav-link:hover {
            color: #ffd700;
            background: rgba(255, 255, 255, 0.1);
            transform: translateY(-3px);
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.2);
        }

        .navbar-nav .nav-item.active .nav-link {
            color: #ffd700;
            font-weight: 600;
            background: rgba(255, 255, 255, 0.2);
        }

        .navbar-nav.ml-auto .nav-link {
            padding: 8px 20px;
            font-size: 1.1rem;
            border: 2px solid transparent;
            transition: all 0.4s ease;
        }

        .navbar-nav.ml-auto .nav-link:hover {
            border-color: #ffd700;
            color: #ffd700;
            background: rgba(255, 255, 255, 0.1);
            transform: translateY(-3px);
        }

        .navbar-toggler {
            border: none;
            z-index: 1;
        }

        .navbar-toggler-icon {
            background-image: url("data:image/svg+xml;charset=utf8,%3Csvg viewBox='0 0 30 30' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath stroke='rgba(255, 255, 255, 0.9)' stroke-width='2' stroke-linecap='round' stroke-miterlimit='10' d='M4 7h22M4 15h22M4 23h22'/%3E%3C/svg%3E");
        }

        .product-image {
            max-width: 100px;
            height: auto;
        }

        @keyframes glow {
            0% { transform: scale(1); opacity: 0.3; }
            100% { transform: scale(1.2); opacity: 0.5; }
        }

        @media (max-width: 768px) {
            .navbar-brand {
                font-size: 1.5rem;
            }
            .navbar-nav .nav-link {
                font-size: 1rem;
                padding: 10px;
                text-align: center;
            }
            .navbar-nav.ml-auto .nav-link {
                margin: 5px 0;
                border: 2px solid transparent;
            }
            .navbar-nav.ml-auto .nav-link:hover {
                border-color: #ffd700;
            }
            .navbar-collapse {
                background: rgba(255, 107, 107, 0.95);
                border-radius: 10px;
                margin-top: 10px;
                padding: 10px;
            }
        }
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light">
        <b class="navbar-brand" href="#">Cửa Hàng Của FOX</b>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="/Product/">Danh sách sản phẩm</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/Product/add">Thêm sản phẩm</a>
                </li>
            </ul>
            <ul class="navbar-nav ml-auto">
                <?php if (SessionHelper::isLoggedIn()): ?>
                    <li class="nav-item">
                        <a class="nav-link"><?php echo htmlspecialchars($_SESSION['username'], ENT_QUOTES, 'UTF-8'); ?></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/account/logout">Đăng xuất</a>
                    </li>
                <?php else: ?>
                    <li class="nav-item">
                        <a class="nav-link" href="/account/login">Đăng nhập</a>
                    </li>
                <?php endif; ?>
            </ul>
        </div>
    </nav>
    <div class="container mt-4">