CREATE DATABASE IF NOT EXISTS my_store;
USE my_store;

-- Tạo bảng danh mục sản phẩm
CREATE TABLE IF NOT EXISTS category (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100) NOT NULL,
    description TEXT
);

-- Tạo bảng sản phẩm
CREATE TABLE IF NOT EXISTS product (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100) NOT NULL,
    description TEXT,
    price DECIMAL(10,2) NOT NULL,
    image VARCHAR(255) DEFAULT NULL,
    category_id INT,
    FOREIGN KEY (category_id) REFERENCES category(id) ON DELETE CASCADE
);

CREATE TABLE orders (
 id INT AUTO_INCREMENT PRIMARY KEY,
 name VARCHAR(255) NOT NULL,
 phone VARCHAR(20) NOT NULL,
 address TEXT NOT NULL,
 created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

CREATE TABLE order_details (
 id INT AUTO_INCREMENT PRIMARY KEY,
 order_id INT NOT NULL,
 product_id INT NOT NULL,
 quantity INT NOT NULL,
 price DECIMAL(10, 2) NOT NULL,
 FOREIGN KEY (order_id) REFERENCES orders(id)
);

CREATE TABLE users (
 id INT AUTO_INCREMENT PRIMARY KEY,
 username VARCHAR(255) NOT NULL UNIQUE,
 password VARCHAR(255) NOT NULL,
 created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);
-- Chèn dữ liệu vào bảng category
INSERT INTO category (name, description) VALUES
('Đồ uống', 'Danh mục các loại nước giải khát'),
('Thực phẩm khô', 'Danh mục gạo, mì, đồ hộp'),
('Hàng gia dụng', 'Danh mục đồ dùng gia đình'),
('Đồ ăn vặt', 'Danh mục bánh kẹo, snack'),
('Hóa mỹ phẩm', 'Danh mục xà phòng, dầu gội, kem đánh răng');	product