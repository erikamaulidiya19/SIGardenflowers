<!DOCTYPE html>
<html>
<head>
    <title>
        Chekout
       </title>
           <!--Favicon-->
    <link rel="shortcut icon" href="{!! asset('asset/images/logo2.png') !!}" type="image/x-icon">
    <link rel="icon" href="{!! asset('asset/images/logo2.png') !!}" type="image/x-icon">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
body {
  font-family: Arial;
  font-size: 17px;
  padding: 8px;
}

* {
  box-sizing: border-box;
}

.row {
  display: -ms-flexbox; /* IE10 */
  display: flex;
  -ms-flex-wrap: wrap; /* IE10 */
  flex-wrap: wrap;
  margin: 0 -16px;
}

.col-25 {
  -ms-flex: 25%; /* IE10 */
  flex: 25%;
}

.col-50 {
  -ms-flex: 50%; /* IE10 */
  flex: 50%;
}

.col-75 {
  -ms-flex: 75%; /* IE10 */
  flex: 75%;
}

.col-25,
.col-50,
.col-75 {
  padding: 0 16px;
}

.container {
  background-color: #f2f2f2;
  padding: 5px 20px 15px 20px;
  border: 1px solid lightgrey;
  border-radius: 3px;
}

input[type=text] {
  width: 100%;
  margin-bottom: 20px;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 3px;
}

label {
  margin-bottom: 10px;
  display: block;
}

.icon-container {
  margin-bottom: 20px;
  padding: 7px 0;
  font-size: 24px;
}

.btn {
  background-color: #04AA6D;
  color: white;
  padding: 12px;
  margin: 10px 0;
  border: none;
  width: 100%;
  border-radius: 3px;
  cursor: pointer;
  font-size: 17px;
}

.btn:hover {
  background-color: #45a049;
}

a {
  color: #2196F3;
}

hr {
  border: 1px solid lightgrey;
}

span.price {
  float: right;
  color: grey;
}

/* Responsive layout - when the screen is less than 800px wide, make the two columns stack on top of each other instead of next to each other (also change the direction - make the "cart" column go on top) */
@media (max-width: 800px) {
  .row {
    flex-direction: column-reverse;
  }
  .col-25 {
    margin-bottom: 20px;
  }
}
</style>
</head>
<body>

<h2>Checkout Form</h2>
<p>Pastikan Data Anda Masukkan Data Terbaru dan</p>
<div class="row">
  <div class="col-75">
    <div class="container">
      <form action="{{ url('storepesanan') }}" class="signin-form" method="post" enctype="multipart/form-data">
        @csrf
        <div class="row">
          <div class="col-50">
            <h3>Billing Address</h3>
            <label for="nama"><i class="fa fa-user"></i> Full Name</label>
            <input type="text" id="nama" name="nama" required value="{{ old('nama') }}">
            <label for="nomor"> Handphone</label>
            <input type="text" id="nomor" name="nomor" required value="{{ old('nomor') }}">
            <label for="alamat"><i class="fa fa-address-card-o"></i> Address</label>
            <input type="text" id="alamat" name="alamat" required value="{{ old('alamat') }}">
            {{-- <label for="city"><i class="fa fa-institution"></i> City</label>
            <input type="text" id="city" name="city" placeholder="Banjarmasin"> --}}

            <div class="row">
              <div class="col-50">
                <label for="nama_laptop">Nama Laptop</label>
                <input type="text" id="nama_laptop" name="nama_laptop" required value="{{$laptop->namalaptop }}" >
              </div>
              <div class="col-50">

              </div>
            </div>
          </div>

          <div class="col-50">
            {{-- <h3>Payment</h3>
            <label for="fname">Accepted Cards</label> --}}
            <div class="icon-container">
              {{-- <i class="fa fa-cc-visa" style="color:navy;"></i>
              <i class="fa fa-cc-amex" style="color:blue;"></i>
              <i class="fa fa-cc-mastercard" style="color:red;"></i>
              <i class="fa fa-cc-discover" style="color:orange;"></i> --}}
            </div>
            {{-- <label for="cname">Name on Card</label>
            <input type="text" id="cname" name="cardname" placeholder="Setiap Awal Kata Kapital">
            <label for="ccnum">Credit card number</label>
            <input type="text" id="ccnum" name="cardnumber" placeholder="+62"> --}}
            <label for="jumlah_harga">Harga</label>
            <input type="text" id="jumlah_harga" name="jumlah_harga" required value="{{ $laptop->harga }}">
            <div class="row">
              <div class="col-50">

              </div>
              <div class="col-50">

              </div>
            </div>
          </div>

        </div>
        <label>
          <input type="checkbox" checked="checked" name="sameadr"> Data is Correct?
        </label>
        <input type="submit" value="Continue to checkout" class="btn btn-primary">

      </form>

    </div>
  </div>
  <div class="col-25">

  </div>
</div>

</body>
</html>




{{-- <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <link rel="apple-touch-icon" sizes="76x76" href="{!! asset('asset/asset3/img/apple-icon.png') !!}">
    <link rel="icon" type="image/png" href="{!! asset('asset/asset3/img/favicon.png') !!}}">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>
     Chekout
    </title>
    <!--Favicon-->
    <link rel="shortcut icon" href="{!! asset('asset/images/logo2.png') !!}" type="image/x-icon">
    <link rel="icon" href="{!! asset('asset/images/logo2.png') !!}" type="image/x-icon">
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
    <!--     Fonts and icons     -->
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
    <!-- CSS Files -->
    <link href="{!! asset('asset/asset3/css/material-dashboard.css?v=2.1.0') !!}" rel="stylesheet" />
    <!-- CSS Just for demo purpose, don't include it in your project -->
    <link href="{!! asset('asset/asset3/demo/demo.css') !!}" rel="stylesheet" />

</head>

<body class="dark-edition">
    <div class="wrapper ">
        <div class="sidebar" data-color="purple" data-background-color="black" data-image="{!! asset('asset/asset3/img/sidebar-2.jpg') !!}">
            <!--
        Tip 1: You can change the color of the sidebar using: data-color="purple | azure | green | orange | danger"

        Tip 2: you can also add an image using data-image tag
    -->

            <div class="sidebar-wrapper">
                <ul class="nav">

                      <li class="nav-item ">
                        <a class="nav-link" href="/laptop">
                          <i class="material-icons"></i>
                          <p>Back</p>
                        </a>
                      </li>
                </ul>
            </div>
        </div>
        <div class="main-panel">
            <!-- Navbar -->
            <nav class="navbar navbar-expand-lg navbar-transparent navbar-absolute fixed-top " id="navigation-example">
                <div class="container-fluid">
                    <div class="navbar-wrapper">
                        <a class="navbar-brand" href="javascript:void(0)"></a>
                    </div>
                    <div class="collapse navbar-collapse justify-content-end">
                    </div>
                </div>
            </nav>
            <!-- End Navbar -->
            <div class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-header card-header-primary">
                                    <h4 class="card-title ">Checkout</h4>
                                    <p class="card-category"></p>
                                </div>
                                <div class="card-body">
            <form action="{{ url('storepesanan') }}" class="signin-form" method="post" enctype="multipart/form-data">
                @csrf
                <div class="mb-3">
                    <label for="nama" class="form-label">Nama Pembeli</label>
                  <input type="text" class="form-control" id="nama" name="nama" required value="{{ old('nama') }}">
                </div>
                <div class="mb-3">
                    <label for="nomor" class="form-label">Nomor Telepon</label>
                    <input type="text" class="form-control" id="nomor" name="nomor"required value="{{ old('nomor') }}">
                </div>
                <div class="mb-3">
                    <label for="alamat" class="form-label">Alamat Pembeli</label>
                    <input type="text" class="form-control" id="alamat" name="alamat"required value="{{ old('alamat') }}">
                  </div>

                  <div class="mb-3">
                      <label for="nama_laptop" class="form-label">Nama Laptop</label>
                      <input type="text" class="form-control" id="nama_laptop" name="nama_laptop"required value="{{$laptop->namalaptop }}" >
                    </div>

                  <div class="mb-3">
                      <label for="jumlah_harga" class="form-label">Harga</label>
                      <input type="text" class="form-control" id="jumlah_harga" name="jumlah_harga"required value="{{ $laptop->harga }}">
                    </div>



                    <button type="submit" class="btn btn-primary">Chekout</button>
                </form>
            </div>
        </div>





    </body>

</html> --}}
