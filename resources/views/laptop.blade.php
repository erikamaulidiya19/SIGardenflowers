<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Laptop</title>
		<meta charset="utf-8">
		<meta name="format-detection" content="telephone=no" />
		<link rel="icon" href="{!! asset('asset/asset5/images/favicon.ico')!!}">
		<link rel="shortcut icon" href="{!!asset('asset/asset5/images/favicon.ico')!!}" />
		<link rel="stylesheet" href="{!! asset('asset/asset5/booking/css/booking.css') !!}">
		<link rel="stylesheet" href="{!! asset('asset/asset5/css/camera.css') !!}">
		<link rel="stylesheet" href="{!! asset('asset/asset5/css/owl.carousel.css') !!}">
		<link rel="stylesheet" href="{!! asset('asset/asset5/css/style.css') !!}">
		<script src="{!! asset('asset/asset5/js/jquery.js') !!}"></script>
		<script src="{!! asset('asset/asset5/js/jquery-migrate-1.2.1.js') !!}"></script>
		<script src="{!! asset('asset/asset5/js/script.js') !!}"></script>
		<script src="{!! asset('asset/asset5/js/superfish.js') !!}"></script>
		<script src="{!! asset('asset/asset5/js/jquery.ui.totop.js') !!}"></script>
		<script src="{!! asset('asset/asset5/js/jquery.equalheights.js') !!}"></script>
		<script src="{!! asset('asset/asset5/js/jquery.mobilemenu.js') !!}"></script>
		<script src="{!! asset('asset/asset5/js/jquery.easing.1.3.js') !!}"></script>
		<script src="{!! asset('asset/aseet5/js/owl.carousel.js') !!}"></script>
		<script src="{!! asset('asset/asset5/js/camera.js') !!}"></script>
		<!--[if (gt IE 9)|!(IE)]><!-->
		<script src="{!! asset('asset/asset5/js/jquery.mobile.customized.min.js') !!}"></script>
		<!--<![endif]-->
		<script src="{!! asset('asset/asset5/booking/js/booking.js') !!}"></script>

		<script>
$(document).ready(function(){
			$().UItoTop({ easingType: 'easeOutQuart' });
			});

			$(document).ready(function(){
			jQuery('#camera_wrap').camera({
				loader: false,
				pagination: false ,
				minHeight: '444',
				thumbnails: false,
				height: '48.375%',
				caption: true,
				navigation: true,
				fx: 'mosaic'
			});
			/*carousel*/
			var owl=$("#owl");
				owl.owlCarousel({
				items : 2, //10 items above 1000px browser width
				itemsDesktop : [995,2], //5 items between 1000px and 901px
				itemsDesktopSmall : [767, 2], // betweem 900px and 601px
				itemsTablet: [700, 2], //2 items between 600 and 0
				itemsMobile : [479, 1], // itemsMobile disabled - inherit from itemsTablet option
				navigation : true,
				pagination : false
				});
			$().UItoTop({ easingType: 'easeOutQuart' });
			});
		</script>
<link rel="shortcut icon" href="{!! asset('asset/images/logo2.png') !!}" type="image/x-icon">
<link rel="icon" href="{!! asset('asset/images/logo2.png') !!}" type="image/x-icon">
	</head>

	<body class="page1" id="top">

<!--==============================header=================================-->
		<div class="slider_wrapper">
			<div id="camera_wrap" class="">
				<div data-src="{!! asset('asset/asset5/images/lap1.jpg') !!}">
					<div class="caption fadeIn">
						<h2>Asus</h2>
						<div class="price">
							Harga
							<span>Rp.7.000.0000 - Rp.10.000.000</span>
						</div>
					</div>
				</div>
				<div data-src="{!! asset('asset/asset5/images/lap2.jpg') !!}">
					<div class="caption fadeIn">
						<h2>Lenovo</h2>
						<div class="price">
							Harga
							<span>Rp.5.000.000 - Rp.7.000.000</span>
						</div>

					</div>
				</div>
				<div data-src="{!! asset('asset/asset5/images/lap3.jpg') !!}">
					<div class="caption fadeIn">
						<h2>Apple</h2>
						<div class="price">
							Harga
							<span>Rp.10.000.000 - Rp.23.000.000</span>
						</div>

					</div>
				</div>
			</div>
		</div>
<!--==============================Content=================================-->
		<div class="content">
			<div class="container_12">
                @foreach ($data as $item)

				<div class="grid_4">
                    {{-- {{ dd($data) }} --}}
					<div class="banner">
                        <img src="{{ asset('assets/post-image/'.$item->image) }}" alt="" width="640cm" height="300cm">
						<div class="label">
                            <div class="title"> {{$item->namalaptop}}</div>
							<div class="price">Harga<span>Rp.{{$item->harga}}</span></div>
                            <a class="btn btn-outline-light" href="{{ url('pesan/'.$item->id_laptop) }}">Buy Now</a>
						</div>
					</div>
				</div>
                @endforeach
			</div>
		</div>
        <center><a href="/user" class="btn btn-custom btn-lg page-scroll" style="margin:20px;">Back</a> </div><center>
	</body>
</html>

