<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <link rel="apple-touch-icon" sizes="76x76" href="{!! asset('asset/asset3/img/apple-icon.png') !!}">
    <link rel="icon" type="image/png" href="{!! asset('asset/asset3/img/favicon.png') !!}}">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>
     Insert Tanaman Hias
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
                      <li class="nav-item ">
                        <a class="nav-link" href="/adminhias">
                          <i class="material-icons"></i>
                          <p>Table Tanaman Hias</p>
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
                                    <h4 class="card-title ">Tambah Data Tanaman Hias</h4>
                                    <p class="card-category"></p>
                                </div>
                                <div class="card-body">
            <form action="/datatanaman" class="signin-form" method="post" enctype="multipart/form-data">
                @csrf
                <div class="mb-3">
                  <label for="namahias" class="form-label">Nama Tanaman Hias</label>
                  <input type="text" class="form-control" id="namahias" name="namahias" required value="{{ old('namahias') }}">
                </div>
                <div class="mb-3">
                  <label for="tokohias" class="form-label">Nama Toko Hias</label>
                  <input type="text" class="form-control" id="tokohias" name="tokohias"required value="{{ old('tokohias') }}">
                </div>
                <div class="mb-3">
                    <label for="hargahias" class="form-label">Harga Tanaman</label>
                    <input type="text" class="form-control" id="hargahias" name="hargahias"required value="{{ old('hargahias') }}">
                  </div>

                <div class="mb-3">
                    <label for="alamathias" class="form-label">Alamat Toko Tanaman Hias</label>
                    <input type="text" class="form-control" id="alamathias" name="alamathias"required value="{{ old('alamathias') }}">
                  </div>


                  <div class="mb-3">
                    <label for="imagehias" class="form-label">Upload Image</label>
                    <input class="form-control" @error('imagehias') is-invalid @enderror type="file" id="imagehias" name="imagehias">
                    @error('imagehias')
                    <div class="invalid-feedback">
                    </div>
                    @enderror
                  </div>

                <button type="submit" class="btn btn-primary">Tambah</button>
              </form>
            </div>
        </div>
    </body>

</html>
