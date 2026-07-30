

# PHASE 3

# DATABASE DESIGN DOCUMENT

**Versi : Draft 1.0**

**Nama Proyek**

Website Desa Blumbang sebagai Media Digitalisasi Informasi Desa dan Edukasi Produk Olahan Jagung dalam Upaya Pencegahan Stunting

---

# 1. Pendahuluan

## 1.1 Tujuan

Dokumen ini menjelaskan rancangan basis data yang akan digunakan pada Website Desa Blumbang.

Database dirancang agar:

* mudah dikembangkan,
* mudah dipelihara,
* memenuhi kebutuhan MVP,
* mendukung penambahan fitur di masa depan tanpa perubahan besar pada struktur.

Seluruh data website disimpan menggunakan database relasional.

---

# 2. Prinsip Perancangan Database

Database dikembangkan berdasarkan prinsip berikut.

### Normalisasi

Data tidak disimpan berulang sehingga mengurangi redundansi.

### Relasional

Setiap entitas saling terhubung menggunakan foreign key.

### Modular

Setiap modul memiliki tabel tersendiri.

### Scalable

Database mampu dikembangkan tanpa mengubah struktur utama.

### Maintainable

Nama tabel dan kolom menggunakan konvensi Laravel.

---

# 3. Gambaran Umum Database

Database terdiri dari beberapa kelompok data utama.

```text
Authentication

↓

Website Profile

↓

Content Management

↓

Village Information

↓

Media Management

↓

System Configuration
```

---

# 4. Daftar Entitas

Tahap pertama adalah mengidentifikasi seluruh entitas.

## 4.1 User

Digunakan sebagai administrator website.

Berfungsi untuk:

* login
* mengelola website
* mencatat pembuat konten

---

## 4.2 Village Profile

Berisi informasi tetap mengenai desa.

Contoh:

* sejarah
* visi
* misi
* geografis
* data umum

---

## 4.3 News

Berisi seluruh berita desa.

---

## 4.4 News Category

Kategori berita.

Misalnya

* Pemerintahan
* Kegiatan
* Pendidikan
* Pertanian

---

## 4.5 Announcement

Pengumuman resmi desa.

---

## 4.6 Service

Informasi pelayanan publik.

---

## 4.7 Village Potential

Potensi yang dimiliki desa.

Misalnya

* Pertanian
* UMKM
* Produk Lokal
* Wisata

---

## 4.8 Corn Information

Informasi Program Multidisiplin.

Meliputi

* potensi jagung
* kandungan gizi
* produk olahan
* panduan
* dokumentasi

---

## 4.9 Media

Penyimpanan gambar.

---

## 4.10 Website Setting

Konfigurasi website.

---

# 5. Struktur Entitas

## User

```text
User

id

name

email

password

remember_token

created_at

updated_at
```

---

## Village Profile

```text
VillageProfile

id

history

vision

mission

geography

general_information

created_by

updated_by

created_at

updated_at
```

---

## News

```text
News

id

category_id

title

slug

summary

content

thumbnail

status

published_at

created_by

updated_by

created_at

updated_at
```

---

## News Category

```text
NewsCategory

id

name

slug

created_at

updated_at
```

---

## Announcement

```text
Announcement

id

title

slug

content

published_at

expired_at

status

created_by

updated_by

created_at

updated_at
```

---

## Service

```text
Service

id

title

requirements

service_flow

service_hours

description

created_by

updated_by

created_at

updated_at
```

---

## Village Potential

```text
VillagePotential

id

title

slug

category

description

thumbnail

created_by

updated_by

created_at

updated_at
```

---

## Corn Information

```text
CornInformation

id

title

slug

category

content

thumbnail

created_by

updated_by

created_at

updated_at
```

Kategori dapat berupa:

* Potensi Jagung
* Kandungan Gizi
* Produk Olahan
* Dokumentasi
* Panduan

---

## Media

```text
Media

id

filename

original_name

mime_type

size

path

uploaded_by

created_at
```

---

## Website Setting

```text
WebsiteSetting

id

village_name

logo

email

phone

address

facebook

instagram

youtube

maps_embed

created_at

updated_at
```

---

# 6. Relationship

Hubungan antar tabel.

```text
User

│

├──────────────┐

│              │

│              │

News           Announcement

│

VillagePotential

│

CornInformation

│

Service
```

News

```text
News

belongsTo

↓

NewsCategory
```

User

```text
User

hasMany

↓

News
```

User

```text
User

hasMany

↓

Announcement
```

User

```text
User

hasMany

↓

VillagePotential
```

User

```text
User

hasMany

↓

CornInformation
```

---

# 7. ERD Konseptual

```text
User
 │
 ├────────────┐
 │            │
 ▼            ▼
News      Announcement
 │
 ▼
NewsCategory

User
 │
 ├───────────────┐
 │               │
 ▼               ▼
VillagePotential CornInformation

User
 │
 ▼
Service

User
 │
 ▼
Media
```

Catatan: `VillageProfile` dan `WebsiteSetting` pada MVP masing-masing cukup berupa **single record** (satu baris data) sehingga tidak memerlukan relasi kompleks.

---

# 8. Standar Penamaan

Nama tabel menggunakan bentuk jamak (plural) sesuai konvensi Laravel:

* users
* village_profiles
* news
* news_categories
* announcements
* services
* village_potentials
* corn_information
* media
* website_settings

Nama kolom menggunakan **snake_case**.

Primary key menggunakan `id`.

Foreign key menggunakan format:

```text
user_id

category_id
```

---

# 9. Konvensi Data

Setiap tabel yang bersifat konten sebaiknya memiliki:

```text
id

created_at

updated_at
```

Untuk modul yang dapat dipublikasikan:

```text
status

published_at
```

Untuk pencatatan pengguna:

```text
created_by

updated_by
```

---

# 10. Soft Delete

Modul berikut menggunakan soft delete:

* News
* Announcement
* Village Potential
* Corn Information
* Service

Hal ini memungkinkan administrator memulihkan data yang terhapus.

---

# 11. Indeks Database

Disarankan menambahkan index pada kolom:

```text
slug

status

published_at

category_id
```

Agar pencarian dan pemuatan halaman lebih cepat.

---

# 12. Seed Data

Data awal yang perlu dibuat:

Website Setting

* Nama Desa
* Logo
* Kontak

Administrator

* Akun admin pertama

Kategori Berita

* Pemerintahan
* Pertanian
* Pendidikan
* Kegiatan

Kategori Potensi

* Pertanian
* UMKM
* Produk Lokal
* Wisata

Kategori Jagung

* Potensi
* Produk
* Gizi
* Dokumentasi
* Panduan

---

# 13. Development Guidelines

Dalam implementasi database:

* Seluruh migration dibuat berdasarkan dokumen ini.
* Tidak membuat tabel di luar dokumen tanpa persetujuan.
* Tidak menyimpan data statis di dalam kode.
* Gunakan foreign key untuk menjaga integritas data.
* Gunakan Eloquent Relationship daripada query manual jika memungkinkan.

---

# 14. Deliverables Phase 3

Phase 3 dianggap selesai apabila:

* Seluruh entitas telah didefinisikan.
* Struktur tabel telah final.
* Relasi antar tabel telah final.
* ERD konseptual telah selesai.
* Konvensi penamaan telah ditetapkan.
* Struktur siap diterjemahkan menjadi migration Laravel.

---


