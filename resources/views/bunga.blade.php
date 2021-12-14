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
		<!--[if lt IE 8]>
		<div style=' clear: both; text-align:center; position: relative;'>
			<a href="http://windows.microsoft.com/en-US/internet-explorer/products/ie/home?ocid=ie6_countdown_bannercode">
				<img src="http://storage.ie6countdown.com/assets/100/images/banners/warning_bar_0000_us.jpg" border="0" height="42" width="820" alt="You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today." />
			</a>
		</div>
		<![endif]-->
		<!--[if lt IE 9]>
		<script src="js/html5shiv.js"></script>
		<link rel="stylesheet" media="screen" href="css/ie.css">
		<![endif]-->
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
                                <li><a href="index-1.html">About</a></li>
								<li><a href="index-2.html">Contact</a></li>
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
				<div class="grid_4">
					<div class="banner">
						<img src="{!! asset('asset/asset5/images/b4.jpg') !!}" alt="">
						<div class="label">
							<div class="title">Bunga Mawar</div>
							<div class="price">Harga<span>Rp.20.000 (Pertangkai)</span></div>
						</div>
					</div>
				</div>
				<div class="grid_4">
					<div class="banner">
						<img src="{!! asset ('asset/asset5/images/b5.jpg') !!}" alt="">
						<div class="label">
							<div class="title">Bunga Krisan</div>
							<div class="price">Harga<span>Rp.25.000 - Rp.28.000 (Pertangkai)</span></div>
						</div>
					</div>
				</div>
				<div class="grid_4">
					<div class="banner">
						<img src="{!! asset ('asset/asset5/images/b6.jpg') !!}" alt="">
						<div class="label">
							<div class="title">Bunga Lily</div>
							<div class="price">Harga<span>Rp.65.000 (Pertangkai)</span></div>
						</div>
					</div>
				</div>


                <div class="grid_4">
					<div class="banner">
						<img src="{!! asset ('asset/asset5/images/b7.jpg') !!}" alt="">
						<div class="label">
							<div class="title">Bunga Daisy</div>
							<div class="price">Harga<span>Rp.32.000 (Pertangkai)</span></div>
						</div>
					</div>
				</div>
                <div class="grid_4">
					<div class="banner">
						<img src="{!! asset ('asset/asset5/images/b8.jpg') !!}" alt="">
						<div class="label">
							<div class="title">Bunga Baby's Breath</div>
							<div class="price">Harga<span>Rp.9.000 (Pertangkai)</span></div>
						</div>
					</div>
				</div>
                <div class="grid_4">
					<div class="banner">
						<img src="{!! asset ('asset/asset5/images/img3.jpg') !!}" alt="">
						<div class="label">
							<div class="title">Bunga Lavender</div>
							<div class="price">Harga<span>Rp.120.000</span></div>
						</div>
					</div>
				</div>



                <div class="grid_4">
					<div class="banner">
						<img src="{!! asset ('asset/asset5/images/b10.jpg') !!}" alt="">
						<div class="label">
							<div class="title">Bunga Pampas</div>
							<div class="price">Harga<span>Rp.12.000</span></div>
						</div>
					</div>
				</div>
                <div class="grid_4">
					<div class="banner">
						<img src="{!! asset ('asset/asset5/images/b11.jpg') !!}" alt="">
						<div class="label">
							<div class="title">Bunga Carnation</div>
							<div class="price">Harga<span>Rp.3.500</span></div>
						</div>
					</div>
				</div>
                <div class="grid_4">
					<div class="banner">
						<img src="{!! asset ('asset/asset5/images/b12.jpg') !!}" alt="">
						<div class="label">
							<div class="title">Bunga Tulip</div>
							<div class="price">Harga<span>Rp.13.000</span></div>
						</div>
					</div>
				</div>


				{{-- <div class="clear"></div>
				<div class="grid_6">
					<h3>PESAN SEKARANG!</h3>
					<form id="bookingForm">
						<div class="fl1">
							<div class="tmInput">
								<input name="Nama" placeHolder="Name:" type="text" data-constraints='@NotEmpty @Required @AlphaSpecial'>
							</div>
							<div class="tmInput">
								<input name="Email" placeHolder="Email:" type="text" data-constraints="@NotEmpty @Required">
							</div>
						</div>
						<div class="fl1">
							<div class="tmInput">
								<input name="Nomor Handphone" placeHolder="Nomor Handphone:" type="text" data-constraints="@NotEmpty @Required @Email">
							</div>
							<div class="tmInput mr0">
								<input name="Alamat" placeHolder="Alamat:" type="text" data-constraints="@NotEmpty @Required">
							</div>
						</div>
						</label>

                        <h5>Ukuran</h5>
						<div class="clear"></div>
						<div class="tmRadio">

                            <span>Bibit (Kecil)</span>
							<input name="Comfort" type="radio" id="tmRadio0" data-constraints='@RadioGroupChecked(name="Comfort", groups=[RadioGroup])' checked/>
                            <span>Sedang</span>
							<input name="Comfort" type="radio" id="tmRadio1" data-constraints='@RadioGroupChecked(name="Comfort", groups=[RadioGroup])' />
                            <span>Besar</span>
							<input name="Comfort" type="radio" id="tmRadio2" data-constraints='@RadioGroupChecked(name="Comfort", groups=[RadioGroup])' />

						</div>
						<div class="clear"></div>
						<div class="fl1 fl2">
							<h6>Jumlah</h6>
							<select name="Adults" class="tmSelect auto" data-class="tmSelect tmSelect2" data-constraints="">
								<option>1</option>
								<option>2</option>
								<option>3</option>
								<option>4</option>
                                <option>5</option>
							</select>
						</div>
						<div class="clear"></div>
						<div class="tmTextarea">
							<textarea name="Message" placeHolder="Message" data-constraints='@NotEmpty @Required @Length(min=20,max=999999)'></textarea>
						</div>
						<a href="#" class="btn" data-type="submit">Pesan</a>
					</form>
				</div> --}}
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
		{{-- <script>
			$(function (){
				$('#bookingForm').bookingForm({
					ownerEmail: '#'
				});
			})
			$(function() {
				$('#bookingForm input, #bookingForm textarea').placeholder();
			});
		</script> --}}
	</body>
</html>

