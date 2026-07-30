PHASE 2
SYSTEM DESIGN DOCUMENT

Versi : Draft 1.0

Nama Proyek

Website Desa Blumbang sebagai Media Digitalisasi Informasi Desa dan Edukasi Produk Olahan Jagung dalam Upaya Pencegahan Stunting

1. Pendahuluan
1.1 Tujuan Dokumen

Dokumen ini menjelaskan rancangan sistem (System Design) dari Website Desa Blumbang yang akan dikembangkan selama kegiatan KKN Universitas Diponegoro. Dokumen ini menjadi acuan utama dalam proses pengembangan perangkat lunak sebelum memasuki tahap implementasi sehingga seluruh fitur yang dibangun memiliki struktur yang konsisten, mudah dikembangkan, dan mudah dipelihara.

Dokumen ini tidak membahas implementasi kode, melainkan menjelaskan rancangan arsitektur sistem, struktur informasi, modul, navigasi, hak akses pengguna, serta ruang lingkup Minimum Viable Product (MVP).

2. Tujuan Perancangan Sistem

Perancangan sistem dilakukan untuk memenuhi beberapa tujuan berikut.

Menghasilkan struktur website yang terorganisasi dan mudah digunakan.
Menyediakan media informasi resmi Desa Blumbang.
Menyediakan media publikasi hasil Program KKN.
Mempermudah perangkat desa dalam mengelola informasi secara mandiri.
Menjadi dasar pengembangan database dan implementasi aplikasi pada tahap berikutnya.
3. Gambaran Umum Sistem

Website Desa Blumbang merupakan website berbasis Content Management System (CMS) yang terdiri dari dua bagian utama, yaitu:

Frontend Website

Digunakan oleh masyarakat umum untuk mengakses seluruh informasi desa tanpa perlu melakukan login.

Backend (Admin Panel)

Digunakan oleh perangkat desa sebagai administrator untuk mengelola seluruh konten website.

Seluruh data yang ditampilkan pada website dikelola melalui panel administrasi sehingga administrator tidak perlu melakukan perubahan langsung pada kode program.

4. Arsitektur Sistem
                        WEBSITE DESA BLUMBANG

                    +----------------------------+
                    |      Pengunjung Umum       |
                    +-------------+--------------+
                                  |
                                  v
                          Frontend Website
                                  |
      ----------------------------------------------------------------
      |           |            |            |            |            |
      v           v            v            v            v            v
   Beranda     Profil      Potensi      Berita      Layanan     Pengumuman
                              |
                              |
                              v
              Potensi & Produk Olahan Jagung

=======================================================================

                     +-----------------------------+
                     |      Perangkat Desa         |
                     +-------------+---------------+
                                   |
                                   v
                              Login Admin
                                   |
                                   v
                            Dashboard Admin
                                   |
      ----------------------------------------------------------------
      |           |            |            |            |            |
      v           v            v            v            v            v
   Profil      Berita      Potensi      Layanan     Pengumuman     Media
5. Information Architecture

Website dikelompokkan berdasarkan informasi yang dikelola.

5.1 Profil Desa

Berisi informasi dasar mengenai desa.

Sub informasi:

Sejarah Desa
Visi dan Misi
Struktur Pemerintahan
Kondisi Geografis
Data Umum Desa
5.2 Berita

Berisi seluruh berita dan kegiatan desa.

Setiap berita terdiri atas:

Judul
Thumbnail
Isi Berita
Tanggal
Penulis
Kategori
5.3 Pengumuman

Berisi informasi resmi dari pemerintah desa.

Meliputi:

Pengumuman aktif
Arsip pengumuman
5.4 Layanan Publik

Berisi informasi pelayanan administrasi desa.

Meliputi:

Jenis layanan
Persyaratan
Alur pelayanan
Jam pelayanan
Kontak pelayanan
5.5 Potensi Desa

Merupakan halaman yang menampilkan seluruh potensi yang dimiliki Desa Blumbang.

Kategori potensi meliputi:

Pertanian
UMKM
Produk Unggulan
Potensi Masyarakat
Potensi Wisata (apabila tersedia)
5.6 Potensi dan Produk Olahan Jagung

Halaman ini merupakan bagian khusus sebagai implementasi Program Multidisiplin 1 KKN.

Halaman ini berada di bawah menu Potensi Desa sehingga tidak berdiri sebagai website terpisah.

Informasi yang ditampilkan meliputi:

Potensi Jagung Desa Blumbang
Kandungan Gizi Jagung
Produk Olahan Jagung
Manfaat Jagung dalam Pencegahan Stunting
Dokumentasi Program KKN
Panduan Pengolahan
Dokumentasi Edukasi

Halaman ini bersifat dinamis sehingga dapat diperbarui oleh administrator.

6. Sitemap Website
Website Desa Blumbang

│

├── Beranda

├── Profil Desa

│      ├── Sejarah

│      ├── Visi dan Misi

│      ├── Pemerintahan

│      ├── Kondisi Geografis

│      └── Data Umum

│

├── Potensi Desa

│      ├── Pertanian

│      ├── UMKM

│      ├── Produk Unggulan

│      ├── Potensi Masyarakat

│      └── Potensi & Produk Olahan Jagung

│

├── Berita

│

├── Pengumuman

│

├── Layanan Publik

│

└── Kontak
7. Struktur Navigasi

Menu utama website terdiri atas:

Beranda
Profil Desa
Potensi Desa
Berita
Pengumuman
Layanan Publik
Kontak

Potensi & Produk Olahan Jagung diakses melalui menu Potensi Desa.

8. User Roles

Sistem hanya memiliki dua jenis pengguna.

8.1 Guest

Guest merupakan seluruh pengunjung website.

Hak akses:

Melihat informasi
Membaca berita
Melihat layanan
Melihat pengumuman
Mengakses seluruh halaman publik

Guest tidak memiliki hak untuk mengubah informasi.

8.2 Administrator

Administrator merupakan perangkat desa.

Administrator memiliki hak untuk:

Login
Mengelola profil desa
Mengelola berita
Mengelola pengumuman
Mengelola layanan
Mengelola potensi desa
Mengelola informasi produk olahan jagung
Mengunggah gambar
Mengubah password
9. User Flow
Pengunjung
Masuk Website

↓

Melihat Beranda

↓

Memilih Menu

↓

Membaca Informasi

↓

Selesai
Administrator
Login

↓

Dashboard

↓

Memilih Modul

↓

Tambah/Edit/Hapus Data

↓

Simpan

↓

Website Terupdate
10. Functional Modules

Website terdiri atas beberapa modul utama.

Frontend
Beranda
Profil Desa
Potensi Desa
Potensi & Produk Olahan Jagung
Berita
Pengumuman
Layanan Publik
Kontak
Backend
Login
Dashboard
Kelola Profil
Kelola Berita
Kelola Pengumuman
Kelola Layanan
Kelola Potensi Desa
Kelola Informasi Jagung
Media Manager
Pengaturan Website
11. Dashboard Administrator

Dashboard menjadi pusat pengelolaan website.

Minimal menampilkan:

Ringkasan jumlah berita
Ringkasan jumlah pengumuman
Ringkasan jumlah halaman
Aktivitas terbaru
Menu cepat menuju setiap modul
12. Prinsip Perancangan Sistem

Dalam proses pengembangan sistem diterapkan beberapa prinsip berikut.

Modular

Setiap fitur dibangun sebagai modul yang berdiri sendiri sehingga mudah dikembangkan.

Maintainable

Struktur kode harus mudah dipahami oleh pengembang berikutnya.

Scalable

Website dapat dikembangkan dengan penambahan fitur tanpa mengubah struktur utama.

User Friendly

Administrator yang tidak memiliki latar belakang teknis harus tetap mampu mengelola website.

13. Struktur Halaman Website
Halaman Publik
Beranda
Profil Desa
Potensi Desa
Potensi & Produk Olahan Jagung
Berita
Detail Berita
Pengumuman
Layanan
Kontak
Halaman Administrator
Login
Dashboard
CRUD Profil Desa
CRUD Berita
CRUD Pengumuman
CRUD Potensi Desa
CRUD Potensi Jagung
CRUD Layanan
Media Manager
Pengaturan Website
14. Ruang Lingkup MVP

Pada tahap Minimum Viable Product, website minimal harus menyediakan fitur berikut.

Frontend:

Beranda
Profil Desa
Potensi Desa
Potensi & Produk Olahan Jagung
Berita
Pengumuman
Layanan Publik
Kontak

Backend:

Login Admin
Dashboard
CRUD Profil Desa
CRUD Berita
CRUD Pengumuman
CRUD Potensi Desa
CRUD Potensi Jagung
CRUD Layanan
15. Development Guidelines

Seluruh proses implementasi harus mengikuti ketentuan berikut.

Menggunakan Laravel sebagai framework utama.
Menerapkan arsitektur MVC sesuai standar Laravel.
Menggunakan autentikasi bawaan Laravel untuk administrator.
Seluruh operasi CRUD harus menggunakan validasi input.
Struktur kode harus modular dan mudah dipelihara.
Seluruh halaman admin hanya dapat diakses setelah proses autentikasi berhasil.
Seluruh konten website harus dikelola melalui panel administrator dan tidak ditulis secara statis pada kode.
Website harus responsif dan dapat diakses melalui perangkat desktop maupun mobile.
16. Deliverables Phase 2

Setelah Phase 2 selesai, proyek dianggap siap memasuki tahap implementasi apabila telah memenuhi kondisi berikut:

Struktur website telah ditetapkan.
Information Architecture telah final.
Sitemap telah final.
Navigasi website telah final.
Hak akses pengguna telah ditetapkan.
Modul frontend dan backend telah didefinisikan.
Ruang lingkup MVP telah disepakati.
Tidak terdapat perubahan besar pada kebutuhan sistem sebelum memasuki Phase 3 (Database Design).