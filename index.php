<?php
include "koneksi.php";
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Never not thinking of u</title>
    <link rel="icon" href="img/logo.webp" />
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.0/font/bootstrap-icons.min.css"
    />
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB"
      crossorigin="anonymous"
    />
  </head>
  <body>
    <!-- nav begin -->
    <nav class="navbar navbar-expand-lg bg-body-tertiary sticky-top">
      <div class="container">
        <a class="navbar-brand" href="#">Sebats</a>
        <button
          class="navbar-toggler"
          type="button"
          data-bs-toggle="collapse"
          data-bs-target="#navbarSupportedContent"
          aria-controls="navbarSupportedContent"
          aria-expanded="false"
          aria-label="Toggle navigation"
        >
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav ms-auto mb-2 mb-lg-0 text-dark">
            <li class="nav-item">
              <a class="nav-link" href="#">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#schedule">Jadwal</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#article">Article</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#gallery">gallery</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#profile">Profile</a>
            </li>
             <li class="nav-item">
              <a class="nav-link" href="login.php" target="_blank">Login</a>
            </li>
            <li class="nav-item">
              <button
                id="theme-toggle"
                class="btn btn-link nav-link theme-toggle"
                type="button"
              >
                <i id="theme-icon" class="bi bi-moon-fill"></i>
              </button>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <!-- nav end -->
    <!-- nero begin -->
    <section id="hero" class="text-center p-5 bg-secondary text-sm-start">
      <div class="container">
        <div class="d-sm-flex flex-sm-row-reverse align-items-center">
          <img src="img/banner.jpg" class="img-fluid" width="300" />
          <div>
            <h1 class="fw-blod dispaly-4">
              Create Memories, Save Memories, remove Memories
            </h1>
            <h4 class="lead-display-6">
              Mencatat semua kenangan yang pernah ada tanpa terkecuali
            </h4>
            <h6>
              <span id="tanggal"></span>
              <span id="jam"></span>
            </h6>
          </div>
        </div>
      </div>
    </section>
    <!-- hero end -->
    <!-- schedule -->
    <section id="schedule" class="text-center p-5">
      <div class="container">
        <h1 class="fw-bold display-4 pb-3 text-center">
          Jadwal Kuliah & Kegiatan Mahasiswa
        </h1>

        <div class="mb-5">
          <div class="d-flex align-items-center mb-3"></div>
          <div class="row row-cols-1 row-cols-md-4 g-3">
            <div class="col">
              <div class="card h-100 border-primary border-2 schedule-card">
                <div class="card-header bg-primary text-white">
                  <h6 class="mb-0">Senin</h6>
                </div>
                <div class="card-body">
                  <div>
                    <span class="fw-bold">08:40 - 10:20</span>
                  </div>
                  <div>
                    <span>Basis Data</span>
                  </div>
                  <div>
                    <span>Ruang D.2.K</span>
                  </div>
                </div>
                <div class="card-body">
                  <div>
                    <span class="fw-bold">10:20 - 12:00</span>
                  </div>
                  <div>
                    <span>Basis Data</span>
                  </div>
                  <div>
                    <span>Ruang D.2.K</span>
                  </div>
                </div>
              </div>
            </div>
            <div class="col">
              <div class="card h-100 border-success border-2 schedule-card">
                <div class="card-header bg-success text-white">
                  <h6 class="mb-0">Selasa</h6>
                </div>
                <div class="card-body">
                  <div>
                    <span class="fw-bold">16:20 - 18:00</span>
                  </div>
                  <div>
                    <span>Basis Data</span>
                  </div>
                  <div>
                    <span>Ruang H.4.7</span>
                  </div>
                </div>
                <div class="card-body">
                  <div>
                    <span class="fw-bold">18:30 - 21:00</span>
                  </div>
                  <div>
                    <span>Sistem Operasi</span>
                  </div>
                  <div>
                    <span>Ruang H.3.10</span>
                  </div>
                </div>
              </div>
            </div>
            <div class="col">
              <div class="card h-100 border-info border-2 schedule-card">
                <div class="card-header bg-info text-white">
                  <h6 class="mb-0">Rabu</h6>
                </div>
                <div class="card-body">
                  <div>
                    <span class="fw-bold">07:00 - 09:30</span>
                  </div>
                  <div>
                    <span>Rekaayasa Perangkat Lunak</span>
                  </div>
                  <div>
                    <span>Ruang H.4.9</span>
                  </div>
                </div>
                <div class="card-body">
                  <div>
                    <span class="fw-bold">12:30 - 15:00</span>
                  </div>
                  <div>
                    <span>Logika Informatika</span>
                  </div>
                  <div>
                    <span>Ruang H.5.12</span>
                  </div>
                </div>
              </div>
            </div>
            <div class="col">
              <div class="card h-100 border-danger border-2 schedule-card">
                <div class="card-header bg-danger text-white">
                  <h6 class="mb-0">Kamis</h6>
                </div>
                <div class="card-body">
                  <div>
                    <span class="fw-bold">08:40 - 10:20</span>
                  </div>
                  <div>
                    <span>Pemrograman Berbasis web</span>
                  </div>
                  <div>
                    <span>Ruang D.2.J</span>
                  </div>
                </div>
                <div class="card-body">
                  <div>
                    <span class="fw-bold">15:30 - 18:00</span>
                  </div>
                  <div>
                    <span>Probabilitas Dan Statistik</span>
                  </div>
                  <div>
                    <span>Ruang H.3.10</span>
                  </div>
                </div>
              </div>
            </div>
            <div class="col">
              <div class="card h-100 border-secondary border-2 schedule-card">
                <div class="card-header bg-secondary text-white">
                  <h6 class="mb-0">Jumat</h6>
                </div>
                <div class="card-body">
                  <div>
                    <span class="fw-bold">Tidak Ada Jadwal</span>
                  </div>
                </div>
              </div>
            </div>
            <div class="col">
              <div class="card h-100 border-secondary border-2 schedule-card">
                <div class="card-header bg-secondary text-white">
                  <h6 class="mb-0">Sabtu</h6>
                </div>
                <div class="card-body">
                  <div>
                    <span class="fw-bold">Tidak Ada Jadwal</span>
                  </div>
                </div>
              </div>
            </div>
            <div class="col">
              <div class="card h-100 border-secondary border-2 schedule-card">
                <div class="card-header bg-secondary text-white">
                  <h6 class="mb-0">Minggu</h6>
                </div>
                <div class="card-body">
                  <div>
                    <span class="fw-bold">Tidak Ada Jadwal</span>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- schedule end -->
    <!-- article begin -->
    <section id="article" class="text-center p-5">
      <div class="container">
        <h1 class="fw-bold display-4 pb-3">article</h1>
        <div class="row row-cols-1 row-cols-md-3 g-4 justify-content-center">
          <?php
          $sql = "SELECT * FROM article ORDER BY tanggal DESC";
          $hasil = $conn->query($sql); 

          while($row = $hasil->fetch_assoc()){
          ?>
            <div class="col">
              <div class="card h-100">
                <img src="img/<?= $row["gambar"]?>" class="card-img-top" alt="..." />
                <div class="card-body">
                  <h5 class="card-title"><?= $row["judul"]?></h5>
                  <p class="card-text">
                    <?= $row["isi"]?>
                  </p>
                </div>
                <div class="card-footer">
                  <small class="text-body-secondary">
                    <?= $row["tanggal"]?>
                  </small>
                </div>
              </div>
            </div>
            <?php
          }
          ?> 
        </div>
      </div>
    </section>
    <!-- article end -->
    <!-- gallery begin -->
    <section id="gallery" class="text-center p-5 bg-secondary">
      <div class="container">
        <h1 class="fw-bold display-4 pb-3">gallery</h1>
        <div id="carouselExample" class="carousel slide">
          <div class="carousel-inner">
            <?php
            $sql_gallery = "SELECT * FROM gallery ORDER BY tanggal DESC";
            $hasil_gallery = $conn->query($sql_gallery);
            $first = true;
            
            if ($hasil_gallery->num_rows > 0) {
              while($row_gallery = $hasil_gallery->fetch_assoc()) {
                $active_class = $first ? "active" : "";
                $first = false;
            ?>
            <div class="carousel-item <?= $active_class ?>">
              <img src="img/<?= $row_gallery["gambar"] ?>" class="d-block w-100" alt="<?= $row_gallery["judul"] ?>" />
              <div class="carousel-caption d-none d-md-block bg-dark bg-opacity-50 rounded">
                <h5><?= $row_gallery["judul"] ?></h5>
                <p><?= $row_gallery["deskripsi"] ?></p>
              </div>
            </div>
            <?php
              }
            } else {
            ?>
            <div class="carousel-item active">
              <img src="img/mumet.jpg" class="d-block w-100" alt="Default Gallery" />
              <div class="carousel-caption d-none d-md-block bg-dark bg-opacity-50 rounded">
                <h5>Gallery Kosong</h5>
                <p>Belum ada gambar di gallery</p>
              </div>
            </div>
            <?php
            }
            ?>
          </div>
          <button
            class="carousel-control-prev"
            type="button"
            data-bs-target="#carouselExample"
            data-bs-slide="prev"
          >
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
          </button>
          <button
            class="carousel-control-next"
            type="button"
            data-bs-target="#carouselExample"
            data-bs-slide="next"
          >
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
          </button>
        </div>
      </div>
    </section>
    <!-- gallery end -->
    <!-- profile begin -->
    <section id="profile" class="p-5">
      <div class="container">
        <h1 class="fw-bold display-4 pb-3 text-center">Profil Mahasiswa</h1>
        <div class="row align-items-start">
          <div class="col-md-3 text-center mb-4 mb-md-0">
            <img
              src="img/professional_pic.webp"
              class="rounded-circle img-fluid"
              alt="Profile Photo"
              style="width: 200px; height: 200px; object-fit: cover"
            />
            <h4 class="mt-3 d-md-none">Mochammad Ilham Nadhif</h4>
          </div>
          <div class="col-md-9">
            <h3 class="mb-4 d-none d-md-block">Mochammad Ilham Nadhif</h3>
            <table class="table table-borderless">
              <tbody>
                <tr>
                  <td><strong>NIM</strong></td>
                  <td>: A11.2024.15995</td>
                </tr>
                <tr>
                  <td><strong>Program Studi</strong></td>
                  <td>: Teknik Informatika</td>
                </tr>
                <tr>
                  <td><strong>Email</strong></td>
                  <td>: A11202415995@mhs.dinus.ac.id</td>
                </tr>
                <tr>
                  <td><strong>Telepon</strong></td>
                  <td>: +62 857 2318 9178</td>
                </tr>
                <tr>
                  <td><strong>Alamat</strong></td>
                  <td>: Jl. Imam Bonjol No. 123, Semarang</td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </section>
    <!-- profile end -->
    <!-- footer begin -->
    <footer class="text-center p-5">
      <div>
        <a href="https://www.instagram.com/" target="_blank"
          ><i class="bi bi-instagram h2 p2 m-2 text-dark"></i
        ></a>
        <a href="https://x.com/" target="_blank"
          ><i class="bi bi-twitter-x h2 p2 m-2 text-dark"></i
        ></a>
        <a href="https://web.whatsapp.com/" target="_blank"
          ><i class="bi bi-whatsapp h2 p2 m-2 text-dark"></i
        ></a>
      </div>
      <div>Mochammad Ilham Nadhif &copy; 2025</div>
    </footer>
    <!-- footer end -->

    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI"
      crossorigin="anonymous"
    ></script>

    <!-- Dark Mode Toggle Script -->
    <script>
      const themeToggle = document.getElementById("theme-toggle");
      const themeIcon = document.getElementById("theme-icon");
      const html = document.documentElement;

      const savedTheme = localStorage.getItem("theme") || "light";
      html.setAttribute("data-bs-theme", savedTheme);
      updateIcon(savedTheme);

      themeToggle.addEventListener("click", () => {
        const currentTheme = html.getAttribute("data-bs-theme");
        let newTheme;
        if (currentTheme === "dark") {
          newTheme = "light";
        } else {
          newTheme = "dark";
        }

        html.setAttribute("data-bs-theme", newTheme);
        localStorage.setItem("theme", newTheme);
        updateIcon(newTheme);
      });

      function updateIcon(theme) {
        if (theme === "dark") {
          themeIcon.className = "bi bi-sun-fill";
        } else {
          themeIcon.className = "bi bi-moon-fill";
        }
      }
    </script>

    <script type="text/javascript">
      window.setTimeout("tampilanWaktu()", 1000);

      function tampilanWaktu() {
        var waktu = new Date();
        var bulan = waktu.getMonth() + 1;

        setTimeout("tampilanWaktu()", 1000);
        document.getElementById("tanggal").innerHTML =
          waktu.getDate() + "/" + bulan + "/" + waktu.getFullYear();
        document.getElementById("jam").innerHTML =
          waktu.getHours() +
          ":" +
          waktu.getMinutes() +
          ":" +
          waktu.getSeconds();
      }
    </script>
  </body>
</html>
