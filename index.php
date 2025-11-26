<?php
include 'config/koneksi.php';

$query = mysqli_query($koneksi, "SELECT COUNT(*) as total FROM siswa");
$data = mysqli_fetch_assoc($query);
$totalPendaftar = $data['total'];
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8"> 
    <title>PPDB online - SMK ISLAM MADANI</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css  " rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js  "></script>
    <!-- Pastikan path ke CSS benar -->
    <link rel="stylesheet" href="assets/css/style.css">
    <style>
        section {
            scroll-margin-top: 80px;
        }

        /* Perbaikan dropdown navbar */
        .navbar-nav .dropdown-toggle::after {
            margin-left: 0.5em;
            vertical-align: middle;
        }
    </style>
</head>

<body class="d-flex flex-column">

<!-- WhatsApp Button -->
<a href="https://wa.me/6281234567890?text=Halo%20saya%20mau%20tanya  " class="whatsapp-float" target="_blank">
    <img src="https://upload.wikimedia.org/wikipedia/commons/6/6b/WhatsApp.svg  " alt="WhatsApp" width="40" height="40">
</a>

<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-dark index">
    <div class="container">
        <a class="navbar-brand d-flex align-items-center" href="index.php">
            <img src="assets/img/logo.png" alt="logo" width="60" height="55" class="me-2">
            PPDB ONLINE
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                
                <!-- HOME dengan SUBMENU -->
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="homeDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        HOME
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="homeDropdown">
                        <li><a class="dropdown-item" href="#profil-sekolah">Profil Sekolah</a></li>
                        <li><a class="dropdown-item" href="#visi-misi">Visi Misi</a></li>
                        <li><a class="dropdown-item" href="#ekstrakulikuler">Kegiatan Ekstrakulikuler</a></li>
                        <li><a class="dropdown-item" href="#guru">Guru dan Tenaga Kependidikan</a></li>
                        <li><a class="dropdown-item" href="#alumni">ALUMNI SMK ISLAM MADANI</a></li>
                        <li><a class="dropdown-item" href="#kejuruan">Kejuruan</a></li>
                        <li><a class="dropdown-item" href="#lokasi">Lokasi Sekolah</a></li>
                    </ul>
                </li>
                <li class="nav-item"><a class="nav-link" href="kejuruan.php">KEJURUAN</a></li>
                <li class="nav-item"><a class="nav-link" href="daftar_siswa.php">MENDAFTAR</a></li>
                <li class="nav-item"><a class="nav-link" href="data_siswauser.php">DATA CALON SISWA</a></li>
                <li class="nav-item"><a class="nav-link" href="grafik.php">GRAFIK</a></li>
                <li class="nav-item"><a class="nav-link" href="login.php">LOGIN</a></li>
                <li class="nav-item"><a class="nav-link" href="kontak.php">KONTAK</a></li>
            </ul>
        </div>
    </div>
</nav>


<!-- Hero Section -->
<div class="hero text-center p-5">
    <h1>SMK ISLAM MADANI CINTARAJA</h1>  
    <p class="lead">Aplikasi PPDB Online</p>
    <a href="daftar_siswa.php" class="btn btn-primary mt-3">Daftar Sekarang</a>
    <div class="info-petunjuk mt-3">
        PANDUAN PENGISIAN FORMULIR ONLINE -> Registrasi terlebih dahulu klik menu MENDAFTAR, 
        setelah itu lengkapi BIODATA DIRI klik menu LOGIN
    </div>
</div>

<!-- Sections with ID -->
<section id="profil-sekolah" class="profil py-5">
    <div class="container">
        <h2>Profil Sekolah</h2>
        <p>
            SMK Islam Madani adalah lembaga pendidikan yang mencetak generasi unggul, berakhlak mulia, dan berwawasan global.
            Terletak di Jl. Cimuta Desa Cintaraja, Kec. Singaparna, Kab. Tasikmalaya.
        </p>
        <p>
            SMK Islam Madani, yang terletak di Kp. Cimuta, Desa/Kelurahan Cintaraja, Kecamatan Singaparna, Kabupaten Tasikmalaya, Jawa Barat, merupakan sekolah swasta yang berkomitmen untuk melahirkan lulusan yang berakhlak mulia dan berkompeten di bidangnya. Sekolah ini berdiri sejak tahun 2016 berdasarkan SK Pendirian No. 001/SK/A/YADANI/IV/2016 yang dikeluarkan pada tanggal 20 April 2016.
            SMK Islam Madani menyelenggarakan pendidikan jenjang SMK dengan sistem pembelajaran pagi selama 6 hari. Sekolah ini berada di bawah naungan Kementerian Pendidikan dan Kebudayaan dan memiliki akses internet melalui Telkomsel Flash serta sumber listrik dari PLN. 
        </p>
    </div>
</section>

<section id="visi-misi" class="visi-misi py-5">
    <div class="container">
        <h2>Visi</h2>
        <p>"Terwujudnya Peserta Didik yang Berakhlak, Berilmu, dan Berprestasi". </p>
        
        <h2>Misi</h2>
        <ol>
            <li>Menciptakan proses belajar mengajar yang berbasis islami</li>
            <li>Mengkondisikan tenaga pendidik dan kependidikan yang profesional, tanggung jawab dan amanah</li>
            <li>Menyediakan fasilitas pembelajaran yang sesuai dengan standar sarana dan prasarana, guna mendukung prestasi peserta didik</li>
            <li>Menghasilkan lulusan yang memiliki kekuatan akidah dan ibadah yang dibuktikan dengan perilaku sholeh dalam kehidupan sehari-hari</li>
            <li>Menghasilkan lulusan berkompetensi tinggi sesuai keahliannya, mampu bersaing di dunia nasional maupun internasional</li>
        </ol>
    </div>
</section>
<section id="ekstrakulikuler" class="eskul py-5 bg-light">
    <div class="container">
        <h2>Kegiatan Ekstrakurikuler</h2>
        <div class="eskul-gallery">
            <img src="assets/img/pramuka.jpeg" alt="Pramuka" class="eskul-img">
            <img src="assets/img/futsal.jpg" alt="Futsal" class="eskul-img">
            <img src="assets/img/voli.webp" alt="Voli" class="eskul-img">
          </div>
    </div>
</section>



<section id="guru" class="guru py-5">
    <div class="container">
        <h2>Guru dan Tenaga Kependidikan</h2>
        <!-- Scroll area tanpa tombol -->
        <div class="guru-scroll">
            <div class="guru-wrapper" id="guru-wrapper">
                <!-- Kartu Guru -->
                 <div class="card shadow-sm text-center border-0">
                    <img src="assets/img/paki.png" class="card-img-top" alt="Rosmiati S.Pd">
                    <div class="card-body">
                        <h5 class="card-title">Ricky Zakaria S.Pd</h5>
                        <p class="card-text"> Kepala Sekolah SMK Islam Madani</p>
                    </div>
                </div>
                 
                <div class="card shadow-sm text-center border-0">
                    <img src="assets/img/bur.jpg" class="card-img-top" alt="Rosmiati S.Pd">
                    <div class="card-body">
                        <h5 class="card-title">Rosmiati S.Pd</h5>
                        <p class="card-text">Guru PPKN dan Bahasa Indonesia, mengajar sejak 2020</p>
                    </div>
                </div>

                <div class="card shadow-sm text-center border-0">
                    <img src="assets/img/buel.jpg" class="card-img-top" alt="Tazkia Noorma">
                    <div class="card-body">
                        <h5 class="card-title">Ella S.Bns</h5>
                        <p class="card-text">Guru Produktif DKV, mengajar sejak 2023</p>
                    </div>
                </div>

                <div class="card shadow-sm text-center border-0">
                    <img src="assets/img/ibut.png" class="card-img-top" alt="Tazkia Noorma">
                    <div class="card-body">
                        <h5 class="card-title">Tazkia Noorma S.Bns</h5>
                        <p class="card-text">Guru Kewirausahaan, mengajar sejak 2023</p>
                    </div>
                </div>

                <div class="card shadow-sm text-center border-0">
                    <img src="assets/img/pako.png" class="card-img-top" alt="Tazkia Noorma">
                    <div class="card-body">
                        <h5 class="card-title"> Taufik Hidayah S.Sos</h5>
                        <p class="card-text">Guru Sejarah, mengajar sejak 2025</p>
                    </div>
                </div>

                <div class="card shadow-sm text-center border-0">
                    <img src="assets/img/thtul.jpg" class="card-img-top" alt="Nurotul Karomah">
                    <div class="card-body">
                        <h5 class="card-title">Nurotul Karomah S.Pd</h5>
                        <p class="card-text">Guru Bimbingan Konseling, mengajar sejak 2025</p>
                    </div>
                </div>

                <div class="card shadow-sm text-center border-0">
                    <img src="assets/img/ibur.jpg" class="card-img-top" alt="Reni Anggraeni">
                    <div class="card-body">
                        <h5 class="card-title">Reni Anggraeni S.Kom</h5>
                        <p class="card-text">Guru Produktif RPL, mengajar sejak 2024</p>
                    </div>
                </div>

                <div class="card shadow-sm text-center border-0">
                    <img src="assets/img/aher.png" class="card-img-top" alt="Haerul Pebriansyah">
                    <div class="card-body">
                        <h5 class="card-title">Haerul Pebriansyah S.Kom</h5>
                        <p class="card-text">Guru Produktif RPL, mengajar sejak 2024</p>
                    </div>
                </div>

                <div class="card shadow-sm text-center border-0">
                    <img src="assets/img/mis.jpg" class="card-img-top" alt="Erika Agustina">
                    <div class="card-body">
                        <h5 class="card-title">Erika Agustina S.Pd</h5>
                        <p class="card-text">Guru Bahasa Inggris, mengajar sejak 2023</p>
                    </div>
                </div>


                <div class="card shadow-sm text-center border-0">
                    <img src="assets/img/ayog.jpg" class="card-img-top" alt="Yoga Nugraha">
                    <div class="card-body">
                        <h5 class="card-title">Yoga Nugraha S.Pd</h5>
                        <p class="card-text">Guru Produktif DKV, mengajar sejak 2025</p>
                    </div>
                </div>

                <div class="card shadow-sm text-center border-0">
                    <img src="assets/img/pat.jpg" class="card-img-top" alt="Tepi S.Pd">
                    <div class="card-body">
                        <h5 class="card-title">Tepi S.Pd</h5>
                        <p class="card-text">Guru Produktif DKV, mengajar sejak 2025</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<section id="alumni" class="alumni py-5 bg-light">
    <div class="container">
        <h2>ALUMNI SMK ISLAM MADANI</h2>
        <!-- Scroll area tanpa tombol -->
        <div class="alumni-scroll">
            <div class="alumni-wrapper" id="alumni-wrapper">
                <!-- Kartu Alumni -->
                <div class="alumni-card shadow-sm border-0">
                    <img src="assets/img/aher.png" alt="Haerul Febriansyah" class="alumni-img">
                    <div class="alumni-body">
                        <h5 class="alumni-name">Haerul Febriansyah S.Kom</h5>
                        <p class="alumni-year">Lulusan Tahun 2019 • Jurusan RPL</p>
                        <p class="alumni-desc">
                            Saat ini mengajar di SMK Islam Madani, SMP Islam Ibnu Hanbal, dan menjadi asisten dosen di STTC.
                        </p>
                        <blockquote class="alumni-quote">"Pesan saya, jangan takut gagal, karena kegagalan adalah awal dari keberhasilan."</blockquote>
                    </div>
                </div>

                <div class="alumni-card shadow-sm border-0">
                    <img src="assets/img/ibur.jpg" alt="Reni Anggraeni" class="alumni-img">
                    <div class="alumni-body">
                        <h5 class="alumni-name">Reni Anggraeni S.Kom</h5>
                        <p class="alumni-year">Lulusan Tahun 2019 • Jurusan RPL</p>
                        <p class="alumni-desc">
                            Saat ini mengajar di SMK Islam Madani, dan menjadi asisten dosen di STTC.
                        </p>
                        <blockquote class="alumni-quote">"Pesan saya, teruslah belajar, hingga kamu sadar bahwa belajar adalah kunci awal dari kesuksesan."</blockquote>
                    </div>
                </div>

                <div class="alumni-card shadow-sm border-0">
                    <img src="assets/img/thana.png" alt="Diana Nurfadilah" class="alumni-img">
                    <div class="alumni-body">
                        <h5 class="alumni-name">Diana Nurfadilah</h5>
                        <p class="alumni-year">Lulusan Tahun 2023 • Jurusan RPL</p>
                        <p class="alumni-desc">
                            Melanjutkan studi di STTC (Sekolah Tinggi Teknologi Cipasung), jurusan Informatika.
                        </p>
                        <blockquote class="alumni-quote">"SMKI Madani tempat saya belajar arti disiplin dan tanggung jawab."</blockquote>
                    </div>
                </div>

                <div class="alumni-card shadow-sm border-0">
                    <img src="assets/img/thb.png" alt="Siti Nurbaeti" class="alumni-img">
                    <div class="alumni-body">
                        <h5 class="alumni-name">Siti Nurbaeti</h5>
                        <p class="alumni-year">Lulusan Tahun 2023 • Jurusan TKJ</p>
                        <p class="alumni-desc">
                            Bekerja sebagai teknisi jaringan di salah satu perusahaan telekomunikasi.
                        </p>
                        <blockquote class="alumni-quote">"Kesan saya, guru-guru Madani sangat sabar dan perhatian."</blockquote>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<section id="kejuruan" class="kejuruan py-5 bg-light">
  <div class="container text-center">
    <h2 class="mb-4">Kejuruan</h2>
    <div class="kejuruan-gallery d-flex flex-wrap justify-content-center gap-4">

      <figure class="kejuruan-card">
        <img src="assets/img/rpl.jpeg" alt="jurusan rpl" class="img-fluid rounded shadow">
        <figcaption>Rekayasa Perangkat Lunak (RPL)</figcaption>
        <p><strong>Deskripsi:</strong> Jurusan RPL berfokus pada pembuatan perangkat lunak, pemrograman, database, dan sistem informasi.  
        <br><strong>Prospek Kerja:</strong> Programmer, Web Developer, Mobile Developer, IT Support.</p>
      </figure>

      <figure class="kejuruan-card">
        <img src="assets/img/mm.jpeg" alt="jurusan multimedia" class="img-fluid rounded shadow">
        <figcaption>Multimedia (MM)</figcaption>
        <p><strong>Deskripsi:</strong> Jurusan Multimedia mengajarkan tentang desain grafis, animasi, editing video, dan produksi konten digital.  
        <br><strong>Prospek Kerja:</strong> Desainer Grafis, Videografer, Animator, Content Creator.</p>
      </figure>

    </div>

    <div class="text-center mt-4">
      <a href="kejuruan.php" class="btn btn-outline-danger">Selengkapnya →</a>
    </div>
  </div>
</section>



   <div class="videos-container">
  <div style="text-align: center; margin: 40px 0;">
    <h2>PROYEK KELAS XII PPLG</h2>

    <!-- Flex container untuk dua video bersebelahan -->
    <div style="
      display: flex;
      justify-content: center;
      gap: 20px;
      flex-wrap: wrap;
      max-width: 1200px;
      margin: 0 auto;
    ">
      <!-- Video 1 Wrapper -->
      <div style="flex: 1; min-width: 300px; max-width: 600px;">
        <div style="position: relative; padding-bottom: 56.25%; height: 0; overflow: hidden;">
          <iframe
            src="https://www.youtube.com/embed/rjQmMUm4s6k  "
            title="Video 1"
            frameborder="0"
            allowfullscreen
            style="position: absolute; top: 0; left: 0; width: 100%; height: 100%;"
          ></iframe>
        </div>
      </div>

      <!-- Video 2 Wrapper -->
      <div style="flex: 1; min-width: 300px; max-width: 600px;">
        <div style="position: relative; padding-bottom: 56.25%; height: 0; overflow: hidden;">
          <iframe
            src="https://www.youtube.com/embed/LdzZSps4D_g  "
            title="Video 2"
            frameborder="0"
            allowfullscreen
            style="position: absolute; top: 0; left: 0; width: 100%; height: 100%;"
          ></iframe>
        </div>
      </div>
    </div>
  </div>
</div>

<section id="lokasi" class="lokasi py-5 bg-light">
    <div class="container">
        <h3>Lokasi Sekolah</h3>
        <iframe 
            src="https://www.google.com/maps/embed?pb=  !1m18!1m12!1m3!1d3957.553907577531!2d108.18244927500588!3d-7.288229092716187!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e6f4f2c038481bd%3A0x67a30386227c73a0!2sSMK%20Islam%20Madani%20Cintaraja!5e0!3m2!1sid!2sid!4v1700684209581!5m2!1sid!2sid" 
            width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" 
            referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>
</section>

<!-- Smooth Scroll Script -->
<script>
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function (e) {
            e.preventDefault();
            const target = document.querySelector(this.getAttribute('href'));
            if (target) {
                target.scrollIntoView({
                    behavior: 'smooth',
                    block: 'start'
                });
            }
        });
    });
</script>

  <!-- Footer otomatis di bawah -->
  <footer class="mt-auto text-dark text-center py-2">
    © 2025 SMK ISLAM MADANI Cintaraja. All rights reserved.
  </footer>

 <script>
// Navbar scroll effect (hanya untuk index)
window.addEventListener("scroll", function() {
    const navbar = document.querySelector(".navbar.index");
    if(window.scrollY > 50) {
        navbar.classList.add("scrolled");
    } else {
        navbar.classList.remove("scrolled");
    }
});
</script>

</body>
</html>