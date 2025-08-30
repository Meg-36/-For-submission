CREATE DATABASE IF NOT EXISTS shop;
USE shop;

DROP TABLE IF EXISTS products;
CREATE TABLE products (
    product_id INT AUTO_INCREMENT PRIMARY KEY,
    product_name VARCHAR(100) NOT NULL,
    price INT NOT NULL,
    stock INT NOT NULL
);

INSERT INTO products (product_name, price, stock) VALUES
('Laptop', 120000, 10),
('Mouse', 1500, 50),
('Keyboard', 3500, 20);

DROP TABLE IF EXISTS orders;
CREATE TABLE orders (
    order_id INT AUTO_INCREMENT PRIMARY KEY,
    product_id INT,
    quantity INT,
    order_date DATE,
    FOREIGN KEY (product_id) REFERENCES products(product_id)
);

INSERT INTO orders (product_id, quantity, order_date) VALUES
(1, 2, '2025-08-30'),
(2, 5, '2025-08-29'),
(3, 1, '2025-08-28');
