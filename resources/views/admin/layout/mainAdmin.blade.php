<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Boxiocns CDN Link -->
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('css/admin.css')}}">
    <title>@yield('title')</title>
    <link rel="shortcut icon" href="./image/android-chrome-192x192.png" type="image/x-icon">
</head>
<body>
    <div class="sidebar close">
        <div class="logo-details">
            <img src="./image/logohmjsi.png" alt="">
          <span class="logo_name">SISFO</span>
        </div>
        <ul class="nav-links">
          <li>
            <a href="#">
              <i class='bx bx-grid-alt' ></i>
              <span class="link_name">Dashboard</span>
            </a>
            <ul class="sub-menu blank">
              <li><a class="link_name" href="#">Category</a></li>
            </ul>
          </li>
          <li>
            <a href="#">
              <i class='bx bx-pie-chart-alt-2' ></i>
              <span class="link_name">Beranda</span>
            </a>
            <ul class="sub-menu blank">
              <li><a class="link_name" href="#">Beranda</a></li>
            </ul>
          <li>
            <div class="iocn-link">
              <a href="#">
                <i class='bx bx-collection' ></i>
                <span class="link_name">Berita</span>
              </a>
              <i class='bx bxs-chevron-down arrow' ></i>
            </div>
            <ul class="sub-menu">
              <li><a class="link_name" href="#">Berita</a></li>
              <li><a href="#">Info Beasiswa</a></li>
              <li><a href="#">Info Pendaftaran</a></li>
              <li><a href="#">Info Pengumuman</a></li>
            </ul>
          </li>
          <li>
            <a href="kegiatan-admin">
              <i class='bx bx-line-chart' ></i>
              <span class="link_name">Kegiatan</span>
            </a>
            <ul class="sub-menu blank">
              <li><a class="link_name" href="kegiatan-admin">Kegiatan</a></li>
            </ul>
          </li>
          <li>
            <a href="#">
              <i class='bx bx-compass' ></i>
              <span class="link_name">Tentang</span>
            </a>
            <ul class="sub-menu blank">
              <li><a class="link_name" href="#">Tentang</a></li>
            </ul>
          </li>
          <li>
            <a href="#">
              <i class='bx bx-history'></i>
              <span class="link_name">Kontak</span>
            </a>
            <ul class="sub-menu blank">
              <li><a class="link_name" href="#">Kontak</a></li>
            </ul>
          </li>
          <li>
            <a href="#">
              <i class='bx bx-cog' ></i>
              <span class="link_name">Setting</span>
            </a>
            <ul class="sub-menu blank">
              <li><a class="link_name" href="#">Setting</a></li>
            </ul>
          </li>
          {{-- <li>
        <div class="profile-details">
          <div class="profile-content">
            <img src="image/profile.jpg" alt="profileImg">
          </div>
          <div class="name-job">
            <div class="profile_name">Prem Shahi</div>
            <div class="job">Web Desginer</div>
          </div>
          <i class='bx bx-log-out' ></i>
        </div>
      </li> --}}
    </ul>
      </div>

      <section class="home-section">
        <div class="home-content">
            <i class='bx bx-menu' ></i>
            <span class="text">Admin | HMJ SISFO</span>
        </div>
        <div class="container d-inline-block">
            @yield('isi')
        </div>
      </section>

      <
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://kit.fontawesome.com/7cfefc34bd.js" crossorigin="anonymous"></script>
    <!-- Script JavaScript Custom untuk Toggle Sidebar -->
<script>
  let arrow = document.querySelectorAll(".arrow");
  for (var i = 0; i < arrow.length; i++) {
    arrow[i].addEventListener("click", (e)=>{
   let arrowParent = e.target.parentElement.parentElement;//selecting main parent of arrow
   arrowParent.classList.toggle("showMenu");
    });
  }
  let sidebar = document.querySelector(".sidebar");
  let sidebarBtn = document.querySelector(".bx-menu");
  console.log(sidebarBtn);
  sidebarBtn.addEventListener("click", ()=>{
    sidebar.classList.toggle("close");
  });
  </script>
</body>
</html>