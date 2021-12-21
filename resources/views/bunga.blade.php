<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Bucket Bunga</title>
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

	</head>
	<body class="page1" id="top">
<!--==============================header=================================-->
		<header>
			<div class="container_12">
				<div class="grid_12">
					<div class="menu_block">
						<nav class="horizontal-nav full-width horizontalNav-notprocessed">
							<ul class="sf-menu">
								<li class="current"><a href="/user">Home</a></li>
								<li><a href="/tabelbunga">Tempat Penjualan</a></li>
								<li><a href="/tabelbunga">Bucket Bunga</a></li>
                                <li><a href="/user">About</a></li>
								<li><a href="/user">Contact</a></li>
							</ul>
						</nav>
						<div class="clear"></div>
					</div>
				</div>
			</div>
		</header>
		<div class="slider_wrapper">
			<div id="camera_wrap" class="">
				<div data-src="{!! asset('asset/asset5/images/b1.jpg') !!}">
				</div>
				<div data-src="{!! asset('asset/asset5/images/b2.jpg') !!}">
				</div>
				<div data-src="{!! asset('asset/asset5/images/b3.jpg') !!}">
				</div>
			</div>
		</div>
<!--==============================Content=================================-->
		<div class="content">
			<div class="container_12">
                @foreach ($data as $item)

				<div class="grid_4">

					<div class="banner">
                        <img src="{{ asset('storage/'.$item->image) }}" alt="" width="640cm" height="300cm">
						<div class="label">
                            <div class="title"> {{$item->namabunga}}</div>
							<div class="price">Harga<span>Rp.{{$item->harga}}(Pertangkai)</span></div>
						</div>
					</div>
				</div>
                @endforeach

				<div class="grid_5 prefix_1">
					<h3>Welcome</h3>
					<img src="{!! asset ('asset/asset5/images/page1_img1.png') !!}" alt="">
					<div class="extra_wrapper">
						<p>Selamat Datang dibagian Tanaman Hias</p>
						Kami menyediakan informasi mengenai jenis tanaman hias dan harganya berdasarkan harga pasaran pada tahun ini.
					</div>
					<div class="clear cl1"></div>
					<p>Selain itu, kalian dapat melihat semua list tanaman hias dengan mengklik<span class="col1">Tanaman Hias</a></span> yang ada di menu pada halaman ini. Dan untuk mengetahui tempat penjualan tanaman hias di Banjarmasin dapat mengklik</p>
					<p><span class="col1">Tempat Penjualan</a></span> pada menu.</p>
					Terima kasih telah mengunjungi kami dan semoga hari kalian menyenangkan.
				</div>

			</div>
		</div>

	</body>
</html>

