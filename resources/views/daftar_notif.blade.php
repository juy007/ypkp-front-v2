<!doctype html>
	<html lang="en">
	<head>
	<title>Universitas Sangga Buana YPKP</title>
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
		<link rel="shortcut icon" href="{{ asset('assets/images/header/logo.png') }}" type="image/x-icon">
		
		<meta name="description" content="Universitas Sangga Buana YPKP menyelenggarakan pendidikan jenjang pascasarjana mencakup program Magister Manajemen, Magister Teknik Sipil, dan Magister Akuntansi.">
		<meta name="keywords" content="Universitas Sangga Buana YPKP menyelenggarakan pendidikan jenjang pascasarjana mencakup program Magister Manajemen, Magister Teknik Sipil, dan Magister Akuntansi">
		<meta name="author" content="Universitas Sangga Buana YPKP">

		<!-- Facebook meta tags -->
		<meta property="og:title" content="Universitas Sangga Buana YPK">
		<meta property="og:description" content="Universitas Sangga Buana YPKP menyelenggarakan pendidikan jenjang pascasarjana mencakup program Magister Manajemen, Magister Teknik Sipil, dan Magister Akuntansi.">
		<meta property="og:image" content="{{ asset('assets/images/header/logo.png') }}">
		<meta property="og:url" content="https://pascasarjanausbypkp.ac.id/">
		<meta property="og:type" content="website">

		<!-- Twitter meta tags -->
		<meta name="twitter:card" content="summary_large_image">
		<meta name="twitter:title" content="Universitas Sangga Buana YPK">
		<meta name="twitter:description" content="Universitas Sangga Buana YPKP menyelenggarakan pendidikan jenjang pascasarjana mencakup program Magister Manajemen, Magister Teknik Sipil, dan Magister Akuntansi.">
		<meta name="twitter:image" content="{{ asset('assets/images/header/logo.png') }}">
		<meta name="twitter:url" content="https://pascasarjanausbypkp.ac.id/">
		<meta name="twitter:site" content="@pascasarjana">

		<link href="https://fonts.googleapis.com/css?family=Roboto:400,700,900&display=swap" rel="stylesheet">

		<link rel="stylesheet" href="{{ asset('assets/form/fonts/icomoon/style.css') }}">


		<!-- Bootstrap CSS -->
		<link rel="stylesheet" href="{{ asset('assets/form/css/bootstrap.min.css') }}">

		<!-- Style -->
		<link rel="stylesheet" href="{{ asset('assets/form/css/style.css') }}">
		<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/ypkp.css') }}">


		<?php 
			//echo $setting['data']['facebook_pixel'];
		?>
	</head>
	<body>
		<style type="text/css">
		.img-logo{
			display: block;
			margin-left: auto;
			margin-right: auto;
			margin-top: -50px;
			width: 140px;
		}
		.text-center{
			font-size: 20px;
			line-height: 25px;
		}
		.text-gelombang{
			font-size: 18px;
			text-align: center;
			font-weight: bold;

		}
		.font-tem{
			font-family: "nexa";
			color: #FFF;
		}
		.address-form{

			font-size: 12px;
		}
		.note-form{

			font-size: 15px;
		}
		.hr-tem{
			border: 1px solid #DE2525;
		}
		.btn-sub{
			background:#DE2525;
			color: #FFF;
			font-size: 18px;
			border: none;
		}
		.footer-form{
			background:#DE2525;
			width: 100%;
			color: #FFF;
			text-align: center;
		}
		.form-pmb{
			background:none !important;
			color: #FFF !important;
		}
		.option-form{
			background: #DE2525;
		}
		.star-form{
			color: #DE2525;
			font-size: 18px;
			margin-top: 5px;
		}
		.notif-no-form{
			font-family: "nexa";
			text-align: center;
			color: #FFF;
			margin-top: 60px;
			margin-bottom: 30px;
		}
	</style>
	<div class="content bg">
		<div class="container">
			<div class="row align-items-stretch justify-content-center no-gutters">
				<div class="col-md-7">
					<div class="form h-100 contact-wrap p-5" style="background: #282828;">
						<img class="img-logo" src="{{ asset('assets/images/header/logo.png') }}">
						<h4 class="text-center font-tem">Pendaftaran Pascasarjana</h4>
						<h4 class="text-center font-tem">Universitas Sangga Buana YPKP Bandung</h4>
						<p class="text-center address-form">Jl. PH.H. Mustofa No.68, Cikutra, Kec. Cibeunying Kidul Kota Bandung, Jawa Barat 40124 </p>
						<hr class="hr-tem">
					
						<?php 
							if ($status=='email-failed') { 
						?>
						<div style="width:100%;background: #DE2525;border-radius: 12px;color: #FFF;text-align: center;padding: 8px;">
							E-mail sudah digunaka untuk gelombang ini
						</div>
						<?php }elseif($status=='failed'){?>
						<div style="width:100%;background: #DE2525;border-radius: 12px;color: #FFF;text-align: center;padding: 8px;">
							Pendaftaran gagal, silahkan coba beberpa saat lagi
						</div>
						<?php }elseif($status=='success'){ ?>
						<div style="width:100%;background: #01A61C;border-radius: 12px;color: #FFF;text-align: center;padding: 8px;">
							Selamat pendaftaran anda berhasil.
						</div>
						<br><br><br>
						<div class="row justify-content-center">
							<div class="col-md-5 form-group text-center">
								<a href="https://pascasarjanausbypkp.ac.id/daftar" class="btn-block btn-sub  py-2 px-4">Kembali</a>
							</div>
						</div>
						<?php } ?>
					</div>
					<div class="footer-form">
							<span>&copy; Universitas Sanggabuana. All Right Reserved</span>
					</div>
				</div>
			</div>
		</div>

	</div>
	<style>
		.floatwa {
			position:fixed;
			bottom:60px;
			right: 15px;
			width:50px;
			height: 50px;
			z-index:1000;
			padding:5px 0px 0px 0px;
			margin:auto;
			text-align:center;
			float:none;
		/*	box-shadow: 0px -2px 10px #c0c0c0;*/
			border-radius: 100%;
			/*background: white;*/
		}
		.loading{
			top:0px;
			position:fixed;
			z-index:1000;
			text-align:center;
			width:100%;
			height:700px;
			background:rgba(0, 0, 0, 0.5);
			padding-top:20px;
		}
		.loaidngs{
			
		}
		.loadingh{
			display:none;
		}
	</style>
	<div id="loading_id" class="loading loadingh">
			<div class="container col-lg-8 col-sm-10 col-md-12" style="background:#000; height:620px;">
				<br><br><br><br><br><br>
				<h4 class="text-center font-tem">Proses mendaftar</h4>
				<img width="200" src="{{ asset('assets/images/gif/loading.gif') }}">
			</div>
	</div>
	<!--
	<div class="floatwa">
		<a href="https://api.whatsapp.com/send?phone=6282128211958&text=Halo%20Tim%20Pendaftaran%20Online%20Pascasarjana%20Universitas%20Sangga%20Buana%20!" target="_blank" target="_blank"><img style="width:80%" src="assets/images/whatsapp.png"></a>
	</div>
	-->
	<script src="{{ asset('assets/form/js/jquery-3.3.1.min.js') }}"></script>
	<script src="{{ asset('assets/form/js/popper.min.js') }}"></script>
	<script src="{{ asset('assets/form/js/bootstrap.min.js') }}"></script>
	<script src="{{ asset('assets/form/js/jquery.validate.min.js') }}"></script>
	<script src="{{ asset('assets/form/js/main.js') }}"></script>

</body>
</html>