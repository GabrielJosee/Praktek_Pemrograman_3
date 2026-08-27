<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan Bootstrap</title>
    <link rel="stylesheet" href="asset/css/bootstrap.min.css">
    <link rel="stylesheet" href="asset/css/Latihan_Bootstrap.css">
    <link rel="stylesheet" href="asset/icons/bootstrap-icons.css">
</head>

<body>
    <header id="header" class="navbar navbar-expand-lg fixed-top">
        <div class="container">
            <a class="navbar-brand d-flex align-items-center" href="#Home">
                <div class="logo-wrapper d-flex justify-content-center align-items-center me-2">
                    <img src="asset/img/Logo_Brand.png" alt="Jose Logo" height="40">
                </div>
                <span class="brand-text fw-bold">JOSE</span>
            </a>
            <button class="navbar-toggler border-0 shadow-none" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarMenu">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end" id="navbarMenu">
                <ul class="navbar-nav gap-2 align-items-center">
                    <li class="nav-item">
                        <a class="nav-link active" href="#Home">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#Services">Services</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#About">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link btn-contact" href="#Contact">Contact</a>
                    </li>
                </ul>
            </div>
        </div>
    </header>
    <section id="Home" class="hero-section">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-7 position-relative">
                    <div class="hero-content ps-lg-5">
                        <h2 class="hero-subtitle">Halo! Salam Kenal!</h2>
                        <h1 class="hero-title">Gabriel Jose</h1>
                        <p class="hero-description">
                            Ini adalah percobaan pembuatan Portofolio saya dengan menggunakan Bootstrap.
                        </p>
                    </div>
                </div>
                <div class="col-lg-5 text-center">
                    <img src="asset/img/Jose.png" alt="Jose" class="hero-image img-fluid">
                </div>
            </div>
        </div>
    </section>
    <?php
    include("services.php");
    ?>
    <section id="About" class="section-padding">
        <div class="container">
            <div class="row mb-5">
                <div class="col text-center">
                    <h2 class="display-5 underline mb-4">About Me</h2>
                    <p class="text-muted mx-auto mb-0" style="max-width: 700px; line-height: 1.8;">
                        Saya adalah seorang <strong>Mechatronics Engineering Enthusiast</strong> yang memiliki
                        ketertarikan kuat pada perpaduan antara sistem mekanik, elektronik, dan pemrograman. Saya senang
                        memecahkan masalah kompleks dengan membangun solusi otomasi yang efisien dan inovatif.
                    </p>
                </div>
            </div>
            <div class="row g-5 mb-5 align-items-center">
                <div class="col-lg-5">
                    <h3 class="fw-bold mb-4">Riwayat Pendidikan</h3>

                    <div class="education-timeline">
                        <div class="timeline-item">
                            <div class="timeline-marker"><i class="bi bi-mortarboard-fill"></i></div>
                            <div class="timeline-content">
                                <h5 class="fw-bold mb-1">SD Marsudirini</h5>
                                <p class="text-muted mb-1">2012 - 2018</p>
                                <a href="https://maps.app.goo.gl/SGBmoJkQ3yC2wpM86" target="_blank"
                                    class="btn btn-sm btn-maps-link">
                                    <i class="bi bi-geo-alt me-1"></i>Lihat Lokasi
                                </a>
                            </div>
                        </div>
                        <div class="timeline-item">
                            <div class="timeline-marker"><i class="bi bi-mortarboard-fill"></i></div>
                            <div class="timeline-content">
                                <h5 class="fw-bold mb-1">SMP Tarakanita Solo Baru</h5>
                                <p class="text-muted mb-1">2018 - 2021</p>
                                <a href="https://maps.app.goo.gl/dxa9LqEFAifebqkq9" target="_blank"
                                    class="btn btn-sm btn-maps-link">
                                    <i class="bi bi-geo-alt me-1"></i>Lihat Lokasi
                                </a>
                            </div>
                        </div>
                        <div class="timeline-item">
                            <div class="timeline-marker"><i class="bi bi-mortarboard-fill"></i></div>
                            <div class="timeline-content">
                                <h5 class="fw-bold mb-1">SMK Negeri 5 Surakarta</h5>
                                <p class="text-muted mb-1">2021 - 2024</p>
                                <a href="https://maps.app.goo.gl/aTmwFx6FHZKRFWBn6" target="_blank"
                                    class="btn btn-sm btn-maps-link">
                                    <i class="bi bi-geo-alt me-1"></i>Lihat Lokasi
                                </a>
                            </div>
                        </div>
                        <div class="timeline-item">
                            <div class="timeline-marker active"><i class="bi bi-mortarboard-fill"></i></div>
                            <div class="timeline-content">
                                <h5 class="fw-bold mb-1">Politeknik ATMI Surakarta</h5>
                                <p class="text-muted mb-1">2024 - Sekarang</p>
                                <p class="small text-muted">Teknik Mekatronika - Program D3</p>
                                <span class="badge bg-dark mb-2">Currently Studying</span><br>
                                <a href="https://maps.app.goo.gl/ppgrd3jkNkoDmh9UA" target="_blank"
                                    class="btn btn-sm btn-maps-link">
                                    <i class="bi bi-geo-alt me-1"></i>Lihat Lokasi
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-7">
                    <div class="dashboard-card p-4">
                        <h5 class="fw-bold mb-4 text-center">Technical Skills Overview</h5>
                        <div class="chart-container"
                            style="position: relative; height: 350px; width: 100%; max-width: 500px; margin: 0 auto;">
                            <canvas id="skillsChart"></canvas>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <?php
    if (isset($_SESSION['tampilkan_modal_sukses'])):
        ?>
        <script>
            document.addEventListener("DOMContentLoaded", function () {
                var myModal = new bootstrap.Modal(document.getElementById('modalSukses'));
                myModal.show();
            });
        </script>
        <?php
        unset($_SESSION['tampilkan_modal_sukses']);
    endif;
    ?>
    <div class="modal fade" id="modalSukses" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content border-0 shadow-lg rounded-4">
                <div class="modal-body text-center p-5">
                    <div class="mb-3">
                        <i class="bi bi-check-circle-fill text-success" style="font-size: 5rem; line-height: 1;"></i>
                    </div>
                    <h4 class="fw-bold mb-2">Pesan Berhasil Dikirim!</h4>
                    <p class="text-muted mb-4">Terima kasih telah menghubungi saya. Saya akan membalas pesan Anda
                        secepatnya.</p>
                    <button type="button" class="btn btn-dark px-4 rounded-pill" data-bs-dismiss="modal">
                        Tutup
                    </button>
                </div>
            </div>
        </div>
    </div>
    <section id="Contact" class="section-padding bg-light-custom">
        <div class="container">
            <div class="row mb-5 text-center">
                <div class="col">
                    <h2 class="display-5 mb-3">Contact</h2>
                    <p class="text-muted mx-auto" style="max-width: 600px;">
                        Punya pertanyaan, tawaran proyek, atau sekadar ingin menyapa? Jangan ragu untuk menghubungi
                        saya.
                    </p>
                </div>
            </div>

            <div class="row g-5">
                <div class="col-lg-5">
                    <div class="contact-info p-4">
                        <div class="d-flex align-items-start mb-4">
                            <i class="bi bi-envelope-fill fs-2 me-3 text-dark"></i>
                            <div>
                                <h6 class="fw-bold mb-1">Email</h6>
                                <p class="text-muted mb-0">gabriel.20242020@student.atmi.ac.id</p>
                            </div>
                        </div>
                        <div class="d-flex align-items-start mb-4">
                            <i class="bi bi-telephone-fill fs-2 me-3 text-dark"></i>
                            <div>
                                <h6 class="fw-bold mb-1">Phone / WhatsApp</h6>
                                <p class="text-muted mb-0">+62 857-2779-6640</p>
                            </div>
                        </div>
                        <div class="d-flex align-items-start">
                            <i class="bi bi-geo-alt-fill fs-2 me-3 text-dark"></i>
                            <div>
                                <h6 class="fw-bold mb-1">Location</h6>
                                <p class="text-muted mb-0">Solobaru, Indonesia</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-7">
                    <form action="kirim_pesan.php" method="POST">
                        <div class="row g-3">
                            <div class="col-md-6">
                                <input type="text" name="nama" class="form-control custom-input" placeholder="Nama Anda"
                                    required>
                            </div>
                            <div class="col-md-6">
                                <input type="email" name="email" class="form-control custom-input"
                                    placeholder="Email Anda" required>
                            </div>
                            <div class="col-12">
                                <input type="text" name="subjek" class="form-control custom-input"
                                    placeholder="Subjek Pesan">
                            </div>
                            <div class="col-12">
                                <textarea name="pesan" class="form-control custom-input" rows="5"
                                    placeholder="Tulis pesan Anda di sini..." required></textarea>
                            </div>
                            <div class="col-12">
                                <button type="submit" class="btn btn-custom-submit" name="kirim">
                                    Kirim Pesan <i class="bi bi-send-fill ms-2"></i>
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <footer class="footer-section py-5">
        <div class="container text-center">
            <div class="mb-4">
                <a href="#Home" class="text-decoration-none">
                    <h3 class="fw-bold text-white mb-0">JOSE<span style="color: #666;">.</span></h3>
                </a>
            </div>
            <div class="social-links mb-4">
                <a href="https://www.instagram.com/jose.fabbian" class="social-icon" title="Instagram"><i
                        class="bi bi-instagram"></i></a>
                <a href="#" class="social-icon" title="LinkedIn"><i class="bi bi-linkedin"></i></a>
                <a href="https://github.com/GabrielJosee" class="social-icon" title="GitHub"><i
                        class="bi bi-github"></i></a>
                <a href="https://wa.me/6285727796640" class="social-icon" title="WhatsApp"><i
                        class="bi bi-whatsapp"></i></a>
            </div>
            <p class="text-muted-light mb-0 small">
                &copy; 2026 Jose. Aku belajar bootstrap 5.3.
            </p>
        </div>
    </footer>
    <script src="asset/js/bootstrap.bundle.min.js"></script>
    <script src="asset/js/chart.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const navLinks = document.querySelectorAll('.nav-link');
            const sections = document.querySelectorAll('section[id]');
            const navbarMenu = document.getElementById('navbarMenu');

            navLinks.forEach(link => {
                link.addEventListener('click', function () {
                    navLinks.forEach(l => l.classList.remove('active'));

                    this.classList.add('active');

                    if (navbarMenu.classList.contains('show')) {
                        const bsCollapse = new bootstrap.Collapse(navbarMenu, { toggle: false });
                        bsCollapse.hide();
                    }
                });
            });

            window.addEventListener('scroll', () => {
                let currentSection = '';

                const scrollPosition = window.scrollY + 150;

                sections.forEach(section => {
                    const sectionTop = section.offsetTop;
                    const sectionHeight = section.clientHeight;

                    if (scrollPosition >= sectionTop && scrollPosition < sectionTop + sectionHeight) {
                        currentSection = section.getAttribute('id');
                    }
                });

                if (window.scrollY < 100) {
                    currentSection = 'Home';
                }

                navLinks.forEach(link => {
                    link.classList.remove('active');
                    if (link.getAttribute('href') === `#${currentSection}`) {
                        link.classList.add('active');
                    }
                });
            });
        });
    </script>
    <script>
        <?php
        include("koneksi.php");

        $sql = "SELECT skill, nilai FROM about ORDER BY urutan ASC";
        $result = $conn->query($sql);

        $labels = [];
        $data = [];
        $labelsJSON = '[]';
        $dataJSON = '[]';
        $jumlahData = 0;

        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                $labels[] = $row['skill'];
                $data[] = (int) $row['nilai'];
            }
            $conn->close();

            $labelsJSON = json_encode($labels);
            $dataJSON = json_encode($data);
            $jumlahData = count($data);
        }
        ?>

        const ctx = document.getElementById('skillsChart');

        <?php if (!empty($data)): ?>
            function generateGrayscaleColors(count) {
                const colors = [];
                for (let i = 0; i < count; i++) {
                    const value = Math.floor((255 / count) * i);
                    colors.push(`rgb(${value}, ${value}, ${value})`);
                }
                return colors;
            }

            new Chart(ctx, {
                type: 'bar',
                data: {
                    labels: <?php echo $labelsJSON; ?>,
                    datasets: [{
                        label: 'Tingkat Penguasaan (%)',
                        data: <?php echo $dataJSON; ?>,
                        backgroundColor: generateGrayscaleColors(<?php echo $jumlahData; ?>),
                        borderColor: '#000000',
                        borderWidth: 1,
                        borderRadius: 4,
                        barPercentage: 0.7,
                        hoverOffset: 10
                    }]
                },
                options: {
                    responsive: true,
                    maintainAspectRatio: false,
                    animation: {
                        duration: 1000,
                        easing: 'easeOutQuart'
                    },
                    scales: {
                        y: {
                            beginAtZero: true,
                            max: 100,
                            grid: { color: '#f0f0f0' },
                            ticks: {
                                callback: function (value) {
                                    return value + '%';
                                }
                            }
                        },
                        x: {
                            grid: { display: false }
                        }
                    },
                    plugins: {
                        legend: { display: false },
                        tooltip: {
                            backgroundColor: '#000',
                            callbacks: {
                                label: function (context) {
                                    return 'Penguasaan: ' + context.parsed.y + '%';
                                }
                            }
                        }
                    }
                }
            });
        <?php else: ?>
            const canvas = ctx;
            const container = canvas.parentElement;
            ctx.clearRect(0, 0, canvas.width, canvas.height);
            container.innerHTML = `
            <div class="d-flex flex-column align-items-center justify-content-center" style="height: 350px; color: #999;">
                <i class="bi bi-database display-1 mb-3"></i>
                <p class="mb-0 fw-bold">Belum ada data skill</p>
                <small class="text-muted">Silakan tambahkan data ke database</small>
            </div>
        `;
        <?php endif; ?>
    </script>
</body>

</html>