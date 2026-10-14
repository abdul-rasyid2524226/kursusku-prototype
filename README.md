
# KursusKu - Katalog Kursus Online

## Identitas Mahasiswa

- Nama: Abdul Rasyid
- NIM: 2524226
- Program Studi: PTIK
- Mata Kuliah: Bahasa Pemrograman III

## Deskripsi Proyek

KursusKu adalah proyek prototipe katalog kursus online berbasis PHP. Proyek ini dibuat untuk menerapkan dasar-dasar pemrograman web, pengolahan data, fungsi, percabangan, perulangan, dan pengujian fungsi.

## Fitur

1. Menampilkan katalog kursus.
2. Menampilkan gambar utama dan video pengenalan.
3. Menampilkan status kursus tersedia atau penuh.
4. Menampilkan tanggal dan waktu server dalam zona waktu WIB.
5. Menghitung biaya kursus dan potongan diskon.
6. Menguji fungsi-fungsi PHP.

## Teknologi

- PHP
- HTML
- CSS
- Git
- GitHub
- Laragon sebagai lingkungan pengembangan lokal

## Struktur Proyek

```text
kursusku-prototype/
├── index.php
├── hello.php
├── server-time.php
├── fee-calculator.php
├── helpers.php
├── test-functions.php
├── fee-tests.php
├── assets/
│   ├── images/
│   │   └── hero-kursus.jpg
│   └── video/
│       └── intro-kursus.mp4
├── evidence/
│   └── README.md
└── README.md
```

## Cara Menjalankan

1. Instal dan buka Laragon.
2. Letakkan folder proyek di direktori `C:\laragon\www\kursusku-prototype`.
3. Jalankan layanan Apache.
4. Buka browser dan akses:

   `http://localhost/kursusku-prototype/`

5. Untuk membuka kalkulator biaya, akses:

   `http://localhost/kursusku-prototype/fee-calculator.php`

6. Untuk melihat waktu server, akses:

   `http://localhost/kursusku-prototype/server-time.php`

7. Untuk menjalankan pengujian fungsi, akses:

   `http://localhost/kursusku-prototype/test-functions.php`

## Pengujian

Pengujian dilakukan untuk memeriksa format Rupiah, perhitungan total kursus, perhitungan diskon, serta status ketersediaan kursus.

Hasil pengujian perlu diperiksa dengan menjalankan file PHP pada lingkungan lokal. Status pengujian tidak dinyatakan lulus sebelum hasil aktual diperoleh.

## Media dan Bukti Praktik

- Gambar katalog: `assets/images/hero-kursus.jpg`
- Video pengenalan: `assets/video/intro-kursus.mp4`
- Bukti praktik: folder `evidence/`

Bukti praktik dan tangkapan layar pengujian dapat ditambahkan setelah proses pengujian lokal dilakukan.

## Penutup

Proyek KursusKu merupakan latihan penerapan dasar pemrograman PHP dan pengembangan antarmuka web. Proyek ini dapat dikembangkan lebih lanjut dengan database MySQL, sistem pendaftaran, dan autentikasi pengguna.
