<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Kursusku - Katalog Kursus</title>

    <style>
        * {
            box-sizing: border-box;
        }

        body {
            margin: 0;
            font-family: Arial, sans-serif;
            background: #f5f5f5;
            color: #333;
        }

        header {
            background: #222;
            color: white;
            padding: 20px;
            text-align: center;
        }

        header h1 {
            margin: 0;
        }

        header p {
            margin: 8px 0 0;
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
            color: white;
            background: rgba(0, 0, 0, 0.6);
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

        .catalog h2 {
            text-align: center;
            margin-bottom: 30px;
        }

        .courses {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
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
                grid-template-columns: 1fr;
            }

            .hero {
                margin: 20px;
            }

            .hero img {
                height: 300px;
            }

            .hero-text {
                left: 20px;
                right: 20px;
                bottom: 20px;
            }
        }
    </style>

</head>

<body>

    <header>
        <h1>Kursusku</h1>
        <p>Platform Belajar Online</p>
    </header>


    <div class="hero">

        <img src="assets/images/hero-kursus.jpg" alt="Gambar Kursusku">

        <div class="hero-text">
            <h2>Belajar Skill Digital</h2>

            <p>
                Tingkatkan kemampuan programming
                dan teknologi bersama Kursusku.
            </p>
        </div>

    </div>


    <section class="video-section">

        <h2>Video Pengenalan Kursusku</h2>

        <video controls>

            <source
                src="assets/video/intro-kursus.mp4"
                type="video/mp4"
            >

            Browser kamu tidak mendukung video.

        </video>

    </section>


    <section class="catalog">

        <h2>Daftar Kursus</h2>

        <div class="courses">


            <div class="course">

                <h3>PHP Dasar</h3>

                <p>
                    Belajar dasar-dasar pemrograman PHP
                    untuk membuat website dinamis.
                </p>

                <span class="status tersedia">
                    Tersedia
                </span>

            </div>


            <div class="course">

                <h3>MySQL Dasar</h3>

                <p>
                    Pelajari database MySQL dan cara
                    mengelola data menggunakan SQL.
                </p>

                <span class="status tersedia">
                    Tersedia
                </span>

            </div>


            <div class="course">

                <h3>HTML & CSS</h3>

                <p>
                    Pelajari cara membuat tampilan
                    website menggunakan HTML dan CSS.
                </p>

                <span class="status penuh">
                    Penuh
                </span>

            </div>


            <div class="course">

                <h3>JavaScript</h3>

                <p>
                    Belajar membuat website interaktif
                    menggunakan JavaScript.
                </p>

                <span class="status tersedia">
                    Tersedia
                </span>

            </div>


            <div class="course">

                <h3>Laravel</h3>

                <p>
                    Pelajari framework Laravel untuk
                    pengembangan aplikasi web modern.
                </p>

                <span class="status penuh">
                    Penuh
                </span>

            </div>


            <div class="course">

                <h3>Git & GitHub</h3>

                <p>
                    Belajar menggunakan Git dan GitHub
                    untuk mengelola proyek pemrograman.
                </p>

                <span class="status tersedia">
                    Tersedia
                </span>

            </div>


        </div>

    </section>


    <footer>

        <p>
            &copy; 2026 Kursusku
        </p>

    </footer>

</body>

</html>