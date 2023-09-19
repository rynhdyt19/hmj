<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('css/gaya.css')}}">
    <title>@yield('title')</title>
    <link rel="shortcut icon" href="./image/android-chrome-192x192.png" type="image/x-icon">

</head>
<body>
    {{-- <div class="kontainer container-fluid"> --}}
        <!-- AWAL NAVBAR  -->
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container d-flex justify-content-center-around">
          <a href="index"><img class="logo-nav" src="./image/logohmjsi.png" alt="logo"></a>
          <a href="index" class="nama-nav fs-5" style="text-decoration: none; font-weight: 850;">SISFO UINAM</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
  
          <div class="collapse navbar-collapse" id="navbarScroll">
            <ul  class="navbar-nav m-auto my-2 my-lg-0 navbar-nav-scroll" style="--bs-scroll-height: 100px;">
              <li id="peding" class="nav-item">
                <a class="nav-link fw-bold" href="index">Beranda</a>
              </li>
              <li id="peding"  class="nav-item dropdown">
                <a class="nav-link dropdown-toggle fw-bold" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Berita Terkini
                </a>
                <ul id="peding" class="dropdown-menu">
                  <li><a class="dropdown-item" href="info-beasiswa"><i class="fa-solid fa-graduation-cap"></i>Info Beasiswa</a></li>
                  <li><a class="dropdown-item" href="info-pendaftaran"><i class="fa-solid fa-building-columns"></i> Info Pendaftaran</a></li>
                  <li><a class="dropdown-item" href="info-pengumuman"><i class="fa-solid fa-circle-exclamation"></i></i> Info Pengumuman</a></li>
                </ul>
              </li>
              <li id="peding" class="nav-item">
                <a class="nav-link fw-bold" href="kegiatan">Kegiatan</a>
              </li>
              <li id="peding" class="nav-item">
                <a class="nav-link fw-bold" href="tentang">Tentang</a>
              </li>
              <li id="peding" class="nav-item">
                <a class="nav-link fw-bold" href="kontak">Kontak</a>
              </li>
            </ul>
          </div>
          <div class="searchbox">
            <table class="contentSearch">
              <tr>
                <td>
                  <input class="Search" type="text" placeholder="Search">
                </td>
                <td>
                  <a href="#"><i class="ikon-cari fa-solid fa-magnifying-glass"></i></a>
                </td>
              </tr>
            </table>
      </div>
        </div>
      </nav>
    <!-- AKHIR NAVBAR  -->
    {{-- </div> --}}

    <div class="container-fluid">
        @yield('content')
    </div>

    <!-- FOOTER -->
    <footer class="container-fluid mt-5">
        <ul>
          <li>
              <h4>Kontak</h4>
              <hr>
              <p class="fw-bold">UNIVERSITAS ISLAM NEGERI ALAUDDIN MAKASSAR</p>
              <p>SEKRETARIAT HMJ SI, FAKULTAS SAINS TEKNOLOGI</p>
              <p>KONTAK : +62 859-6429-6474 (NUR FARID MUFID NR)</p>
              <p>EMAIL : hmj.si@uin-alauddin.ac.id</p>
          </li>
          <li>
              <h4>Sosial Media</h4>
              <hr>
              <div class="sosmed">
                <p><a href="https://www.instagram.com/hmjsi.uinam/"><i class="bi bi-instagram me-2"></i>hmjsi.uinam</a></p>
                <p><a href="https://twitter.com/hmjsi_uinam"><i class="bi bi-twitter me-2"></i>hmjsi_uinam</a></p>
                <p><a href="https://www.facebook.com/hmjsi.uinam"><i class="bi bi-facebook me-2"></i>HMJ Sistem Informasi UINAM</a></p>
                <p><a href="https://www.youtube.com/@hmjsisteminformasiuinam8821"><i class="bi bi-youtube me-2"></i>HMJ Sistem Informasi UINAM</a></p>
              </div>
          </li>
          <li>
              <h4>Tentang HMJ SI</h4>
              <hr>
              <p>Organisasi Ini Bernama Himpunan Mahasiswa Jurusan<br>
                  Sistem Informasi Yang Di singkat HMJ SI. Berkedudukan Di <br> Jalan. Yasin Limpo Samata Gowa <br> Fakultas Sains Dan teknologi Universitas Alauddin Makassar. <br>
                  HMJ SI Didirikan Pada Tanggal 2 Januari 2013</p>
          </li>
          <li class="tautan">
              <h3>Tautan</h3>
              <hr>
              <p>UIN ALAUDDIN MAKASSAR</p>
              <p>JURUSAN SISTEM INFORMASI</p>
          </li>
      </ul>
    </footer>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://kit.fontawesome.com/7cfefc34bd.js" crossorigin="anonymous"></script>
</body>

{{-- <script src="<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>"></script> --}}
</html>