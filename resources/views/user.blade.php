@extends('Template1.master')

@section ('header')
<section>
    <div class="container-fluid p-sm-0">
      <div class="row featured-post-slider">
        <div class="col-lg-3 col-sm-6 mb-2 mb-lg-0 px-1">
          <article class="card bg-dark text-center text-white border-0 rounded-0">
            <img class="card-img rounded-0 img-fluid w-100" src="{{ asset('asset/images/lepi1.jpg')}}" alt="post-thumb">
            <div class="card-img-overlay">
              <div class="card-content">
                <p class="text-uppercase">Beli Laptop Termurah</p>
                <h4 class="card-title mb-4"><a class="text-white" href="/laptop">Tempat di Jual Laptop Terlaris Terjual</a></h4>
                <a class="btn btn-outline-light" href="/laptop">Buy Now</a>
              </div>
            </div>
          </article>
        </div>
        <div class="col-lg-3 col-sm-6 mb-2 mb-lg-0 px-1">
          <article class="card bg-dark text-center text-white border-0 rounded-0">
            <img class="card-img rounded-0 img-fluid w-100" src="{{ asset('asset/images/lepi2.jpg')}}" alt="post-thumb">
            <div class="card-img-overlay">
              <div class="card-content">
                <p class="text-uppercase">Beli Aksesoris Laptop</p>
                <h4 class="card-title mb-4"><a class="text-white" href="/laptop">Tempat di Jaul Aksesoris Laptop Terbaik</a></h4>
                <a class="btn btn-outline-light" href="/laptop">Buy Now</a>
              </div>
            </div>
          </article>
        </div>

        <div class="col-lg-3 col-sm-6 mb-2 mb-lg-0 px-1">
          <article class="card bg-dark text-center text-white border-0 rounded-0">
            <img class="card-img rounded-0 img-fluid w-100" src="{{asset('asset/images/lepi3.jpg') }}" alt="post-thumb">
            <div class="card-img-overlay">
              <div class="card-content">
                <p class="text-uppercase">Informasi Laptop Terdekat</p>
                <h4 class="card-title mb-4"><a class="text-white" href="/tabellaptop">Tempat Penjualan Laptop</a></h4>
                <a class="btn btn-outline-light" href="/tabellaptop">Read More</a>
              </div>
            </div>
          </article>
        </div>
        <div class="col-lg-3 col-sm-6 mb-2 mb-lg-0 px-1">
          <article class="card bg-dark text-center text-white border-0 rounded-0">
            <img class="card-img rounded-0 img-fluid w-100" src="{{ asset('asset/images/cat.jpg') }}" alt="post-thumb">
            <div class="card-img-overlay">
              <div class="card-content">
                <p class="text-uppercase">Informasi Aksesoris Laptop</p>
                <h4 class="card-title mb-4"><a class="text-white" href="/tabellaptop">Tempat Penjualan Aksesoris Laptop</a></h4>
                <a class="btn btn-outline-light" href="/tabellaptop">Read More</a>
              </div>
            </div>
          </article>
        </div>
      </div>
    </div>
  </section>
  <!-- /featured post -->

  <!-- blog post -->
  <section class="section">
    <div class="container">
      <div class="row masonry-container">




@endsection()

@section('content')

@endsection()
