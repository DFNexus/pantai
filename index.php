<?php
include "koneksi.php"; 
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Pantai Indonesia</title>
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css"
    />
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH"
      crossorigin="anonymous"
    />
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css"
    />
    <link rel="stylesheet" href="style.css" />

    <link
      rel="icon"
      href="https://w7.pngwing.com/pngs/884/954/png-transparent-euclidean-sea-ocean-beach-beach-fashion-logo.png"
      type="image/x-icon"
    />
  </head>
  <body>
    <!-- nav begin -->
    <nav class="navbar navbar-expand-lg p-3 fixed-top">
      <div class="container">
        <a class="navbar-brand fw-bold fs-3">Pantai Indonesia</a>
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
              <a class="nav-link" href="#article">Article</a>
            </li>

            <li class="nav-item">
              <a class="nav-link" href="#gallery">Gallery</a>
            </li>

            <li class="nav-item">
              <a class="nav-link" href="#Schedule">Schedule</a>
            </li>

            <li class="nav-item">
              <a class="nav-link" href="#AboutMe">About Me</a>
            </li>

            <li class="nav-item">
              <a class="nav-link" href="login.php" target="_blank">Login</a>
            </li>

            <li class="nav-item dropdown">
              <button
                class="btn nav-link fs-5 ms-0- ms-lg-3 dropdown-toggle"
                type="button"
                data-bs-toggle="dropdown"
                aria-expanded="false"
              >
                <i
                  class="bi-circle-half theme-icon-active"
                  data-theme-icon-active="bi-sun-fill"
                ></i>
              </button>
              <ul class="dropdown-menu dropdown-menu-end">
                <li>
                  <button
                    id="light"
                    class="dropdown-item d-flex align-items-center"
                    type="button"
                    data-bs-theme-value="light"
                  >
                    <i
                      class="bi bi-sun-fill me-2 opacity-50"
                      data-theme-icon="bi-sun-fill"
                    ></i>
                    Light
                  </button>
                </li>
                <li>
                  <button
                    id="dark"
                    class="dropdown-item d-flex align-items-center"
                    type="button"
                    data-bs-theme-value="dark"
                  >
                    <i
                      class="bi bi-moon-fill me-2 opacity-50"
                      data-theme-icon="bi-moon-fill"
                    ></i>
                    Dark
                  </button>
                </li>
              </ul>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <!-- nav end -->

    <!-- hero begin -->
    <section id="hero">
      <div class="container1">
        
        <div
          class="d-flex flex-column justify-content-center align-items-center vh-100"
        >  
          <div id="clock"></div>
          <h1 class="fw-bold display-4" style="color: aqua">
            Pantai Indonesia
          </h1>

          <a href="#article" class="btn btn-dark fs-5 fw-bold mt-2">let's Go</a>
        </div>
      </div>
    </section>
    <!-- hero end -->

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
    <section id="gallery" class="text-center p-5" class="bg-danger-subtle">
      <div class="container" style="margin-bottom: 30px">
        <h1 class="fw-bold display-4 pb-3">Gallery</h1>
        <h4>Beberapa Pantai terindah di Indonesia</h4>
      </div>

      <div id="carouselExample" class="carousel slide">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img
              src="https://wonderfulimage.s3-id-jkt-1.kilatstorage.id/1716455420-dji-0395-jpg-medium.jpg"
              class="d-block w-100"
              height="450px"
            />
          </div>
          <div class="carousel-item">
            <img
              src="https://torch.id/cdn/shop/articles/1707667523_Preview_c1c6e0e2-e1da-4099-a0bd-d99c30e6e064.jpg?v=1732098272"
              class="d-block w-100"
              height="450px"
            />
          </div>
          <div class="carousel-item">
            <img
              src="https://blogger.googleusercontent.com/img/b/R29vZ2xl/AVvXsEhwNofoB3afkmvpZ-GK-ZTXT3fKSVGJsk3f0RbxfnWSRrR682swibIEYFX8Iuh5ULBiF_xb6ssgkPuDVRNliobYzrfHdzYoiHMRLyPQqFnvpS5wcXqAquEdejcD3TNcICPfCLUmIiIyxwuD/s1600/karimunjawa_island.jpg"
              class="d-block w-100"
              height="450px"
            />
          </div>
          <div class="carousel-item">
            <img
              src="https://static.promediateknologi.id/crop/0x0:0x0/750x500/webp/photo/p1/583/2023/12/08/Picsart_23-12-08_18-23-14-879-3926120391.jpg"
              class="d-block w-100"
              height="450px"
            />
          </div>
          <div class="carousel-item">
            <img
              src="https://totabuan.news/wp-content/uploads/2020/01/pulau-derawan.jpg"
              class="d-block w-100"
              height="450px"
            />
          </div>
          <div class="carousel-item">
            <img
              src="https://i.pinimg.com/564x/71/a7/11/71a7111d4f120330569ae7cf0438bbd7.jpg"
              class="d-block w-100"
              height="450px"
            />
          </div>
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
    </section>
    <!-- gallery end -->

    <!-- Schedule begin -->

    <section id="Schedule" class="text-center p-5">
      <div class="container">
        <h1 class="fw-bold display-4 pb-3 pt-5">Schedule</h1> <br> <br> 
        <div class="row gy-5 justify-content-center pt-3 pb-3">
          
          </div>
      </div>

      <div class="row row-cols-1 row-cols-md-3 g-4 ">
        <div class="col">
          <div class="card h-100">
          
            <div class="card-body text-center">
              <h5 class="card-title bg-info">Senin <hr></h5> <br>
              <p class="card-text text-center">
                free
              </p>
              
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card h-100">
          
            <div class="card-body text-center">
              <h5 class="card-title bg-info">Selasa <hr></h5> <br>
              <p class="card-text text-center">
                Basis Data (Praktikum)
              </p>
              <p class="card-text text-center">

                14.20-15.50 | D.3.H  <hr>             

              </p>
              <p class="card-text text-center">
                PKN
              </p>
              <p class="card-text text-center">

                18.30-19.00 | Aula H.6                

              </p>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card h-100">
           
            <div class="card-body text-center">
              <h5 class="card-title bg-info">Rabu <hr></h5> <br>
              <p class="card-text text-center">
                Logika Informatika
              </p>
              <p class="card-text text-center">

                7.00-9.30 | H.4.7  <hr>              

              </p>
              <p class="card-text text-center">
                PBW
              </p>
              <p class="card-text text-center">

                10.20-12.00 | D.2.J     <hr>           

              </p>
              <p class="card-text text-center">
                Kripto
              </p>
              <p class="card-text text-center">

                12.30-14.00 | H.4.8               

              </p>
            </div>
          </div>
        </div>
      </div>
      <br />
      <div class="row row-cols-1 row-cols-md-3 g-4">
        <div class="col">
          <div class="card h-100">
           
            <div class="card-body text-center">
              <h5 class="card-title bg-info">Kamis <hr></h5> <br>
              <p class="card-text text-center">
                RPL
              </p>
              <p class="card-text text-center">
                9.30-12.00 | H.3.8 <hr>
              </p>
              <p class="card-text text-center">
                Basis Data
              </p>
              <p class="card-text text-center">
                12.30-14.10 | H.3.9
              </p>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card h-100">
           
            <div class="card-body text-center">
              <h5 class="card-title bg-info">Jumat <hr></h5> <br>
              <p class="card-text text-center">
                Sistem Operasi
              </p>
              <p class="card-text text-center">
                7.00-9.20 | H.4.2 <hr>
              </p>
              <p class="card-text text-center">
                Probabilitas Statistik
              </p>
              <p class="card-text text-center">
                9.30-12.00 | H.4.2
              </p>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card h-100">
            
            <div class="card-body text-center">
              <h5 class="card-title bg-info">Sabtu <hr></h5> <br>
              <p class="card-text text-center">
                Free
              </p>
              
            </div>
          </div>
        </div>
      </div>
      <br><br>
    <!-- Schedule end -->

    <!-- About Me begin-->

    <section id="AboutMe" class="bg-info-subtle">
      <h1 class="fw-bold display-4 pb-3 pt-5">About Me</h1>
      <br>
      <div class="container">
        <div class="responsive-image">
          <img src="https://images.pexels.com/photos/20332518/pexels-photo-20332518.jpeg?cs=srgb&dl=pexels-diogo-miranda-2044514-20332518.jpg&fm=jpg" class=" rounded-5 " height="250px">
        </div> <br>
        <p>
          A11.2023.15025
        </p>
        <h3>
          Danendra Farrel Haryo Wibowo
        </h3>
        <p>
          Program Studi Teknik Informatika
        </p>
        <p>
          <b>Universitas Dian Nuswantoro</b>
        </p>
      </div>
    </section>

    <!-- About Me end-->
 
    <!-- footer begin -->
    <footer class="text-center p-3 shadow-lg">
      Copyright @ 2024 Danendra Farrel H.W All Rights Reversed
      <div>
        <i class="bi bi-instagram"></i>
        <i class="bi bi-twitter-x"></i>
        <i class="bi bi-whatsapp"></i>
      </div>
    </footer>
    <!-- footer end -->

    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
      crossorigin="anonymous"
    ></script>
    <script>
      window.addEventListener("scroll", function () {
        const navbar = document.querySelector(".navbar");
        navbar.classList.toggle("scrolled", window.scrollY > 0);
      });
    </script>

    <!-- jam -->
    <script>
      function updateClock() {
        // Nama hari dalam seminggu
        const days = [
          "Minggu",
          "Senin",
          "Selasa",
          "Rabu",
          "Kamis",
          "Jumat",
          "Sabtu",
        ];

        // Nama bulan dalam setahun
        const months = [
          "Januari",
          "Februari",
          "Maret",
          "April",
          "Mei",
          "Juni",
          "Juli",
          "Agustus",
          "September",
          "Oktober",
          "November",
          "Desember",
        ];

        const now = new Date();
        const dayName = days[now.getDay()]; // Ambil nama hari
        const monthName = months[now.getMonth()]; // Ambil nama bulan
        const dayNumber = now.getDate(); // Ambil tanggal
        const year = now.getFullYear(); // Ambil tahun

        let hours = now.getHours();
        let minutes = now.getMinutes();
        let seconds = now.getSeconds();

        // Tambahkan '0' jika jam, menit, atau detik kurang dari 10
        hours = hours < 10 ? "0" + hours : hours;
        minutes = minutes < 10 ? "0" + minutes : minutes;
        seconds = seconds < 10 ? "0" + seconds : seconds;

        // Format: Hari, Tanggal Bulan Tahun - Jam:Menit:Detik
        const formattedTime = `${dayName}, ${dayNumber} ${monthName} ${year} - ${hours}:${minutes}:${seconds}`;

        // Tampilkan ke dalam elemen dengan id "clock"
        document.getElementById("clock").textContent = formattedTime;
      }

      // Update jam setiap detik
      setInterval(updateClock, 1000);

      // Panggil fungsi pertama kali saat halaman dimuat
      updateClock();
    </script>

    <!-- Js dark dan light mode start -->
    <script>
      /*!
       * Color mode toggler for Bootstrap's docs (https://getbootstrap.com/)
       * Copyright 2011-2024 The Bootstrap Authors
       * Licensed under the Creative Commons Attribution 3.0 Unported License.
       */

      (() => {
        "use strict";

        const getStoredTheme = () => localStorage.getItem("theme");
        const setStoredTheme = (theme) => localStorage.setItem("theme", theme);

        const getPreferredTheme = () => {
          const storedTheme = getStoredTheme();
          if (storedTheme) {
            return storedTheme;
          }

          return window.matchMedia("(prefers-color-scheme: dark)").matches
            ? "dark"
            : "light";
        };

        const setTheme = (theme) => {
          if (theme === "auto") {
            document.documentElement.setAttribute(
              "data-bs-theme",
              window.matchMedia("(prefers-color-scheme: dark)").matches
                ? "dark"
                : "light"
            );
          } else {
            document.documentElement.setAttribute("data-bs-theme", theme);
          }
        };

        setTheme(getPreferredTheme());

        const showActiveTheme = (theme, focus = false) => {
          const themeSwitcher = document.querySelector("#bd-theme");

          if (!themeSwitcher) {
            return;
          }

          const themeSwitcherText = document.querySelector("#bd-theme-text");
          const activeThemeIcon = document.querySelector(".theme-icon-active");
          const btnToActive = document.querySelector(
            `[data-bs-theme-value="${theme}"]`
          );
          const iconOfActiveBtn =
            btnToActive.querySelector("i").dataset.themeIcon;

          document
            .querySelectorAll("[data-bs-theme-value]")
            .forEach((element) => {
              element.classList.remove("active");
              element.setAttribute("aria-pressed", "false");
            });

          btnToActive.classList.add("active");
          btnToActive.setAttribute("aria-pressed", "true");
          activeThemeIcon.classList.remove(
            activeThemeIcon.dataset.themeIconActive
          );
          activeThemeIcon.classList.add(iconOfActiveBtn);
          activeThemeIcon.dataset.iconActive = iconOfActiveBtn;
          const themeSwitcherLabel = `${themeSwitcherText.textContent} (${btnToActive.dataset.bsThemeValue})`;
          themeSwitcher.setAttribute("aria-label", themeSwitcherLabel);

          if (focus) {
            themeSwitcher.focus();
          }
        };

        window
          .matchMedia("(prefers-color-scheme: dark)")
          .addEventListener("change", () => {
            const storedTheme = getStoredTheme();
            if (storedTheme !== "light" && storedTheme !== "dark") {
              setTheme(getPreferredTheme());
            }
          });

        window.addEventListener("DOMContentLoaded", () => {
          showActiveTheme(getPreferredTheme());

          document
            .querySelectorAll("[data-bs-theme-value]")
            .forEach((toggle) => {
              toggle.addEventListener("click", () => {
                const theme = toggle.getAttribute("data-bs-theme-value");
                setStoredTheme(theme);
                setTheme(theme);
                showActiveTheme(theme, true);
              });
            });
        });
      })();
    </script>
    <!-- Js dark dan light mode end -->
  </body>
</html>
