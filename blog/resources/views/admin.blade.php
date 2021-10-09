
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <link rel="apple-touch-icon" sizes="76x76" href="{!! asset('asset/asset3/img/apple-icon.png') !!}">
    <link rel="icon" type="image/png" href="{!! asset('asset/asset3/img/favicon.png') !!}}">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>
        Admin
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
        <div class="sidebar" data-color="purple" data-background-color="black" data-image="../assets/img/sidebar-2.jpg">
            <!--
        Tip 1: You can change the color of the sidebar using: data-color="purple | azure | green | orange | danger"

        Tip 2: you can also add an image using data-image tag
    -->
            <div class="logo"><a href="/admin" class="simple-text logo-normal">
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
                        <a class="nav-link" href="/">
                            <i class="material-icons">person</i>
                            <p>User Profile</p>
                        </a>
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link" href="/index">
                            <i class="material-icons"></i>
                            <p>Blog</p>
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
                        <a class="navbar-brand" href="javascript:void(0)">Dashboard</a>
                    </div>
                    <div class="collapse navbar-collapse justify-content-end">
                        <ul class="navbar-nav">
                            <li class="nav-item">
                                <a class="nav-link" href="javascript:void(0)">
                                    <i class="material-icons">dashboard</i>
                                </a>
                            </li>
                        </ul>
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
                                    <h4 class="card-title ">Data Toko Bunga</h4>
                                    <p class="card-category">Berisikan 10 data terfavorit dan Toko bunga</p>
                                </div>
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table class="table">
                                            <thead class=" text-primary">
                                                <th>
                                                    ID
                                                </th>
                                                <th>
                                                    Nama Bunga
                                                </th>
                                                <th>
                                                    Toko Bunga
                                                </th>
                                                <th>
                                                    Alamat
                                                </th>
                                                <th>
                                                    Aksi
                                                </th>
                                            </thead>
                                            <tbody>
                                                @foreach ($data as $item)


                                                <tr>
                                                    <td>
                                                        {{$item['id_bunga']}}
                                                    </td>
                                                    <td>
                                                        {{$item['id_bunga']}}
                                                    </td>
                                                    <td>
                                                        {{$item['id_bunga']}}
                                                    </td>
                                                    <td>
                                                        {{$item['id_bunga']}}
                                                    </td>
                                                    <td>
                                                        <center>  <a href="#" class="view" title="View" data-toggle="tooltip"><i class="material-icons"style="font-size:14px">&#xE417;</i></a>
                                                        <a href="#" class="edit" title="Edit" data-toggle="tooltip"><i class="material-icons"style="font-size:14px">&#xE254;</i></a>
                                                         <a href="#" class="delete" title="Delete" data-toggle="tooltip"><i class="material-icons"style="font-size:14px">&#xE872;</i></a></center>
                                                    </td>
                                                </tr>
                                                @endforeach
                                                <tr>
                                                    <td>
                                                        2
                                                    </td>
                                                    <td>
                                                        Mawar Putih
                                                    </td>
                                                    <td>
                                                        Rama Florist
                                                    </td>
                                                    <td>
                                                        Jl. Kolonel Sugiono, Kertak Baru Ilir, Banjarmasin, Kota Banjarmasin, Kalimantan Selatan 70234
                                                    </td>
                                                    <td>
                                                        <center>  <a href="#" class="view" title="View" data-toggle="tooltip"><i class="material-icons"style="font-size:14px">&#xE417;</i></a>
                                                        <a href="#" class="edit" title="Edit" data-toggle="tooltip"><i class="material-icons"style="font-size:14px">&#xE254;</i></a>
                                                        <a href="#" class="delete" title="Delete" data-toggle="tooltip"><i class="material-icons"style="font-size:14px">&#xE872;</i></a></center>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        3
                                                    </td>
                                                    <td>
                                                        Matahari
                                                    </td>
                                                    <td>
                                                        Yanti Orchids
                                                    </td>
                                                    <td>
                                                        Komplek Distrik Navigasi No. 8, Jalan Belitung Darat, Banjarmasin, Belitung Utara, Banjarmasin Bar., Kota Banjarmasin, Kalimantan Selatan 70124
                                                    </td>
                                                    <td>
                                                        <center>  <a href="#" class="view" title="View" data-toggle="tooltip"><i class="material-icons"style="font-size:14px">&#xE417;</i></a>
                                                        <a href="#" class="edit" title="Edit" data-toggle="tooltip"><i class="material-icons"style="font-size:14px">&#xE254;</i></a>
                                                       <a href="#" class="delete" title="Delete" data-toggle="tooltip"><i class="material-icons"style="font-size:14px">&#xE872;</i></a></center>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        4
                                                    </td>
                                                    <td>
                                                        Lili Putih
                                                    </td>
                                                    <td>
                                                        Toko Bunga
                                                    </td>
                                                    <td>
                                                        Jl. Cemara Raya Raya No. No.9 A
                                                    </td>
                                                    <td>
                                                        <center> <a href="#" class="view" title="View" data-toggle="tooltip"><i class="material-icons"style="font-size:14px">&#xE417;</i></a>
                                                        <a href="#" class="edit" title="Edit" data-toggle="tooltip"><i class="material-icons"style="font-size:14px">&#xE254;</i></a>
                                                        <a href="#" class="delete" title="Delete" data-toggle="tooltip"><i class="material-icons"style="font-size:14px">&#xE872;</i></a></center>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        5
                                                    </td>
                                                    <td>
                                                        Tulip
                                                    </td>
                                                    <td>
                                                        Toko Bunga Rama
                                                    </td>
                                                    <td>
                                                        Jln. Kolonel Sugiono No.77, Kelayan Luar, Banjarmasin Tengah
                                                    </td>
                                                    <td>
                                                        <center> <a href="#" class="view" title="View" data-toggle="tooltip"><i class="material-icons"style="font-size:14px">&#xE417;</i></a>
                                                        <a href="#" class="edit" title="Edit" data-toggle="tooltip"><i class="material-icons"style="font-size:14px">&#xE254;</i></a>
                                                        <a href="#" class="delete" title="Delete" data-toggle="tooltip"><i class="material-icons"style="font-size:14px">&#xE872;</i></a></center>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        6
                                                    </td>
                                                    <td>
                                                        Lili Kuning
                                                    </td>
                                                    <td>
                                                        Persada Mas
                                                    </td>
                                                    <td>
                                                        JL. Jenderal Ahmad Yani, Km. 1 No. 25B RT. 20
                                                    </td>
                                                    <td>
                                                        <center> <a href="#" class="view" title="View" data-toggle="tooltip"><i class="material-icons"style="font-size:14px">&#xE417;</i></a>
                                                        <a href="#" class="edit" title="Edit" data-toggle="tooltip"><i class="material-icons"style="font-size:14px">&#xE254;</i></a>
                                                        <a href="#" class="delete" title="Delete" data-toggle="tooltip"><i class="material-icons"style="font-size:14px">&#xE872;</i></a></center>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        7
                                                    </td>
                                                    <td>
                                                        Mawar Merah Muda
                                                    </td>
                                                    <td>
                                                        Toko Bunga
                                                    </td>
                                                    <td>
                                                        Jl. Cemara Raya, RW.02
                                                    </td>
                                                    <td>
                                                        <center> <a href="#" class="view" title="View" data-toggle="tooltip"><i class="material-icons"style="font-size:14px">&#xE417;</i></a>
                                                        <a href="#" class="edit" title="Edit" data-toggle="tooltip"><i class="material-icons"style="font-size:14px">&#xE254;</i></a>
                                                        <a href="#" class="delete" title="Delete" data-toggle="tooltip"><i class="material-icons"style="font-size:14px">&#xE872;</i></a></center>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        8
                                                    </td>
                                                    <td>
                                                        Edelweis
                                                    </td>
                                                    <td>
                                                        Zanita
                                                    </td>
                                                    <td>
                                                        Jln. Plamboyan 2
                                                    </td>
                                                    <td>
                                                        <center> <a href="#" class="view" title="View" data-toggle="tooltip"><i class="material-icons"style="font-size:14px">&#xE417;</i></a>
                                                        <a href="#" class="edit" title="Edit" data-toggle="tooltip"><i class="material-icons"style="font-size:14px">&#xE254;</i></a>
                                                        <a href="#" class="delete" title="Delete" data-toggle="tooltip"><i class="material-icons"style="font-size:14px">&#xE872;</i></a></center>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        9
                                                    </td>
                                                    <td>
                                                        Sakura
                                                    </td>
                                                    <td>
                                                        Alves House Flower Boutique
                                                    </td>
                                                    <td>
                                                        Jalan Jend. A. Yani KM.4,5, Banjarmasin Selatan, Kebun Bunga, Banjarmasin, Kota Banjarmasin, Kalimantan Selatan 70235
                                                    </td>
                                                    <td>
                                                        <center> <a href="#" class="view" title="View" data-toggle="tooltip"><i class="material-icons"style="font-size:14px">&#xE417;</i></a>
                                                        <a href="#" class="edit" title="Edit" data-toggle="tooltip"><i class="material-icons"style="font-size:14px">&#xE254;</i></a>
                                                        <a href="#" class="delete" title="Delete" data-toggle="tooltip"><i class="material-icons"style="font-size:14px">&#xE872;</i></a></center>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        10
                                                    </td>
                                                    <td>
                                                        Anggrek
                                                    </td>
                                                    <td>
                                                        Toko Bunga Anggrek Bulan
                                                    </td>
                                                    <td>
                                                        Jl. Kolonel Sugiono No.45
                                                    </td>
                                                    <td>
                                                        <center> <a href="#" class="view" title="View" data-toggle="tooltip"><i class="material-icons"style="font-size:14px">&#xE417;</i></a>
                                                        <a href="#" class="edit" title="Edit" data-toggle="tooltip"><i class="material-icons"style="font-size:14px">&#xE254;</i></a>
                                                        <a href="#" class="delete" title="Delete" data-toggle="tooltip"><i class="material-icons"style="font-size:14px">&#xE872;</i></a></center>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
<div class="col-md-12">
    <div class="card">
        <div class="card-header card-header-primary">
            <h4 class="card-title ">Simple Table</h4>
            <p class="card-category"> Here is a subtitle for this table</p>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table">
                    <thead class=" text-primary">
                        <th>
                            ID
                        </th>
                        <th>
                            Name
                        </th>
                        <th>
                            Country
                        </th>
                        <th>
                            City
                        </th>
                        <th>
                            Salary
                        </th>
                    </thead>
                    <tbody>
                        <tr>
                            <td>
                                1
                            </td>
                            <td>
                                Dakota Rice
                            </td>
                            <td>
                                Niger
                            </td>
                            <td>
                                Oud-Turnhout
                            </td>
                            <td class="text-primary">
                                $36,738
                            </td>
                        </tr>
                        <tr>
                            <td>
                                2
                            </td>
                            <td>
                                Minerva Hooper
                            </td>
                            <td>
                                Curaçao
                            </td>
                            <td>
                                Sinaai-Waas
                            </td>
                            <td class="text-primary">
                                $23,789
                            </td>
                        </tr>
                        <tr>
                            <td>
                                3
                            </td>
                            <td>
                                Sage Rodriguez
                            </td>
                            <td>
                                Netherlands
                            </td>
                            <td>
                                Baileux
                            </td>
                            <td class="text-primary">
                                $56,142
                            </td>
                        </tr>
                        <tr>
                            <td>
                                4
                            </td>
                            <td>
                                Philip Chaney
                            </td>
                            <td>
                                Korea, South
                            </td>
                            <td>
                                Overland Park
                            </td>
                            <td class="text-primary">
                                $38,735
                            </td>
                        </tr>
                        <tr>
                            <td>
                                5
                            </td>
                            <td>
                                Doris Greene
                            </td>
                            <td>
                                Malawi
                            </td>
                            <td>
                                Feldkirchen in Kärnten
                            </td>
                            <td class="text-primary">
                                $63,542
                            </td>
                        </tr>
                        <tr>
                            <td>
                                6
                            </td>
                            <td>
                                Mason Porter
                            </td>
                            <td>
                                Chile
                            </td>
                            <td>
                                Gloucester
                            </td>
                            <td class="text-primary">
                                $78,615
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>


<div class="col-md-12">
    <div class="card">
        <div class="card-header card-header-primary">
            <h4 class="card-title ">Simple Table</h4>
            <p class="card-category"> Here is a subtitle for this table</p>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table">
                    <thead class=" text-primary">
                        <th>
                            ID
                        </th>
                        <th>
                            Name
                        </th>
                        <th>
                            Country
                        </th>
                        <th>
                            City
                        </th>
                        <th>
                            Salary
                        </th>
                    </thead>
                    <tbody>
                        <tr>
                            <td>
                                1
                            </td>
                            <td>
                                Dakota Rice
                            </td>
                            <td>
                                Niger
                            </td>
                            <td>
                                Oud-Turnhout
                            </td>
                            <td class="text-primary">
                                $36,738
                            </td>
                        </tr>
                        <tr>
                            <td>
                                2
                            </td>
                            <td>
                                Minerva Hooper
                            </td>
                            <td>
                                Curaçao
                            </td>
                            <td>
                                Sinaai-Waas
                            </td>
                            <td class="text-primary">
                                $23,789
                            </td>
                        </tr>
                        <tr>
                            <td>
                                3
                            </td>
                            <td>
                                Sage Rodriguez
                            </td>
                            <td>
                                Netherlands
                            </td>
                            <td>
                                Baileux
                            </td>
                            <td class="text-primary">
                                $56,142
                            </td>
                        </tr>
                        <tr>
                            <td>
                                4
                            </td>
                            <td>
                                Philip Chaney
                            </td>
                            <td>
                                Korea, South
                            </td>
                            <td>
                                Overland Park
                            </td>
                            <td class="text-primary">
                                $38,735
                            </td>
                        </tr>
                        <tr>
                            <td>
                                5
                            </td>
                            <td>
                                Doris Greene
                            </td>
                            <td>
                                Malawi
                            </td>
                            <td>
                                Feldkirchen in Kärnten
                            </td>
                            <td class="text-primary">
                                $63,542
                            </td>
                        </tr>
                        <tr>
                            <td>
                                6
                            </td>
                            <td>
                                Mason Porter
                            </td>
                            <td>
                                Chile
                            </td>
                            <td>
                                Gloucester
                            </td>
                            <td class="text-primary">
                                $78,615
                            </td>
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
    <script>

</body>

</html>
