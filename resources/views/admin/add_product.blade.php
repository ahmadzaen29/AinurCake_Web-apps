<!doctype html>
<html lang="en">


    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title>AinurCake</title>
        <link rel="shortcut icon" href="../uploads/logo.png">
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="../css/bootstrap.min.css">
        <link href="../fonts/circular-std/style.css" rel="stylesheet">
        <link rel="stylesheet" href="../css/style.css">
        <link rel="stylesheet" href="../fonts/fontawesome/css/fontawesome-all.css">
        <link rel="stylesheet" href="../css/inputmask.css">
        <link rel="stylesheet" href="../css/uploadImage.css">
        <link rel="stylesheet" href="../sweetalert2/sweetalert2.min.css">
        <script src="../sweetalert2/sweetalert2.all.min.js"></script>
    </head>

    <body>
        <!-- ============================================================== -->
        <!-- main wrapper -->
        <!-- ============================================================== -->
        <div class="dashboard-main-wrapper">
            <!-- ============================================================== -->
            <!-- navbar -->
            <!-- ============================================================== -->
            <div class="dashboard-header">
                <nav class="navbar navbar-expand-lg bg-white fixed-top">
                    <a class="navbar-brand" href="#"><img src="{{ asset('uploads/logo.png') }}" class="img-fluid"
                            width="90" height="auto" alt="" style="margin-right: -20px;"> AinurCake</a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse"
                        data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                        aria-label="Toggle navigation">
                        <span><i class="fas fa-bars mx-3"></i></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav ml-auto navbar-right-top">
                            <li class="nav-item dropdown nav-user">
                                <a class="nav-link nav-user-img" href="#" id="navbarDropdownMenuLink2"
                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img
                                        src="{{ asset('uploads/User.png') }}" alt=""
                                        class="user-avatar-md rounded-circle"></a>
                                <div class="dropdown-menu dropdown-menu-right nav-user-dropdown"
                                    aria-labelledby="navbarDropdownMenuLink2">
                                    <div class="nav-user-info">
                                        <h5 class="mb-0 text-white nav-user-name">{{ session('user_admin_username') }}</h5>
                                        <span class="status"></span><span class="ml-2">Available</span>
                                    </div>
                                    <a class="dropdown-item" href="{{ route('admin.account_admin') }}"><i
                                        class="fas fa-user mr-2"></i>Account</a>
                                    <a class="dropdown-item" href="{{ route('admin.index') }}"><i
                                            class="fas fa-power-off mr-2"></i>Logout</a>
                                </div>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
              <!-- left sidebar -->
            <!-- ============================================================== -->
            <div class="nav-left-sidebar sidebar-dark">
                <div class="menu-list">
                    <nav class="navbar navbar-expand-lg navbar-light">
                        <a class="d-xl-none d-lg-none" href="#">Dashboard</a>
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
                            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarNav">
                            <ul class="navbar-nav flex-column">
                                <li class="nav-divider">
                                    Menu
                                </li>
                                <li class="nav-item ">
                                    <a class="nav-link" href="{{ route('admin.dashboard') }}"><i
                                            class="fa fa-fw fa-rocket"></i>Dashboard</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('admin.view_users') }}"><i
                                            class="fa fa-fw fa-user-circle"></i>Users</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#" data-toggle="collapse" aria-expanded="false"
                                        data-target="#submenu-3" aria-controls="submenu-3"><i
                                            class="fas fa-fw fa-chart-pie"></i>Category</a>
                                    <div id="submenu-3" class="collapse submenu" style="">
                                        <ul class="nav flex-column">
                                            <li class="nav-item">
                                                <a class="nav-link" href="{{ route('admin.view_category') }}">View
                                                    category</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link active" href="{{ route('admin.add_category') }}">Add
                                                    category</a>
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                                <li class="nav-item ">
                                    <a class="nav-link" href="" data-toggle="collapse" aria-expanded="false"
                                        data-target="#submenu-4" aria-controls="submenu-4"><i
                                            class="fab fa-product-hunt"></i>Products</a>
                                    <div id="submenu-4" class="collapse submenu" style="">
                                        <ul class="nav flex-column">
                                            <li class="nav-item">
                                                <a class="nav-link" href="{{ route('admin.view_product') }}">View
                                                    products</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" href="{{ route('admin.add_product') }}">Add products</a>
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('admin.view_orders') }}"><i
                                            class="fas fa-shopping-cart"></i>Orders</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="pengeluaran.php"><i
                                            class="fas fa-fw fa-arrow-down"></i>Pengeluaran</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('admin.laporan_bulanan')}}"><i class="fas fa-table"></i>Laporan
                                        Bulanan</a>
                                </li>
                            </ul>
                        </div>
                    </nav>
                </div>
            </div>
            <!-- ============================================================== -->
            <!-- end left sidebar -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- wrapper  -->
            <!-- ============================================================== -->
            <div class="dashboard-wrapper">
                <div class="container-fluid dashboard-content">
                    <!-- ============================================================== -->
                    <!-- pageheader -->
                    <!-- ============================================================== -->
                    <div class="row">
                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                            <div class="page-header">
                                <h2 class="pageheader-title">Product</h2>
                                <p class="pageheader-text">Proin placerat ante duiullam scelerisque a velit ac porta, fusce sit amet vestibulum mi. Morbi lobortis pulvinar quam.</p>
                                <div class="page-breadcrumb">
                                    <nav aria-label="breadcrumb">
                                        <ol class="breadcrumb">
                                            <li class="breadcrumb-item"><a href="dashboard.php" class="breadcrumb-link">Dashboard</a></li>
                                            <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Product</a></li>
                                            <li class="breadcrumb-item active" aria-current="page">Add Product</li>
                                        </ol>
                                    </nav>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- ============================================================== -->
                    <!-- end pageheader -->
                    <!-- ============================================================== -->
                    <div class="row">
                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                            <div class="card">
                                <h5 class="card-header">Add Product</h5>
                                <div class="card-body">
                                    <form action="{{ route('admin.insert_product') }}" id="form" method="post" enctype="multipart/form-data">
                                        @csrf
                                        <div class="form-group">
                                            <label for="inputProductName">Product Name</label>
                                            <input id="inputProductName" type="text" name="product_name" required="" placeholder="Enter product name" autocomplete="off" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label for="inputProductCategory">Categories</label>
                                            <select class="form-control" id="inputProductCategory" name="product_category">
                                                @foreach($categories as $category)
                                                    <option value="{{ $category->id }}">{{ $category->category_name }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label for="inputProductPrice">Price</label>
                                            <input id="inputProductPrice" type="text" name="product_price" required="" placeholder="Enter product price" autocomplete="off" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label for="inputUnit">Unit</label>
                                            <input id="inputUnit" type="text" name="product_unit" required="" placeholder="Enter product unit" autocomplete="off" class="form-control">
                                        </div>
                                        <div class="custom-file mb-3">
                                            <input type="file" class="custom-file-input" id="customFile" name="product_image[]" multiple="" accept=".jpg, .jpeg, .png">
                                            <label class="custom-file-label" for="customFile">Choose Image</label>
                                        </div>
                                        <ul id="files-list"></ul>
                                        <div class="form-group">
                                            <label for="inputProductDescription">Description</label>
                                            <textarea id="inputProductDescription" name="product_description" required="" placeholder="Product description" class="form-control"></textarea>
                                        </div>
                                        <div class="row">
                                            <div class="col-sm-6 pb-2 pb-sm-4 pb-lg-0 pr-0">
                                            </div>
                                            <div class="col-sm-6 pl-0">
                                                <p class="text-right">
                                                    <button type="submit" class="btn btn-space btn-primary">Add</button>
                                                    <button type="reset" id="clearButton" class="btn btn-space btn-secondary">Clear</button>
                                                </p>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- ============================================================== -->
                <!-- footer -->
                <!-- ============================================================== -->
                <div class="footer">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
                                Copyright © 2023 Concept. Dashboard by D5
                            </div>
                            <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
                                <div class="text-md-right footer-links d-none d-sm-block">
                                    <a href="javascript: void(0);">About</a>
                                    <a href="javascript: void(0);">Support</a>
                                    <a href="javascript: void(0);">Contact Us</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- ============================================================== -->
                <!-- end footer -->
                <!-- ============================================================== -->
            </div>
            <!-- ============================================================== -->
            <!-- end main wrapper -->
            <!-- ============================================================== -->
        </div>
        <!-- ============================================================== -->
        <!-- end main wrapper -->
        <!-- ============================================================== -->
        <!-- Optional JavaScript -->
        <script src="../js/jquery-3.3.1.min.js"></script>
        <script src="../js/bootstrap.bundle.js"></script>
        <script src="../js/jquery.slimscroll.js"></script>
        <script src="../js/main-js.js"></script>
        <script src="../js/jquery.inputmask.bundle.js"></script>
        <script src="../js/uploadImage.js"></script>
    </body>

    </html>
