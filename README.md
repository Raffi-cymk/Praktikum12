# Praktikum12

## 🎯 Tujuan Praktikum

Praktikum ini merupakan lanjutan dari Praktikum 11, dengan tujuan:

Mengimplementasikan sistem login dan logout menggunakan PHP.

Menggunakan session untuk membatasi akses halaman tertentu.

Mengamankan fitur CRUD artikel agar hanya bisa diakses setelah login.

Menerapkan enkripsi password (password_hash) sesuai standar keamanan PHP.

## 🛠️ Teknologi yang Digunakan

PHP (Native / OOP)

MySQL

phpMyAdmin

XAMPP

HTML & CSS

Session PHP

> 🎨 Catatan:
Folder assets/css bersifat opsional dan digunakan untuk mempercantik tampilan (UI).
CSS tidak mempengaruhi logika utama dan hanya sebagai nilai tambah.

---

## 🗂️ Struktur Folder

lab11_php_oop/
│
├── index.php
├── config.php
│
├── class/
│   ├── Database.php
│   └── Form.php
│
├── module/
│   ├── artikel/
│   │   ├── index.php
│   │   ├── add.php
│   │   ├── edit.php
│   │   └── delete.php
│   │
│   └── user/
│       ├── login.php
│       └── logout.php
│
├── template/
│   ├── header.php
│   └── footer.php
│
└── assets/
    └── css/
        └── style.css   (opsional)


---

## 🧪 Langkah Pengerjaan & Penjelasan Screenshot
**📸 Screenshot 1 – Mengubah SQL (Membuat Tabel Users)**

<img width="795" height="509" alt="Screenshot 2025-12-17 102953" src="https://github.com/user-attachments/assets/4f5facac-753a-43ff-a336-770394c698d3" />

Pada tahap ini dilakukan pembuatan tabel users di database menggunakan SQL sesuai instruksi praktikum.

CREATE TABLE users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(50),
    password VARCHAR(255),
    nama VARCHAR(100)
);

> 🔐 Catatan penting:
Password tidak disimpan dalam bentuk teks biasa, melainkan dalam bentuk hash.
Password yang diberikan dosen bersifat contoh, sehingga pada implementasi nyata perlu dibuat ulang agar tidak menimbulkan error saat login.


**📸 Screenshot 2 – Struktur Tabel Users**

<img width="1306" height="427" alt="Screenshot 2025-12-17 103033" src="https://github.com/user-attachments/assets/fdfa6ac0-602d-452f-a766-63ef880462cd" />

Screenshot ini menampilkan struktur tabel users, yang terdiri dari:

id

username

password

nama

Struktur ini digunakan sebagai dasar autentikasi user (admin).


**📸 Screenshot 3 – Data User (Browse Table)**

<img width="1366" height="340" alt="Screenshot 2025-12-17 123729" src="https://github.com/user-attachments/assets/a5466d2f-a073-420d-b8da-66fb6756e8cd" />

Pada bagian ini ditampilkan isi tabel users (browse), di mana kolom password berisi nilai hash, contohnya:

$2y$10$wus4kmfZ2LKyKrIkKWyKHuKxXQtoViMVVcz9q.ZjYacKJ8ErdmRTW

> 🔐 Hash ini dibuat menggunakan password_hash() dan berbeda dari contoh dosen, namun tetap valid dan aman.
Perbedaan hash tidak mempengaruhi login selama password yang dimasukkan benar.


**📸 Screenshot 4 – Halaman Login**

<img width="1188" height="553" alt="Screenshot 2025-12-17 123143" src="https://github.com/user-attachments/assets/7309b87e-7b2c-4ed3-beec-ab4971675591" />

Menampilkan halaman login aplikasi yang berada di localhost.
User memasukkan:

Username: admin

Password: admin123

Jika data benar, sistem akan memverifikasi menggunakan password_verify().


📸 Screenshot 5 – Berhasil Login (Halaman Artikel)

Setelah login berhasil:

* User diarahkan ke halaman Data Artikel

* Menampilkan daftar artikel dengan kolom:

* * ID

Judul

Aksi (Ubah & Hapus)

Halaman ini tidak bisa diakses tanpa login, karena telah diproteksi menggunakan session.
