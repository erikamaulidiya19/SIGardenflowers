
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <link rel="apple-touch-icon" sizes="76x76" href="{!! asset('asset/asset3/img/apple-icon.png') !!}">
    <link rel="icon" type="image/png" href="{!! asset('asset/asset3/img/favicon.png') !!}}">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>
        Admin User
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

        <div class="logo"><a href="/adminuser" class="simple-text logo-normal">
          FRIENDLY COMPUTER
        </a></div>
            <div class="sidebar-wrapper">
                <ul class="nav">
                    <li class="nav-item {{ Request::is('/admin') ? 'active' : '' }} ">
                        <a class="nav-link" href="/admin">
                          <i class="material-icons">dashboard</i>
                          <p>Dashboard</p>
                        </a>
                      </li>
                      <li class="nav-item {{ Request::is('adminuser') ? 'active' : '' }} ">
                        <a class="nav-link" href="/adminuser">
                          <i class="material-icons"></i>
                          <p>Data User</p>
                        </a>
                      </li>
                      <li class="nav-item {{ Request::is('adminlaptop') ? 'active' : '' }} ">
                        <a class="nav-link" href="/adminlaptop">
                          <i class="material-icons"></i>
                          <p>Data Laptop</p>
                        </a>
                      </li>
                      <li class="nav-item {{ Request::is('index') ? 'active' : '' }} ">
                        <a class="nav-link" href="/index">
                          <i class="material-icons"></i>
                          <p>Logout</p>
                        </a>
                      </li>
                </ul>
            </div>
        </div>


        <div class="main-panel">
            @if(session()->has('success'))

            <div class="alert alert-success" role="alert">
                {{ session('success') }}
              </div>
            @endif
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
                                    <h4 class="card-title ">Data User</h4>
                                    <p class="card-category"></p>
                                </div>

                                <div class="card-body">

                                    <div class="table-responsive">
                                        <table class="table">
                                            <thead class=" text-primary">
                                                <th>
                                                    ID
                                                </th>
                                                <th>
                                                    Nama
                                                </th>
                                                <th>
                                                    Email
                                                </th>
                                                <th>
                                                    Username

                                                </th>
                                            </thead>
                                            <tbody>
                                                @php
                                                $no=1;
                                            @endphp
                                                @foreach ($data as $item)
                                                <tr>
                                                    <td>
                                                        {{$no++}}
                                                    </td>
                                                    <td>
                                                        {{$item->name}}
                                                    </td>
                                                    <td>
                                                        {{$item->email}}
                                                    </td>
                                                    <td>
                                                        {{$item->username}}
                                                    </td>
                                                </tr>
                                                @endforeach
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
    <!--   Core JS Files   -->
    <script src="{!! asset('asset/asset3/js/core/jquery.min.js') !!}"></script>
    <script src="{!! asset('asset/asset3/js/core/popper.min.js') !!}"></script>
    <script src="{!! asset('asset/asset3/js/core/bootstrap-material-design.min.js') !!}"></script>
    <script src="https://unpkg.com/default-passive-events"></script>
    <script src="{!! asset('asset/asset3/js/plugins/perfect-scrollbar.jquery.min.js') !!}"></script>
    <!-- Place this tag in your head or just before your close body tag. -->
    <script async defer src="https://buttons.github.io/buttons.js"></script>
    <!--  Google Maps Plugin    -->
    <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
    <!-- Chartist JS -->
    <script src="{!! asset('asset/asset3/js/plugins/chartist.min.js') !!}"></script>
    <!--  Notifications Plugin    -->
    <script src="{!! asset('asset/asset3/js/plugins/bootstrap-notify.js') !!}"></script>
    <!-- Control Center for Material Dashboard: parallax effects, scripts for the example pages etc -->
    <script src="{!! asset('asset/asset3/js/material-dashboard.js?v=2.1.0') !!}"></script>
    <!-- Material Dashboard DEMO methods, don't include it in your project! -->
    <script src="{!! asset('asset/asset3/demo/demo.js') !!}"></script>


</body>

</html>
