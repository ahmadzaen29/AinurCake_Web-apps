<!DOCTYPE html>
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
    <link rel="stylesheet" href="../css/dataTables.bootstrap4.css">
    <link rel="stylesheet" href="../sweetalert2/sweetalert2.min.css">
    <script src="../sweetalert2/sweetalert2.all.min.js"></script>
</head>

<body>
    <div class="dashboard-main-wrapper">
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
                                    <h5 class="mb-0 text-white nav-user-name"><?php echo $admin_username; ?></h5>
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
                                            <a class="nav-link" href="{{ route('admin.view_product') }}">View
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
                                <a class="nav-link active" href="{{ route('admin.view_orders') }}"><i
                                        class="fas fa-shopping-cart"></i>Orders</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('admin.pengeluaran') }}"><i
                                        class="fas fa-fw fa-arrow-down"></i>Pengeluaran</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('admin.laporan_bulanan') }}"><i
                                        class="fas fa-table"></i>Laporan
                                    Bulanan</a>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
        </div>
        <!-- ============================================================== -->
        <!-- end left sidebar -->
        <div class="dashboard-wrapper">
            <div class="container-fluid dashboard-content">
                <div class="row">
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        <div class="page-header">
                            <h2 class="pageheader-title">Orders</h2>
                            <p class="pageheader-text">Proin placerat ante duiullam scelerisque a velit ac porta, fusce
                                sit amet vestibulum mi. Morbi lobortis pulvinar quam.</p>
                            <div class="page-breadcrumb">
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="dashboard.php"
                                                class="breadcrumb-link">Dashboard</a></li>
                                        <li class="breadcrumb-item active" aria-current="page">View orders</li>
                                    </ol>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        <div class="card">
                            <h5 class="card-header">Orders Table</h5>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-striped table-bordered first">
                                        <thead>
                                            <tr>
                                                <th>S. No.</th>
                                                <th>Id pemesanan</th>
                                                <th>Nama user</th>
                                                <th>Tanggal pemesanan</th>
                                                <th>Tanggal Pengiriman</th>
                                                <th>Metode pembayaran</th>
                                                <th>Jumlah total</th>
                                                <th>Status</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($orders as $i => $order)
                                                <tr>
                                                    <td>{{ $i + 1 }}</td>
                                                    <td>{{ $order->orders_id }}</td>
                                                    <td>{{ $order->users_id }}</td>
                                                    <td>{{ $order->order_date }}</td>
                                                    <td>{{ $order->delivery_date }}</td>
                                                    <td>{{ $order->payment_method }}</td>
                                                    <td>{{ $order->total_amount }}</td>
                                                    <td>{{ $order->status }}</td>
                                                    <td>
                                                        @if ($order->status == 'Menunggu Konfirmasi')
                                                            <button data-toggle="modal" data-target="#ModalKonfirmasi"
                                                                class="btn btn-success"
                                                                onclick="konfirmasi_orders({{ $order->orders_id }})">Konfirmasi</button>
                                                            <button data-toggle="modal" data-target="#cancel_order"
                                                                onclick="cancel_orders({{ $order->orders_id }})"
                                                                class="btn btn-warning">Cancel</button>
                                                        @elseif ($order->status == 'Belum Bayar')
                                                            <button data-toggle="modal" data-target="#cancel_order"
                                                                onclick="cancel_orders({{ $order->orders_id }})"
                                                                class="btn btn-warning">Cancel</button>
                                                        @else
                                                            <button data-toggle="modal" data-target="#exampleModal"
                                                                class="btn btn-info"
                                                                onclick="edit_orders({{ $order->orders_id }})">Edit</button>
                                                            <button onclick="delete_orders({{ $order->orders_id }})"
                                                                class="btn btn-danger">DELETE</button>
                                                        @endif
                                                    </td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                        <tfoot>
                                            <tr>
                                                <th>S. No.</th>
                                                <th>Id pemesanan</th>
                                                <th>Nama user</th>
                                                <th>Tanggal pemesanan</th>
                                                <th>Tanggal Pengiriman</th>
                                                <th>Metode pembayaran</th>
                                                <th>Jumlah total</th>
                                                <th>Status</th>
                                                <th>Action</th>
                                            </tr>
                                        </tfoot>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        <div class="card">
                            <h5 class="card-header">Orders Detail Table</h5>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-striped table-bordered first">
                                        <thead>
                                            <tr>
                                                <th>S. No.</th>
                                                <th>Id pemesanan</th>
                                                <th>Nama produk</th>
                                                <th>Jumlah</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($cake_shop_orders_detail as $i => $order)
                                                <tr>
                                                    <td>{{ $i + 1 }}</td>
                                                    <td>{{ $order->orders_id }}</td>
                                                    <td>{{ $order->product_name }}</td>
                                                    <td>{{ $order->quantity }}</td>
                                                    <td>
                                                        <button data-toggle="modal" data-target="#exampleModal1"
                                                            class="btn btn-space btn-primary"
                                                            onclick="edit_orders_detail({{ $order->orders_detail_id }})">Edit</button>
                                                        <button
                                                            onclick="delete_orders_detail({{ $order->orders_id }})"
                                                            class="btn btn-danger">DELETE</button>
                                                    </td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                        <tfoot>
                                            <tr>
                                                <th>S. No.</th>
                                                <th>Id pemesanan</th>
                                                <th>Nama produk</th>
                                                <th>Jumlah</th>
                                                <th>Action</th>
                                            </tr>
                                        </tfoot>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

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

            </div>
        </div>
    </div>
    </div>

    <div class="modal fade" id="exampleModal" data-backdrop="static" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Edit orders
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                </div>
                <div class="modal-body">
                    <form id="form-edit-order">
                        <div class="form-group">
                            <label for="orders_id" class="col-form-label">Id Pemesanan:</label>
                            <input type="text" class="form-control" id="orders_id" name="orders_id" readonly>
                        </div>
                        <div class="form-group">
                            <label for="users_username" class="col-form-label">Nama User:</label>
                            <input type="text" class="form-control" id="users_username" name="users_username">
                        </div>
                        <div class="form-group">
                            <label for="order_date" class="col-form-label">Tanggal Pemesanan:</label>
                            <input type="date" class="form-control" id="order_date" name="order_date">
                        </div>
                        <div class="form-group">
                            <label for="delivery_date" class="col-form-label">Tanggal Pengiriman:</label>
                            <input type="date" class="form-control" id="delivery_date" name="delivery_date">
                        </div>
                        <div class="form-group">
                            <label for="payment_method" class="col-form-label">Metode Pembayaran:</label>
                            <input type="text" class="form-control" id="payment_method" name="payment_method">
                        </div>
                        <div class="form-group">
                            <label for="total_amount" class="col-form-label">Jumlah Total:</label>
                            <input type="number" class="form-control" id="total_amount" name="total_amount">
                        </div>
                        <div class="form-group">
                            <label for="status" class="col-form-label">Status:</label>
                            <input type="text" class="form-control" id="status" name="status">
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary" onclick="update_order()">Save changes</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal for Editing Order Details -->
    <div class="modal fade" id="exampleModal1" data-backdrop="static" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Edit Order Details</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form id="form-edit-order-detail">
                        <div class="form-group">
                            <label for="orders_detail_id" class="col-form-label">Id Detail Pemesanan:</label>
                            <input type="text" class="form-control" id="orders_detail_id" name="orders_detail_id"
                                readonly>
                        </div>
                        <div class="form-group">
                            <label for="orders_id_detail" class="col-form-label">Id Pemesanan:</label>
                            <input type="text" class="form-control" id="orders_id_detail" name="orders_id_detail"
                                readonly>
                        </div>
                        <div class="form-group">
                            <label for="product_name" class="col-form-label">Nama Produk:</label>
                            <input type="text" class="form-control" id="product_name" name="product_name">
                        </div>
                        <div class="form-group">
                            <label for="quantity" class="col-form-label">Jumlah:</label>
                            <input type="number" class="form-control" id="quantity" name="quantity">
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary" onclick="update_order_detail()">Save
                        changes</button>
                </div>
            </div>
        </div>
    </div>

    <!-- JavaScript to handle the modals and interactions -->
    <<script>
        function edit_orders(order_id) {
            // Fetch order details via AJAX or use preloaded data
            // and fill the form fields
            $.get('/admin/orders/' + order_id, function(response) {
                $('#orders_id').val(response.orders_id);
                $('#users_username').val(response.users_username);
                $('#order_date').val(response.order_date);
                $('#delivery_date').val(response.delivery_date);
                $('#payment_method').val(response.payment_method);
                $('#total_amount').val(response.total_amount);
                $('#status').val(response.status);
            });
        }

        function update_order() {
            // Update order via AJAX
            var data = $('#form-edit-order').serialize();
            $.ajax({
                type: 'PUT',
                url: '/admin/orders/update',
                data: data,
                success: function(response) {
                    // Handle success response
                    $('#exampleModal').modal('hide');
                    // You may need to update the order in the table here
                },
                error: function(xhr, status, error) {
                    // Handle error response
                }
            });
        }


        function update_order_detail() {
            // Update order detail via AJAX
            // Example:
            // var data = $('#form-edit-order-detail').serialize();
            // $.post('/update-order-detail', data, function(response) {
            //     // Handle response
            // });
        }

        function delete_orders(orders_id) {
            Swal.fire({
                position: 'top',
                title: "Do you want to delete?",
                icon: "warning",
                showCancelButton: true,
                confirmButtonColor: "#3085d6",
                cancelButtonColor: "#d33",
                confirmButtonText: "Yes, delete it!"
            }).then((result) => {
                if (result.isConfirmed) {
                    // Jika pengguna menekan tombol "Yes, delete it!"
                    Swal.fire({
                        position: 'top',
                        title: "Deleted!",
                        text: "Orders deleted.",
                        icon: "success",
                        showConfirmButton: false,
                        timer: 1500
                    }).then(function() {
                        // Arahkan ke delete_orders.php setelah konfirmasi pengguna
                        window.location.href = "{{ route('admin.delete_orders') }}?orders_id=" + orders_id;
                    });
                }
            });
        }

        function delete_orders_detail(orders_id) {
            Swal.fire({
                position: 'top',
                title: "Do you want to delete?",
                icon: "warning",
                showCancelButton: true,
                confirmButtonColor: "#3085d6",
                cancelButtonColor: "#d33",
                confirmButtonText: "Yes, delete it!"
            }).then((result) => {
                if (result.isConfirmed) {
                    // Jika pengguna menekan tombol "Yes, delete it!"
                    Swal.fire({
                        position: 'top',
                        title: "Deleted!",
                        text: "Orders deleted.",
                        icon: "success",
                        showConfirmButton: false,
                        timer: 1500
                    }).then(function() {
                        // Arahkan ke delete_orders.php setelah konfirmasi pengguna
                        window.location.href = "{{ route('admin.delete_orders_detail') }}?orders_id=" +
                            orders_id;
                    });
                }
            });
        }

        function konfirmasi_orders(order_id) {
            // Confirm order via AJAX
            // Example:
            // $.post('/confirm-order', { id: order_id }, function(response) {
            //     // Handle response
            // });
        }

        function cancel_orders(order_id) {
            // Cancel order via AJAX
            // Example:
            // if (confirm('Are you sure you want to cancel this order?')) {
            //     $.post('/cancel-order', { id: order_id }, function(response) {
            //         // Handle response
            //     });
            // }
        }
    </script>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="{{ asset('js/jquery-3.3.1.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap.bundle.js') }}"></script>
    <script src="{{ asset('js/jquery.slimscroll.js') }}"></script>
    <script src="{{ asset('js/main-js.js') }}"></script>
    <script src="{{ asset('js/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('js/dataTables.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('js/data-table.js') }}"></script>
    <script src="{{ asset('js/uploadImage.js') }}"></script>
</body>

</html>
