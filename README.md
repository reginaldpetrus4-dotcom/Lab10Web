# Lab10Web – PHP Object Oriented Programming (OOP)

Repository ini dibuat untuk memenuhi tugas **Praktikum 10 – PHP OOP**  
pada mata kuliah **Pemrograman Web**.

---

## 📌 Tujuan Praktikum
1. Memahami konsep dasar **Object Oriented Programming (OOP)** pada PHP  
2. Memahami penggunaan **Class** dan **Object**  
3. Mengimplementasikan **constructor** dan **access modifier**  
4. Membuat **class library** sederhana  
5. Menghubungkan database menggunakan konsep OOP  

---

## 🗂️ Struktur Direktori

```text
lab10_php_oop/
├── index.php
├── mobil.php
├── form.php
├── form_input.php
├── database.php
├── config.php
└── README.md

🧩 Penjelasan File
1️⃣ mobil.php
Berisi contoh dasar penggunaan class dan object dalam PHP OOP.
. Mendefinisikan class Mobil
. Menggunakan constructor
. Mengubah dan menampilkan properti objek

2️⃣ form.php
Merupakan class library untuk membuat form input sederhana.
. Class Form
. Method addField() untuk menambah field
. Method displayForm() untuk menampilkan form

3️⃣ form_input.php
. File implementasi dari class library form.php.
. Melakukan include class
. Membuat objek form
. Menampilkan form input mahasiswa

4️⃣ database.php
. Class library untuk koneksi database menggunakan OOP.
. Menggunakan constructor untuk koneksi
. Menggunakan access modifier protected
. Mengambil konfigurasi database dari file config.php

5️⃣ config.php
Berisi konfigurasi database:
. Host
. Username
. Password
. Nama database

6️⃣ index.php
Digunakan untuk menguji koneksi database.
Jika koneksi berhasil, akan menampilkan pesan:
Koneksi database berhasil

⚙️ Cara Menjalankan Program
1. Install dan jalankan XAMPP
2. Aktifkan Apache dan MySQL
3. Buat database dengan nama: praktikum
4. Simpan folder project di: C:\xampp\htdocs\
5. Jalankan melalui browser: http://localhost/lab10_php_oop/

🧪 Pengujian Program
mobil.php ➜ menampilkan contoh objek mobil
form_input.php ➜ menampilkan form input
index.php ➜ menampilkan status koneksi database
Semua file dapat dijalankan tanpa error.

📝 Kesimpulan
Praktikum ini membuktikan bahwa konsep Object Oriented Programming dapat diterapkan pada PHP, baik untuk pembuatan class sederhana, class library, maupun koneksi database. Dengan OOP, program menjadi lebih terstruktur, modular, dan mudah dikembangkan.
