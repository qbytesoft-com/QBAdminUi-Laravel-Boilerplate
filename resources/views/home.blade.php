@extends('layouts.app')

@section('content')
    <div class="container-fluid px-0">
        <!-- The side bar -->
        <div class="side-bar side-bar-lg-active" data-theme="purple">
            <!-- Brand details -->
            <div class="side-menu-brand d-flex flex-column justify-content-center align-items-center clear mt-3">
                <img src="{{ asset('qbadminui/img/QbyteIcon.png') }}" alt="bran_name" class="brand-img">
                <a href="{{ route('home') }}" class="brand-name mt-2 ml-2 font-weight-bold">QBAdminUI</a>
            </div>
            <!-- Side bar menu -->
            <div class="the_menu mt-5">
                <!-- Heading -->
                <div class="side-menu-heading d-flex">
                    <h6 class=" font-weight-bold pb-2 mx-3"> Mr Admin </h6>
                    <a  class="font-weight-bold ml-auto px-3"
                        href="{{ route('logout') }}"
                        onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();"
                    >
                        <i class="fas fa-sign-out-alt"></i>
                    </a>
                </div>

                <!-- Menu item -->
                <div id="accordion">
                    <ul class="side-menu p-0 m-0 mt-3">
                        <li class="side-menu-item px-3"><a href="{{ route('home') }}" class="w-100 py-3 pl-4">Dashboard</a></li>
                        <!-- Sub menu parent -->
                        <li class="side-menu-item px-3"><a href="#" class="w-100 py-3 pl-4 sub-menu-parent" data-toggle="collapse" data-target="#sub_menu_1" aria-expanded="false" aria-controls="sub_menu_1">Basic UI Elements</a></li>
                        <!-- Sub menu -->
                        <div id="sub_menu_1" class="collapse" aria-labelledby="headingOne" data-parent="#accordion">
                            <ul class="side-sub-menu p-0">
                                <li class="side-sub-menu-item px-3"><a href="alert.html" class="w-100 pl-4">Alert</a></li>
                                <li class="side-sub-menu-item px-3"><a href="accordion.html" class="w-100 pl-4">Accordion</a></li>
                                <li class="side-sub-menu-item px-3"><a href="badge.html" class="w-100 pl-4">Badge</a></li>
                                <li class="side-sub-menu-item px-3"><a href="button.html" class="w-100 pl-4">Button</a></li>
                                <li class="side-sub-menu-item px-3"><a href="bootstrap_tab.html" class="w-100 pl-4">Bootstrap tab</a></li>
                                <li class="side-sub-menu-item px-3"><a href="cards.html" class="w-100 pl-4">Cards</a></li>
                                <li class="side-sub-menu-item px-3"><a href="carousels.html" class="w-100 pl-4">Carousels</a></li>
                                <li class="side-sub-menu-item px-3"><a href="dropdown.html" class="w-100 pl-4">Dropdown</a></li>
                                <li class="side-sub-menu-item px-3"><a href="list.html" class="w-100 pl-4">Llist</a></li>
                                <li class="side-sub-menu-item px-3"><a href="modal.html" class="w-100 pl-4">Modals</a></li>
                                <li class="side-sub-menu-item px-3"><a href="paginations.html" class="w-100 pl-4">Paginations</a></li>
                                <li class="side-sub-menu-item px-3"><a href="progressbar.html" class="w-100 pl-4">Progressbar</a></li>
                                <li class="side-sub-menu-item px-3"><a href="tooltip.html" class="w-100 pl-4">Tooltip</a></li>
                                <li class="side-sub-menu-item px-3"><a href="typography.html" class="w-100 pl-4">Typography</a></li>
                            </ul>
                        </div>


                        <!-- Sub menu parent -->
                        <li class="side-menu-item px-3"><a href="#" class="w-100 py-3 pl-4 sub-menu-parent" data-toggle="collapse" data-target="#form-sub-menu" aria-expanded="false" aria-controls="form-sub-menu">Form Elements</a></li>
                        <!-- Sub menu -->
                        <div id="form-sub-menu" class="collapse" aria-labelledby="headingOne" data-parent="#accordion">
                            <ul class="side-sub-menu p-0">
                                <li class="side-sub-menu-item px-3"><a href="form_basic.html" class="w-100 pl-4">Basic Elements</a></li>
                                <li class="side-sub-menu-item px-3"><a href="form_basic_action.html" class="w-100 pl-4">Basic Action Bar</a></li>
                                <li class="side-sub-menu-item px-3"><a href="form_layout.html" class="w-100 pl-4">Form layouts</a></li>
                                <li class="side-sub-menu-item px-3"><a href="multi_column_forms.html" class="w-100 pl-4">Multi Column Forms</a></li>
                                <li class="side-sub-menu-item px-3"><a href="input_group.html" class="w-100 pl-4">Input Group</a></li>
                                <li class="side-sub-menu-item px-3"><a href="form_validation.html" class="w-100 pl-4">Form Validation</a></li>
                            </ul>
                        </div>

                        <!-- Sub menu parent -->
                        <li class="side-menu-item px-3"><a href="#" class="w-100 py-3 pl-4 sub-menu-parent" data-toggle="collapse" data-target="#chart-sub-menu" aria-expanded="false" aria-controls="chart-sub-menu">Charts</a></li>
                        <!-- Sub menu -->
                        <div id="chart-sub-menu" class="collapse" aria-labelledby="headingOne" data-parent="#accordion">
                            <ul class="side-sub-menu p-0">
                                <li class="side-sub-menu-item px-3"><a href="chart_js.html" class="w-100 pl-4">Chart Js</a></li>
                            </ul>
                        </div>

                        <!-- Sub menu parent -->
                        <li class="side-menu-item px-3"><a href="#" class="w-100 py-3 pl-4 sub-menu-parent" data-toggle="collapse" data-target="#table-sub-menu" aria-expanded="false" aria-controls="table-sub-menu">Tables</a></li>
                        <!-- Sub menu -->
                        <div id="table-sub-menu" class="collapse" aria-labelledby="headingOne" data-parent="#accordion">
                            <ul class="side-sub-menu p-0">
                                <li class="side-sub-menu-item px-3"><a href="basic_table.html" class="w-100 pl-4">Basic Table</a></li>
                                <li class="side-sub-menu-item px-3"><a href="datatables.html" class="w-100 pl-4">DataTables</a></li>
                            </ul>
                        </div>

                        <li class="side-menu-item px-3"><a href="#" class="w-100 py-3 pl-4">Icons</a></li>
                        <!-- Sub menu parent -->
                        <li class="side-menu-item px-3"><a href="#" class="w-100 py-3 pl-4 sub-menu-parent" data-toggle="collapse" data-target="#sub_menu_2" aria-expanded="true" aria-controls="sub_menu_2">User Pages</a></li>
                        <!-- Sub menu -->
                        <div id="sub_menu_2" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
                            <ul class="side-sub-menu p-0">
                                <li class="side-sub-menu-item px-3"><a href="blank.html" class="w-100 pl-4 small">Blank Page</a></li>
                                <li class="side-sub-menu-item px-3"><a href="login.html" class="w-100 pl-4 small active">Login</a></li>
                                <li class="side-sub-menu-item px-3"><a href="signup.html" class="w-100 pl-4 small">Register</a></li>
                                <li class="side-sub-menu-item px-3"><a href="404.html" class="w-100 pl-4 small">404</a></li>
                                <li class="side-sub-menu-item px-3"><a href="500.html" class="w-100 pl-4 small">500</a></li>
                            </ul>
                        </div>
                    </ul>
                </div>
            </div>
        </div>

        <!-- Main section -->
        <main class="bg-light main-full-body">

            <!-- Theme changer -->
            <div class="theme-option p-4">
                <div class="theme-pck">
                    <i class="fas fa-cog fa-lg"></i>
                </div>
                <p>Navbar:</p>
                <div class="side-nav-themes d-flex flex-row">
                    <p class="p-3 rounded side-nav-theme-primary side-nav-theme" theme-color="purple"></p>
                    <p class="p-3 rounded ml-2 side-nav-theme-light side-nav-theme" theme-color="light"></p>
                </div>
            </div>

            <!-- The navbar -->
            <nav class="navbar navbar-expand navbar-light bg-light py-3">
                <p class="navbar-brand mb-0 pb-0">
                    <span></span>
                    <span></span>
                    <span></span>
                </p>
                <!-- Navbar search section -->
                <div class="navb-search ml-5 d-none d-md-block">
                    <form action="#" method="POST">
                        <div class="input-group search-round">
                            <input type="text" class="form-control" placeholder="Search...">
                            <div class="input-group-append">
                                <button class="btn border" type="submit"><i class="fas fa-search"></i></button>
                            </div>
                        </div>
                    </form>
                </div>
                <!-- Navbar right menu section -->
                <div class="navb-menu ml-auto d-flex flex-row">
                    <!-- Message dropdown -->
                    <div class="dropdown dropdown-arow-none d-contents text-center mx-2 pt-1">
                        <!-- Icon -->
                        <a href="#" class="w-100 dropdown-toggle text-muted position-relative" data-toggle="dropdown">
                            <!-- Message -->
                            <i class="far fa-envelope fa-2x"></i>
                            <span class="badge badge-danger position-absolute notification-badge">3</span>
                        </a>
                        <!-- Dropdown menu -->
                        <div class="dropdown-menu dropdown-menu-right dropdown-menu-max-height p-0">
                            <!-- Dropdown item -->
                            <a href="#" class="dropdown-item text-secondary-light p-0">
                                <div class="d-flex flex-row border-bottom">
                                    <!-- Profile image -->
                                    <div class="notification-icon bg-secondary-c pt-3"><img src="{{ asset('qbadminui/img/profile.jpg') }}" alt="img" class="w-75 img-round"></div>
                                    <!-- Message notification -->
                                    <div class="flex-grow-1 px-3 py-3">
                                        <p class="mb-0">James <span class="badge badge-pill badge-primary">1</span></p>
                                        <small>James : Hey! Are you busy?</small>
                                    </div>
                                </div>
                            </a>
                            <!-- Dropdown item -->
                            <a href="#" class="dropdown-item text-secondary-light p-0">
                                <div class="d-flex flex-row border-bottom">
                                    <!-- Profile image -->
                                    <div class="notification-icon bg-secondary-c pt-3"><img src="{{ asset('qbadminui/img/profile.jpg') }}" alt="img" class="w-75 img-round"></div>
                                    <!-- Message notification -->
                                    <div class="flex-grow-1 px-3 py-3">
                                        <p class="mb-0">Jhone <span class="badge badge-pill badge-primary">1</span></p>
                                        <small>Jhone : Hey! I need help.</small>
                                    </div>
                                </div>
                            </a>
                            <!-- Dropdown item -->
                            <a href="#" class="dropdown-item text-secondary-light p-0">
                                <div class="d-flex flex-row border-bottom">
                                    <!-- Profile image -->
                                    <div class="notification-icon bg-secondary-c pt-3"><img src="{{ asset('qbadminui/img/profile.jpg') }}" alt="img" class="w-75 img-round"></div>
                                    <!-- Message notification -->
                                    <div class="flex-grow-1 px-3 py-3">
                                        <p class="mb-0">Mariam <span class="badge badge-pill badge-primary">1</span></p>
                                        <small>Mariam : information</small>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>

                    <!-- Notification dropdown -->
                    <div class="dropdown dropdown-arow-none d-contents text-center mx-2 pt-1">
                        <!-- icon -->
                        <a href="#" class="w-100 dropdown-toggle text-muted position-relative" data-toggle="dropdown">
                            <!-- Notification -->
                            <i class="far fa-bell fa-2x"></i>
                            <span class="badge badge-primary position-absolute notification-badge">3</span>
                        </a>
                        <!-- Dropdown menu -->
                        <div class="dropdown-menu dropdown-menu-right p-0 dropdown-menu-max-height">
                            <!-- Menu item -->
                            <a href="#" class="dropdown-item text-secondary-light p-0">
                                <div class="d-flex flex-row border-bottom">
                                    <div class="notification-icon bg-secondary-c pt-3 px-3"><i class="far fa-envelope text-primary fa-lg"></i></div>
                                    <div class="flex-grow-1 px-3 py-3">
                                        <p class="mb-0">New message <span class="badge badge-pill badge-primary">New</span></p>
                                        <small>James : Hey! Are you busy?</small>
                                    </div>
                                </div>
                            </a>
                            <!-- Menu item -->
                            <a href="#" class="dropdown-item text-secondary-light p-0">
                                <div class="d-flex flex-row border-bottom">
                                    <div class="notification-icon bg-secondary-c pt-3 px-3"><i class="fas fa-clipboard-list text-success fa-lg"></i></div>
                                    <div class="flex-grow-1 px-3 py-3">
                                        <p class="m-0">New order received <span class="badge badge-pill badge-success">New</span></p>
                                        <small>3 iPhone x</small>
                                    </div>
                                </div>
                            </a>
                            <!-- Menu item -->
                            <a href="#" class="dropdown-item text-secondary-light p-0 pr-2">
                                <div class="d-flex flex-row border-bottom">
                                    <div class="notification-icon bg-secondary-c pt-3 px-3"><i class="fas fa-box-open text-warning fa-lg"></i></div>
                                    <div class="flex-grow-1 px-3 py-3">
                                        <p class="m-0">Product out of stock <span class="badge badge-pill badge-warning small">1</span></p>
                                        <small>Headphone E63</small>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>

                    <!-- Profile action dropdown -->
                    <div class="dropdown dropdown-arow-none d-contents text-center mx-2">
                        <!-- Icon -->
                        <a href="#" class="w-100 dropdown-toggle text-muted" data-toggle="dropdown"><img src="{{ asset('qbadminui/img/profile.jpg') }}" alt="profile" class="profile-avatar"></a>
                        <!-- Dropdown Menu -->
                        <div class="dropdown-menu dropdown-menu-right dropdown-menu-max-height">
                            <!-- Menu items -->
                            <a href="#" class="dropdown-item disabled small"><i class="far fa-user mr-1"></i> Md.Maruf Ahmed</a>
                            <a href="#" class="dropdown-item text-secondary-light">Account setting</a>
                            <a href="#" class="dropdown-item text-secondary-light">Billing history</a>
                            <a  class="dropdown-item text-secondary-light"
                                href="{{ route('logout') }}"
                                onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();"
                            >Sign out</a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                        </div>
                    </div>
                </div>
            </nav>


            <!--Page Body part -->
            <div class="page-body p-4 text-dark">
                <div class="page-heading border-bottom d-flex flex-row">
                    <h5 class="font-weight-normal">Version 1</h5>
                    <small class="mt-2 ml-2">Dashboard</small>
                </div>
                <!-- Small card component -->
                <div class="small-cards mt-5 mb-4">
                    <div class="row">
                        <!-- Col sm 6, col md 6, col lg 3 -->
                        <div class="col-sm-6 col-md-6 col-lg-3 mt-3 mt-lg-0">
                            <!-- Card -->
                            <div class="card border-0 rounded-lg">
                                <!-- Card body -->
                                <div class="card-body">

                                    <div class="d-flex flex-row justify-content-center align-items-center">
                                        <!-- Icon -->
                                        <div class="small-card-icon">
                                            <i class="far fa-user-circle card-icon-bg-primary fa-4x"></i>
                                        </div>
                                        <!-- Text -->
                                        <div class="small-card-text w-100 text-center">
                                            <p class="font-weight-normal m-0 text-muted">New Leads</p>
                                            <h4 class="font-weight-normal m-0 text-primary">205</h4>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>

                        <!-- Col sm 6, col md 6, col lg 3 -->
                        <div class="col-sm-6 col-md-6 col-lg-3 mt-3 mt-lg-0">
                            <!-- Card -->
                            <div class="card border-0 rounded-lg">
                                <!-- Card body -->
                                <div class="card-body">

                                    <div class="d-flex flex-row justify-content-center align-items-center">
                                        <!-- Icon -->
                                        <div class="small-card-icon">
                                            <i class="fas fa-coins card-icon-bg-primary fa-4x"></i>
                                        </div>
                                        <!-- Text -->
                                        <div class="small-card-text w-100 text-center">
                                            <p class="font-weight-normal m-0 text-muted">Sales</p>
                                            <h4 class="font-weight-normal m-0 text-primary">$4021</h4>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>

                        <!-- Col sm 6, col md 6, col lg 3 -->
                        <div class="col-sm-6 col-md-6 col-lg-3 mt-3 mt-lg-0">
                            <!-- Card -->
                            <div class="card border-0 rounded-lg">
                                <!-- Card body -->
                                <div class="card-body">

                                    <div class="d-flex flex-row justify-content-center align-items-center">
                                        <!-- Icon -->
                                        <div class="small-card-icon">
                                            <i class="fas fa-shopping-basket card-icon-bg-primary fa-4x"></i>
                                        </div>
                                        <!-- Text -->
                                        <div class="small-card-text w-100 text-center">
                                            <p class="font-weight-normal m-0 text-muted">Orders</p>
                                            <h4 class="font-weight-normal m-0 text-primary">80</h4>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>

                        <!-- Col sm 6, col md 6, col lg 3 -->
                        <div class="col-sm-6 col-md-6 col-lg-3 mt-3 mt-lg-0">
                            <!-- Card -->
                            <div class="card border-0 rounded-lg">
                                <!-- Card body -->
                                <div class="card-body">

                                    <div class="d-flex flex-row justify-content-center align-items-center">
                                        <!-- Icon -->
                                        <div class="small-card-icon">
                                            <i class="far fa-money-bill-alt card-icon-bg-primary fa-4x"></i>
                                        </div>
                                        <!-- Text -->
                                        <div class="small-card-text w-100 text-center">
                                            <p class="font-weight-normal m-0 text-muted">Expense</p>
                                            <h4 class="font-weight-normal m-0 text-primary">$1200</h4>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>


                    </div>
                </div>


                <!-- Data chart component -->
                <div class="row mb-4">
                    <!-- Col lg 8, col md 12 -->
                    <div class="col-lg-8 col-md-12 mt-4 mt-lg-0">
                        <!-- Card -->
                        <div class="card border-0 rounded-lg">
                            <!-- Card body -->
                            <div class="card-body">
                                <!-- Card title -->
                                <div class="card-title">This Year Sales</div>
                                <!-- Chart -->
                                <div id="echartBar" style="height: 300px; -webkit-tap-highlight-color: transparent; user-select: none; position: relative;"></div>
                            </div>

                        </div>

                    </div>
                    <!-- Col lg 4, col md 12 -->
                    <div class="col-lg-4 col-md-12 mt-4 mt-lg-0">
                        <!-- Card -->
                        <div class="card border-0 rounded-lg">
                            <!-- Card body -->
                            <div class="card-body">
                                <!-- Card title -->
                                <div class="card-title">Sales by Countries</div>
                                <!-- Chart -->
                                <div id="echartPie" style="width:100%;height: 300px; -webkit-tap-highlight-color: transparent; user-select: none; position: relative;"></div>
                            </div>

                        </div>

                    </div>

                </div>
                <!-- Row -->
                <div class="row">
                    <!-- Col lg 6, col md 12 -->
                    <div class="col-lg-6 col-md-12">
                        <!-- Row -->
                        <div class="row mb-4">
                            <!-- Col lg 6, col md 12 -->
                            <div class="col-lg-6 col-md-12 mt-4 mt-lg-0">
                                <!-- Card -->
                                <div class="card border-0 rounded-lg">
                                    <!-- Card body -->
                                    <div class="card-body">
                                        <!-- Card title -->
                                        <div class="text-muted">Last Month Sales</div>
                                        <p class="mb-4 text-primary lead font-weight-bold">$40250</p>
                                    </div>
                                    <!-- Chart -->
                                    <div id="echart1" style="height: 260px; -webkit-tap-highlight-color: transparent; user-select: none; position: relative;"></div>
                                </div>

                            </div>

                            <!-- Col lg 6, col md 12 -->
                            <div class="col-lg-6 col-md-12 mt-4 mt-lg-0">
                                <!-- Card -->
                                <div class="card border-0 rounded-lg">
                                    <!-- Card body -->
                                    <div class="card-body">
                                        <!-- Card title -->
                                        <div class="text-muted">Last Week Sales</div>
                                        <p class="mb-4 text-primary lead font-weight-bold">$10250</p>
                                    </div>
                                    <!-- Chart -->
                                    <div id="echart2" style="height: 260px; -webkit-tap-highlight-color: transparent; user-select: none; position: relative;"></div>
                                </div>

                            </div>

                        </div>
                        <!-- Row -->
                        <div class="row">
                            <!-- col 12 -->
                            <div class="col-12">
                                <!-- Card -->
                                <div class="card border-0">
                                    <!-- Card header -->
                                    <div class="card-header border-0">
                                        <!-- Card title -->
                                        <p class="card-title d-inline">New Users</p>
                                        <!-- Dropdown -->
                                        <div class="dropdown dropdown-arow-none dropleft float-right">
                                            <button class="btn dropdown-toggle" data-toggle="dropdown">
                                                <i class="fas fa-cog text-secondary-light"></i>
                                            </button>
                                            <div class="dropdown-menu">
                                                <a href="#" class="dropdown-item text-secondary-light">Add new user</a>
                                                <a href="#" class="dropdown-item text-secondary-light">View all user</a>
                                                <a href="#" class="dropdown-item text-secondary-light">Something else here</a>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Card body -->
                                    <div class="card-body p-0">
                                        <!-- responsive table -->
                                        <div class="table-responsive">
                                            <table class="table text-dark">
                                                <!-- Table head -->
                                                <thead>
                                                <!-- Head content -->
                                                <tr class="text-center">
                                                    <th width="10%"><p class="mb-0">#</p></th>
                                                    <th width="20%"><p class="mb-0">Name</p></th>
                                                    <th width="10%"><p class="mb-0">Avatar</p></th>
                                                    <th width="30"><p class="mb-0">Email</p></th>
                                                    <th width="15%"><p class="mb-0">Status</p></th>
                                                    <th width="15%"><p class="mb-0">Action</p></th>
                                                </tr>
                                                </thead>
                                                <!-- Table body -->
                                                <tbody>
                                                <!-- Table data -->
                                                <tr class="text-center">
                                                    <td><p class="mb-0 font-weight-bold">1</p></td>
                                                    <td><p class="mb-0 font-weight-normal">Smith Doe</p></td>
                                                    <td><img src="{{ asset('qbadminui/img/profile.jpg') }}" alt="Avatar" class="profile-avatar w-50 mb-0"></td>
                                                    <td><p class="mb-0 font-weight-normal">Smith@gmail.com</p></td>
                                                    <td><span class="badge badge-success badge-pill">Active</span></td>
                                                    <td class="p-3">
                                                        <div class="d-flex flex-row justify-content-around align-items-center">
                                                            <a href="#"><i class="fas fa-pencil-alt text-success"></i></a>
                                                            <a href="#"><i class="fas fa-times-circle text-danger"></i></a>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <!-- Table data -->
                                                <tr class="text-center">
                                                    <td><p class="mb-0 font-weight-bold">2</p></td>
                                                    <td><p class="mb-0 font-weight-normal">Jhon Doe</p></td>
                                                    <td><img src="{{ asset('qbadminui/img/profile.jpg') }}" alt="Avatar" class="profile-avatar w-50 mb-0"></td>
                                                    <td><p class="mb-0 font-weight-normal">Jhon@gmail.com</p></td>
                                                    <td><span class="badge badge-info badge-pill">Pending</span></td>
                                                    <td class="p-3">
                                                        <div class="d-flex flex-row justify-content-around align-items-center">
                                                            <a href="#"><i class="fas fa-pencil-alt text-success"></i></a>
                                                            <a href="#"><i class="fas fa-times-circle text-danger"></i></a>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <!-- Table data -->
                                                <tr class="text-center">
                                                    <td><p class="mb-0 font-weight-bold">3</p></td>
                                                    <td><p class="mb-0 font-weight-normal">Alex</p></td>
                                                    <td><img src="{{ asset('qbadminui/img/profile.jpg') }}" alt="Avatar" class="profile-avatar w-50 mb-0"></td>
                                                    <td><p class="mb-0 font-weight-normal">Otto@gmail.com</p></td>
                                                    <td><span class="badge badge-warning badge-pill">Not Active</span></td>
                                                    <td class="p-3">
                                                        <div class="d-flex flex-row justify-content-around align-items-center">
                                                            <a href="#"><i class="fas fa-pencil-alt text-success"></i></a>
                                                            <a href="#"><i class="fas fa-times-circle text-danger"></i></a>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <!-- Table data -->
                                                <tr class="text-center">
                                                    <td><p class="mb-0 font-weight-bold">4</p></td>
                                                    <td><p class="mb-0 font-weight-normal">Mathew Doe	</p></td>
                                                    <td><img src="{{ asset('qbadminui/img/profile.jpg') }}" alt="Avatar" class="profile-avatar w-50 mb-0"></td>
                                                    <td><p class="mb-0 font-weight-normal">Mathew@gmail.com	</p></td>
                                                    <td><span class="badge badge-success badge-pill">Active</span></td>
                                                    <td class="p-3">
                                                        <div class="d-flex flex-row justify-content-around align-items-center">
                                                            <a href="#"><i class="fas fa-pencil-alt text-success"></i></a>
                                                            <a href="#"><i class="fas fa-times-circle text-danger"></i></a>
                                                        </div>
                                                    </td>
                                                </tr>
                                                </tbody>

                                            </table>

                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Col lg 6, col md 12 -->
                    <div class="col-lg-6 col-md-12 mt-4 mt-lg-0">
                        <!-- row -->
                        <div class="row">
                            <!-- col 12 -->
                            <div class="col-12 mb-4">
                                <!-- Product selling detail section -->
                                <div class="card border-0 rounded-lg">
                                    <!-- Card body -->
                                    <div class="card-body">
                                        <div class="card-title">Top Selling Products</div>
                                        <!-- Top selling product list -->
                                        <div class="top-selling-product mt-4 d-flex flex-column flex-xl-row justify-content-between">
                                            <div class="d-flex flex-row">
                                                <!-- Product thumbnail -->
                                                <div class="product-thumbnail w-15">
                                                    <img src="{{ asset('qbadminui/img/headphone-4.jpg') }}" alt="product" class="w-100 h-75">
                                                </div>
                                                <!-- Product info -->
                                                <div class="produst-info ml-4">
                                                    <h6 class="text-primary font-weight-normal">Wireless Headphone E23</h6>
                                                    <p class="mb-0 text-secondary-light">Lorem ipsum dolor sit amet consectetur.</p>
                                                    <p class="text-danger">$450 <del class="text-secondary-light">$500</del></p>
                                                </div>
                                            </div>
                                            <!-- Details Button -->
                                            <button class="btn w-50 btn-outline-primary rounded btn-sm align-self-center mb-4">View details</button>
                                        </div>
                                        <!-- Top selling product list -->
                                        <div class="top-selling-product mt-4 d-flex flex-column flex-xl-row justify-content-between">
                                            <div class="d-flex flex-row">
                                                <!-- Product thumbnail -->
                                                <div class="product-thumbnail w-15">
                                                    <img src="img/headphone-2.jpg" alt="product" class="w-100 h-75">
                                                </div>
                                                <!-- Product info -->
                                                <div class="produst-info ml-4">
                                                    <h6 class="text-primary font-weight-normal">Wireless Headphone Y902</h6>
                                                    <p class="mb-0 text-secondary-light">Lorem ipsum dolor sit amet consectetur.</p>
                                                    <p class="text-danger">$550 <del class="text-secondary-light">$600</del></p>
                                                </div>
                                            </div>
                                            <!-- Details Button -->
                                            <button class="btn w-50 btn-outline-primary rounded btn-sm align-self-center mb-4">View details</button>
                                        </div>
                                        <!-- Top selling product list -->
                                        <div class="top-selling-product mt-4 d-flex flex-column flex-xl-row justify-content-between">
                                            <div class="d-flex flex-row">
                                                <!-- Product thumbnail -->
                                                <div class="product-thumbnail w-15">
                                                    <img src="{{ asset('qbadminui/img/headphone-3.jpg') }}" alt="product" class="w-100 h-75">
                                                </div>
                                                <!-- Product info -->
                                                <div class="produst-info ml-4">
                                                    <h6 class="text-primary font-weight-normal">Wireless Headphone E09</h6>
                                                    <p class="mb-0 text-secondary-light">Lorem ipsum dolor sit amet consectetur.</p>
                                                    <p class="text-danger">$250 <del class="text-secondary-light">$300</del></p>
                                                </div>
                                            </div>
                                            <!-- Details Button -->
                                            <button class="btn w-50 btn-outline-primary rounded btn-sm align-self-center mb-4">View details</button>
                                        </div>
                                        <!-- Top selling product list -->
                                        <div class="top-selling-product mt-4 d-flex flex-column flex-xl-row justify-content-between">
                                            <div class="d-flex flex-row">
                                                <!-- Product thumbnail -->
                                                <div class="product-thumbnail w-15">
                                                    <img src="{{ asset('qbadminui/img/headphone-4.jpg') }}" alt="product" class="w-100 h-75">
                                                </div>
                                                <!-- Product info -->
                                                <div class="produst-info ml-4">
                                                    <h6 class="text-primary font-weight-normal">Wireless Headphone X89</h6>
                                                    <p class="mb-0 text-secondary-light">Lorem ipsum dolor sit amet consectetur.</p>
                                                    <p class="text-danger">$450 <del class="text-secondary-light">$500</del></p>
                                                </div>
                                            </div>
                                            <!-- Details Button -->
                                            <button class="btn w-50 btn-outline-primary rounded btn-sm align-self-center mb-4">View details</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Col 12 -->
                            <div class="col-12">
                                <!-- User activity section -->
                                <div class="card border-0 rounded-lg">
                                    <!-- Card body -->
                                    <div class="card-body p-0">
                                        <!-- Card title -->
                                        <div class="card-title m-0 p-3 d-flex flex-row align-items-center justify-content-between">
                                            <span>User activity</span>
                                            <span class="badge badge-pill badge-warning font-weight-normal">Update daily</span>
                                        </div>
                                        <!-- Activity details -->
                                        <div class="d-flex flex-row justify-content-between border-bottom p-3">
                                            <div class="flex-grow-1">
                                                <span class="small text-muted">pages / Visit</span>
                                                <h5 class="m-0 font-weight-normal">2065</h5>
                                            </div>
                                            <div class="flex-grow-1">
                                                <span class="small text-muted">New user</span>
                                                <h5 class="m-0 font-weight-normal">465</h5>
                                            </div>
                                            <div class="flex-grow-1">
                                                <span class="small text-muted">Last week</span>
                                                <h5 class="m-0 font-weight-normal">23456</h5>
                                            </div>
                                        </div>
                                        <!-- Activity details -->
                                        <div class="d-flex flex-row justify-content-between border-bottom p-3">
                                            <div class="flex-grow-1">
                                                <span class="small text-muted">pages / Visit</span>
                                                <h5 class="m-0 font-weight-normal">2065</h5>
                                            </div>
                                            <div class="flex-grow-1">
                                                <span class="small text-muted">New user</span>
                                                <h5 class="m-0 font-weight-normal">465</h5>
                                            </div>
                                            <div class="flex-grow-1">
                                                <span class="small text-muted">Last week</span>
                                                <h5 class="m-0 font-weight-normal">23456</h5>
                                            </div>
                                        </div>
                                        <!-- Activity details -->
                                        <div class="d-flex flex-row justify-content-between border-bottom p-3">
                                            <div class="flex-grow-1">
                                                <span class="small text-muted">pages / Visit</span>
                                                <h5 class="m-0 font-weight-normal">2065</h5>
                                            </div>
                                            <div class="flex-grow-1">
                                                <span class="small text-muted">New user</span>
                                                <h5 class="m-0 font-weight-normal">465</h5>
                                            </div>
                                            <div class="flex-grow-1">
                                                <span class="small text-muted">Last week</span>
                                                <h5 class="m-0 font-weight-normal">23456</h5>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Col 12 -->
                    <div class="col-12 mt-4">
                        <!-- Card -->
                        <div class="card mb-4">
                            <!-- Card body -->
                            <div class="card-body p-0">
                                <!-- Card title -->
                                <div class="card-title m-0 p-3">Last 20 Day Leads</div>
                                <!-- Chart -->
                                <div id="echart3" style="height: 360px; -webkit-tap-highlight-color: transparent; user-select: none; position: relative;"></div>
                            </div>

                        </div>

                    </div>

                </div>
            </div>
        </main>
        <!-- Footer section -->
        <footer class="footer-full-body p-4 d-flex flex-row justify-content-between text-secondary">
            <p>&copy; Copyright. <a href="https://qbytesoft.com" target="_Blank">Qbytesoft</a></p>
            <p>Version 1.0.0</p>
        </footer>
    </div>
@endsection
