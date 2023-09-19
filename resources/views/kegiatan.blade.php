@extends('layouts.main')
@section('title', 'Kegiatan')

@section('content')
<div class="activity container">
    <p class="fs-3 text-center mt-5 mb-5" style="color:#1245BA; font-weight: 800;">Kegiatan</p>
    <div class="row">
      <div class="col">
        <div class="terkini container fs-4">
          <p class="judul fs-5" style="color:#1245BA; font-weight: 800;">Kegiatan Terkini</p>
          <hr>
          <h5 style="color:#1245BA; font-weight: 800;">What is lorem Ipsum ?</h5>
          <hr>
          <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Architecto eum magnam repellat fugit minima necessitatibus, aliquam saepe tempora qui laudantium est fugiat provident. Numquam voluptatum nobis labore at minima voluptatem?</p>
          <h5 style="color:#1245BA; font-weight: 800;">What is lorem Ipsum ?</h5>
          <hr>
          <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Architecto eum magnam repellat fugit minima necessitatibus, aliquam saepe tempora qui laudantium est fugiat provident. Numquam voluptatum nobis labore at minima voluptatem?</p>
          <h5 style="color:#1245BA; font-weight: 800;">What is lorem Ipsum ?</h5>
          <hr>
          <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Architecto eum magnam repellat fugit minima necessitatibus, aliquam saepe tempora qui laudantium est fugiat provident. Numquam voluptatum nobis labore at minima voluptatem?</p>
        </div>
      </div>
      <div class="card-kegiatan col">
        <div class="kegiatan row row-cols-1 row-cols-md-2 g-4">
          <div class="col">
            <div class="card">
              <img src="./image/IMG_9181 1.png" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title">Company Visit</h5>
                <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                <div class="tombol">
                     <a href="company-visit.html" class="btn fw-bold text-light">Selengkapnya<i class="bi bi-caret-right-fill"></i></a>
                </div>
              </div>
            </div>
          </div>
    </div>
</div>
<div class="container">
  <!-- tombol navigasi -->
  <div class="tombol-halaman mt-5">
    <a href="#" class="rounded-button">
      <h4>1</h4>
    </a>
    <a href="#" class="rounded-button">
      <h4>2</h4>
    </a>
    <a href="#" class="rounded-button">
      <h4>3</h4>
    </a>
    <a href="#" class="rounded-button">
      <h4>4</h4>
    </a>
  </div>
</div>
    
@endsection