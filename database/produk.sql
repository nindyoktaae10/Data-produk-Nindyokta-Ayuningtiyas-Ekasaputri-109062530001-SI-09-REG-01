CREATE DATABASE IF NOT EXISTS data_produk
CHARACTER SET utf8mb4
COLLATE utf8mb4_unicode_ci;
USE data_produk;
CREATE TABLE IF NOT EXISTS produk (
    id INT AUTO_INCREMENT PRIMARY KEY,
    kode_produk VARCHAR(20) NOT NULL UNIQUE,
    nama_produk VARCHAR(100) NOT NULL,
    kategori VARCHAR(100) NOT NULL,
    harga DECIMAL(12,2) NOT NULL,
    stok INT NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);
INSERT INTO produk (kode_produk, nama_produk, kategori, harga, stok) VALUES
('CET001', 'Cetaphil Gentle Skin Cleanser', 'Facial Cleanser', 125000, 20),
('CET002', 'Cetaphil Moisturizing Cream', 'Moisturizer', 180000, 15),
('CET003', 'Cetaphil Daily Facial Moisturizer', 'Facial Moisturizer', 165000, 12);