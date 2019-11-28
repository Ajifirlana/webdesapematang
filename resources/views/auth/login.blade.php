<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Website Desa Pematang V Suku</title>


	<!-- Fonts -->
	<link href='//fonts.googleapis.com/css?family=Roboto:400,300' rel='stylesheet' type='text/css'>

	<meta charset="utf-8"/>
<title>Login </title>
<meta name="description" content="Form repeater examples">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no">
<!--begin::Web font -->
<script src="/admintemplate/dashboard/libs/webfont/1.6.16/webfont.js"></script>
<script>
  WebFont.load({
    google: {"families":["Poppins:300,400,500,600,700","Roboto:300,400,500,600,700"]},
    active: function() {
        sessionStorage.fonts = true;
    }
  });
</script>
<!--end::Web font -->
<!--begin::Base Styles -->
<link href="/admintemplate/dashboard/assets/vendors/base/vendors.bundle.css" rel="stylesheet" type="text/css"/>
<link href="/admintemplate/dashboard/assets/demo/default/base/style.bundle.css" rel="stylesheet" type="text/css"/>
<!--end::Base Styles -->
<link rel="shortcut icon" href="admintemplate/admintemplate/dashboard/assets/demo/default/media/img/logo/favicon.ico"/>

</head>

<body  class="m--skin- m-header--fixed m-header--fixed-mobile m-aside-left--enabled m-aside-left--skin-dark m-aside-left--fixed m-aside-left--offcanvas m-footer--push m-aside--offcanvas-default"  >


<div class="m-grid m-grid--hor m-grid--root m-page">
    
			
				<div class="m-grid__item m-grid__item--fluid m-grid m-grid--desktop m-grid--ver-desktop m-grid--hor-tablet-and-mobile m-login m-login--6" id="m_login">
	<div class="m-grid__item   m-grid__item--order-tablet-and-mobile-2  m-grid m-grid--hor m-login__aside " style="background-image: url(/admintemplate/dashboard/assets/app/media/img/bg/bg-4.jpg);">
		<div class="m-grid__item">
			<div class="m-login__logo">
				<a href="#">
					<img src="/admintemplate/dashboard/assets/app/media/img/logos/logo-4.png">
				</a>
			</div>
		</div>

		<div class="m-grid__item m-grid__item--fluid m-grid m-grid--ver">
			<div class="m-grid__item m-grid__item--middle">
				<span class="m-login__title">Selamat Datang Di Halaman Administrator Website Desa Pematang V Suku</span>
				<span class="m-login__subtitle">Pemerintah Kab. Batang Hari</span>
			</div>
		</div>

		<div class="m-grid__item">
			<div class="m-login__info">
				<div class="m-login__section">
					<a href="#" class="m-link">&copy 2019 Diskominfo Batang Hari</a>
				</div>
			</div>
		</div>
	</div>

	<div class="m-grid__item m-grid__item--fluid  m-grid__item--order-tablet-and-mobile-1  m-login__wrapper">
		
		<!--begin::Body-->
		<div class="m-login__body">

			<!--begin::Signin-->
			<div class="m-login__signin">
				<div class="m-login__title">
					<h3>Login dengan Akun Anda</h3>
				</div>
				<form class="form-horizontal" role="form" method="POST" action="/auth/login">
						<input type="hidden" class="form-group m-form__group" name="_token" value="{{ csrf_token() }}">

						<div class="form-group">
							<label class="col-md-4 control-label">E-Mail Address</label>
							<div class="col-md-6">
								<input type="email" class="form-control m-input m-login__form-input--last" name="email" value="{{ old('email') }}">
							</div>
						</div>

						<div class="form-group">
							<label class="col-md-4 control-label">Password</label>
							<div class="col-md-6">
								<input type="password" class="form-control m-input m-login__form-input--last" name="password">
							</div>
						</div>

						<div class="form-group">
							<div class="col-md-6 col-md-offset-4">
								<div class="checkbox">
									<label>
										<input type="checkbox" name="remember"> Remember Me
									</label>
								</div>
							</div>
						</div>

						<div class="form-group">
							<div class="col-md-6 col-md-offset-4">
								<button type="submit" class="btn btn-primary m-btn m-btn--pill m-btn--custom m-btn--air m-login__btn m-login__btn--primary" style="margin-right: 15px;">
									Login
								</button>

								<a href="/password/email">Forgot Your Password?</a>
							</div>
						</div>
						
					</form>
				
			</div>
			<!--end::Signin-->
		</div>
		<!--end::Body-->
	</div>
</div>

</div>
<!-- end:: Page -->
<script src="/admintemplate/dashboard/assets/vendors/base/vendors.bundle.js" type="text/javascript"></script>
<script src="/admintemplate/js/bootbox.min.js" type="text/javascript"></script>
<script src="/admintemplate/dashboard/assets/demo/default/base/scripts.bundle.js" type="text/javascript"></script>
<script type="text/javascript">
	$(function(){
		@if(Session::has('error'))
		bootbox.alert("{!! Session::get('error') !!}");
		@endif
	})
</script>
</body>
</html>
