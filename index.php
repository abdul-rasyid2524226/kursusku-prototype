
<?php
require_once 'helpers.php';
require_once 'data.php';

$menuLatihan = [
    ['judul' => 'Perkenalan PHP', 'file' => 'hello.php'],
    ['judul' => 'Waktu Server', 'file' => 'server-time.php'],
    ['judul' => 'Kalkulator Biaya', 'file' => 'fee-calculator.php'],
    ['judul' => 'Pengujian Fungsi', 'file' => 'test-functions.php'],
    ['judul' => 'Demo GET', 'file' => 'get-demo.php'],
    ['judul' => 'Form Pendaftaran', 'file' => 'registration.php'],
    ['judul' => 'Proses Pendaftaran', 'file' => 'process-registration.php'],
    ['judul' => 'Latihan Register', 'file' => 'register.php'],
    ['judul' => 'Proses Biaya Kursus', 'file' => 'process.php'],
    ['judul' => 'Riwayat Pendaftaran', 'file' => 'history.php'],
    ['judul' => 'Laboratorium Looping', 'file' => 'loop-lab.php'],
    ['judul' => 'Operator Bitwise', 'file' => 'bitwise-test.php'],
    ['judul' => 'Tipe Data', 'file' => 'type-data-test.php'],
    ['judul' => 'Operator PHP', 'file' => 'operator-test.php'],
    ['judul' => 'Logika dan Percabangan', 'file' => 'logic-test.php'],
    ['judul' => 'Manipulasi String', 'file' => 'string-test.php'],
    ['judul' => 'Tanggal dan Waktu', 'file' => 'date-test.php'],
    ['judul' => 'Fungsi dan Prosedur', 'file' => 'procedure-test.php'],
    ['judul' => 'Pengujian Biaya', 'file' => 'fee-tests.php']
];

function eHome($nilai) {
    return htmlspecialchars((string) $nilai, ENT_QUOTES, 'UTF-8');
}
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>KursusKu - Platform Belajar Online</title>
    <style>
        * {
            box-sizing: border-box;
        }
        body {
            margin: 0;
            font-family: Arial, sans-serif;
            background: #f4f6f9;
            color: #243044;
            line-height: 1.6;
        }
        header {
            background: #173f70;
            color: white;
            padding: 18px 6%;
        }
        .brand {
            font-size: 25px;
            font-weight: bold;
        }
        nav {
            display: flex;
            flex-wrap: wrap;
            gap: 12px;
            margin-top: 12px;
        }
        nav a {
            color: white;
            text-decoration: none;
        }
        .hero {
            padding: 45px 6%;
            background: white;
        }
        .hero-content {
            max-width: 1100px;
            margin: auto;
        }
        .hero h1 {
            font-size: clamp(28px, 5vw, 42px);
            line-height: 1.2;
        }
        .hero img {
            width: 100%;
            max-height: 390px;
            object-fit: cover;
            border-radius: 12px;
        }
        .container {
            max-width: 1100px;
            margin: auto;
            padding: 30px 20px;
        }
        .course-grid, .menu-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(230px, 1fr));
            gap: 18px;
        }
        .card {
            background: white;
            border-radius: 10px;
            padding: 20px;
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.05);
        }
        .price {
            font-size: 20px;
            font-weight: bold;
            color: #173f70;
        }
        .status {
            display: inline-block;
            padding: 4px 10px;
            border-radius: 20px;
            background: #e5f7eb;
            color: #176534;
            font-size: 13px;
        }
        .full {
            background: #ffe8e8;
            color: #a22222;
        }
        .menu-grid a {
            color: #174f8c;
            text-decoration: none;
            font-weight: bold;
        }
        .menu-grid a:hover {
            text-decoration: underline;
        }
        .video-box {
            background: white;
            padding: 20px;
            border-radius: 10px;
        }
        video {
            width: 100%;
            max-height: 420px;
            border-radius: 8px;
        }
        footer {
            text-align: center;
            padding: 25px;
            background: #173f70;
            color: white;
        }
    </style>
</head>
<body>
<header>
    <div class="brand">KursusKu</div>
    <nav>
        <a href="#beranda">Beranda</a>
        <a href="#kursus">Daftar Kursus</a>
        <a href="#praktikum">Materi Praktikum</a>
        <a href="registration.php">Pendaftaran</a>
        <a href="history.php">Riwayat</a>
    </nav>
</header>

<section class="hero" id="beranda">
    <div class="hero-content">
        <h1>Belajar Keterampilan Digital Bersama KursusKu</h1>
        <p>
            Platform simulasi kursus untuk mempelajari pemrograman,
            basis data, dan keterampilan digital.
        </p>

        <p>
            <a href="registration.php">Mulai Pendaftaran</a>
            |
            <a href="#kursus">Lihat Daftar Kursus</a>
        </p>

        <img
            src="assets/images/hero-kursus.jpg"
            alt="Ilustrasi pembelajaran KursusKu"
            loading="lazy"
        >
    </div>
</section>

<main class="container">
    <section id="kursus">
        <h2>Daftar Kursus</h2>
        <p>Pilih kursus yang sesuai dengan kebutuhan belajarmu.</p>

        <div class="course-grid">
            <?php foreach ($daftarKursus as $kursus): ?>
                <article class="card">
                    <h3><?= eHome($kursus['nama']) ?></h3>
                    <p>Kode: <?= eHome($kursus['kode']) ?></p>
                    <p class="price">
                        <?= formatRupiah($kursus['harga']) ?>
                    </p>
                    <p>
                        Kuota:
                        <?= (int) $kursus['terdaftar'] ?>
                        /
                        <?= (int) $kursus['kuota'] ?>
                    </p>
                    <?php if ($kursus['tersedia']): ?>
                        <span class="status">Tersedia</span>
                    <?php else: ?>
                        <span class="status full">Penuh</span>
                    <?php endif; ?>
                </article>
            <?php endforeach; ?>
        </div>
    </section>

    <section style="margin-top: 40px;">
        <h2>Video Perkenalan</h2>
        <div class="video-box">
            <video controls preload="metadata">
                <source src="assets/video/intro-kursus.mp4" type="video/mp4">
                Browser kamu tidak mendukung pemutar video.
            </video>
        </div>
    </section>

    <section id="praktikum" style="margin-top: 40px;">
        <h2>Materi dan Fitur Praktikum PHP</h2>
        <p>
            Buka tautan di bawah untuk melihat latihan yang telah dibuat.
        </p>

        <div class="menu-grid">
            <?php foreach ($menuLatihan as $menu): ?>
                <article class="card">
                    <a href="<?= eHome($menu['file']) ?>">
                        <?= eHome($menu['judul']) ?>
                    </a>
                    <p>
                        File:
                        <code><?= eHome($menu['file']) ?></code>
                    </p>
                </article>
            <?php endforeach; ?>
        </div>
    </section>

    <section style="margin-top: 40px;">
        <h2>Dokumentasi Proyek</h2>
        <ul>
            <li>
                <a href="README.md">Dokumentasi README</a>
            </li>
            <li>
                <a href="PORTOFOLIO-CHECKLIST.md">Checklist Portofolio</a>
            </li>
            <li>
                <a href="REFLEKSI-P5-P6.md">Refleksi Praktikum</a>
            </li>
            <li>
                <a href="PROJECT-FILE-MANIFEST.txt">Daftar File Proyek</a>
            </li>
            <li>
                <a href="VALIDATION-RESULTS.txt">Catatan Validasi</a>
            </li>
        </ul>
    </section>
</main>

<footer>
    <p>KursusKu — Proyek Praktikum Bahasa Pemrograman III</p>
    <p>Disusun oleh Abdul Rasyid | PTIK</p>
</footer>
</body>
</html>
