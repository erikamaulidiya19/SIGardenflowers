<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <link rel="apple-touch-icon" sizes="76x76" href="{!! asset('asset/asset3/img/apple-icon.png') !!}">
    <link rel="icon" type="image/png" href="{!! asset('asset/asset3/img/favicon.png') !!}}">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>
     Insert Bunga
    </title>
    <!--Favicon-->
  <link rel="shortcut icon" href="{!! asset('asset/images/icon.png') !!}" type="image/x-icon">
  <link rel="icon" href="{!! asset('asset/images/icon.png') !!}" type="image/x-icon">
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
            <div class="logo"><a href="/index" class="simple-text logo-normal">
          GARDENIA FLORIST
        </a></div>
            <div class="sidebar-wrapper">
                <ul class="nav">
                    <li class="nav-item active  ">
                        <a class="nav-link" href="/admin">
                          <i class="material-icons">dashboard</i>
                          <p>Dashboard</p>
                        </a>
                      </li>
                      <li class="nav-item ">
                        <a class="nav-link" href="/adminbunga">
                          <i class="material-icons"></i>
                          <p>Table Bunga</p>
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
                                    <h4 class="card-title ">Tambah Data Bunga</h4>
                                    <p class="card-category"></p>
                                </div>
                                <div class="card-body">
            <form action="/databunga" class="signin-form" method="post">
                @csrf
                <div class="mb-3">
                  <label for="namabunga" class="form-label">Nama Bunga</label>
                  <input type="text" class="form-control" id="namabunga" name="namabunga" required value="{{ old('namabunga') }}">
                </div>
                <div class="mb-3">
                  <label for="tokobunga" class="form-label">Nama Toko Bunga</label>
                  <input type="text" class="form-control" id="tokobunga" name="tokobunga"required value="{{ old('tokobunga') }}">
                </div>

                <div class="mb-3">
                    <label for="alamatbunga" class="form-label">Alamat Toko Bunga</label>
                    <input type="text" class="form-control" id="alamatbunga" name="alamatbunga"required value="{{ old('alamatbunga') }}">
                  </div>



                <button type="submit" class="btn btn-primary">Tambah</button>
              </form>
            </div>
        </div>
    </body>

</html>
