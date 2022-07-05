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
    <link rel="stylesheet" type="text/css"
        href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900|Roboto+Slab:400,700" />
    <!-- Nucleo Icons -->
    <link href="../assets/css/nucleo-icons.css" rel="stylesheet" />
    <link href="../assets/css/nucleo-svg.css" rel="stylesheet" />
    <!-- Font Awesome Icons -->
    <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
    <!-- Material Icons -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Round" rel="stylesheet">
    <!-- CSS Files -->
    <link id="pagestyle" href="../assets/css/material-dashboard.css?v=3.0.3" rel="stylesheet" />
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.12.1/css/jquery.dataTables.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.js"></script>

</head>

<body class="g-sidenav-show">
    <aside
        class="sidenav navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-3   bg-gradient-dark"
        id="sidenav-main">
        <div class="sidenav-header">
            <i class="fas fa-times p-3 cursor-pointer text-white opacity-5 position-absolute end-0 top-0 d-none d-xl-none"
                aria-hidden="true" id="iconSidenav"></i>
            <a class="navbar-brand m-0" href=" {{ '/' }} ">
                <img src="../assets/img/esi.jpg" class="navbar-brand-img h-100" alt="main_logo">
                <span class="ms-1 font-weight-bold text-white">Accueil</span>
            </a>
        </div>
        <hr class="horizontal light mt-0 mb-2">
        <div class="collapse navbar-collapse  w-auto " id="sidenav-collapse-main">
            <ul class="navbar-nav">
                @if (Auth::user()->role_id == 1)
                    <li class="nav-item">
                        <a class="nav-link text-white btn bg-gradient-light mt-4 w-80"
                            href=" {{ route('admin.index') }} ">
                            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center ">
                                <i class="material-icons opacity-10 ">dashboard</i>
                            </div>
                            <span class="nav-link-text ms-1 text-dark ">Directeur</span>
                        </a>
                    </li>
                @endif
                @if (Auth::user()->role_id == 2)
                    <li class="nav-item ">
                        <a class="nav-link text-white btn bg-gradient-light mt-4 w-80"
                            href=" {{ route('login_index') }} ">
                            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center ">
                                <i class="material-icons opacity-10 ">dashboard</i>
                            </div>
                            <span class="nav-link-text ms-1 text-dark">Secrétaire</span>
                        </a>
                    </li>
                @endif

                <li class="nav-item ">
                    <a class="nav-link text-white " href=" {{ '' }} ">
                        <div class="text-white text-center me-2 d-flex align-items-center justify-content-center ">
                            <i class="material-icons opacity-10 ">notifications</i>
                        </div>
                        <span class="nav-link-text ms-1 ">Notifications</span>
                    </a>
                </li>
                <li class="nav-item mt-3 ">
                    <h6 class="ps-4 ms-2 text-uppercase text-xs text-white font-weight-bolder opacity-8 ">Account pages
                    </h6>
                </li>

                <li class="nav-item ">
                    <a class="nav-link text-white " href=" {{ route('logout') }} ">
                        <div class="text-white text-center me-2 d-flex align-items-center justify-content-center ">
                            <i class="material-icons opacity-10 ">logout</i>
                        </div>
                        <span class="nav-link-text ms-1 ">Déconnexion</span>
                    </a>
                </li>
                @if (Auth::user()->role_id == 1)
                    <li class="nav-item ">
                        <a class="nav-link text-white " href=" {{ '' }} ">
                            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center ">
                                <i class="material-icons opacity-10 ">assignment</i>
                            </div>
                            <span class="nav-link-text ms-1 ">Edit profile</span>
                        </a>
                    </li>
                @endif
            </ul>
        </div>
    </aside>
    <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
        <!-- Navbar -->
        <nav class="navbar navbar-main navbar-expand-lg px-0 mx-4 shadow-none border-radius-xl " id="navbarBlur "
            data-scroll="true ">
            <div class="container-fluid py-1 px-3 ">
                <nav aria-label="breadcrumb ">
                    <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5 ">
                        <li class="breadcrumb-item text-sm "><a class="opacity-5 text-dark "
                                href="javascript:; ">Pages</a></li>
                        <li class="breadcrumb-item text-sm text-dark active " aria-current="page ">Admin/
                            <a href=" {{ '/' }} ">Accueil</a>/ <a href=" {{ 'espace' }} ">Espace
                                Etudiants</a>/Listes des étudiants
                        </li>

                    </ol>
                    <a href=" {{ 'gestion' }} ">
                        <h6 class="font-weight-bolder mb-0 ">Listes des Etudiants</h6>
                    </a>
                </nav>
                <div class="collapse navbar-collapse mt-sm-0 mt-2 me-md-0 me-sm-4 " id="navbar ">
                    <div class="ms-md-auto pe-md-3 d-flex align-items-center ">
                        <div class="input-group input-group-outline ">
                            <label class="form-label ">Recherche</label>
                            <input type="text " class="form-control ">
                            <div class="input-group-btn">
                                <button class="btn btn-default bg-gray-500 h-100" type="submit"><i
                                        class="fa fa-search"></i></button>
                            </div>
                        </div>
                    </div>
                    <ul class="navbar-nav justify-content-end ">
                        <li class="nav-item d-flex align-items-center ">
                            <a href="{{ '' }}" class="nav-link text-body font-weight-bold px-0 ">
                                <i class="fa fa-user me-sm-1 "></i>
                                <span class="d-sm-inline d-none ">{{ Auth::user()->firstname }}
                                    {{ Auth::user()->lastname }}</span>
                            </a>
                        </li>
                </div>
                </a>
                </li>
                </ul>
                </li>
                </ul>
            </div>
            </div>
        </nav>

        <div class="container-fluid py-4">
            <div class="row">
                <div class="col-12">
                    <div class="card my-4">
                        <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                            <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
                                <h6 class="text-white text-capitalize ps-3">LISTE DES ETUDIANTS</h6>

                            </div>
                        </div>
                        @if (session()->has('message'))
                            <div class="alert alert-success">
                                {{ session()->get('message') }}
                                
                            </div>
                        @endif
                        <div class="card-body px-0 pb-2">
                            <div class="table-responsive p-0">
                                <table  id="search" class="table align-items-center mb-0 display">
                                    <thead>
                                        <tr>
                                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder">
                                                Identification</th>
                                            <th
                                                class="text-uppercase text-secondary text-xxs font-weight-bolder  ps-2">
                                                Matricule</th>
                                            <th
                                                class="text-uppercase text-secondary text-xxs font-weight-bolder  ps-2">
                                                Année et Cycle</th>
                                            <th
                                                class="text-uppercase text-secondary text-xxs font-weight-bolder  ps-2">
                                                Contact</th>
                                            <th
                                                class="text-uppercase text-secondary text-xxs font-weight-bolder  ps-2">
                                                Tuteur</th>
                                            <th
                                                class="text-center text-uppercase text-secondary text-xxs font-weight-bolder ">
                                                Enregistré le</th>
                                            <th
                                                class="text-center text-uppercase text-secondary text-xxs font-weight-bolder ">
                                                Action</th>
                                            <th class="text-secondary opacity-7"></th>
                                        </tr>
                                    </thead>
                                    @foreach ($etudiants as $etudiant)
                                        <tbody>
                                            <tr>
                                                <td>
                                                    <div class="d-flex px-2 py-1">

                                                        <div class="d-flex flex-column justify-content-center">
                                                            <h6 class="mb-0 text-sm">
                                                                {{ $etudiant->nom }}
                                                                {{ $etudiant->prenom }}
                                                            </h6>
                                                            <p class="text-xs text-secondary mb-0">
                                                                {{ $etudiant->date_naissance }}
                                                                <br>
                                                                {{ $etudiant->email }}
                                                            </p>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>
                                                    <p class="text-xs font-weight-bold mb-0"></p>
                                                    <p class="text-xs text-secondary mb-0">
                                                        {{ $etudiant->matricule }}

                                                    </p>
                                                </td>
                                                <td>
                                                    <p class="text-xs font-weight-bold mb-0">
                                                        {{ $etudiant->cycle }}
                                                    </p>
                                                    <p class="text-xs text-secondary mb-0">
                                                        {{ $etudiant->annee_academique }}
                                                    </p>
                                                </td>
                                                <td>
                                                    <p class="text-xs font-weight-bold mb-0">
                                                        {{ $etudiant->numero_etudiant }}
                                                    </p>

                                                </td>
                                                <td>
                                                    <p class="text-xs font-weight-bold mb-0"></p>
                                                    <p class="badge badge-sm bg-gradient-success">
                                                        {{ $etudiant->nom_prenom_tuteur }}
                                                        <br>
                                                        {{ $etudiant->numero_tuteur }}
                                                    </p>
                                                </td>

                                                <td class="align-middle text-center">
                                                    <span class="text-secondary text-xs font-weight-bold">
                                                        {{ $etudiant->created_at }}
                                                    </span>
                                                </td>
                                                <td class="align-middle">
                                                    @if (Auth::user()->role_id == 1)
                                                        <a href=" {{ route('etudiants.edit', $etudiant) }} "
                                                            class="btn btn-info">Modifier</a>
                                                        <a href=" {{ route('etudiants.destroy', $etudiant) }} "
                                                            class="btn btn-danger">Supprimer</a>
                                                    @endif
                                                    <a href=" {{ '' }} "
                                                        class="btn btn-secondary">Télécharger</a>
                                                </td>
                                            </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


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
    {{-- datatable --}}
    <script defer>
        $(document).ready(function() {
            $('#search').DataTable();
        });
    </script>
    <!-- Github buttons -->
    <script async defer src="https://buttons.github.io/buttons.js "></script>
    <!-- Control Center for Material Dashboard: parallax effects, scripts for the example pages etc -->
    <script src="../assets/js/material-dashboard.min.js?v=3.0.3 "></script>
</body>

</html>
