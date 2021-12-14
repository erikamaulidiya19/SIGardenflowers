
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Data Tanaman Hias</title>
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
                <a class="nav-link text-uppercase text-dark" href="/tanamanhias">Back</a>
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
            {{-- <form class="form-inline position-relative ml-lg-4">
              <input class="form-control px-0 w-100" type="search" placeholder="Search">
              <!-- <button class="search-icon" type="submit"><i class="ti-search text-dark"></i></button> -->
              <a href="search" class="search-icon"><i class="ti-search text-dark"></i></a>
            </form> --}}
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
									<th class="cell100 column1">Class name</th>
									<th class="cell100 column2">Type</th>
									<th class="cell100 column3">Hours</th>
									<th class="cell100 column4">Trainer</th>
									<th class="cell100 column5">Spots</th>
								</tr>
							</thead>
						</table>
					</div>

					<div class="table100-body js-pscroll">
						<table>
							<tbody>
								<tr class="row100 body">
									<td class="cell100 column1">Like a butterfly</td>
									<td class="cell100 column2">Boxing</td>
									<td class="cell100 column3">9:00 AM - 11:00 AM</td>
									<td class="cell100 column4">Aaron Chapman</td>
									<td class="cell100 column5">10</td>
								</tr>

								<tr class="row100 body">
									<td class="cell100 column1">Mind & Body</td>
									<td class="cell100 column2">Yoga</td>
									<td class="cell100 column3">8:00 AM - 9:00 AM</td>
									<td class="cell100 column4">Adam Stewart</td>
									<td class="cell100 column5">15</td>
								</tr>

								<tr class="row100 body">
									<td class="cell100 column1">Crit Cardio</td>
									<td class="cell100 column2">Gym</td>
									<td class="cell100 column3">9:00 AM - 10:00 AM</td>
									<td class="cell100 column4">Aaron Chapman</td>
									<td class="cell100 column5">10</td>
								</tr>

								<tr class="row100 body">
									<td class="cell100 column1">Wheel Pose Full Posture</td>
									<td class="cell100 column2">Yoga</td>
									<td class="cell100 column3">7:00 AM - 8:30 AM</td>
									<td class="cell100 column4">Donna Wilson</td>
									<td class="cell100 column5">15</td>
								</tr>

								<tr class="row100 body">
									<td class="cell100 column1">Playful Dancer's Flow</td>
									<td class="cell100 column2">Yoga</td>
									<td class="cell100 column3">8:00 AM - 9:00 AM</td>
									<td class="cell100 column4">Donna Wilson</td>
									<td class="cell100 column5">10</td>
								</tr>

								<tr class="row100 body">
									<td class="cell100 column1">Zumba Dance</td>
									<td class="cell100 column2">Dance</td>
									<td class="cell100 column3">5:00 PM - 7:00 PM</td>
									<td class="cell100 column4">Donna Wilson</td>
									<td class="cell100 column5">20</td>
								</tr>

								<tr class="row100 body">
									<td class="cell100 column1">Cardio Blast</td>
									<td class="cell100 column2">Gym</td>
									<td class="cell100 column3">5:00 PM - 7:00 PM</td>
									<td class="cell100 column4">Randy Porter</td>
									<td class="cell100 column5">10</td>
								</tr>

								<tr class="row100 body">
									<td class="cell100 column1">Pilates Reformer</td>
									<td class="cell100 column2">Gym</td>
									<td class="cell100 column3">8:00 AM - 9:00 AM</td>
									<td class="cell100 column4">Randy Porter</td>
									<td class="cell100 column5">10</td>
								</tr>

								<tr class="row100 body">
									<td class="cell100 column1">Supple Spine and Shoulders</td>
									<td class="cell100 column2">Yoga</td>
									<td class="cell100 column3">6:30 AM - 8:00 AM</td>
									<td class="cell100 column4">Randy Porter</td>
									<td class="cell100 column5">15</td>
								</tr>

								<tr class="row100 body">
									<td class="cell100 column1">Yoga for Divas</td>
									<td class="cell100 column2">Yoga</td>
									<td class="cell100 column3">9:00 AM - 11:00 AM</td>
									<td class="cell100 column4">Donna Wilson</td>
									<td class="cell100 column5">20</td>
								</tr>

								<tr class="row100 body">
									<td class="cell100 column1">Virtual Cycle</td>
									<td class="cell100 column2">Gym</td>
									<td class="cell100 column3">8:00 AM - 9:00 AM</td>
									<td class="cell100 column4">Randy Porter</td>
									<td class="cell100 column5">20</td>
								</tr>

								<tr class="row100 body">
									<td class="cell100 column1">Like a butterfly</td>
									<td class="cell100 column2">Boxing</td>
									<td class="cell100 column3">9:00 AM - 11:00 AM</td>
									<td class="cell100 column4">Aaron Chapman</td>
									<td class="cell100 column5">10</td>
								</tr>

								<tr class="row100 body">
									<td class="cell100 column1">Mind & Body</td>
									<td class="cell100 column2">Yoga</td>
									<td class="cell100 column3">8:00 AM - 9:00 AM</td>
									<td class="cell100 column4">Adam Stewart</td>
									<td class="cell100 column5">15</td>
								</tr>

								<tr class="row100 body">
									<td class="cell100 column1">Crit Cardio</td>
									<td class="cell100 column2">Gym</td>
									<td class="cell100 column3">9:00 AM - 10:00 AM</td>
									<td class="cell100 column4">Aaron Chapman</td>
									<td class="cell100 column5">10</td>
								</tr>

								<tr class="row100 body">
									<td class="cell100 column1">Wheel Pose Full Posture</td>
									<td class="cell100 column2">Yoga</td>
									<td class="cell100 column3">7:00 AM - 8:30 AM</td>
									<td class="cell100 column4">Donna Wilson</td>
									<td class="cell100 column5">15</td>
								</tr>

								<tr class="row100 body">
									<td class="cell100 column1">Playful Dancer's Flow</td>
									<td class="cell100 column2">Yoga</td>
									<td class="cell100 column3">8:00 AM - 9:00 AM</td>
									<td class="cell100 column4">Donna Wilson</td>
									<td class="cell100 column5">10</td>
								</tr>

								<tr class="row100 body">
									<td class="cell100 column1">Zumba Dance</td>
									<td class="cell100 column2">Dance</td>
									<td class="cell100 column3">5:00 PM - 7:00 PM</td>
									<td class="cell100 column4">Donna Wilson</td>
									<td class="cell100 column5">20</td>
								</tr>

								<tr class="row100 body">
									<td class="cell100 column1">Cardio Blast</td>
									<td class="cell100 column2">Gym</td>
									<td class="cell100 column3">5:00 PM - 7:00 PM</td>
									<td class="cell100 column4">Randy Porter</td>
									<td class="cell100 column5">10</td>
								</tr>

								<tr class="row100 body">
									<td class="cell100 column1">Pilates Reformer</td>
									<td class="cell100 column2">Gym</td>
									<td class="cell100 column3">8:00 AM - 9:00 AM</td>
									<td class="cell100 column4">Randy Porter</td>
									<td class="cell100 column5">10</td>
								</tr>

								<tr class="row100 body">
									<td class="cell100 column1">Supple Spine and Shoulders</td>
									<td class="cell100 column2">Yoga</td>
									<td class="cell100 column3">6:30 AM - 8:00 AM</td>
									<td class="cell100 column4">Randy Porter</td>
									<td class="cell100 column5">15</td>
								</tr>

								<tr class="row100 body">
									<td class="cell100 column1">Yoga for Divas</td>
									<td class="cell100 column2">Yoga</td>
									<td class="cell100 column3">9:00 AM - 11:00 AM</td>
									<td class="cell100 column4">Donna Wilson</td>
									<td class="cell100 column5">20</td>
								</tr>

								<tr class="row100 body">
									<td class="cell100 column1">Virtual Cycle</td>
									<td class="cell100 column2">Gym</td>
									<td class="cell100 column3">8:00 AM - 9:00 AM</td>
									<td class="cell100 column4">Randy Porter</td>
									<td class="cell100 column5">20</td>
								</tr>
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
