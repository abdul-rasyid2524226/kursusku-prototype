
# KursusKu — Proyek Praktikum PHP

Proyek ini merupakan latihan mata kuliah Bahasa Pemrograman III
untuk mempelajari dasar pemrograman PHP dan pengembangan aplikasi web.

## Identitas Mahasiswa

- Nama: Abdul Rasyid
- NIM: 2524226
- Program Studi: Pendidikan Teknik Informatika dan Komputer (PTIK)
- Mata Kuliah: Bahasa Pemrograman III

## Deskripsi Proyek

KursusKu adalah prototipe website kursus online yang menampilkan
daftar kursus, harga, status ketersediaan, formulir pendaftaran,
simulasi perhitungan biaya, dan materi latihan PHP.

Sebagian fitur menggunakan data simulasi dan belum terhubung
ke database.

## Teknologi

- PHP
- HTML5
- CSS
- Laragon
- Git dan GitHub

## Fitur Utama

- Halaman utama dan katalog kursus
- Tampilan tanggal dan waktu server
- Kalkulator biaya dan diskon
- Formulir pendaftaran menggunakan POST
- Validasi input pendaftaran
- Demonstrasi metode GET
- Simulasi riwayat pendaftaran
- Latihan tipe data dan operator PHP
- Latihan percabangan dan perulangan
- Latihan manipulasi string
- Latihan tanggal dan waktu
- Latihan fungsi dan prosedur
- Latihan operator bitwise
- Halaman pengujian fungsi

## Daftar File Utama

| File | Fungsi |
|---|---|
| `index.php` | Halaman utama dan katalog kursus |
| `data.php` | Data contoh kursus dan pilihan |
| `hello.php` | Perkenalan mahasiswa |
| `server-time.php` | Menampilkan waktu server |
| `helpers.php` | Fungsi bantuan |
| `fee-calculator.php` | Kalkulator biaya kursus |
| `test-functions.php` | Pengujian fungsi |
| `fee-tests.php` | Pengujian biaya |
| `registration.php` | Formulir pendaftaran |
| `process-registration.php` | Validasi formulir |
| `get-demo.php` | Demonstrasi GET |
| `register.php` | Latihan formulir dan percabangan |
| `process.php` | Perhitungan biaya dan diskon |
| `history.php` | Contoh riwayat pendaftaran |
| `loop-lab.php` | Latihan perulangan |
| `bitwise-test.php` | Latihan operator bitwise |
| `type-data-test.php` | Latihan tipe data |
| `operator-test.php` | Latihan operator |
| `logic-test.php` | Latihan logika |
| `string-test.php` | Latihan string |
| `date-test.php` | Latihan tanggal dan waktu |
| `procedure-test.php` | Latihan fungsi dan prosedur |

## Struktur Folder

```text
kursusku-prototype/
├── index.php
├── data.php
├── hello.php
├── server-time.php
├── helpers.php
├── fee-calculator.php
├── test-functions.php
├── fee-tests.php
├── registration.php
├── process-registration.php
├── get-demo.php
├── register.php
├── process.php
├── history.php
├── loop-lab.php
├── bitwise-test.php
├── type-data-test.php
├── operator-test.php
├── logic-test.php
├── string-test.php
├── date-test.php
├── procedure-test.php
├── README.md
├── assets/
│   ├── images/
│   │   └── hero-kursus.jpg
│   └── video/
│       └── intro-kursus.mp4
└── evidence/
```

## Cara Menjalankan di Komputer

1. Instal dan buka Laragon.
2. Pastikan Apache berjalan.
3. Letakkan folder proyek di `C:\laragon\www\kursusku-prototype`.
4. Buka browser dan akses:

   `http://localhost/kursusku-prototype/`

5. Buka menu praktikum untuk mencoba halaman lainnya.

## Cara Menguji

- Uji kalkulator menggunakan harga Rp150.000, jumlah 2, dan diskon 10%.
- Pastikan subtotal Rp300.000, potongan Rp30.000, dan total Rp270.000.
- Uji formulir dengan input valid dan tidak valid.
- Uji pencarian menggunakan metode GET.
- Uji setiap halaman latihan melalui menu utama.
- Catat hasil pengujian berdasarkan hasil yang benar-benar diperoleh.

## Batasan Proyek

- Data kursus dan riwayat masih berupa data contoh.
- Pendaftaran belum tersimpan permanen ke database.
- Hasil pengujian harus dikonfirmasi melalui pelaksanaan program.

## Dokumentasi dan Bukti Praktik

Folder `evidence/` disediakan untuk menyimpan screenshot hasil praktik,
misalnya halaman utama, kalkulator, formulir, dan hasil pengujian.

Screenshot harus berasal dari pelaksanaan program yang sebenarnya.

## Lisensi

Proyek ini dibuat untuk keperluan pembelajaran dan praktikum.
