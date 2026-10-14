# KursusKu - Proyek Praktikum PHP

Proyek praktikum mata kuliah Bahasa Pemrograman III untuk mempelajari dasar PHP dan pengembangan aplikasi web.

## Identitas Mahasiswa

- Nama: Abdul Rasyid
- NIM: 2524226
- Program Studi: Pendidikan Teknik Informatika dan Komputer (PTIK)
- Mata Kuliah: Bahasa Pemrograman III

## Deskripsi Proyek

KursusKu merupakan prototipe website kursus yang digunakan untuk mempraktikkan pemrosesan data, formulir, validasi, perhitungan biaya, dan penyajian data menggunakan PHP.

## Fitur dan Materi Praktikum

- Menampilkan halaman utama dan informasi kursus.
- Menggunakan variabel, tipe data, operator, percabangan, dan perulangan.
- Mengolah data kursus melalui file PHP.
- Memproses formulir menggunakan metode GET dan POST.
- Memvalidasi data pendaftaran.
- Menghitung subtotal, diskon, dan total biaya kursus.
- Menampilkan contoh riwayat pendaftaran.
- Menguji fungsi PHP menggunakan skrip pengujian.

## Materi Praktikum Week 5

Bagian ini mendokumentasikan latihan formulir dan pemrosesan data menggunakan PHP.

File yang berkaitan:
- `registration.php` - formulir pendaftaran kursus.
- `process-registration.php` - validasi dan pemrosesan formulir.
- `get-demo.php` - contoh pengiriman dan pembacaan data GET.
- `register.php` - contoh formulir pilihan kursus.
- `data.php` - data contoh kursus dan pilihan minat.

**Bukti praktik:** simpan screenshot halaman formulir dan hasil pemrosesan yang berhasil di folder `evidence/week-05/`.

## Materi Praktikum Week 6

Bagian ini mendokumentasikan latihan pengolahan data kursus, perhitungan biaya, dan penyajian riwayat.

File yang berkaitan:
- `process.php` - pengolahan pilihan kursus dan diskon.
- `history.php` - tampilan contoh riwayat pendaftaran.
- `loop-lab.php` - latihan perulangan.
- `helpers.php` - fungsi pembantu untuk format rupiah dan perhitungan.
- `fee-calculator.php` dan `fee-tests.php` - kalkulasi biaya dan pengujian.

**Bukti praktik:** simpan screenshot hasil perhitungan dan halaman riwayat di folder `evidence/week-06/`.

Catatan: pengelompokan materi Week 5 dan Week 6 ini berdasarkan fitur yang tersedia pada proyek. Sesuaikan dengan instruksi resmi dosen jika terdapat ketentuan khusus.

## Struktur Proyek

- `index.php` - halaman utama.
- `data.php` - data contoh kursus.
- `helpers.php` - fungsi pembantu.
- `registration.php` - formulir pendaftaran.
- `process-registration.php` - pemrosesan pendaftaran.
- `register.php` dan `process.php` - latihan formulir dan perhitungan.
- `history.php` - contoh riwayat.
- `assets/` - gambar dan video.
- `evidence/` - dokumentasi screenshot praktik.

## Cara Menjalankan

1. Jalankan Laragon atau gunakan PHP CLI.
2. Buka terminal pada folder proyek.
3. Jalankan server PHP:

   `php -S 127.0.0.1:8000`

4. Buka `http://127.0.0.1:8000/` di browser.

Jika menggunakan PHP Laragon secara langsung, gunakan executable PHP yang terpasang di komputer.

## Pengujian

Jalankan perintah berikut dari folder proyek:

- `php -l index.php` untuk memeriksa sintaks file utama.
- `php test-functions.php` untuk menguji fungsi pembantu.
- `php fee-tests.php` untuk menguji perhitungan biaya.

Pengujian sebelumnya menunjukkan 6/6 pengujian fungsi dan 9/9 pengujian biaya lulus.

## Batasan

Proyek ini masih berupa prototipe praktikum. Data kursus dan riwayat yang ditampilkan merupakan data contoh; pendaftaran belum disimpan ke database.

## Dokumentasi

Screenshot praktik disimpan dalam folder `evidence/` sesuai minggu praktikum. Pastikan screenshot berasal dari hasil praktik yang benar-benar dijalankan.

## Lisensi

Proyek ini dibuat untuk keperluan pembelajaran.