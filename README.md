# Lab7web

| NAMA  :| M IQBAL AL ANSHORI |
| --- | --- |
| NIM   :| 312310659 |
| KELAS :| TI.23.A.6 |
| DOSEN :| Agung Nugroho,S.Kom.,M.Kom |

## Modul 1: PHP Framework (CodeIgniter)
### Tujuan
* memahami konsep dasar Framework.
* memahami konsep dasar MVC.
* mampu membuat program sederhana menggunakan Framework Codeigniter4.
### Langkah-langkah
* Konfigurasi PHP & Web Server: Mengaktifkan ekstensi seperti php-json, php-mysqlnd, php-xml, php-intl, dll
  - Instalasi Codeigniter 4 secara manual.
  - Menjalankan CLI (php spark): Untuk debugging dan pengembangan.
* Memahami struktur direktori.
* Membuat routing dan controller :
  - Membuat routing di app/config/routes.php.
  - Membuat Controller di app/controllers/page.php.
* Membuat tampilan view didalam app/views/about.php.
* Membuat template header.php dan footer.php serta style.css.

## Modul 2: Framework Lanjutan (CRUD)
### Tujuan
* Mampu memahami konsep dasar Model.
* Mampu memahami konsep dasar CRUD.
* Mampu membuat program sederhana menggunakan Framework Codeigniter4.
### Langkah-langkah
* Persiapan Database:
  - Membuat database lab_ci4 dan tabel artikel.
```ymal
MariaDB [lab_cid]> desc artikel;
+------------+--------------+------+-----+-------------------+-------------------+
| Field      | Type         | Null | Key | Default           | Extra             |
+------------+--------------+------+-----+-------------------+-------------------+
| id         | int(11)      | NO   | PRI | NULL              | auto_increment    |
| judul      | varchar(200) | NO   |     | NULL              |                   |
| isi        | text         | YES  |     | NULL              |                   |
| gambar     | varchar(200) | YES  |     | NULL              |                   |
| status     | tinyint(1)   | YES  |     | 0                 |                   |
| slug       | varchar(200) | YES  |     | NULL              |                   |
| created_at | datetime     | YES  |     | CURRENT_TIMESTAMP |                   |
| updated_at | datetime     | YES  |     | CURRENT_TIMESTAMP |                   |
| kategori   | varchar(100) | YES  |     | NULL              |                   |
+------------+--------------+------+-----+-------------------+-------------------+
```
* Konfigurasi koneksi database
  - Konfigurasi dapat dilakukan dengan du acara, yaitu pada file app/config/database.php atau menggunakan file .env.
```
database.default.hostname = localhost
database.default.database = lab_ci4
database.default.username = root
database.default.password = 
database.default.DBDriver = MySQLi
database.default.DBPrefix =
database.default.port = 3306
```
* Membuat Model (ArtikelModel.php): Mengatur data yang bisa diakses dari tabel artikel.
* Membuat Controller (Artikel.php)
* Membuat View Detail ( Buat view baru untuk halaman detail dengan nama app/views/artikel/detail.php. ).
* Membuat Routing ( app/config/Routes.php, tambahkan routing untuk artikel detail. )

## Modul 3: View Layout dan View Cell
### Tujuan
* Memahami konsep View Layout di CodeIgniter 4.
* Menggunakan View Layout untuk membuat template tampilan.
* Memahami dan mengimplementasikan View Cell dalam CodeIgniter 4.
* Menggunakan View Cell untuk memanggil komponen UI secara modular.
### Langkah-langkah
* Membuat layout utama ( Buat folder layout di dalam app/Views/ Buat file main.php di dalam folder layout. )
* Modifikasi File View ( Ubah app/Views/home.php )
* Membuat Class View Cell ( Buat folder Cells di dalam app/ Buat file ArtikelTerkini.php di dalam app/Cells/. )
* Membuat View untuk View Cell ( Buat folder components di dalam app/Views/ Buat file artikel_terkini.php di dalam app/Views/components/. )
* Manfaat utama dari penggunaan View Layout dalam pengembangan aplikasi?
  - Pemeliharaan lebih mudah.
  - Konsistensi tampilan.
  - Meningkatkan performa.
* Perbedaan antara View Cell dan View biasa?
  - View cell: untuk komponen kecil yang bisa digunakan ulang di berbagai halaman.
  - View biasa: untuk menampilkan konten utama halaman tanpa komponen tambahan.

## Cara Menjalankan 
* Pastikan XAMPP/MySQL sudah berjalan.
* Import database dari file lab_ci4.sql.
* Jalankan CodeIgniter dengan perintah:
```
php spark serve
```
![Screenshot 2025-03-24 222718](https://github.com/user-attachments/assets/a6f5c24d-ee1d-4649-a87d-ae3b55eda40f)


## Dokumentasi
### Tampilan codeigniter 4
![Screenshot (82)](https://github.com/user-attachments/assets/542d8071-45e0-4e6c-b2a5-ec2111664931)
### Tampilan jika eror
![Screenshot (80)](https://github.com/user-attachments/assets/bbe1d3ec-09e7-41fc-a286-996741dbc50e)
### Halaman home
![Screenshot (93)](https://github.com/user-attachments/assets/8538106e-9605-4fa7-9020-042d727c6328)
### Halaman Artikel
![Screenshot (90)](https://github.com/user-attachments/assets/a795541f-bfce-4f9b-b613-d094d12787b1)
### Artikel Detail
![Screenshot (94)](https://github.com/user-attachments/assets/852dc960-7af3-476b-a86f-df05b9e86b1f)
### Halaman About 
![Screenshot (96)](https://github.com/user-attachments/assets/a00d5e81-9364-4253-bcd2-bd808fda48c1)
### Halaman Contact
![Screenshot (95)](https://github.com/user-attachments/assets/44fa33a3-1b26-49a3-b608-4811d9dec7ee)
### Halaman Admin 
![Screenshot (91)](https://github.com/user-attachments/assets/61986e62-b450-4e73-969b-a95151f27d88)
### Admin add
![Screenshot (98)](https://github.com/user-attachments/assets/15bd3527-7c3f-4adf-994e-be1d2171da39)
### Admin update
![Screenshot (97)](https://github.com/user-attachments/assets/b8264317-79aa-4693-9dfc-3b8eedb1ee59)
