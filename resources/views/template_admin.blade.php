<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
    <title>Admin SIBAKAT</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{!! asset('css/bootstrap.min.css') !!}">
    {{-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous"> --}}
    <!----css3---->
    <link rel="stylesheet" href="{!! asset('css/admin.css') !!}">
    <!-- SLIDER REVOLUTION 4.x CSS SETTINGS -->
    <link rel="shortcut icon" href="{!! asset('images/logo.png') !!}">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&display=swap" rel="stylesheet">

    <!--google material icon-->
    <link href="https://fonts.googleapis.com/css2?family=Material+Icons" rel="stylesheet">
</head>

<body>
    <div class="wrapper">


        <div class="body-overlay"></div>


        {{-- CLASS ACTIVE NYA NTAR BISA PAKEK PARAMTER NAMA PAGE DI BACKEND --}}

        <!-- Sidebar  -->
        <nav id="sidebar">
            <div class="sidebar-header">
                <h3><img src="{!! asset('images/logo.png') !!}" class="img-fluid" /><span>SIBAKAT</span></h3>
            </div>
            <ul class="list-unstyled components">
                <li class="active">
                    <a href="/admin" class="dashboard"><i
                            class="material-icons">dashboard</i><span>Dashboard</span></a>
                </li>
                <li class="">
                    <a href="/admin/admin_bantuan"><i class="material-icons">grid_on</i><span>Bantuan</span></a>
                </li>
                <li class="">
                    <a href="/admin/admin_artikel"><i class="material-icons">date_range</i><span>Artikel</span></a>
                </li>

            </ul>


        </nav>

        <div id="content">

            {{-- <div class="top-navbar">
                <nav id="bar" class="navbar navbar-expand-lg navbar-light" style=" padding-bottom: 10px;">
                    <div class="container-fluid">
                        <a class="navbar-brand"></a>
                        <div class="d-flex justify-content-end">
                            <img src="https://github.com/mdo.png" alt="hugenerd" width="30" height="30"
                                class="rounded-circle mt-1">
                            <div class="btn-group ml-auto justify-content-end">
                                <a class="nav-link dropdown-toggle" id="navbarDropdown" role="button"
                                    data-bs-toggle="dropdown" aria-expanded="false"
                                    style="color:#202020">{{ auth()->user()->nama }}&nbsp&nbsp</a>
                                <div class="dropdown-menu dropdown-menu-end">
                                    <a class="dropdown-item" href="#">
                                        <form action="/logout" method="post">
                                            @csrf
                                            <button type="submit" class="dropdown-item">Logout</button>
                                        </form>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </nav>
          </div> --}}
            <div class="top-navbar">
                <nav class="navbar navbar-expand-sm navbar-light">
                    <div class="container-fluid">
                        <a class="navbar-brand"></a>
                        <ul class="navbar-nav d-flex justify-content-end">
                            <img src="https://github.com/mdo.png" alt="hugenerd" width="30" height="30"
                                class="rounded-circle mt-2">
                            <li class="nav-item dropdown btn-group ml-auto justify-content-end">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                                    data-toggle="dropdown" aria-expanded="false" style="color: white;">
                                    {{ auth()->user()->nama }}&nbsp&nbsp
                                </a>
                                {{-- <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="#">
                                    <form action="/logout" method="post">
                                        @csrf
                                        <button type="submit" class="dropdown-item">Logout</button>
                                    </form>
                                </a>
                            </div> --}}
                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                    <form action="/logout" method="post">
                                        @csrf
                                        <button type="submit" class="dropdown-item">Logout</button>
                                    </form>
                                </div>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>

            @yield('konten')
        </div>


        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="js/jquery-3.3.1.slim.min.js"></script>
        <script src="js/popper.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/jquery-3.3.1.min.js"></script>
        {{-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script> --}}


        <script type="text/javascript">
            $(document).ready(function() {
                $('#sidebarCollapse').on('click', function() {
                    $('#sidebar').toggleClass('active');
                    $('#content').toggleClass('active');
                });

                $('.more-button,.body-overlay').on('click', function() {
                    $('#sidebar,.body-overlay').toggleClass('show-nav');
                });

            });
        </script>
</body>

</html>
