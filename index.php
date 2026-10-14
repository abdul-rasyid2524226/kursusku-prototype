
<?php
require_once 'helpers.php';

$daftarKursus = [
    [
        'nama' => 'PHP Dasar',
        'deskripsi' => 'Belajar dasar-dasar pemrograman PHP untuk membuat website dinamis.',
        'tersedia' => true
    ],
    [
        'nama' => 'MySQL Dasar',
        'deskripsi' => 'Pelajari database MySQL dan cara mengelola data menggunakan SQL.',
        'tersedia' => true
    ],
    [
        'nama' => 'HTML & CSS',
        'deskripsi' => 'Pelajari cara membuat tampilan website menggunakan HTML dan CSS.',
        'tersedia' => false
    ],
    [
        'nama' => 'JavaScript',
        'deskripsi' => 'Belajar membuat website interaktif menggunakan JavaScript.',
        'tersedia' => true
    ],
    [
        'nama' => 'Laravel',
        'deskripsi' => 'Pelajari framework Laravel untuk pengembangan aplikasi web modern.',
        'tersedia' => false
    ],
    [
        'nama' => 'Git & GitHub',
        'deskripsi' => 'Belajar menggunakan Git dan GitHub untuk mengelola proyek pemrograman.',
        'tersedia' => true
    ]
];
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>KursusKu - Katalog Kursus</title>

    <style>
        * {
            box-sizing: border-box;
        }

        body {
            margin: 0;
            font-family: Arial, sans-serif;
            background: #f5f5f5;
            color: #333;
            line-height: 1.6;
        }

        header {
            background: #222;
            color: white;
            padding: 20px;
            text-align: center;
        }

        header h1,
        header p {
            margin: 0;
        }

        .hero {
            max-width: 1200px;
            margin: 30px auto;
            position: relative;
            overflow: hidden;
            border-radius: 15px;
        }

        .hero img {
            width: 100%;
            height: 400px;
            object-fit: cover;
            display: block;
        }

        .hero-text {
            position: absolute;
            left: 40px;
            bottom: 40px;
            max-width: 550px;
            color: white;
            background: rgba(0, 0, 0, 0.7);
            padding: 20px;
            border-radius: 10px;
        }

        .hero-text h2 {
            margin: 0 0 10px;
        }

        .hero-text p {
            margin: 0;
        }

        .video-section {
            max-width: 900px;
            margin: 40px auto;
            padding: 0 20px;
            text-align: center;
        }

        .video-section video {
            width: 100%;
            border-radius: 10px;
            background: #000;
        }

        .catalog {
            max-width: 1200px;
            margin: 40px auto;
            padding: 0 20px;
        }

        .catalog > h2 {
            text-align: center;
            margin-bottom: 30px;
        }

        .courses {
            display: grid;
            grid-template-columns: repeat(3, minmax(0, 1fr));
            gap: 20px;
        }

        .course {
            background: white;
            padding: 25px;
            border-radius: 10px;
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
        }

        .course h3 {
            margin-top: 0;
        }

        .status {
            display: inline-block;
            padding: 6px 12px;
            border-radius: 20px;
            font-size: 14px;
            font-weight: bold;
        }

        .tersedia {
            background: #d4edda;
            color: #155724;
        }

        .penuh {
            background: #f8d7da;
            color: #721c24;
        }

        footer {
            margin-top: 50px;
            padding: 20px;
            background: #222;
            color: white;
            text-align: center;
        }

        @media (max-width: 768px) {
            .courses {
                grid-template-columns: repeat(2, minmax(0, 1fr));
            }

            .hero {
                margin: 20px;
            }

            .hero img {
                height: 300px;
            }

            .hero-text {
                left: 15px;
                right: 15px;
                bottom: 15px;
                padding: 15px;
            }
        }

        @media (max-width: 480px) {
            .courses {
                grid-template-columns: 1fr;
            }
        }
    </style>
</head>

<body>
    <header>
        <h1>KursusKu</h1>
        <p>Platform Belajar Online</p>
    </header>

    <main>
        <section class="hero">
            <img
                src="assets/images/hero-kursus.jpg"
                alt="Gambar utama KursusKu"
            >

            <div class="hero-text">
                <h2>Belajar Skill Digital</h2>
                <p>
                    Tingkatkan kemampuan programming
                    dan teknologi bersama KursusKu.
                </p>
            </div>
        </section>

        <section class="video-section">
            <h2>Video Pengenalan KursusKu</h2>

            <video controls preload="metadata">
                <source
                    src="assets/video/intro-kursus.mp4"
                    type="video/mp4"
                >
                Browser kamu tidak mendukung pemutaran video.
            </video>
        </section>

        <section class="catalog">
            <h2>Daftar Kursus</h2>

            <div class="courses">
                <?php foreach ($daftarKursus as $kursus): ?>
                    <?php
                    $status = statusKursus($kursus['tersedia']);
                    $kelasStatus = $kursus['tersedia']
                        ? 'tersedia'
                        : 'penuh';
                    ?>

                    <article class="course">
                        <h3>
                            <?= htmlspecialchars($kursus['nama']) ?>
                        </h3>

                        <p>
                            <?= htmlspecialchars($kursus['deskripsi']) ?>
                        </p>

                        <span class="status <?= $kelasStatus ?>">
                            <?= htmlspecialchars($status) ?>
                        </span>
                    </article>
                <?php endforeach; ?>
            </div>
        </section>
    </main>

    <footer>
        <p>&copy; 2026 KursusKu</p>
    </footer>
</body>
</html>
