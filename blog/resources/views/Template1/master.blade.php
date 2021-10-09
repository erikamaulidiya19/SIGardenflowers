@include('Template1.header')

@yield('header')

<!-- featured post -->
    @yield('content')

    <div class="row">
      <div class="col-12">
        <nav>
          <ul class="pagination justify-content-center align-items-center">
            <li class="page-item">
              <span class="page-link">&laquo; Previous</span>
            </li>
            <li class="page-item"><a class="page-link" href="#">01</a></li>
            <li class="page-item active">
              <span class="page-link">02</span>
            </li>
            <li class="page-item"><a class="page-link" href="#">03</a></li>
            <li class="page-item"><a class="page-link" href="#">04</a></li>
            <li class="page-item"><a class="page-link" href="#">05</a></li>
            <li class="page-item"><a class="page-link" href="#">06</a></li>
            <li class="page-item">
              <a class="page-link" href="#">Next &raquo;</a>
            </li>
          </ul>
        </nav>
      </div>
    </div>
  </div>
</section>
<!-- /blog post -->

<!-- instagram -->
<section>
  <div class="container-fluid px-0">
    <div class="row no-gutters instagram-slider" id="instafeed" data-userId="4044026246"
      data-accessToken="4044026246.1677ed0.8896752506ed4402a0519d23b8f50a17"></div>
  </div>
</section>
<!-- /instagram -->

@include('Template1.footer')
