
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Data Bucket Bunga</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
      <!--Favicon-->
  <link rel="shortcut icon" href="{!! asset('asset/images/logo.png') !!}" type="image/x-icon">
  <link rel="icon" href="{!! asset('asset/images/logo.png') !!}" type="image/x-icon">
<!-- ** Plugins Needed for the Project ** -->
  <!-- Bootstrap -->
  <link href="{!! asset('asset/plugins/bootstrap/bootstrap.min.css') !!}" rel="stylesheet">
  <!-- slick slider -->
  <link href="{!! asset('asset/plugins/slick/slick.css') !!}" rel="stylesheet">
  <!-- themefy-icon -->
  <link rel="stylesheet" href="{!! asset('asset/plugins/themify-icons/themify-icons.css') !!}">

  <!-- Main Stylesheet -->
  <link href="{!! asset('asset/css/style.css') !!}" rel="stylesheet">


<!--===============================================================================================-->
	<link rel="icon" type="image/png" href="{!! asset ('asset/asset6/images/icons/favicon.ico') !!}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{!! asset ('asset/asset6/vendor/bootstrap/css/bootstrap.min.css') !!}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{!! asset('asset/asset6/fonts/font-awesome-4.7.0/css/font-awesome.min.css') !!}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{!! asset('asset/asset6/vendor/animate/animate.css') !!}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{!! asset('asset/asset6/vendor/select2/select2.min.css') !!}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{!! asset('asset/asset6/vendor/perfect-scrollbar/perfect-scrollbar.css') !!}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{!! asset('asset/asest6/css/util.css') !!}">
	<link rel="stylesheet" type="text/css" href="{!! asset('asset/asset6/css/main.css') !!}">
<!--===============================================================================================-->
</head>
<body>
    <header class="navigation">
        <nav class="navbar navbar-expand-lg navbar-light">
          <a class="navbar-brand" href="/index"><img class="img-fluid" src="{!! asset('asset/images/flower.png') !!}" style="width:20em;" alt="parsa"></a>
          <button class="navbar-toggler border-0" type="button" data-toggle="collapse" data-target="#navogation"
            aria-controls="navogation" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>

          <div class="collapse navbar-collapse text-center" id="navogation">
            <ul class="navbar-nav ml-auto">
              <li class="nav-item">
                <a class="nav-link text-uppercase text-dark" href="/bunga">Back</a>
              </li>
              <li class="nav-item">
                <a class="nav-link text-uppercase text-dark" href="/user">Home</a>
              </li>

                <form action="/logout" method="post">
              <li class="nav-item">
                <a class="nav-link text-uppercase text-dark" href="/index">Logout</a>
              </li>
                </form>
            </ul>

          </div>
        </nav>
      </header>

	<div class="limiter">
		<div class="container-table100">
			<div class="wrap-table100">
				<div class="table100 ver1 m-b-110">
					<div class="table100-head">
						<table>
							<thead>
								<tr class="row100 head">
									<th class="cell100 column1">No</th>
									<th class="cell100 column2">Bunga</th>
									<th class="cell100 column3">Toko Bunga</th>
                                    <th class="cell100 column3">Alamat Toko Bunga</th>
								</tr>
							</thead>
						</table>
					</div>

					<div class="table100-body js-pscroll">
						<table>
							<tbody>
                                @php
                                $no=1;
                            @endphp
                             @foreach ($data as $item)
								<tr class="row100 body">
									<td class="cell100 column1">{{$no++}}</td>
									<td class="cell100 column2">{{$item->namabunga}}</td>
									<td class="cell100 column3">{{$item->tokobunga}}</td>
									<td class="cell100 column4">{{$item->alamatbunga}}</td>

                                </tr>
                                @endforeach
							</tbody>
						</table>
					</div>
				</div>
            </div>
		</div>
	</div>
 <!-- jQuery -->
 <script src="{!! asset('asset/plugins/jQuery/jquery.min.js') !!}"></script>
 <!-- Bootstrap JS -->
 <script src="{!! asset('asset/plugins/bootstrap/bootstrap.min.js') !!}"></script>
 <!-- slick slider -->
 <script src="{!! asset('asset/plugins/slick/slick.min.js') !!}"></script>
 <!-- masonry -->
 <script src="{!! asset('asset/plugins/masonry/masonry.js') !!}"></script>
 <!-- instafeed -->
 <script src="{!! asset('asset/plugins/instafeed/instafeed.min.js') !!}"></script>
 <!-- smooth scroll -->
 <script src="{!! asset('asset/plugins/smooth-scroll/smooth-scroll.js') !!}"></script>
 <!-- headroom -->
 <script src="{!! asset('asset/plugins/headroom/headroom.js') !!}"></script>
 <!-- reading time -->
 <script src="{!! asset('plugins/reading-time/readingTime.min.js') !!}"></script>

 <!-- Main Script -->
 <script src="{!! asset('asset/js/script.js"') !!}></script>


<!--===============================================================================================-->
	<script src="{!! asset('asset/asset6/vendor/jquery/jquery-3.2.1.min.js') !!}"></script>
<!--===============================================================================================-->
	<script src="{!! asset('asset/asset6/vendor/bootstrap/js/popper.js') !!}"></script>
	<script src="{!! asset('asset/asset6/vendor/bootstrap/js/bootstrap.min.js') !!}"></script>
<!--===============================================================================================-->
	<script src="{!! asset('asset/asset6/vendor/select2/select2.min.js') !!}"></script>
<!--===============================================================================================-->
	<script src="{!! asset('asset/asset6/vendor/perfect-scrollbar/perfect-scrollbar.min.js') !!}"></script>
	<script>
		$('.js-pscroll').each(function(){
			var ps = new PerfectScrollbar(this);

			$(window).on('resize', function(){
				ps.update();
			})
		});


	</script>
<!--===============================================================================================-->
	<script src="{!! asset('asset/asset6/js/main.js') !!}"></script>

</body>
</html>
