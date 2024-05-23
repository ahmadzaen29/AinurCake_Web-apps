<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>AinurCake</title>
    <link rel="shortcut icon" href="{{ asset('uploads/logo.png') }}">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <link href="{{ asset('fonts/circular-std/style.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('fonts/fontawesome/css/fontawesome-all.css') }}">
    <link rel="stylesheet" href="{{ asset('css/dataTables.bootstrap4.css') }}">
    <link rel="stylesheet" href="{{ asset('css/uploadImage.css') }}">
    <link rel="stylesheet" href="{{ asset('sweetalert2/sweetalert2.min.css') }}">
    <script src="{{ asset('sweetalert2/sweetalert2.all.min.js') }}"></script>
</head>

<body>
    <div class="dashboard-main-wrapper">
        <!-- ============================================================== -->
        <!-- navbar -->
        <!-- ============================================================== -->
        <div class="dashboard-header">
            <nav class="navbar navbar-expand-lg bg-white fixed-top">
                <a class="navbar-brand" href="#"><img src="../uploads/logo.png" class="img-fluid" width="90"
                        height="auto" alt="" style="margin-right: -20px;"> AinurCake</a>
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
                                    src="../uploads/User.png" alt="" class="user-avatar-md rounded-circle"></a>
                            <div class="dropdown-menu dropdown-menu-right nav-user-dropdown"
                                aria-labelledby="navbarDropdownMenuLink2">
                                <div class="nav-user-info">
                                    <h5 class="mb-0 text-white nav-user-name">{{ $admin_username }}</h5>
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

        <!-- ============================================================== -->
        <!-- end navbar -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
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
                                            <a class="nav-link" href="{{ route('admin.add_category') }}">Add
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
                                            <a class="nav-link active" href="{{ route('admin.view_product') }}">View
                                                products</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="{{ route('admin.add_product') }}">Add
                                                products</a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('admin.view_orders') }}"><i
                                        class="fas fa-shopping-cart"></i>Orders</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('admin.pengeluaran') }}"><i
                                        class="fas fa-fw fa-arrow-down"></i>Pengeluaran</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('admin.laporan_bulanan') }}"><i
                                        class="fas fa-table"></i>Laporan Bulanan</a>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
        </div>
        <!-- ============================================================== -->
        <!-- end left sidebar -->
        <!-- ============================================================== -->
        <!-- wrapper -->
        <!-- ============================================================== -->
        <div class="dashboard-wrapper">
            <div class="container-fluid dashboard-content">
                <!-- pageheader -->
                <!-- ============================================================== -->
                <div class="row">
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        <div class="page-header">
                            <h2 class="pageheader-title">Product</h2>
                            <p class="pageheader-text">Proin placerat ante duiullam scelerisque a velit ac porta, fusce
                                sit amet vestibulum mi. Morbi lobortis pulvinar quam.</p>
                            <div class="page-breadcrumb">
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="dashboard.php"
                                                class="breadcrumb-link">Dashboard</a></li>
                                        <li class="breadcrumb-item"><a href="#"
                                                class="breadcrumb-link">Product</a></li>
                                        <li class="breadcrumb-item active" aria-current="page">View Product</li>
                                    </ol>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- ============================================================== -->
                <!-- end pageheader -->
                <div class="row">
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        <div class="card">
                            <h5 class="card-header">Product List</h5>
                            @if (session('edit_msg'))
                                <div class="alert alert-success">
                                    {{ session('edit_msg') }}
                                </div>
                            @endif
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-striped table-bordered first">
                                        <thead>
                                            <tr>
                                                <th>S. No.</th>
                                                <th>Name</th>
                                                <th>Category</th>
                                                <th>Price</th>
                                                <th>Unit</th>
                                                <th>Image</th>
                                                <th>Description</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($products as $product)
                                                <tr>
                                                    <td>{{ $loop->iteration }}</td>
                                                    <td>{{ $product->product_name }}</td>
                                                    <td>{{ $product->category_name }}</td>
                                                    <td>Rp {{ $product->product_price }}</td>
                                                    <td>{{ $product->unit }}</td>
                                                    <td>
                                                        <div class="owl-carousel owl-theme" style="width: 100px;">
                                                            @foreach (explode(', ', $product->product_image) as $image)
                                                                <div class="item">
                                                                    <img src="../uploads/{{ $image }}"
                                                                        height="100px" width="100px">
                                                                </div>
                                                            @endforeach
                                                        </div>
                                                    </td>
                                                    <td>{{ $product->product_description }}</td>
                                                    <td>
                                                        <a href="#" data-toggle="modal"
                                                            data-target="#editModal{{ $product->product_id }}"
                                                            class="btn btn-primary">Edit</a>
                                                        <button class="btn btn-danger"
                                                            onclick="confirmDelete('{{ route('admin.delete_product', ['id' => $product->product_id]) }}')">Delete</button>
                                                    </td>
                                                </tr>

                                                <!-- Edit Product Modal -->
                                                <div class="modal fade" id="editModal{{ $product->product_id }}"
                                                    data-backdrop="static" tabindex="-1" role="dialog">
                                                    <div class="modal-dialog" role="document">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h5 class="modal-title">Edit Product</h5>
                                                                <button type="button" class="close"
                                                                    data-dismiss="modal" aria-label="Close">
                                                                    <span aria-hidden="true">&times;</span>
                                                                </button>
                                                            </div>
                                                            <form
                                                                action="{{ route('admin.update_product', $product->product_id) }}"
                                                                method="post" enctype="multipart/form-data">
                                                                @csrf
                                                                <div class="modal-body">
                                                                    <div class="form-group">
                                                                        <label
                                                                            for="product_name_{{ $product->product_id }}">Product
                                                                            Name</label>
                                                                        <input
                                                                            id="product_name_{{ $product->product_id }}"
                                                                            type="text" name="product_name"
                                                                            value="{{ $product->product_name }}"
                                                                            required class="form-control">
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <label
                                                                            for="product_category_{{ $product->product_id }}">Category</label>
                                                                        <select
                                                                            id="product_category_{{ $product->product_id }}"
                                                                            name="product_category"
                                                                            class="form-control">
                                                                            @foreach ($categories as $category)
                                                                                <option value="{{ $category->id }}"
                                                                                    {{ $category->id == $product->product_id ? 'selected' : '' }}>
                                                                                    {{ $category->category_name }}
                                                                                </option>
                                                                            @endforeach
                                                                        </select>
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <label
                                                                            for="product_price_{{ $product->product_id }}">Price</label>
                                                                        <input
                                                                            id="product_price_{{ $product->product_id }}"
                                                                            type="number" name="product_price"
                                                                            value="{{ $product->product_price }}"
                                                                            required class="form-control">
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <label
                                                                            for="product_unit_{{ $product->product_id }}">Unit</label>
                                                                        <input
                                                                            id="product_unit_{{ $product->product_id }}"
                                                                            type="text" name="product_unit"
                                                                            value="{{ $product->unit }}" required
                                                                            class="form-control">
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <label
                                                                            for="product_description_{{ $product->product_id }}">Description</label>
                                                                        <textarea id="product_description_{{ $product->product_id }}" name="product_description" required
                                                                            class="form-control">{{ $product->product_description }}</textarea>
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <label
                                                                            for="product_image_{{ $product->product_id }}">Product
                                                                            Image</label>
                                                                        <input type="file"
                                                                            id="product_image_{{ $product->product_id }}"
                                                                            name="product_image[]" multiple
                                                                            class="form-control"
                                                                            onchange="previewImages(event, 'image-preview-{{ $product->product_id }}')">
                                                                        <div id="image-preview-{{ $product->product_id }}"
                                                                            class="mt-2">
                                                                            @foreach (explode(', ', $product->product_image) as $image)
                                                                                <img src="../uploads/{{ $image }}"
                                                                                    height="100px" width="100px"
                                                                                    style="margin-right: 10px;">
                                                                            @endforeach
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="modal-footer">
                                                                    <button type="button"
                                                                        class="btn btn-space btn-secondary"
                                                                        onclick="clearModal({{ $product->product_id }})">Clear</button>
                                                                    <button type="submit"
                                                                        class="btn btn-space btn-primary">Save
                                                                        changes</button>
                                                                </div>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- End Edit Product Modal -->
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>

            <!-- Optional JavaScript -->
            <script src="{{ asset('js/jquery-3.3.1.min.js') }}"></script>
            <script src="{{ asset('js/bootstrap.bundle.js') }}"></script>
            <script src="{{ asset('js/jquery.slimscroll.js') }}"></script>
            <script src="{{ asset('js/main-js.js') }}"></script>
            <script src="{{ asset('js/jquery.dataTables.min.js') }}"></script>
            <script src="{{ asset('js/dataTables.bootstrap4.min.js') }}"></script>
            <script src="{{ asset('js/data-table.js') }}"></script>
            <script src="{{ asset('js/uploadImage.js') }}"></script>
            <script>
                function confirmDelete(url) {
                    Swal.fire({
                        title: 'Are you sure?',
                        text: "You won't be able to revert this!",
                        icon: 'warning',
                        showCancelButton: true,
                        confirmButtonColor: '#3085d6',
                        cancelButtonColor: '#d33',
                        confirmButtonText: 'Yes, delete it!'
                    }).then((result) => {
                        if (result.isConfirmed) {
                            window.location.href = url;
                        }
                    })
                }

                function previewImages(event, previewId) {
                    var preview = document.getElementById(previewId);
                    preview.innerHTML = '';
                    var fileList = event.target.files;

                    for (var i = 0; i < fileList.length; i++) {
                        var file = fileList[i];
                        var reader = new FileReader();

                        reader.onload = function(event) {
                            var img = document.createElement('img');
                            img.src = event.target.result;
                            img.style.maxWidth = '200px'; // Sesuaikan ukuran pratinjau gambar
                            img.style.marginRight = '10px'; // Atur jarak antara gambar
                            preview.appendChild(img);
                        };

                        reader.readAsDataURL(file);
                    }
                }

                function clearModal(productId) {
                    document.getElementById('product_name_' + productId).value = '';
                    document.getElementById('product_category_' + productId).selectedIndex = 0;
                    document.getElementById('product_price_' + productId).value = '';
                    document.getElementById('product_unit_' + productId).value = '';
                    document.getElementById('product_description_' + productId).value = '';
                    document.getElementById('product_image_' + productId).value = '';
                    document.getElementById('image-preview-' + productId).innerHTML = '';
                }
            </script>
            <!-- ============================================================== -->
            <!-- end wrapper -->

            <!-- Tambahkan link ke JavaScript Bootstrap atau JavaScript kustom Anda di sini -->
</body>

</html>
