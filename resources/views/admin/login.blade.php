<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
    <link rel="icon" type="image/png" href="../assets/img/favicon.png">
    <title>
        Gen-carte
    </title>
    <!--     Fonts and icons     -->
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900|Roboto+Slab:400,700" />
    <!-- Nucleo Icons -->
    <link href="../assets/css/nucleo-icons.css" rel="stylesheet" />
    <link href="../assets/css/nucleo-svg.css" rel="stylesheet" />
    <!-- Font Awesome Icons -->
    <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
    <!-- Material Icons -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Round" rel="stylesheet">
    <!-- CSS Files -->
    <link id="pagestyle" href="../assets/css/material-dashboard.css?v=3.0.3" rel="stylesheet" />
</head>

<body class="g-sidenav-show">
    <aside class="sidenav navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-3   bg-gradient-dark" id="sidenav-main">
        <div class="sidenav-header">
            <i class="fas fa-times p-3 cursor-pointer text-white opacity-5 position-absolute end-0 top-0 d-none d-xl-none" aria-hidden="true" id="iconSidenav"></i>
            <a class="navbar-brand m-0" href=" {{('/')}} ">
                <img src="../assets/img/esi.jpg" class="navbar-brand-img h-100" alt="main_logo">
                <span class="ms-1 font-weight-bold text-white">Accueil</span>
            </a>
        </div>
        <hr class="horizontal light mt-0 mb-2">
        <div class="collapse navbar-collapse  w-auto " id="sidenav-collapse-main">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link text-white btn  mt-4 w-80" href=" {{route('login_index')}} ">
                        <div class="text-white text-center me-2 d-flex align-items-center justify-content-center ">
                            <i class="material-icons opacity-10 ">dashboard</i>
                        </div>
                        <span class="nav-link-text ms-1 ">Directeur</span>
                    </a>
                </li>
                <li class="nav-item ">
                    <a class="nav-link text-white " href=" {{('authentificate')}} ">
                        <div class="text-white text-center me-2 d-flex align-items-center justify-content-center ">
                            <i class="material-icons opacity-10 ">dashboard</i>
                        </div>
                        <span class="nav-link-text ms-1 ">Secrétaire</span>
                    </a>
                </li>
            </ul>
        </div>
    </aside>
    <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
        <!-- Navbar -->
        <nav class="navbar navbar-main navbar-expand-lg px-0 mx-4 shadow-none border-radius-xl " id="navbarBlur " data-scroll="true ">
            <div class="container-fluid py-1 px-3 ">
                <nav aria-label="breadcrumb ">
                    <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5 ">
                        <li class="breadcrumb-item text-sm "><a class="opacity-5 text-dark " href="javascript:; ">Pages</a></li>
                        <li class="breadcrumb-item text-sm text-dark active " aria-current="page ">
                            <a href=" {{('authentificate')}} ">Authentification</a></li>
                    </ol>
                    <a href=" {{('authentificate')}} ">
                        <h6 class="font-weight-bolder mb-0 ">Authentification</h6>
                    </a>
                </nav>

                </a>
                </li>
                </ul>
                </li>
                </ul>
            </div>
            </div>
        </nav>

        <section>
            <div class="page-header min-vh-100">
                <div class="container">
                    <div class="row">
                        <div class="col-6 d-lg-flex d-none h-100 my-auto pe-0 position-absolute top-0 start-0 text-center justify-content-center flex-column">
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-5 col-md-7 d-flex flex-column ms-auto me-auto ms-lg-auto">
                        <div class="card card-plain">
                        @if ($message= Session::get('message'))
                        <div class="alert alert-danger">
                            <h5>
                                {{$message}}
                            </h5>
                        </div>
                        @endif
                            <div class="card-header">
                                <h4 class="font-weight-bolder">Authentification</h4>
                            </div>
                            <div class="card-body">
                                <form action="{{ route('login') }}" method="POST">
                                    @csrf
                                    <div class="input-group input-group-outline mb-3">
                                        <label class="form-label">E_mail</label>
                                        <input type="email" name='email' class="form-control">
                                    </div>
                                    <div class="input-group input-group-outline mb-3">
                                        <label class="form-label">Mot de passe</label>
                                        <input type="password" name='password' class="form-control">
                                    </div>
                                    <div class="text-center">
                                        <button type="submit" class="btn btn-lg bg-gradient-primary btn-lg w-100 mt-4 mb-0">Connexion</button>
                                    </div>
                                </form>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
            </div>
        </section>

        <!-- End Navbar -->
                <div class="container-fluid py-4">
                    <footer class="footer py-4">
                        <div class="container-fluid ">
                            <div class="row align-items-center justify-content-lg-between ">
                                <div class="col-lg-6 mb-lg-0 mb-4">
                                    <div class="copyright text-center text-sm text-muted text-lg-start mt-5">
                                        © Copyright
                                        <script>
                                            document.write(new Date().getFullYear())
                                        </script>, ESI<i class="fa fa-heart "></i>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </footer>
                </div>
    </main>

    <!--   Core JS Files   -->
    <script src="../assets/js/core/popper.min.js "></script>
    <script src="../assets/js/core/bootstrap.min.js "></script>
    <script src="../assets/js/plugins/perfect-scrollbar.min.js "></script>
    <script src="../assets/js/plugins/smooth-scrollbar.min.js "></script>

    <!-- Github buttons -->
    <script async defer src="https://buttons.github.io/buttons.js "></script>
    <!-- Control Center for Material Dashboard: parallax effects, scripts for the example pages etc -->
    <script src="../assets/js/material-dashboard.min.js?v=3.0.3 "></script>
</body>

</html>
