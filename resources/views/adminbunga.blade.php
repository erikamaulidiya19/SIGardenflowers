
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <link rel="apple-touch-icon" sizes="76x76" href="{!! asset('asset/asset3/img/apple-icon.png') !!}">
    <link rel="icon" type="image/png" href="{!! asset('asset/asset3/img/favicon.png') !!}}">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>
        Admin Bunga
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
                          <p>Data Bunga</p>
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
                                    <h4 class="card-title ">Data Bunga</h4>
                                    <p class="card-category"></p>
                                </div>

                                <div class="card-body">
            <td class="border-bottom-0"><a href="/insertbunga" class="btn btn-primary">Tambah Data</a></td>

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
                                                <th><center>
                                                    Alamat
                                                </center>
                                                </th>
                                                <th> <center>
                                                    Aksi
                                                    </center>
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
                                                        {{$item->namabunga}}
                                                    </td>
                                                    <td>
                                                        {{$item->tokobunga}}
                                                    </td>
                                                    <td>
                                                        {{$item->alamatbunga}}
                                                    </td>
                                                    <td class="border-bottom-0"><a href="#" class="btn btn-primary">View</a></td>
                                                    <td class="border-bottom-0"><a href="updatebunga/{{ $item->id_bunga }}" class="btn btn-primary">Edit</a></td>
                                                    <form action="deletebunga/{{ $item->id_bunga }}" method="post">
                                                        @csrf

                                                        <td class="border-bottom-0" onclick="return confirm ('Anda yakin ingin menghapus data ini?')"><button type="submit" class="btn btn-primary">Delete</button></td>
                                                    </form>
                                                </tr>
                                                @endforeach
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
{{-- <div class="col-md-12">
    <div class="card">
        <div class="card-header card-header-primary">
            <h4 class="card-title ">Data Toko Kopi</h4>
            <p class="card-category">Berisikan 10 data Toko Kopi</p>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table">
                    <thead class=" text-primary">
                        <th>
                            ID
                        </th>
                        <th>
                            Nama Kopi
                        </th>
                        <th>
                            Caffe
                        </th>
                        <th><center>
                            Alamat caffe
                        </center>
                        </th>
                        <th>
                            Aksi
                        </th>
                    </thead>
                    <tbody>
                        @php
                        $no=1;
                    @endphp
                        @foreach ($kopi as $data)
                        <tr>
                            <td>
                                {{$no++}}
                            </td>
                            <td>
                                {{$data->namakopi}}
                            </td>
                            <td>
                                {{$kopi->tokokopi}}
                            </td>
                            <td>
                                {{$kopi->alamatkopi}}
                            </td>
                            <td>
                                <center>  <a href="#" class="view" title="View" data-toggle="tooltip"><i class="material-icons"style="font-size:14px">&#xE417;</i></a>
                                <a href="#" class="edit" title="Edit" data-toggle="tooltip"><i class="material-icons"style="font-size:14px">&#xE254;</i></a>
                                 <a href="#" class="delete" title="Delete" data-toggle="tooltip"><i class="material-icons"style="font-size:14px">&#xE872;</i></a></center>
                            </td>
                        </tr>
                        @endforeach
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div> --}}
{{-- <div class="col-md-12">
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
    <!--   Core JS Files   --> --}}
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
