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

## Modul 4: Modul Login
### Tujuan
* Mampu memahami konsep dasar Auth dan Filter.
* Mampu memahami konsep dasar Login System.
* Mampu membuat modul login menggunakan Framework Codeigniter 4.
### Langkah Langkah
* Membuat Table User
```
CREATE TABLE user (
 id INT(11) auto_increment,
 username VARCHAR(200) NOT NULL,
 useremail VARCHAR(200),
 userpassword VARCHAR(200),
 PRIMARY KEY(id)
);
```
* Membuat Model User
![Model User](https://github.com/user-attachments/assets/ac5cc2c9-d794-4db9-b00c-0a25982fbca5)

* Membuat Database Seeder
![Database Seeder](https://github.com/user-attachments/assets/fe1e2350-b0d9-4e8f-a8df-c96fbc471bca)

Selanjutnya, buka file UserSeeder.php yang berada di lokasi direktori /app/Database/Seeds/UserSeeder.php kemudian isi dengan kode berikut:
![UserSeeder](https://github.com/user-attachments/assets/3e21130a-5079-4b3e-b12e-51fdfc0ef76d)

Selanjutnya buka kembali CLI dan ketik perintah berikut:
![Seeder](https://github.com/user-attachments/assets/922a0558-6020-4d30-88f1-bae5a2fed6ad)

## Modul 5: Pagination dan Pencarian
### Tujuan
* Mampu memahami konsep dasar Pagination.
* Mampu memahami konsep dasar Pencarian.
* Mampu membuat Paging dan Pencarian menggunakan Framework Codeigniter 4.
### Langkah Langkah
* Membuat Pagination dan Pencarian
Untuk membuat pagination, buka Kembali Controller Artikel, kemudian modifikasi kode pada method admin_index seperti berikut:
![Admin_Index](https://github.com/user-attachments/assets/3dc6ef3c-9166-4385-8602-5725ac257625)

Kemudian buka file views/artikel/admin_index.php dan tambahkan kode berikut dibawah deklarasi tabel data.
![Pagination](https://github.com/user-attachments/assets/3eab0e90-27e9-496e-8b0b-313e0af50dc2)

## Modul 6: Upload File Gambar
### Tujuan
* Mampu memahami konsep dasar File Upload.
* Mampu membuat File Upload menggunakan Framework Codeigniter 4.
### Langkah Langkah
* Upload Gambar pada Artikel
Buka kembali Controller Artikel pada project sebelumnya, sesuaikan kode pada method add seperti berikut:
![Add](https://github.com/user-attachments/assets/3bb07e6c-1d6a-404e-a35b-61324a11c4d3)

Kemudian pada file views/artikel/form_add.php tambahkan field input file seperti berikut:
![Input Gambar](https://github.com/user-attachments/assets/1960652f-08a8-4d23-8269-0c9d081e2034)

Sesuaikan tag form dengan menambahkan ecrypt type seperti berikut:
![Form Action](https://github.com/user-attachments/assets/340049df-53c6-4509-a124-36faa1f6aa22)

## Cara Menjalankan 
* Pastikan XAMPP/MySQL sudah berjalan.
* Import database dari file lab_ci4.sql.
* Jalankan CodeIgniter dengan perintah:
```
php spark serve
```
![Tampilan php spark serve](https://github.com/user-attachments/assets/9acba521-43af-4e46-bf76-50e4d316f725)

## Dokumentasi
### Tampilan Codeigniter 4
![Tampilan Codeigniter 4](https://github.com/user-attachments/assets/37c89892-8638-42cf-ae53-11cb78b72b0d)
### Tampilan jika error
![Tampilan Error](https://github.com/user-attachments/assets/4b7aef2f-b3db-4f82-aaab-4be822d0eb22)
### Halaman Home
![Halaman Home](https://github.com/user-attachments/assets/ea8b34f5-28f1-4b21-8017-604bedb2341b)
### Halaman Artikel
![Halaman Artikel](https://github.com/user-attachments/assets/53121343-6342-4564-ba37-9fbf24c9a31f)
### Artikel Detail
![Halaman Artikel Detail](https://github.com/user-attachments/assets/0713bd1a-d6d2-4942-a376-f7fbd38e01d8)
### Halaman About 
![Halaman About](https://github.com/user-attachments/assets/5b410561-3709-4c64-a28f-4890da802f6d)
### Halaman Contact
![Halaman Contact](https://github.com/user-attachments/assets/7b0db017-c912-4312-a7cf-5ccba67aa86e)
### Halaman Admin 
![Halaman Admin](https://github.com/user-attachments/assets/448c2e82-afe4-4d7d-83e5-6ae537b553ba)
### Admin Add
![Halaman Add](https://github.com/user-attachments/assets/d8314e02-0b07-41dc-8140-661ccb67ccfa)
### Admin Update
![Halaman Update](https://github.com/user-attachments/assets/88f03baa-ebbd-4bf9-a9d2-354eaf9c98a4)
### Halaman Login
![Halaman Login](https://github.com/user-attachments/assets/7b7905b1-0f1f-4c62-a491-f65280cc5d76)
### Halaman Pagination dan Pencarian
![Halaman Pagination dan Pencarian](https://github.com/user-attachments/assets/8f168af0-e221-4225-853b-8915cf3aeaab)
### Halaman Add dengan Gambar
![Halaman Add dengan gambar](https://github.com/user-attachments/assets/7a597f62-7b3a-41d3-8867-4966aa932f08)
