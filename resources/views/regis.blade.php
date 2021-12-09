<!doctype html>
<html lang="en">
  <head>
  	<title>Registrasi</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="shortcut icon" href="{!! asset('asset/images/logo.png') !!}" type="image/x-icon">
    <link rel="icon" href="{!! asset('asset/images/logo.png') !!}" type="image/x-icon">

	<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

	<link rel="stylesheet" href="{!! asset('asset/asset4/css/style.css ')!!}">

	</head>
	<body>
	<section class="ftco-section">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-6 text-center mb-5">
				</div>
			</div>
			<div class="row justify-content-center">
				<div class="col-md-7 col-lg-5">
					<div class="wrap">
						<div class="img" style="background-image: url(asset/asset2/img/bug.png);"></div>
						<div class="login-wrap p-4 p-md-5">
			      	<div class="d-flex">
			      		<div class="w-100">
			      			<h3 class="mb-4"><b>Registrasi<b></h3>
			      		</div>

			      	</div>
							<form action="/regis-user" class="signin-form" method="post">
                                @csrf
			      		<div class="form-group mt-3">
			      			<input type="text" name="name" class="form-control @error('name')is-invalid @enderror" id="name" required value="{{ old('name') }}">
			      			<label class="form-control-placeholder" for="name">Name</label>
                              @error('name')
                              <div class="invalid-feedback">
                                  {{ $message }}
                              </div>
                              @enderror
			      		</div>
                          <div class="form-group mt-3">
                            <input type="email" name="email" class="form-control @error('email')is-invalid @enderror" id="email" required value="{{ old('email') }}">
			      			<label class="form-control-placeholder" for="username">Email Address</label>
                              @error('email')
                              <div class="invalid-feedback">
                                  {{ $message }}
                              </div>
                              @enderror
                        </div>
                        <div class="form-group mt-3">
                            <input type="text" name="username" class="form-control @error('username')is-invalid @enderror" id="username" required value="{{ old('username') }}">
                            <label class="form-control-placeholder" for="name">Username</label>
                            @error('username')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>

		            <div class="form-group">
		              <input id="password-field" type="password" name="password"class="form-control"@error('password')is-invalid @enderror id="password" required>
		              <label class="form-control-placeholder" for="password">Password</label>
		              <span toggle="#password-field" class="fa fa-fw fa-eye field-icon toggle-password"></span>
                      @error('password')
                      <div class="invalid-feedback">
                          {{ $message }}
                      </div>
                      @enderror
		            </div>
		            <div class="form-group">
		            	<button type="submit" class="form-control btn btn-primary rounded submit px-3">Submit</button>
		        </div>
                <p class="text-center"><a href="/login">Back</a></p>
		      </div>

				</div>
			</div>
		</div>

	</section>



  <script src="{!! asset('asset/asset4/js/jquery.min.js') !!}"></script>
  <script src="{!! asset('asset/asset4/js/popper.js')  !!}"></script>
  <script src="{!! asset ('asset/asset4/js/bootstrap.min.js') !!}"></script>
  <script src="{!! asset ('asset/asset4/js/main.js') !!}"></script>

	</body>
</html>

