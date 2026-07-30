PHASE 5
PEDOMAN PENGEMBANGAN PERANGKAT LUNAK

Versi : Draft 1.0

Nama Proyek

Website Desa Blumbang sebagai Media Digitalisasi Informasi Desa dan Edukasi Produk Olahan Jagung dalam Upaya Pencegahan Stunting

1. Pendahuluan
1.1 Tujuan

Dokumen ini menjadi pedoman utama dalam proses pengembangan Website Desa Blumbang.

Seluruh implementasi sistem harus mengikuti standar yang ditetapkan pada dokumen ini agar proses pengembangan berjalan secara konsisten, terstruktur, mudah dipelihara, dan mudah dikembangkan di masa mendatang.

Dokumen ini juga menjadi acuan utama bagi AI maupun pengembang dalam menghasilkan implementasi kode.

1.2 Ruang Lingkup

Dokumen ini mengatur:

Standar teknologi yang digunakan
Arsitektur pengembangan
Struktur proyek
Standar penamaan
Standar penulisan kode
Standar keamanan
Standar pengelolaan media
Standar antarmuka
Standar dokumentasi
Standar penggunaan AI
Standar deployment
2. Teknologi yang Digunakan
Backend
Laravel 12
PHP 8.3+
Database
MySQL 8
Frontend
Blade Template
Tailwind CSS
Alpine.js
Build Tools
Vite
Authentication
Laravel Breeze
Version Control
Git
Local Development
Laragon
3. Arsitektur Sistem

Website menggunakan pendekatan Layered Architecture.

Presentation Layer

↓

Business Layer

↓

Data Layer

Pembagian tanggung jawab:

Presentation Layer

Blade
Layout
Komponen
Form

Business Layer

Controller
Service
Validasi

Data Layer

Repository
Model
Database
4. Struktur Proyek

Tetap menggunakan struktur bawaan Laravel.

app
├── Http
├── Models
├── Providers
├── Services
├── Repositories
├── Helpers
└── Policies

resources
├── views
│   ├── admin
│   ├── frontend
│   ├── auth
│   ├── components
│   └── layouts

routes
database
storage
public
5. Standar Bahasa Pengembangan

Website ini dikembangkan menggunakan Bahasa Indonesia sebagai bahasa utama.

Hal ini bertujuan agar sistem mudah dipahami oleh:

Mahasiswa KKN
Perangkat Desa
Pemerintah Desa
Pengembang selanjutnya
5.1 Menggunakan Bahasa Indonesia

Semua bagian berikut menggunakan Bahasa Indonesia.

Modul
Berita
Pengumuman
Profil Desa
Potensi Desa
Potensi Jagung
Layanan
Pengaturan Website
Model
Berita

Pengumuman

ProfilDesa

PotensiDesa

PotensiJagung

Layanan

PengaturanWebsite
Controller
BeritaController

PengumumanController

ProfilDesaController

PotensiDesaController

PotensiJagungController

LayananController

PengaturanWebsiteController
Repository
BeritaRepository

PotensiDesaRepository

LayananRepository
Service
BeritaService

MediaService

WebsiteService
Request Validation
SimpanBeritaRequest

PerbaruiBeritaRequest

SimpanPengumumanRequest
Route
admin.berita.index

admin.pengumuman.index

admin.layanan.index

admin.potensi-desa.index

admin.potensi-jagung.index
URL
/

profil-desa

berita

pengumuman

layanan

potensi-desa

potensi-jagung

kontak
Tabel Database
berita

kategori_berita

pengumuman

layanan

potensi_desa

potensi_jagung

profil_desa

pengaturan_website

media
Kolom Database

Contoh:

judul

slug

isi

ringkasan

gambar_sampul

status

tanggal_terbit

dibuat_oleh

diubah_oleh
5.2 Tetap Menggunakan Standar Laravel

Bagian berikut tetap menggunakan bahasa Inggris.

app
routes
resources
storage
vendor
config
middleware
migration
seeder
factory
index()
create()
store()
show()
edit()
update()
destroy()
created_at
updated_at
deleted_at
6. Glosarium Proyek

Untuk menjaga konsistensi, AI wajib menggunakan istilah berikut.

Istilah	Implementasi
Berita	Berita
Pengumuman	Pengumuman
Profil Desa	ProfilDesa
Potensi Desa	PotensiDesa
Potensi Jagung	PotensiJagung
Layanan Publik	Layanan
Pengaturan Website	PengaturanWebsite
Dashboard	Dashboard
Administrator	Administrator
7. Struktur Modul

Setiap modul wajib memiliki struktur berikut.

Controller

↓

Request Validation

↓

Service

↓

Repository

↓

Model

↓

Database

Controller tidak diperbolehkan mengakses database secara langsung.

8. Standar CRUD

Setiap modul wajib memiliki fitur berikut.

Daftar Data
Tambah Data
Detail Data (jika diperlukan)
Ubah Data
Hapus Data
Pencarian
Pagination
9. Standar Validasi

Semua validasi dilakukan menggunakan Form Request.

Tidak diperbolehkan melakukan validasi langsung pada Controller.

10. Standar Upload Media

Seluruh gambar disimpan menggunakan Laravel Storage.

Aturan:

Format JPG, PNG, WEBP
Maksimal 2 MB
Nama file menggunakan UUID
File lama dihapus saat diperbarui
Penyimpanan pada storage/app/public
11. Standar Slug

Semua halaman publik menggunakan slug.

Contoh:

berita/panen-jagung-berhasil

Slug:

otomatis dibuat
unik
huruf kecil
menggunakan tanda hubung (-)
12. Standar Pagination

Semua daftar data menggunakan pagination.

Jumlah data:

10 data setiap halaman
13. Standar Pencarian

Minimal tersedia pada:

Berita
Pengumuman
Potensi Desa
Potensi Jagung
14. Standar Editor

Konten panjang menggunakan Rich Text Editor.

Digunakan pada:

Berita
Profil Desa
Potensi Desa
Potensi Jagung
15. Standar Antarmuka

Frontend menggunakan prinsip:

sederhana
bersih
responsif
mudah dibaca
konsisten

Warna utama:

Hijau

Font:

Inter

16. Standar Layout

Frontend

Navbar

↓

Hero

↓

Konten

↓

Footer

Backend

Sidebar

↓

Header

↓

Konten

↓

Footer
17. Standar Komponen

Komponen yang digunakan berulang dibuat sebagai Blade Component.

Contoh:

Tombol
Kartu
Badge
Alert
Modal
Input
Textarea
Tabel
Pagination
18. Standar Keamanan

Website wajib menggunakan:

CSRF Protection
Session Authentication
Hash Password
Validasi Input
Middleware Authentication
Mass Assignment Protection
Escape Output
19. Standar Performa

Website harus:

menggunakan eager loading
menghindari N+1 Query
menggunakan pagination
mengoptimalkan ukuran gambar
memuat halaman secara cepat
20. Standar Penanganan Kesalahan

Semua proses CRUD harus:

menampilkan pesan sukses
menampilkan pesan gagal
tidak menampilkan stack trace
mencatat error penting pada log
21. Standar Git

Branch:

main

develop

feature/<nama-fitur>

Contoh:

feature/modul-berita

feature/modul-pengumuman

feature/modul-potensi-jagung

Format commit:

feat: tambah modul berita

fix: perbaiki upload gambar

refactor: rapikan service

docs: perbarui dokumentasi
22. Standar Dokumentasi

Setiap modul harus memiliki dokumentasi yang memuat:

tujuan modul
struktur data
alur kerja
halaman admin
halaman publik
skenario pengujian
23. Standar Deployment

Sebelum sistem dipasang pada server produksi, lakukan:

migration database
storage link
cache konfigurasi
cache route
cache view
build asset
backup database
24. Pedoman Penggunaan AI

AI wajib mengikuti ketentuan berikut.

Membaca Phase 1 hingga Phase 5 sebelum mulai menghasilkan kode.
Mengikuti urutan implementasi pada Phase 4.
Tidak menambahkan fitur di luar ruang lingkup proyek tanpa persetujuan.
Menggunakan standar Laravel sebelum menambahkan package pihak ketiga.
Menggunakan Bahasa Indonesia untuk seluruh implementasi bisnis.
Menjaga konsistensi penamaan pada seluruh proyek.
Menjelaskan alasan apabila terdapat perubahan terhadap desain yang telah ditentukan.
Menghasilkan kode yang bersih, modular, dan mudah dipelihara.
25. Definisi Selesai (Definition of Done)

Sebuah modul dinyatakan selesai apabila:

Migration berhasil dijalankan.
Model dan relasi telah berfungsi.
Repository dan Service telah dibuat.
Form Request Validation telah diterapkan.
Controller menggunakan Resource Controller.
CRUD berjalan tanpa kesalahan.
Halaman admin berfungsi dengan baik.
Halaman publik menampilkan data dengan benar.
Validasi dan keamanan telah diterapkan.
Pengujian modul telah berhasil dilakukan.
Dokumentasi modul telah diperbarui.
26. Luaran Phase 5

Phase 5 dinyatakan selesai apabila telah tersedia:

Pedoman pengembangan perangkat lunak.
Standar arsitektur proyek.
Standar struktur kode.
Standar penamaan.
Standar keamanan.
Standar penggunaan AI.
Standar deployment.
Standar dokumentasi.
Standar kualitas perangkat lunak (Definition of Done).