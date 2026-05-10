CREATE TABLE admin (
    username VARCHAR(50) PRIMARY KEY,
    nama_admin VARCHAR(100),
    password VARCHAR(255)
);

CREATE TABLE berita (
    id INT AUTO_INCREMENT PRIMARY KEY,
    judul_id VARCHAR(255),
    judul_en VARCHAR(255),
    nama_admin VARCHAR(100),
    datetime DATETIME,
    thumbnail VARCHAR(255),
    isi_id TEXT,
    isi_en TEXT
);