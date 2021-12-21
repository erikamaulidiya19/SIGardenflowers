@extends('Template1.master')

@section ('header')
<section>
    <div class="container-fluid p-sm-0">
      <div class="row featured-post-slider">
        <div class="col-lg-3 col-sm-6 mb-2 mb-lg-0 px-1">
          <article class="card bg-dark text-center text-white border-0 rounded-0">
            <img class="card-img rounded-0 img-fluid w-100" src="{{ asset('asset/images/mawar.jpg')}}" alt="post-thumb">
            <div class="card-img-overlay">
              <div class="card-content">
                <p class="text-uppercase">Welcome</p>
                <h4 class="card-title mb-4"><a class="text-white" href="/bunga">Bunga Paling disukai Perempuan</a></h4>
                <a class="btn btn-outline-light" href="/bunga">read more</a>
              </div>
            </div>
          </article>
        </div>
        <div class="col-lg-3 col-sm-6 mb-2 mb-lg-0 px-1">
          <article class="card bg-dark text-center text-white border-0 rounded-0">
            <img class="card-img rounded-0 img-fluid w-100" src="{{ asset('asset/images/buket.jpg')}}" alt="post-thumb">
            <div class="card-img-overlay">
              <div class="card-content">
                <p class="text-uppercase">Bucket</p>
                <h4 class="card-title mb-4"><a class="text-white" href="/tabebunga">Tempat Desain Bucket Terlaris Terjual</a></h4>
                <a class="btn btn-outline-light" href="/tabelbunga">Jelajahi</a>
              </div>
            </div>
          </article>
        </div>

        <div class="col-lg-3 col-sm-6 mb-2 mb-lg-0 px-1">
          <article class="card bg-dark text-center text-white border-0 rounded-0">
            <img class="card-img rounded-0 img-fluid w-100" src="{{asset('asset/images/pot.jpg') }}" alt="post-thumb">
            <div class="card-img-overlay">
              <div class="card-content">
                <p class="text-uppercase">Tanaman Hias</p>
                <h4 class="card-title mb-4"><a class="text-white" href="/tanamanhais">Tanaman Hias Terindah</a></h4>
                <a class="btn btn-outline-light" href="/tanamanhias">Jelajahi</a>
              </div>
            </div>
          </article>
        </div>
        <div class="col-lg-3 col-sm-6 mb-2 mb-lg-0 px-1">
          <article class="card bg-dark text-center text-white border-0 rounded-0">
            <img class="card-img rounded-0 img-fluid w-100" src="{{ asset('asset/images/tan.jpg') }}" alt="post-thumb">
            <div class="card-img-overlay">
              <div class="card-content">
                <p class="text-uppercase">Buah</p>
                <h4 class="card-title mb-4"><a class="text-white" href="/tabeltanaman">Tanaman Hias yang Paling diminati</a></h4>
                <a class="btn btn-outline-light" href="/tabeltanaman">Jelajahi</a>
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



        <div class="col-lg-4 col-sm-6 mb-5">
          <article class="text-center">
            <img class="img-fluid mb-4" src="{{ asset ('asset/images/tanaman.jpg') }}" alt="post-thumb">
            <p class="text-uppercase mb-2">Decorative Plants</p>
            <h4 class="title-border"><a class="text-dark" href="/tanamanhias">Tanaman Hias</a></h4>
            <p>Jelajahi tempat - tempat yang menyediakan dan menjual tanaman hias di wilayah Banjarmasin</p>
            <a href="/tanamanhias" class="btn btn-transparent">Jelajahi</a>
          </article>
        </div>

        <div class="col-lg-4 col-sm-6 mb-5">
          <article class="text-center">
            <img class="img-fluid mb-4" src="{{ asset('asset/images/tokbuk.jpg') }}" alt="post-thumb">
            <p class="text-uppercase mb-2">Buckets Store</p>
            <h4 class="title-border"><a class="text-dark" href="/bunga">Bucket Bunga</a></h4>
            <p>Tunggu apalagi, segera mengetahui toko - toko bunga yang melayani pembuatan bucket untuk orang terkasih</p>
            <a href="/bunga" class="btn btn-transparent">Jelajahi</a>
          </article>
        </div>

@endsection()

@section('content')

@endsection()
